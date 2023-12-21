<!DOCTYPE html>
<html lang="en">

<head>
    <?php $LAVA =& lava_instance(); ?>
    <?php echo $LAVA->call->view('admin/head'); ?>
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <?php echo $LAVA->call->view('admin/sidebar'); ?>
            <?php echo $LAVA->call->view('admin/header'); ?>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive pt-3">
                                    <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Name</th>
                                                    <th class="text-center">Email</th>
                                                    <th class="text-center">Price</th>
                                                    <th class="text-center">Quantity</th>
                                                    <th class="text-center">Total</th>
                                                    <th class="text-center">Date</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $LAVA->call->model('Order_model');
                                                $product = $LAVA->Order_model->getAllOrders(); // Replace with your actual method
                                                foreach ($product as $p) {
                                                    echo "<tr>";
                                                    echo "<td class='text-center'>{$p['product_name']}</td>";
                                                    echo "<td class='text-center'>{$p['email']}</td>";
                                                    echo "<td class='text-center'>{$p['product_price']}</td>";
                                                    echo "<td class='text-center'>{$p['product_quantity']}</td>";
                                                    echo "<td class='text-center'>{$p['total_amount']}</td>";
                                                    echo " <td class='text-center'>";
                                                    echo "<p>";

                                                    // Remove unnecessary PHP opening and closing tags
                                                    $date = strtotime($p['date']); // Convert timestamp to UNIX format
                                                    $formattedDate = date('M d Y', $date); // Format date as month name and day
                                                    echo $formattedDate;
                                                    
                                                    echo "</p>";
                                                    echo  " </td> ";
                                                    echo "<td class='text-center'>"; // Replace with your actual endpoint
                                                    echo "<form method='post' action='" . site_url('updateStatus') . "'>";
                                                    echo "<input type='hidden' name='product_id' value='{$p['id']}'>";
                                                    echo "<select name='new_status'>";
                                                    echo "<option value='0' " . ($p['status'] == 0 ? 'selected' : '') . ">Packed</option>";
                                                    echo "<option value='1' " . ($p['status'] == 1 ? 'selected' : '') . ">In Transit</option>";
                                                    echo "<option value='2' " . ($p['status'] == 2 ? 'selected' : '') . ">Out for Delivery</option>";
                                                    echo "<option value='3' " . ($p['status'] == 3 ? 'selected' : '') . ">Delivered</option>";
                                                    echo "<option value='4' " . ($p['status'] == 4 ? 'selected' : '') . ">Cancelled</option>";
                                                    echo "</select>";
                                                    echo "<button type='submit'>Update Status</button>";
                                                    echo "</form>";
                                                    echo "</td>";
                                                    echo "<td class='text-center'>";
                                                    echo "<a href='deleteOrder/{$p['id']}' class='delete'>Delete</a>";
                                                    echo "</tr>";
                                                }
                                                ?>

                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>