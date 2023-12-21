<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techplinth.com/templates/vapemafia/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 01:45:54 GMT -->
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
        <!--=           Signup Start             =-->
        <!--=====================================-->
        <section class="signup">
            <div class="container">
                <div class="row ">
                    <div class="col-xl-5 col-lg-6 col-md-6">
                    <?php $LAVA =& lava_instance(); ?>
                    <?php echo $LAVA->form_validation->errors(); ?>    
                    <?php if (isset($error_message)) { ?>
                 <div class="alert alert-danger" id="message-container"><?php echo $error_message; ?></div>
                <?php } ?>
                        <form method="post" action="<?= site_url('reg'); ?>" class="signup-form">
                            <h1>Sign Up</h1>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Your full name" >
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="number" class="form-control" placeholder="Your Phone Number" >
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Your email" >
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter password" >
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="confpassword" class="form-control" placeholder="Repeat your password" >
                            </div>
                            <div class="form-group">
                                <label class="agree-label"><input type="checkbox" value="1" name="agree" required> &nbsp; &nbsp; I agree to company’s Terms of Use and Privacy Policy.</label>
                            </div>
                            <button type="submit" class="cus-btn btn-primary">Sign Up</button>
                            <p class="mt-4 mb-0">Don’t have an account? &nbsp; &nbsp;<a href="login">Login</a></p>
                        </form>
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
    <script>
    // Add this script to handle the timed disappearance of the message
    setTimeout(function() {
        document.getElementById('message-container').style.display = 'none';
    }, 2000); // 2000 milliseconds = 2 seconds
</script>
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


<!-- Mirrored from techplinth.com/templates/vapemafia/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 01:45:54 GMT -->
</html>