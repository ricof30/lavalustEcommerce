<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../public/admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="../public/admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../public/admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../public/admin/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../public/admin/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h2 class="text-center text-primary mb-5">Admin Panel</h2>
              <!-- <h6 class="font-weight-light text-center ">Sign in to continue.</h6> -->
              <?php $LAVA =& lava_instance(); ?>
              <?php echo $LAVA->form_validation->errors(); ?>    
              <?php if (isset($error_message)) { ?>
                 <div class="alert alert-danger"><?php echo $error_message; ?></div>
                <?php } ?>
                <?php if (isset($success_message)) { ?>
                 <div class="alert alert-success"><?php echo $success_message; ?></div>
                <?php } ?>
              <form action="<?= site_url('loggedIn'); ?> " method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" placeholder="Username" name="name">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" placeholder="Password" name="password" >
                </div>
                <div class="mt-3 d-flex justify-content-center">
                <div><input type="submit" value="Login" class="btn btn-primary" /></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../public/js/off-canvas.js"></script>
  <script src="../public/js/hoverable-collapse.js"></script>
  <script src="../public/js/template.js"></script>
  <script src="../public/js/settings.js"></script>
  <script src="../public/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
