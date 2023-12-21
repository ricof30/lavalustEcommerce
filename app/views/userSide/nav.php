<?php $LAVA =& lava_instance();?>
<?php $userLoggedIn = $LAVA->session->userdata('logged_in'); ?>
<header class="header">
    <div class="container">
        <!-- Start Main menu Nav -->
        <nav class="navbar navbar-expand-sm  p-0">
            <a class="navbar-brand" href="index.html"><img alt="" src="../public/media/logo.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ms-auto mainmenu">
                    <li>
                        <a href="home" class="active">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="shop">Shop</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="javascript:void(0);">Pages</a>
                        <ul class="mafia-submenu multiline">
                            <li><a href="home">Home</a></li>
                            <li><a href="shop" class="active">Shop</a></li>
                            <li><a href="cart">Cart</a></li>
                            <li><a href="about">About</a></li>
                            <li><a href="contact">Contact</a></li>
                            <li><a href="privacy_policy">Privacy Policy</a></li>
                            <li><a href="order_history">Order History</a></li>
                        </ul>
                    </li>
                    <li id="search-form">
                        <form method="get" action="https://techplinth.com/templates/vapemafia/shop-1.html">
                            <div class="input-group">
                                <button type="submit" class="input-group-text"><i class="fal fa-search"></i></button>
                                <input type="text" class="form-control" placeholder="Vape Kits">
                            </div>
                        </form>
                    </li>
                    <li><a href="javascript:;" class="search-btn"><i class="fal fa-search"></i></a></li>
                    <?php $LAVA =& lava_instance();
                    $LAVA->call->model('Cart_model');


                    ?>
                    <?php $total = $LAVA->Cart_model->totalCart(); ?>
                    <li class="menu-item-has-children">
                        <a href="cart"><span class="items-count">
                                <?= $total['total_products'] ?>
                            </span> <i class="fal fa-shopping-cart"></i></a>
                    </li>
                    <?php if ($userLoggedIn): ?>
                        <!-- If user is logged in, show the "Logout" link -->
                        <li><a href="logout">Logout</a></li>
                    <?php else: ?>
                        <!-- If user is not logged in, show the "Login" link -->
                        <li><a href="login"><i class="fal fa-user"></i></a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
        <!-- End Main menu Nav -->
    </div>
</header>