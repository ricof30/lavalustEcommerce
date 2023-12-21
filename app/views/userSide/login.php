<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techplinth.com/templates/vapemafia/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 01:45:54 GMT -->
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
        <!--=           Login Start             =-->
        <!--=====================================-->
        <section class="login mt-header">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8">
                    <?php $LAVA =& lava_instance(); ?>
                    <?php echo $LAVA->form_validation->errors(); ?>    
                    <?php if (isset($error_message)) { ?>
                    <div class="alert alert-danger text-center"><?php echo $error_message; ?></div>
                    <?php } ?>
                    <?php if (isset($success_message)) { ?>
                    <div class="alert alert-success text-center" id="message-container"><?php echo $success_message; ?></div>
                    <?php } ?>
                        <form method="post" action=" <?= site_url('log'); ?> " class="justify-content-center" >
                            <h1>Login</h1>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter your email" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter your password" required autocomplete="off">
                            </div>
                            <div class="row">
                                <div class="col-7">
                                    <p class=""><a href="forgot-password.html">Forgot&nbsp;password?</a></p>
                                </div>
                                <div class=" col-5">
                                    <div class="text-end">
                                        <button type="submit" class="cus-btn btn-primary">Login</button>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-4 mb-0">Don’t have an account? &nbsp; &nbsp;<a href="register">Sign up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
      
        <?php $LAVA =& lava_instance(); ?>
      <?php echo $LAVA->call->view('userSide/footer'); ?>
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('message-container').style.display = 'none';
        }, 2000); 
    </script>
    <script src="../public/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="../public/js/vendor/bootstrap.min.js"></script>
    <script src="../public/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="../public/js/vendor/slick.min.js"></script>
    <script src="../public/js/vendor/jquery-appear.js"></script>
    <script src="../public/js/vendor/sal.js"></script>
    <script src="../public/js/vendor/js.cookie.js"></script>
    <script src="../public/js/app.js"></script>
</body>


<!-- Mirrored from techplinth.com/templates/vapemafia/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 01:45:54 GMT -->
</html>