    <!DOCTYPE html>
    <html lang="en">


    <!-- Mirrored from techplinth.com/templates/vapemafia/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 01:45:53 GMT -->
    <head>
        <!-- Meta Data -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Vape Mafia | Vape Store HTML 5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="../public/media/favicon.png">

        <link rel="stylesheet" href="../public/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="../public/css/vendor/font-awesome.css">
        <link rel="stylesheet" href="../public/css/vendor/slick.css">
        <link rel="stylesheet" href="../public/css/vendor/slick-theme.css">
        <link rel="stylesheet" href="../public/css/vendor/sal.css">
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&family=Oswald:wght@500&family=Playfair+Display&family=Poppins:wght@300&display=swap" rel="stylesheet">

        <!-- Site Stylesheet -->
        <link rel="stylesheet" href="../public/css/app.css">

    </head>

    <body>
        <!-- Preloader -->
    

        <!-- Back To Top Start -->
        <a href="#main-wrapper" id="backto-top" class="back-to-top">
            <i class="fas fa-angle-double-up"></i>
        </a>

        <!-- Main Wrapper Start -->
        <div id="main-wrapper" class="main-wrapper">
            <!--=====================================-->
            <!--=        Header Area Start       	=-->
            <!--=====================================-->
            <?php $LAVA =& lava_instance(); ?>
        <?php echo $LAVA->call->view('userSide/nav'); ?>
            <!--=====================================-->
            <!--=      Page Banner Area Start       =-->
            <!--=====================================-->
            <section class="page-start-banner sec-pad">
                <div class="container">
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="shop-1.html">Shop</a></li>
                            <li><a href="checkout.html" class="active">Checkout</a></li>
                        </ul>
                    </div>
                    <h5 class="title">Checkout</h5>
                </div>
            </section>
            <!--=====================================-->
            <!--=        checkout Start             =-->
            <!--=====================================-->
            <section class="checkout sec-mar">
                <div class="container">
                    <form method="post" action="<?= site_url('placeOrder'); ?>">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="title">Shipping & Billing Details</h5>
                            </div>
                            <div class="col-lg-6">
                                <h6 class="shipping-billing">Shipping Address</h6>
                            </div>
                            <div class="col-lg-6 text-lg-end chekbox">
                            </div>
                            <div class="col-lg-6 form-group">
                            <label class=""> Region</label>
                                <input type="text" class="form-control" name="region"
                                    placeholder="Enter your region" required>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class=""> Province</label>
                                <input type="text" class="form-control" name="province"
                                    placeholder="Enter your province" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Municipality</label>
                                <input type="text" class="form-control" name="municipality"
                                    placeholder="Enter your municipality" required> 
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Barangay</label>
                                <input type="text" class="form-control" name="brgy"
                                    placeholder="Enter your barangay" required> 
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-lg-6">
                                <label>Street Name</label>
                                <input type="text" class="form-control" name="street"
                                    placeholder="Enter your street name" required> 
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Postal Code</label>
                                <input type="text" class="form-control" name="code" placeholder="Enter your zip code">
                            </div>
                        </div>
                        <h5 class="title mb-4">Your Order</h5>
                        <div class="order-box">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group col-lg-12">
                                        <label>Payment Method</label>
                                        <!-- <select name="payment" class="form-control" required>
                                            <option value="cod">Cash on Delivery</option>
                                            <option value="gcash">GCash</option>
                                        </select> --> 
                                        <div id="paypal-payment-button">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Order Notes (Optional)</label>
                                        <textarea class="form-control" name="notes"
                                            placeholder="Special Notes for Delivery etc"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout-products">
                                        <div class="titles">
                                            <span>Products</span>
                                            <span class="text-end float-end">Sub Totals</span>
                                        </div>
                                    <?php $product = $LAVA->Cart_model->getCart(); ?>
                                    <?php foreach ($product as $p): ?>
                                        <div class="ordered-product">
                                            <span><?= $p['name'] . 'x' . $p['quantity']; ?></span>
                                            <span class="text-end float-end subtotal">₱<?= $p['price'] * $p['quantity']; ?></span>
                                            <input type="hidden" name="total_amount" id="totalAmountInputs" value="">
                                        </div>
                                        <?php endforeach; ?>
                                        <div class="voucher">
                                        </div>
                                        <div class="total">
                                            <span>Order Total</span>
                                        <span class="text-end float-end total" >₱</span> 
                                        <input type="hidden" name="total_amount" id="totalAmountInput" value="">
                                        </div>
                                    </div>

                                    <div class="text-end mt-3 mb-2">
                                        <button type="submit" class="cus-btn btn-primary">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            <!--=====================================-->
            <!--=        Footer Area Start         =-->
            <!--=====================================-->
            <?php $LAVA =& lava_instance(); ?>
        <?php echo $LAVA->call->view('userSide/footer'); ?>
        </div>
        <script src="https://www.paypal.com/sdk/js?client-id=AanR1xv4KbxqbPuHi4hSXJUV7qHoiUAYJbXpmO1wDZQ5nzxrLbUdNrIhhoO6iwe7RgnltiiM2b9TYFpD&disable-funding=credit,card&currency=PHP"></script>
    
        <script>

        document.addEventListener("DOMContentLoaded", function () {
    // Get all subtotal elements
    const subtotalElements = document.querySelectorAll('.ordered-product .subtotal');
    const shippingFee = 50;
    let totalAmount = 0;

    // Calculate the total amount by summing up all subtotal values
    for (const subtotalElement of subtotalElements) {
        const subtotal = parseFloat(subtotalElement.textContent.replace('₱', ''), 10);
        totalAmount += subtotal;
    }
    totalAmount += shippingFee;


    // Update the total amount display
    const totalElement = document.querySelector('.total .total');
    totalElement.textContent = '₱' + totalAmount.toFixed();
    
    paypal.Buttons({
        createOrder: function (data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        currency_code: "PHP", // Change USD to PHP here
                        value: totalAmount
                    }
                }]
            });
        },
        onApprove: function (data, actions) {
            return actions.order.capture().then(function (details) {
                console.log(details);
                saveTransactionToDatabase(details);
                window 
                alert('Transaction completed by ' + details.payer.name.given_name);
                // document.querySelector('form').submit(); // Submit the form after successful payment
            });
        },
        onError: function (err) {
            console.error('Error:', err);
        },
    }).render('#paypal-payment-button');

    function saveTransactionToDatabase(details) {
        // Create an object with the form data
        
        const formDataObject = {
            region: document.querySelector('input[name="region"]').value,
            province: document.querySelector('input[name="province"]').value,
            municipality: document.querySelector('input[name="municipality"]').value,
            brgy: document.querySelector('input[name="brgy"]').value,
            street: document.querySelector('input[name="street"]').value,
            code: document.querySelector('input[name="code"]').value,
            notes: document.querySelector('textarea[name="notes"]').value,
            paypal_details: JSON.stringify(details),  
            //   payment_id: paymentId,
        };

        // Log the form data for debugging
        console.log(formDataObject);

        // Convert the object to a FormData object
        const formData = new FormData();
        for (const key in formDataObject) {
            formData.append(key, formDataObject[key]);
        }

        // Use fetch API to send data to your server
        fetch("placeOrder", {
            method: "POST",
            body: formData,
        })
            .then((response) => response.json())
            .then((data) => {
                console.log("Server response:", data);
            })
            .catch((error) => {
                console.error("Error sending data to server:", error);
            });
    }

    // function saveTransactionToDatabase(details) {
    //     // Create a FormData object with form data
    //     const formData = new FormData(document.querySelector("form"));

    //     // Add PayPal transaction details to the FormData
    //     formData.append("paypal_details", JSON.stringify(details));
    //     console.log([...formData.entries()]);

    //     // Use fetch API to send data to your server
    //     fetch("placeOrder", {
    //       method: "POST",
    //       body: formData,
    //     })
    //       .then((response) => response.json())
    //       .then((data) => {
    //         console.log("Server response:", data);
    //       })
    //       .catch((error) => {
    //         console.error("Error sending data to server:", error);
    //       });
    //   }


    });

        </script>
        <!-- Jquery Js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK2+jQ4J"crossorigin="anonymous"></script>
        <script src="../public/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="../public/js/vendor/bootstrap.min.js"></script>
        <script src="../public/js/vendor/imagesloaded.pkgd.min.js"></script>
        <script src="../public/js/vendor/slick.min.js"></script>
        <script src="../public/js/vendor/jquery-appear.js"></script>
        <script src="../public/js/vendor/sal.js"></script>
        <script src="../public/js/vendor/js.cookie.js"></script>

        <!-- Site Scripts -->
        <script src="../public/js/app.js"></script>
    </body>


    <!-- Mirrored from techplinth.com/templates/vapemafia/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 01:45:53 GMT -->
    </html>