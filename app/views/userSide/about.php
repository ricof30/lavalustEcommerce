<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techplinth.com/templates/vapemafia/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 01:45:59 GMT -->
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
        <!--=      Page Banner Area Start       =-->
        <!--=====================================-->
        <section class="page-start-banner sec-pad">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index">Home</a></li>
                        <li><a href="about" class="active">About Us</a></li>
                    </ul>
                </div>
                <h5 class="title">About Us</h5>
            </div>
        </section>
        <!--=====================================-->
        <!--=      About Us Area Start       =-->
        <!--=====================================-->
        <section class="about sec-mar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-image">
                            <img src="../public/media/about/about.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <h5>Why start vaping?</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p class="quote">“ I am quote block text, consectetur adipiscing elit. Ut ac ligula et mi semper viverra nec a tellus. Curabitur sed diam quis elit tempus venenatis sit amet a tellus. Sed id lectus laoreet, elementum metus at, sagittis sem.”</p>
                        <p>Etiam consectetur accumsan odio sit amet sagittis. Aliquam erat volutpat. Maecenas eros lacus, commodo id leo ut, ullamcorper varius elit. Proin auctor quam convallis, iaculis odio non, iaculis tortor. In felis tortor, tristique at magna nec, pharetra posuere leo. Praesent ut felis ante. </p>
                    </div>
                    <div class="col-xl-6">
                        <h5 class="mt-4">History</h5>
                        <p>Etiam consectetur accumsan odio sit amet sagittis. Aliquam erat volutpat. Maecenas eros lacus, commodo id leo ut, ullamcorper varius elit. Proin auctor quam convallis, iaculis odio non, iaculis tortor. In felis tortor, tristique at magna nec, pharetra posuere leo. Praesent ut felis ante. Pellentesque rutrum sed turpis at ornare. Nulla tincidunt enim vitae purus rhoncus pellentesque ut ac ligula. Vivamus vel gravida nulla, quis aliquam est. Proin ultrices semper tortor, at suscipit nibh imperdiet vel. Etiam quis velit viverra nisl lobortis imperdiet quis mollis metus. Integer nec felis at ligula finibus consequat at ut magna. Duis fermentum dignissim metus in pellentesque. Integer viverra iaculis quam vel convallis. Donec et leo non velit pharetra placerat. Donec condimentum enim vitae felis vulputate, non rhoncus leo fringilla.</p>
                    </div>
                    <div class="col-xl-6">
                        <h5 class="mt-4">Vision</h5>
                        <p>Etiam consectetur accumsan odio sit amet sagittis. Aliquam erat volutpat. Maecenas eros lacus, commodo id leo ut, ullamcorper varius elit. Proin auctor quam convallis, iaculis odio non, iaculis tortor. In felis tortor, tristique at magna nec, pharetra posuere leo. Praesent ut felis ante. Pellentesque rutrum sed turpis at ornare. Nulla tincidunt enim vitae purus rhoncus pellentesque ut ac ligula. Vivamus vel gravida nulla, quis aliquam est. Proin ultrices semper tortor, at suscipit nibh imperdiet vel. Etiam quis velit viverra nisl lobortis imperdiet quis mollis metus. Integer nec felis at ligula finibus consequat at ut magna. Duis fermentum dignissim metus in pellentesque. Integer viverra iaculis quam vel convallis. Donec et leo non velit pharetra placerat. Donec condimentum enim vitae felis vulputate, non rhoncus leo fringilla.</p>
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


<!-- Mirrored from techplinth.com/templates/vapemafia/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 01:45:59 GMT -->
</html>