<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techplinth.com/templates/vapemafia/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 01:45:51 GMT -->
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vape Mafia | Vape Store HTML 5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../../public/media/favicon.png">

    <link rel="stylesheet" href="../../public/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="../../public/css/vendor/slick.css">
    <link rel="stylesheet" href="../../public/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="../../public/css/vendor/sal.css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="../../public/css/app.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <img src="../../public/media/logo.png" alt="logo" class="mb-5"><br>
        <img src="../../public/media/preloader.gif" alt="logo">
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
        <!--=      Page Banner Area Start       =-->
        <!--=====================================-->
        <section class="page-start-banner sec-pad">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="home">Home</a></li>
                        <li><a href="shop">Shop</a></li>
                        <li><a href="product-detail.html" class="active">Product Detail</a></li>
                    </ul>
                </div>
                <h5 class="title">Product Detail</h5>
            </div>
        </section>
        <!--=====================================-->
        <!--=     Product Detail Area Start     =-->
        <!--=====================================-->

         
        <section class="product-detail sec-mar">
            
            <div class="container">
                
                <div class="row">
                
                    <div class="col-lg-6">
                   
                        <div class="detail-img">
                            
                        <img src="../../public/uploadImages/<?php echo $product['image']; ?>">
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="product-content">
                            <div class="content">
                                <h3 class="title"><?= $product['name']; ?></h3>
                                <ul class="list-unstyled">
                                    <li><span>by</span> &nbsp; SMOK</li>
                                    <li><span><i class="fas fa-bolt"></i></span> &nbsp; 5 – 25W</li>
                                </ul>
                                <h6 class="price"><?= $product['price']; ?><h6>
                            </div>
                                
                            <ul class="action-btns">
                                <li class="reviews"><i class="fa fa-star"></i> <span class="rating">4</span> <br> <small>Highly Rated</small></li>
                            </ul>
                            <p><?= $product['description']; ?></p>
                            <ul class="list-unstyled detail-list mb-4">
                                <li>In stock: &nbsp; <span>Yes</span></li>
                                <li>Tags: &nbsp; <span>best seller, trending</span></li>
                                <li>Coil/Pod: &nbsp; <span>Coil System</span></li>
                                <li>SKU: &nbsp; <span>H19980107</span></li>
                            </ul>
                            <div class="quantity quantity-wrap mb-4">
                                <h6>Quantity:</h6>
                                <input class="decrement" type="button" value="-" >
                                <input type="text" name="quantity" value="1" maxlength="2" size="1" class="number" >
                                <input class="increment" type="button" value="+" >
                            </div>
                            <div class="mb-3">
                                <a href="cart.html" class="cus-btn btn-primary"><span class="icon"><i class="far fa-shopping-cart"></i></span> Add to Cart</a>
                                <a href="#" class="cus-btn btn-primary"><span class="icon"><i class="fas fa-exchange"></i></span> Compare</a>
                                <a href="wishlist.html" class="cus-btn btn-primary"><i class="fal fa-bags-shopping"></i></a>
                            </div>
                            <div class="share">
                                <ul class="list-unstyled">
                                    <li><span><i class="fas fa-share-alt"></i></span><span class="text">&nbsp; Share:</span></li>
                                    <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="javascript:;"><i class="fab fa-snapchat-ghost"></i></a></li>
                                    <li><a href="javascript:;"><i class="fas fa-copy"></i></a></li>
                                </ul>
                            </div>
                       
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-product sec-mar mb-0">              
                            <ul class="nav nav-tabs title-btn" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab">Description</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab">Info</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab">Review</button>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="description" class="tab-pane">
                                    <p class="pt-3"><b>Curabitur egestas </b> malesuada volutpat. Nunc vel vestibulum odio, ac pellentesque lacus. Pellentesque dapibus nunc nec est imperdiet, a malesuada sem rutrum. Sed quam odio, porta a finibus quis, sagittis aliquet leo. Nunc ornare metus urna, eu luctus velit placerat ut. Cras at porttitor lectus. Ut dapibus aliquam nibh, in imperdiet libero tincidunt sit amet. Morbi sodales fermentum nibh nec facilisis. Morbi pharetra varius velit, eget varius libero finibus quis. Quisque auctor varius lectus, lacinia rhoncus velit posuere vel. Cras condimentum tincidunt urna, sed vehicula ipsum dapibus et. Pellentesque pharetra ultrices varius. Sed viverra nec purus ut ornare. Aenean auctor sem ac ex efficitur, Non mattis odio bibendum, Sed vitae enim at tortor finibus, Integer facilisis eleifend vehicula, In hac habitasse platea dictumst. <br><br> <b>Sed molestie</b> orci sem, at semper est molestie ac. Suspendisse cursus feugiat erat, eu posuere massa. Nullam posuere nibh non eros lobortis tempus. Maecenas dignissim elementum massa, vel accumsan urna elementum in. Suspendisse at dui euismod, rhoncus eros non, imperdiet ipsum. Vestibulum vehicula vel turpis et vestibulum. Ut porta et ex maximus malesuada. <br><br>Curabitur egestas malesuada volutpat. Nunc vel vestibulum odio, ac pellentesque lacus. Pellentesque dapibus nunc nec est imperdiet, a malesuada sem rutrum. Sed quam odio, porta a finibus quis, sagittis aliquet leo. Nunc ornare metus urna, eu luctus velit placerat ut. Cras at porttitor lectus. Ut dapibus aliquam nibh, in imperdiet libero tincidunt sit amet. Morbi sodales fermentum nibh nec facilisis. Morbi pharetra varius velit, eget varius libero finibus quis. Quisque auctor varius lectus, lacinia rhoncus velit posuere vel.<br><br> <b>Cras condimentum</b> tincidunt urna, sed vehicula ipsum dapibus et. Pellentesque pharetra ultrices varius. Sed viverra nec purus ut ornare. Aenean auctor sem ac ex efficitur, Non mattis odio bibendum, Sed vitae enim at tortor finibus, Integer facilisis eleifend vehicula, In hac habitasse platea dictumst. <br>Sed molestie orci sem, at semper est molestie ac. Suspendisse cursus feugiat erat, eu posuere massa. Nullam posuere nibh non eros lobortis tempus. Maecenas dignissim elementum massa, vel accumsan urna elementum in. Suspendisse at dui euismod, rhoncus eros non, imperdiet ipsum. Vestibulum vehicula vel turpis et vestibulum. Ut porta et ex maximus malesuada. </p>
                                </div>
                                <div id="info" class="tab-pane">
                                    <p class="pt-3"><b>Curabitur egestas </b> malesuada volutpat. Nunc vel vestibulum odio, ac pellentesque lacus. Pellentesque dapibus nunc nec est imperdiet, a malesuada sem rutrum. Sed quam odio, porta a finibus quis, sagittis aliquet leo. Nunc ornare metus urna, eu luctus velit placerat ut. Cras at porttitor lectus. Ut dapibus aliquam nibh, <br>in imperdiet libero tincidunt sit amet. Morbi sodales fermentum nibh nec facilisis. Morbi pharetra varius velit, eget varius libero finibus quis. Quisque auctor varius lectus, lacinia rhoncus velit posuere vel. Cras condimentum tincidunt urna, sed vehicula ipsum dapibus et. Pellentesque pharetra ultrices varius. Sed viverra nec purus ut ornare. Aenean auctor sem ac ex efficitur, Non mattis odio bibendum, Sed vitae enim at tortor finibus, Integer facilisis eleifend vehicula, In hac habitasse platea dictumst. <br> 
                                    </p>
                                    <ul class="list-group-numbered ps-0">
                                        <li>In hac habitasse platea dictumst</li>
                                        <li>Integer facilisis eleifend vehicula</li>
                                        <li>Sed vitae enim at tortor finibus</li>
                                        <li>Non mattis odio bibendum</li>
                                        <li>Aenean auctor sem ac ex efficitur</li>
                                    </ul>
                                    <p><b>Sed molestie</b> orci sem, at semper est molestie ac. Suspendisse cursus feugiat erat, eu posuere massa. Nullam posuere nibh non eros lobortis tempus. Maecenas dignissim elementum massa, vel accumsan urna elementum in. Suspendisse at dui euismod, rhoncus eros non, imperdiet ipsum. Vestibulum vehicula vel turpis et vestibulum. Ut porta et ex maximus malesuada. <br>Curabitur egestas malesuada volutpat. Nunc vel vestibulum odio, ac pellentesque lacus. Pellentesque dapibus nunc nec est imperdiet, a malesuada sem rutrum. Sed quam odio, porta a finibus quis, sagittis aliquet leo. Nunc ornare metus urna, eu luctus velit placerat ut. Cras at porttitor lectus. Ut dapibus aliquam nibh, in imperdiet libero tincidunt sit amet. Morbi sodales fermentum nibh nec facilisis. Morbi pharetra varius velit, eget varius libero finibus quis. Quisque auctor varius lectus, lacinia rhoncus velit posuere vel.</p>
                                </div>
                                <div  id="review" class="tab-pane in active pt-4">
                                    <div class="review-box">
                                        <p class="name">Albert Sebastian <span class="ps-3"><i class="fas fa-star"></i> <i class="fas fa-star"></i>  <i class="fas fa-star"></i>  <i class="fas fa-star"></i>  <i class="fas fa-star"></i></span></p>
                                        <p class="review">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    </div>
                                    <div class="review-box">
                                        <p class="name">Robert William <span class="ps-3"><i class="fas fa-star"></i> <i class="fas fa-star"></i>   <i class="fas fa-star"></i></span></p>
                                        <p class="review">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <div class="review-box">
                                        <p class="name">Jack Peterson <span class="ps-3"><i class="fas fa-star"></i>  <i class="fas fa-star"></i>  <i class="fas fa-star"></i>  <i class="fas fa-star"></i></span></p>
                                        <p class="review">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <div id="accordion" class="more-review">
                                        <div>
                                            <div id="collapseReview" class="accordion-collapse collapse">
                                                <div class="review-box">
                                                    <p class="name">Albert Sebastian <span class="ps-3"><i class="fas fa-star"></i> <i class="fas fa-star"></i>  <i class="fas fa-star"></i>  <i class="fas fa-star"></i>  <i class="fas fa-star"></i></span></p>
                                                    <p class="review">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                                </div>
                                                <div class="review-box">
                                                    <p class="name">Robert William <span class="ps-3"><i class="fas fa-star"></i> <i class="fas fa-star"></i>   <i class="fas fa-star"></i></span></p>
                                                    <p class="review">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                                <div class="review-box">
                                                    <p class="name">Jack Peterson <span class="ps-3"><i class="fas fa-star"></i>  <i class="fas fa-star"></i>  <i class="fas fa-star"></i>  <i class="fas fa-star"></i></span></p>
                                                    <p class="review">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="see-review-btn">
                                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseReview" aria-expanded="false" aria-controls="collapseReview">See all reviews<i class="fas fa-chevron-down ps-2"></i></button>
                                    </div>
                                    <hr>
                                    <h4 class="post-review">Post a Review</h4>
                                    <form method="get" action="https://techplinth.com/templates/vapemafia/product-detail.html">
                                        <div class="row">
                                            <div class="col-xl-8 col-lg-6 col-sm-6 form-group">
                                                    <input type="text" class="form-control name" name="name" placeholder="Your Name">
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                        <span class="star-cb-group">
                                                            <input type="radio" id="rating-5" name="rating" value="5" ><label for="rating-5">5</label>
                                                            <input type="radio" id="rating-4" name="rating" value="4" checked="checked" ><label for="rating-4">4</label>
                                                            <input type="radio" id="rating-3" name="rating" value="3" ><label for="rating-3">3</label>
                                                            <input type="radio" id="rating-2" name="rating" value="2" ><label for="rating-2">2</label>
                                                            <input type="radio" id="rating-1" name="rating" value="1" ><label for="rating-1">1</label>
                                                            <input type="radio" id="rating-0" name="rating" value="0" class="star-cb-clear" ><label for="rating-0">0</label>
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" rows="4" class="form-control" placeholder="Your review on this product"></textarea>
                                        </div>
                                        <div class="text-end">
                                            <button type="submit" class="cus-btn btn-primary">Submit Review</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sale-banner sec-mar mb-0">
                            <a href="shop-1.html">
                                <h6 class="title">Quit Smoking</h6>
                                <p class="text">And Start Vaping Today!</p>
                                <div class="content text-end">
                                    <h2>
                                        up to <b>50%</b> Off
                                    </h2>
                                    <h5>on fruity flavors</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <button class="cus-btn btn-white mt-3 btn-large">Shop Now</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>  
        <!--=====================================-->
        <!--=       Product Area Start          =-->
        <!--=====================================-->
        <section class="products sec-mar">
            <div class="container">
                <div class="heading">
                    <h2>Related Products</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has<br>
                        been the industry's standard dummy text ever since the 1500s</p>
                </div>
                <div class="product-slider">
                    <div class="product-grid product">
                        <div class="img-box img-hover-zoom">
                            <img alt="" src="../public/media/products/p-4.jpg">
                            <div class="overlay">
                                <a href="product-detail.html" class="cus-btn btn-primary">View Detail</a>
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title"><a href="product-detail.html">Ulitmate Smok Poo</a> </h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta at nihil, commodi quis dolore ad.</p>
                        </div>
                        <ul class="action-btns">
                            <li class="price"><a href="product-detail.html">$20</a></li>
                            <li class="cart-btn"><a href="cart.html"><i class="fal fa-shopping-cart"></i><br> Add to cart</a></li>
                            <li class="whishlist"><a href="wishlist.html"><i class="fal fa-heart"></i></a></li>
                            <li class="reviews"><a href="product-detail.html"><i class="fa fa-star"></i> 5</a></li>
                        </ul>
                    </div>
                    <div class="product-grid product">
                        <div class="img-box img-hover-zoom">
                            <img alt="" src="../public/media/products/p-5.jpg">
                            <div class="overlay">
                                <a href="product-detail.html" class="cus-btn btn-primary">View Detail</a>
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title"><a href="product-detail.html">Smok Nord 2 Kit</a> </h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta at nihil, commodi quis dolore ad.</p>
                        </div>
                        <ul class="action-btns">
                            <li class="price"><a href="product-detail.html">$30</a></li>
                            <li class="cart-btn"><a href="cart.html"><i class="fal fa-shopping-cart"></i><br> Add to cart</a></li>
                            <li class="whishlist"><a href="wishlist.html"><i class="fal fa-heart"></i></a></li>
                            <li class="reviews"><a href="product-detail.html"><i class="fa fa-star"></i> 4</a></li>
                        </ul>
                    </div>
                    <div class="product-grid product">
                        <div class="img-box img-hover-zoom">
                            <img alt="" src="../public/media/products/p-6.jpg">
                            <div class="overlay">
                                <a href="product-detail.html" class="cus-btn btn-primary">View Detail</a>
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title"><a href="product-detail.html">Smok Trinity Alpha</a> </h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta at nihil, commodi quis dolore ad.</p>
                        </div>
                        <ul class="action-btns">
                            <li class="price"><a href="product-detail.html">$35</a></li>
                            <li class="cart-btn"><a href="cart.html"><i class="fal fa-shopping-cart"></i><br> Add to cart</a></li>
                            <li class="whishlist"><a href="wishlist.html"><i class="fal fa-heart"></i></a></li>
                            <li class="reviews"><a href="product-detail.html"><i class="fa fa-star"></i> 4</a></li>
                        </ul>
                    </div>
                    <div class="product-grid product">
                        <div class="img-box img-hover-zoom">
                            <img alt="" src="../public/media/products/p-7.jpg">
                            <div class="overlay">
                                <a href="product-detail.html" class="cus-btn btn-primary">View Detail</a>
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title"><a href="product-detail.html">Voo Poo Thru</a> </h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta at nihil, commodi quis dolore ad.</p>
                        </div>
                        <ul class="action-btns">
                            <li class="price"><a href="product-detail.html">23</a></li>
                            <li class="cart-btn"><a href="cart.html"><i class="fal fa-shopping-cart"></i><br> Add to cart</a></li>
                            <li class="whishlist"><a href="wishlist.html"><i class="fal fa-heart"></i></a></li>
                            <li class="reviews"><a href="product-detail.html"><i class="fa fa-star"></i> 4</a></li>
                        </ul>
                    </div>
                </div>
                <div class="text-center mt-50">
                    <a href="shop-1.html" class="cus-btn btn-white text-uppercase">Discover More <i class="fa fa-long-arrow-right color-primary ms-2 fs-5"></i></a>
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
    <script src="../../public/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="../../public/js/vendor/bootstrap.min.js"></script>
    <script src="../../public/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="../../public/js/vendor/slick.min.js"></script>
    <script src="../../public/js/vendor/jquery-appear.js"></script>
    <script src="../../public/js/vendor/sal.js"></script>
    <script src="../../public/js/vendor/js.cookie.js"></script>

    <!-- Site Scripts -->
    <script src="../../public/js/app.js"></script>
</body>


<!-- Mirrored from techplinth.com/templates/vapemafia/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 01:45:51 GMT -->
</html>