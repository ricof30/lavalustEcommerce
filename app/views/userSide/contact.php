<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techplinth.com/templates/vapemafia/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 01:45:59 GMT -->
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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="contact.html" class="active">Contact Us</a></li>
                    </ul>
                </div>
                <h5 class="title">Contact Us</h5>
            </div>
        </section>
       <!--=====================================-->
        <!--=       Contact Start         =-->
        <!--=====================================-->
        <section class="contact sec-mar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="title">Send a Message</h4>
                        <form method="post" action="https://techplinth.com/templates/vapemafia/contact.html" class="contact-form">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" required name="name" placeholder="Your Name">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="email" class="form-control" required name="email" placeholder="Your Email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea class="form-control" rows="6" id="contact-message" required name="message" placeholder="Type your message here..."></textarea>
                                </div>
                            </div>
                            <div class="mt-50">
                                <button type="submit" class="cus-btn btn-primary text-end">Send Message</button>
                            </div>
                             <!-- Alert Message -->
                            <div id="message" class="alert-msg"></div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <h4 class="title">Contact Details</h4>
                        <p>To help you out, our stores are open, we’re delivering as normal, our online store is available 24/7, and our customer service team is ready to help you via phone and Live Chat.</p>
                        <ul class="list-unstyled">
                            <li><a href="tel:+1212346845"><i class="fas fa-phone-alt"></i>09120530476</a></li>
                            <li><a href="mailto:info@example.com"><i class="fas fa-envelope"></i>ricofontecilla30@gmail.com</a></li>
                            <li><a href="javascript:;"><i class="fab fa-facebook-f"></i>Rico Fontecilla </a></li>
                            <li><a href="javascript:;"><i class="fab fa-twitter"></i>Jerwin Castillo </a></li>
                            <li><a href="javascript:;"><i class="fab fa-instagram"></i>Cheene Xi Manalo </a></li>
                            <li><a href="javascript:;"><i class="fab fa-snapchat-ghost"></i>Cheene Xi Manalo</a></li>
                            <li class="address"><i class="fas fa-map-marker-alt"></i>Masipit Calapan, Oriental Mindoro</li>
                        </ul>
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


<!-- Mirrored from techplinth.com/templates/vapemafia/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 01:45:59 GMT -->
</html>