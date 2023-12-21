<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techplinth.com/templates/vapemafia/shop-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 01:45:50 GMT -->
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

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="../public/css/app.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <img src="../public/media/logo.png" alt="logo" class="mb-5"><br>
        <img src="../public/media/preloader.gif" alt="logo">
    </div>

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
        <!--=    Offer Banner Area Start     =-->
        <!--=====================================-->
        <section class="offer-banner sec-pad mt-header">
            <div class="container">
                <div class="text-center">
                    <h2>UP TO</h2>
                    <h1>50% OFF</h1>
                    <h3>on fruity flavors</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore</p>
                    <div class="text-bottom mt-3">
                        <a href="shop-1.html" class="cus-btn btn-white">Shop Now</a>
                    </div>
                </div>
            </div>
        </section>
        
        <!--=====================================-->
        <!--=      Search Area Start        =-->
        <!--=====================================-->
     
        <!--=====================================-->
        <!--=      Product Grid Area Start      =-->
        <!--=====================================-->
        <section class="products sec-mar">
            <div class="container">
                <div class="heading text-center">
                    <h2>All Products</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div class="row">
                    <?php
                            $LAVA->call->model('Product_model');
                            $product = $LAVA->Product_model->getProduct(); // Replace with your actual method
                            ?>
                               <?php foreach ($product as $p): ?>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                           
                                <div class="product-grid product mb-30">
                             
                                        <div class="img-box img-hover-zoom">
                                      
                                        <a href="<?= site_url('product/' . $p['id']); ?>">  
                                          <img src="../public/uploadImages/<?php echo $p['image']; ?>" style="width: 500px" ></a>
                                        </div>
                                        <div class="content">
                                            <!-- <div class="discount">-10%</div> -->
                                            <h3 class="title"><?php echo $p['name']; ?></h3>
                                            <p><?php echo $p['description']; ?></p>
                                            </div>
                                            <ul class="action-btns">
                                                <li class="price"><a href="#">₱<?php echo $p['price']; ?> </a></li>
                                                <li class="cart-btn">
                                                    <a href="<?= site_url('cart/' . $p['id']); ?>">
                                                        <i class="fal fa-shopping-cart"></i><br> Add to cart
                                                    </a>
                                                </li>
                                                <li class="whishlist"><a href="wishlist"><i class="fas fa-heart"></i></a></li>
                                                <li class="reviews"><a href="#"><i class="fa fa-star"></i> 4</a></li>
                                            </ul>
                                        </div>
                                
                                </div>
                         
                            <?php endforeach; ?>
                    </div>
                </div>
                <div class="pagination-wrape">
                    <ul class="pagination"> 
                        <li class="page-item"><a class="page-link current" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a href="#" class="page-link arrow" aria-label="next">
                                <i class="fas fa-long-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!--=====================================-->
        <!--=      Collection  Area Start       =-->
        <!--=====================================-->
        <section class="collection sec-mar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a href="shop-1.html" class="collection-box c-1">
                            <div class="content">
                                <h4>Deals of the week</h4>
                                <p class="tagline">World’s Best Vape Devices</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="shop-1.html" class="collection-box c-2">
                            <div class="content">
                                <h4>New Arrivals</h4>
                                <p class="tagline">World’s Best Vape Devices</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <a href="shop-1.html" class="collection-box c-3 horizental">
                            <div class="content">
                                <h4>E-Liquids</h4>
                                <p class="tagline">World’s Best Vape Devices</p>
                            </div>
                        </a>
                        <a href="shop-1.html" class="collection-box c-4 horizental">
                            <div class="content">
                                <h4>Coils & RDA</h4>
                                <p class="tagline">World’s Best Vape Devices</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="shop-1.html" class="collection-box c-5">
                            <div class="content">
                                <h4>Glass Vapes</h4>
                                <p class="tagline">World’s Best Vape Devices</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=        Footer Area Start         =-->
        <!--=====================================-->
        <?php $LAVA =& lava_instance(); ?>
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
    <script src="../public/js/app.js"></script>
</body>


<!-- Mirrored from techplinth.com/templates/vapemafia/shop-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 01:45:51 GMT -->
</html>