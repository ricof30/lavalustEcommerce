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
                        <th class="text-center">ID</th>
                        <th class="text-center">PayPal Order ID</th>
                        <th class="text-center">Create Time</th>
                        <th class="text-center">Payer ID</th>
                        <th class="text-center">Payer Email</th>
                        <th class="text-center">Payer Given Name</th>
                        <th class="text-center">Payer Surname</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Update Time</th>
                        <th class="text-center">Address Country Code</th>
                        </tr>
                    </thead>
                    <tbody>
                              <?php  $LAVA->call->model('Payment_model'); ?>
                    <?php
                        $payment = $LAVA->Payment_model->getPayment(); 
                        foreach ($payment as $order) {
                            echo "<tr>";
                            echo "<td class='text-center'>{$order['id']}</td>";
                            echo "<td class='text-center'>{$order['paypal_order_id']}</td>";
                            echo "<td class='text-center'>{$order['create_time']}</td>";
                            echo "<td class='text-center'>{$order['payer_id']}</td>";
                            echo "<td class='text-center'>{$order['payer_email']}</td>";
                            echo "<td class='text-center'>{$order['payer_given_name']}</td>";
                            echo "<td class='text-center'>{$order['payer_surname']}</td>";
                            echo "<td class='text-center'>{$order['status']}</td>";
                            echo "<td class='text-center'>{$order['update_time']}</td>";
                            echo "<td class='text-center'>{$order['address_country_code']}</td>";
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