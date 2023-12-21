<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Admin extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->call->model('Product_model');
        $this->call->model('Cart_model');
        $this->call->model('Order_model');
        $this->call->model('Payment_model');
        $this->call->database();
        $this->call->helper('url');

    }
    public function index()
    {
        $this->call->view('welcome_page');
    }


    public function add_product()
    {
        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Extract data from $_POST
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $price = isset($_POST['price']) ? $_POST['price'] : '';
            $description = isset($_POST['description']) ? $_POST['description'] : '';
            $stocks = isset($_POST['stocks']) ? $_POST['stocks'] : '';

            // Check if the file is uploaded successfully
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                // Process the uploaded file
                $uploadDir = 'public/uploadImages/';
                $uploadFile = $uploadDir . basename($_FILES["image"]["name"]);

                if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadFile)) {
                    // File upload successful
                    var_dump($uploadFile);
                    $imageFileName = basename($uploadFile);

                    // Call the insert method with the uploaded file path
                    if ($this->Product_model->insert($name, $price, $description, $stocks, $imageFileName)) {
                        // Redirect to the /products page
                        $this->call->view('admin/products');
                    } else {
                        // Handle insert error
                        $this->call->view('admin/products');
                    }
                } else {
                    // Handle file move error
                    echo "File upload failed.";
                }
            } else {
                // Handle file upload error
                echo "File upload error: " . $_FILES["image"]["error"];
            }
        }
    }


    public function placeOrder()
    {
        // Check if the request method is POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Check if "paypal_details" is set in $_POST
            if (isset($_POST['paypal_details'])) {
                // Getting the details sent by PayPal using JSON
                $region = $this->io->post('region');
                $province = $this->io->post('province');
                $municipality = $this->io->post('municipality');
                $brgy = $this->io->post('brgy');
                $street = $this->io->post('street');
                $code = $this->io->post('code');
                $notes = $this->io->post('notes');
                $email = $this->session->userdata('email');
                $paypalDetails = json_decode($_POST['paypal_details'], true);

                // Check if "paypal_details" is valid
                if ($paypalDetails) {
                    // Extract the required details from $paypalDetails
                    $paypalOrderId = $paypalDetails['id'];
                    $createTime = $paypalDetails['create_time'];
                    $payerId = $paypalDetails['payer']['payer_id'];
                    $payerEmail = $paypalDetails['payer']['email_address'];
                    $payerGivenName = $paypalDetails['payer']['name']['given_name'];
                    $payerSurname = $paypalDetails['payer']['name']['surname'];
                    $status = $paypalDetails['status'];
                    $updateTime = $paypalDetails['update_time'];
                    $addressCountryCode = $paypalDetails['payer']['address']['country_code'];

                    // Insert the PayPal details into the payment table
                    $this->Payment_model->insert(
                        $paypalOrderId,
                        $createTime,
                        $payerId,
                        $payerEmail,
                        $payerGivenName,
                        $payerSurname,
                        $status,
                        $updateTime,
                        $addressCountryCode
                    );


                    $cartItems = $this->Cart_model->getCart();
                    $status = 0;

                    // Loop through each cart item and insert it into the order
                    foreach ($cartItems as $item) {
                        $pId = $item['product_id'];
                        $p_name = $item['name'];
                        $p_image = $item['image'];
                        $price = $item['price'];
                        $total = $item['price'] * $item['quantity'] + 50;
                        $quantity = $item['quantity'];

                        $id = $this->Payment_model->getPayment();


                        // Insert order details into the Order_model
                        $this->Order_model->insert(
                            $pId,
                            $p_name,
                            $p_image,
                            $price,
                            $quantity,
                            $total,
                            $status,
                            $region,
                            $province,
                            $municipality,
                            $brgy,
                            $street,
                            $code,
                            $notes,
                            $email
                        );
                    }

                    // Clear the cart after processing
                    $this->Cart_model->clearCart();
                    // Send a JSON response
                    header('Content-Type: application/json');
                    echo json_encode(['status' => 'success']);
                    return redirect('home');
                } else {

                    // return redirect('home');
                }
            } else {
                // Handle the case where "paypal_details" is missing
                return redirect('home');
            }
        } else {
            // Handle the case where the request method is not POST
            echo 'Failed to insert data into the order table. Invalid request method.';
        }
    }

    public function addToCart($id)
    {
        $product = $this->Product_model->getProductById($id);
        $this->call->model('Cart_model');
        $email = $this->session->userdata('email');

        $this->Cart_model->insert(
            $id,
            $product['name'],
            $product['price'],
            $product['image'],
            $email
        );
        return redirect('shop');
    }

    public function removeItem($id)
    {
        $this->db->table('cart')->where('id', $id)->delete();
        return redirect('cart');
    }
    public function checkout()
    {
        $ids = $this->io->post('id');
        $quantities = $this->io->post('quantity');

        /// Check if $ids and $quantities are arrays
        if (is_array($ids) && is_array($quantities) && count($ids) === count($quantities)) {
            // Assuming $ids and $quantities are arrays of the same length
            foreach ($ids as $key => $id) {
                $quantity = $quantities[$key];
                $this->Cart_model->updateQuantity($id, $quantity);
            }
            return redirect('checkout');
        } else {

            echo "Error: Invalid data submitted.";
        }
    }

    public function product($id)
    {
        $this->call->model('Product_model');
        $product['product'] = $this->Product_model->getProductById($id);
        $this->call->view('userSide/product_detail', $product);

        return redirect('product_detail');
    }

    public function totalAmount()
    {
        $totalAmount = $_POST['totalAmount'];
        $total['total'] = $totalAmount;
        $this->call->view('userSide/checkout', $total);
    }

    public function updateStatus()
    {

        $id = isset($_POST['product_id']) ? $_POST['product_id'] : '';
        $status = isset($_POST['new_status']) ? $_POST['new_status'] : '';
        $this->call->model('Order_model');
        $this->Order_model->updateStatus($id, $status);
        return redirect('order_list');
    }

    public function deleteOrder($id)
    {

        if ($this->db->table('`order`')->where('id', $id)->delete()) {

           return redirect('order_list');
        } else {

            echo "There has an error in deleting";
        }
    }

    public function deleteProduct($id)
    {

        if ($this->db->table('product')->where('id', $id)->delete()) {

            redirect('list');
        } else {

            echo "There has an error in deleting";
        }
    }

    public function updateProduct()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Extract data from $_POST
            $id = isset($_POST['id']) ? $_POST['id'] : '';
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $price = isset($_POST['price']) ? $_POST['price'] : '';
            $description = isset($_POST['description']) ? $_POST['description'] : '';
            $stocks = isset($_POST['stocks']) ? $_POST['stocks'] : '';

            // Check if the file is uploaded successfully
            $imageFileName = '';
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            // Process the uploaded file
            $uploadDir = 'public/uploadImages/';
            $uploadFile = $uploadDir . basename($_FILES["image"]["name"]);

            if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadFile)) {
                // File upload successful
                $imageFileName = basename($uploadFile);
            } else {
                // Handle file upload error
                echo "File upload error: " . $_FILES["image"]["error"];
            }
        } else {
            // Use existing image filename from database
            $this->call->model('Product_model');
            $existingImage = $this->Product_model->getProductImage($id);
            if ($existingImage) {
                $imageFileName = $existingImage['image'];
            }
        }

        // Update product data
        $this->Product_model->updateProduct($id, $name, $price, $description, $stocks, $imageFileName);
        redirect('list');
        }
    }

}
?>