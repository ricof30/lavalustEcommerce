<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techplinth.com/templates/vapemafia/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 01:44:45 GMT -->
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vape Mafia | Vape Store HTML 5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="tcut icon" type="image/x-icon" href="../public/media/favicon.png">

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
    <!-- <div id="preloader">
        <img src="../public/media/logo.png" alt="logo" class="mb-5"><br>
        <img src="../public/media/preloader.gif" alt="logo">
    </div> -->

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
        <!--=         Banner Area Start         =-->
        <!--=====================================-->
        <section class="banner">
            <div style="background: url('../public/media/banner/b-1.png');background-size: cover;background-position: center;">
                <div class="content" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                    <div class="container position-relative">
                        <h1><span class="color-primary">30% OFF</span><small>ON ALL</small>STARTER KITS</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br> tempor incididunt
                            ut
                            labore et dolore magna aliqua.</p>
                        <a href="shop" class="cus-btn mt-2 btn-large btn-primary text-uppercase">Shop Now</a>
                        <a href="#best" class="link">Get Your Vape Now <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div style="background: url('../public/media/banner/b-2.png');background-size: cover;background-position: center;">
                <div class="content" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                    <div class="container position-relative">
                        <h1><span class="color-primary">QUIT SMOKING</span><small>AND</small>START VAPPING</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br> tempor incididunt
                            ut
                            labore et dolore magna aliqua.</p>
                        <a href="shop-1.html" class="cus-btn mt-2 btn-large btn-primary text-uppercase">Shop Now</a>
                        <a href="#best" class="link">Get Your Vape Now <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=       Key Points Area Start       =-->
        <!--=====================================-->
        <section class="key-points sec-pad">
            <div class="container">
                <ul>
                    <li><i class="far fa-truck"></i><br> Worldwide Delivery</li>
                    <li><i class="far fa-handshake"></i><br> 30 Days warranty</li>
                    <li><i class="far fa-shield"></i><br> Secure Payment</li>
                    <li><i class="far fa-money-bill"></i><br> Moneyback Guarantee</li>
                </ul>
            </div>
        </section>
        <!--=====================================-->
        <!--=       Best Seller Area Start      =-->
        <!--=====================================-->
        <section class="products sec-mar" id="best">
            <div class="container">
                <div class="heading">
                    <h2>Best Selling Products</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has<br>
                        been the industry's standard dummy text ever since the 1500s</p>
                </div>
                <div class="product-slider">
                        <?php $LAVA->call->model('Product_model');
                            $product = $LAVA->Product_model->getProduct(); ?>
                               <?php foreach ($product as $p): ?>
                    <div class="product-grid product">
                        <div class="img-box img-hover-zoom">
                        <a href="<?= site_url('product/' . $p['id']); ?>">  
                             <img src="../public/uploadImages/<?php echo $p['image']; ?>" style="width: 500px" ></a>
                            <!-- <div class="overlay">
                                <a href="product-detail.html" class="cus-btn btn-primary">View Detail</a>
                            </div> -->
                        </div>
                        <div class="content">
                            <div class="discount">-15%</div>
                            <h3 class="title"><a href="#"><?php echo $p['name']; ?></a> </h3>
                            <p><?php echo $p['description']; ?></p>
                        </div>
                        <ul class="action-btns">
                            <li class="price"><a href="product-detail.html">₱<?php echo $p['price']; ?></a></li>
                            <li class="cart-btn">
                                <a href="<?= site_url('cart/' . $p['id']); ?>">
                                <i class="fal fa-shopping-cart"></i><br> Add to cart </a>
                            </li>
                            <li class="whishlist"><a href="wishlist.html"><i class="fas fa-heart"></i></a></li>
                            <li class="reviews"><a href="product-detail.html"><i class="fa fa-star"></i> 4</a></li>
                        </ul>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="text-center mt-50">
                    <a href="shop" class="cus-btn btn-white text-uppercase">Discover More <i class="fa fa-long-arrow-right color-primary ms-2 fs-5"></i></a>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=    Offer Banner Area Start     =-->
        <!--=====================================-->
        <section class="offer-banner sec-pad">
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
        <!--=       New Arrival Area Start      =-->
        <!--=====================================-->
        <section class="products sec-mar">
            <div class="container">
                <div class="heading">
                    <h2>New Arrival Products</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has<br>
                        been the industry's standard dummy text ever since the 1500s</p>
                </div>
                <div class="product-slider">
                <?php $LAVA->call->model('Product_model');
                            $product = $LAVA->Product_model->getProduct(); ?>
                               <?php foreach ($product as $p): ?>
                    <div class="product-grid product">
                        <div class="img-box img-hover-zoom">
                        <a href="<?= site_url('product/' . $p['id']); ?>">  
                             <img src="../public/uploadImages/<?php echo $p['image']; ?>" style="width: 500px" ></a>
                            <!-- <div class="overlay">
                                <a href="product-detail.html" class="cus-btn btn-primary">View Detail</a>
                            </div> -->
                        </div>
                        <div class="content">
                            <div class="discount">-15%</div>
                            <h3 class="title"><a href="#"><?php echo $p['name']; ?></a> </h3>
                            <p><?php echo $p['description']; ?></p>
                        </div>
                        <ul class="action-btns">
                            <li class="price"><a href="product-detail.html">₱<?php echo $p['price']; ?></a></li>
                            <li class="cart-btn">
                                <a href="<?= site_url('cart/' . $p['id']); ?>">
                                <i class="fal fa-shopping-cart"></i><br> Add to cart </a>
                            </li>
                            <li class="whishlist"><a href="wishlist.html"><i class="fas fa-heart"></i></a></li>
                            <li class="reviews"><a href="product-detail.html"><i class="fa fa-star"></i> 4</a></li>
                        </ul>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="text-center mt-50">
                    <a href="shop-1.html" class="cus-btn btn-white text-uppercase">Discover More <i class="fa fa-long-arrow-right color-primary ms-2 fs-5"></i></a>
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
        <!--=        Testimonial Area Start     =-->
        <!--=====================================-->
        <section class="testimonial sec-mar">
            <div class="container">
                <div class="heading">
                    <h2>Happy Buyers</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has<br>
                        been the industry's standard dummy text ever since the 1500s</p>
                </div>
                <div class="testimonial-slider">
                    <div class="testimonial-wrap">
                        <div class="testimonial-box">
                            <img alt="" src="../public/media/testimonial/user-1.png">
                                <h3>Gracie Jefferson</h3>
                                <div class="reviews"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                </div>
                                <p>“Great! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare in felis vel commodo.”</p>
                        </div>
                    </div>
                    <div class="testimonial-wrap">
                        <div class="testimonial-box">
                            <img alt="" src="../public/media/testimonial/user-2.png">
                                <h3>Andrew Phillip</h3>
                                <div class="reviews"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fal fa-star"></i> <i class="fal fa-star"></i> 
                                </div>
                                <p>“Great! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare in felis vel commodo.”</p>
                        </div>
                    </div>
                    <div class="testimonial-wrap">
                        <div class="testimonial-box">
                            <img alt="" src="../public/media/testimonial/user-3.png">
                                <h3>Sophie Miller</h3>
                                <div class="reviews"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fal fa-star"></i> 
                                </div>
                                <p>“Great! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare in felis vel commodo.”</p>
                        </div>
                    </div>
                    <div class="testimonial-wrap">
                        <div class="testimonial-box">
                            <img alt="" src="../public/media/testimonial/user-4.png">
                                <h3>Natasha William</h3>
                                <div class="reviews"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                </div>
                                <p>“Great! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare in felis vel commodo.”</p>
                        </div>
                    </div>
                    <div class="testimonial-wrap">
                        <div class="testimonial-box">
                            <img alt="" src="../public/media/testimonial/user-1.png">
                                <h3>Gracie Jefferson</h3>
                                <div class="reviews"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                </div>
                                <p>“Great! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare in felis vel commodo.”</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=        Partner Area Start         =-->
        <!--=====================================-->
        <section class="partners sec-mar">
            <div class="container">
                <div class="heading">
                    <h2>Partners</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has<br>
                        been the industry's standard dummy text ever since the 1500s</p>
                </div>
                <div class="partner-slider">
                    <div class="partner-box">
                        <img alt=""  src="../public/media/partners/p-1.png">
                    </div>
                    <div class="partner-box">
                        <img alt=""  src="../public/media/partners/p-2.png">
                    </div>
                    <div class="partner-box">
                        <img alt=""  src="../public/media/partners/p-3.png">
                    </div>
                    <div class="partner-box">
                        <img alt=""  src="../public/media/partners/p-4.png">
                    </div>
                    <div class="partner-box">
                        <img alt=""  src="../public/media/partners/p-5.png">
                    </div>
                    <div class="partner-box">
                        <img alt=""  src="../public/media/partners/p-6.png">
                    </div>
                    <div class="partner-box">
                        <img alt=""  src="../public/media/partners/p-1.png">
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=        Blogs Area Start         =-->
        <!--=====================================-->
        <section class="blogs">
            <div class="container">
                <div class="heading">
                    <h2>Latest News</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has<br>
                        been the industry's standard dummy text ever since the 1500s</p>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4 col-sm-6 col-12 blog-box">
                        <a href="blog-detail.html" class="d-block"><img alt=""  src="../public/media/blogs/b-1.png"></a>
                        <p class="date">08 April 2023</p>
                        <div class="text-details">
                            <h5><a href="blog-detail.html">Why start vaping?</a></h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit commodi reiciendis suscipit e
                                sit maiores eius saepe .</p>
                            <a href="blog-detail.html" class="cus-btn btn-white">Read More</a>
                        </div>
                        <hr><hr>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 blog-box">
                        <a href="blog-detail.html" class="d-block"><img alt=""  src="../public/media/blogs/b-2.png"></a>
                        <p class="date">08 April 2023</p>
                        <div class="text-details">
                            <h5><a href="blog-detail.html">Vaping and smoking</a></h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit commodi reiciendis suscipit e
                                sit maiores eius saepe .</p>
                            <a href="blog-detail.html" class="cus-btn btn-white">Read More</a>
                        </div>
                        <hr><hr>
                    </div>
                    <div class="col-lg-4 col-sm-6 offset-lg-0 offset-sm-3 col-12 blog-box">
                        <a href="blog-detail.html" class="d-block"><img alt=""  src="../public/media/blogs/b-3.png"></a>
                        <p class="date">08 April 2023</p>
                        <div class="text-details">
                            <h5><a href="blog-detail.html">Top trending flavors</a></h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit commodi reiciendis suscipit e
                                sit maiores eius saepe .</p>
                            <a href="blog-detail.html" class="cus-btn btn-white">Read More</a>
                        </div>
                        <hr><hr>
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


<!-- Mirrored from techplinth.com/templates/vapemafia/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 01:45:08 GMT -->
</html>