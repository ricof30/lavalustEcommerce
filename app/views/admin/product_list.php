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
                            <th class="text-center">Price</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Stocks</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                              <?php  $LAVA->call->model('Product_model'); ?>
                    <?php
                        $product = $LAVA->Product_model->getProduct(); 
                        foreach ($product as $p) {
                            echo "<tr >";
                            echo "<td>{$p['name']}</td>";
                            echo "<td>{$p['price']}</td>";
                            echo "<td ><img src='../public/uploadImages/{$p['image']}'></td>";
                            echo "<td>{$p['description']}</td>";
                            echo "<td>{$p['stocks']}</td>";
                            echo "<td>";
                            echo "<a href='edit/{$p['id']}' class='edit'>Edit</a>";
                            echo "<a href='deleteProduct/{$p['id']}' class='delete'>Delete</a>"; 
                            echo "</td>";
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