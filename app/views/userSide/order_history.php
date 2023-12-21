<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techplinth.com/templates/vapemafia/order-history.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 01:45:59 GMT -->
<head>
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
                        <li><a href="#" class="active">Order History</a></li>
                    </ul>
                </div>
                <h5 class="title">Order History</h5>
            </div>
        </section>
        <!--=====================================-->
        <!--=      Order History Area Start     =-->
        <!--=====================================-->
        <section class="order-history sec-mar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-none d-xl-block">
                        <table class="table order-history-items text-center">
                            <thead>
                                <tr>
                                    <th class="w-10"> Date</th>
                                    <th class="w-30">Product Detail</th>
                                    <th class="w-10"></th>
                                    <th class="w-15">Unit Price</th>
                                    <th class="w-10">Quantity</th>
                                    <th class="w-10">Total</th>
                                    <th class="w-15">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $LAVA->call->model('Order_model');
                                    $order = $LAVA->Order_model->getOrder(); ?>
                                     <?php foreach ($order as $o): ?>
                                <tr>
                                <td class="w-10">
                                    <p>
                                        <?php
                                        $date = strtotime($o['date']); // Convert timestamp to UNIX format
                                        $formattedDate = date('M d', $date); // Format date as month name and day
                                        echo $formattedDate;
                                        ?>
                                    </p>
                                    </td>
                                    <td class="product w-30 text-start">
                                        <div class="product-image">
                                        <img src="../public/uploadImages/<?php echo $o['product_image']; ?>" style="width:100px">
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="product-detail.html"><?php echo $o['product_name']; ?></a></h5>
                                            <ul class="list-unstyled">
                                                <li><span>by</span> &nbsp; SMOK</li>
                                                <li><span><i class="fas fa-bolt"></i></span> &nbsp; 5 – 25W</li>
                                            </ul>
                                            <p class="code pt-0"><span>SKU:</span> &nbsp; S20010905</p>
                                        </div>
                                    </td>
                                    <td class="w-10"></td>
                                    <td class="w-15"><p><?php echo $o['product_price']; ?></p></td>
                                    <td class="w-10"><p><?php echo $o['product_quantity']; ?></p></td>
                                    <td class="w-10"><p ><?php echo $o['total_amount']; ?></p></td>
              
                                    <?php
                                    $status = '';
                                    switch ($o['status']) {
                                        case 0:
                                            $status = 'Packed';
                                            break;
                                        case 1:
                                            $status = 'In Transit';
                                            break;
                                        case 2:
                                            $status = 'Out for Delivery';
                                            break;
                                        case 3:
                                            $status = 'Delivered';
                                            break;
                                        case 4:
                                            $status = 'Cancelled';
                                            break;
                                        default:
                                            $status = 'Unknown';
                                    }
                                    ?>
                                    <td class="text-center w-15"><p><?php echo $status; ?></p></td>
                                
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-6 col-md-8 offset-lg-0 offset-md-2 d-xl-none mb-3">
                        <div class="order-history-items mobile-show">
                            <table class="table text-center">                    
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <div class="product-image mb-2 mt-2">
                                                <img src="assets/media/products/pc-1.png" alt="">
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="product-detail.html">Wotofo Nex Chip</a></h5>
                                                <ul class="list-unstyled">
                                                    <li><span>by</span> &nbsp; SMOK</li>
                                                    <li><span><i class="fas fa-bolt"></i></span> &nbsp; 5 – 25W</li>
                                                </ul>
                                                <p class="code pt-0"><span>SKU:</span> &nbsp; S20010905</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="title">
                                            <h6>Date</h6>
                                            <h6>Price</h6>
                                            <h6>Quantity</h6>
                                            <h6>Status</h6>
                                        </td>
                                        <td class="status">
                                            <p>05 Nov</p>
                                            <p>$20.00</p>
                                            <p>2</p>
                                            <p>Pending</p>
                                        </td>
                                    </tr>
                                    <tr class="total">
                                        <td><h6>Total</h6></td>
                                        <td><p >$40.00</p></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>            
                    </div>
                    <div class="col-lg-6 col-md-8 offset-lg-0 offset-md-2 d-xl-none mb-3">
                        <div class="order-history-items mobile-show">
                            <table class="table text-center">                    
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <div class="product-image mb-2 mt-2">
                                                <img src="assets/media/products/pc-1.png" alt="">
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="product-detail.html">Wotofo Nex Chip</a></h5>
                                                <ul class="list-unstyled">
                                                    <li><span>by</span> &nbsp; SMOK</li>
                                                    <li><span><i class="fas fa-bolt"></i></span> &nbsp; 5 – 25W</li>
                                                </ul>
                                                <p class="code pt-0"><span>SKU:</span> &nbsp; S20010905</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="title">
                                            <h6>Date</h6>
                                            <h6>Price</h6>
                                            <h6>Quantity</h6>
                                            <h6>Status</h6>
                                        </td>
                                        <td class="status">
                                            <p>05 Nov</p>
                                            <p>$20.00</p>
                                            <p>2</p>
                                            <p>Pending</p>
                                        </td>
                                    </tr>
                                    <tr class="total">
                                        <td><h6>Total</h6></td>
                                        <td><p>$40.00</p></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>            
                    </div>
                    <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3 d-xl-none mb-3">
                        <div class="order-history-items mobile-show">
                            <table class="table text-center">                    
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <div class="product-image mb-2 mt-2">
                                                <img src="assets/media/products/pc-1.png" alt="">
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="product-detail.html">Wotofo Nex Chip</a></h5>
                                                <ul class="list-unstyled">
                                                    <li><span>by</span> &nbsp; SMOK</li>
                                                    <li><span><i class="fas fa-bolt"></i></span> &nbsp; 5 – 25W</li>
                                                </ul>
                                                <p class="code pt-0"><span>SKU:</span> &nbsp; S20010905</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="title">
                                            <h6>Date</h6>
                                            <h6>Price</h6>
                                            <h6>Quantity</h6>
                                            <h6>Status</h6>
                                        </td>
                                        <td class="status">
                                            <p>05 Nov</p>
                                            <p>$20.00</p>
                                            <p>2</p>
                                            <p>Pending</p>
                                        </td>
                                    </tr>
                                    <tr class="total">
                                        <td><h6>Total</h6></td>
                                        <td><p >$40.00</p></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>            
                    </div>
                </div>
                <div class="text-center pt-3">
                    <a href="shop-1.html" class="cus-btn btn-white text-uppercase">Shop Now<i class="fa fa-long-arrow-right color-primary ms-2 fs-5"></i></a>
                </div>
            </div>
        </section>

        <!--=====================================-->
        <!--=        Footer Area Start         =-->
        <!--=====================================-->
      
      <?php echo $LAVA->call->view('userSide/footer'); ?>
    </div>
    <!-- Jquery Js -->
    <script src="../public/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="../public/js/vendor/bootstrap.min.js"></script>
    <script src="../public/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="../public/js/vendor/slick.min.js"></script>
    <script src="../public/js/vendor/jquery-appear.js"></script>
    <script src="../public/js/vendor/sal.js"></script>
    <script src="../public/js/vendor/js.cookie.js"></script>
    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>
</body>


<!-- Mirrored from techplinth.com/templates/vapemafia/order-history.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 01:46:00 GMT -->
</html>