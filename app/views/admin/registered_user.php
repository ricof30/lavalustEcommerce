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
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                              <?php  $LAVA->call->model('Main_model'); ?>
                    <?php

                        $userData = $LAVA->Main_model->getAllUserData(); // Replace with your actual method
                        foreach ($userData as $user) {
                            echo "<tr>";
                            echo "<td>{$user['name']}</td>";
                            echo "<td>{$user['phone_number']}</td>";
                            echo "<td>{$user['email']}</td>";
                            echo "<td>{$user['password']}</td>";
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