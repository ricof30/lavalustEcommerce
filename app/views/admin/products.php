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
                <?php echo $LAVA->call->view('admin/adding_product'); ?>
            </div>
        </div>
        </div>
        </div>
</body>
</html>