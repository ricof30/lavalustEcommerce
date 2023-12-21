<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techplinth.com/templates/vapemafia/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 01:45:51 GMT -->
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
        <!--=      Page Banner Area Start       =-->
        <!--=====================================-->
        <section class="page-start-banner sec-pad">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop-1.html">Shop</a></li>
                        <li><a href="cart.html" class="active">Your Cart</a></li>
                    </ul>
                </div>
                <h5 class="title">Your Cart</h5>
            </div>
        </section>
        <!--=====================================-->
        <!--=       Cart Area Start         =-->
        <!--=====================================-->
        <section class="cart sec-mar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-none d-xl-block">
                        <table class="table cart-items text-center">
                            <tbody>
                            <?php
                                    $LAVA->call->model('Cart_model');
                                    $product = $LAVA->Cart_model->getCart(); // Replace with your actual method
                                    ?>
                                     <?php foreach ($product as $p): ?>
                                <tr>
                         
                                    <td class="remove-sec"><button class="remove">
                                        <a href="<?= site_url('removeItem/'. $p['id']); ?>">
                                        <i class="fa fa-times"> </i></a>  </button>
                                    </td>
                                    <form method="post" action="<?= site_url('checkout'); ?>" id="checkoutForm">
                                    <td class="product text-start">
                                        <div class="product-image">
                                         <img src="../public/uploadImages/<?php echo $p['image']; ?>" style="width:100px">
                                        </div>
                                        <div class="content">
                                            <a href="product-detail.html"><h5><?php echo $p['name']; ?></h5></a>
                                            <ul class="list-unstyled">
                                                <li><span>by</span> &nbsp; VapeSpot</li>
                                                <li><span><i class="fas fa-bolt"></i></span> &nbsp; 5 – 25W</li>
                                            </ul>
                                            <p class="code pt-0"><span>SKU:</span> &nbsp; S20010905</p>
                                        </div>
                                    </td>
                                    <td class="space"></td>
                                    <td class="price-sec text-end" >
                                        <p class="heading">Price</p>
                                        <p class="price">₱<?php echo $p['price']; ?></p>
                                    </td>
                                    <td class="quantity-sec">
                                        <p class="text-center heading">Quantity</p>
                                        <div class="quantity quantity-wrap">
                                            <input type="hidden" name="id[]" value="<?= $p['product_id']?>">
                                            <input class="decrement" type="button" value="-">
                                            <input type="text" name="quantity[]" size="1" maxlength="2" value="1" class="number">
                                            <input class="increment" type="button" value="+">
                                        </div>
                                    </td>
                                    <td class="total-sec text-end pe-4">
                                        <p class="heading">Sub Total</p>
                                        <p class="sub-total">₱<?php echo $p['price']; ?></p>
                                    </td>
                          
                                </tr>
                                <?php endforeach; ?>
                                
                                <tr>
                                    <td colspan="6">
                                        <table class="table checkout-box-xl">
                                            <tr>
                                                <td class="left-content text-start">
                                                    <p>Shipping Fee:</p>
                                                    <p >Total Amount:</p>
                                                </td>
                                                <td class="right-content text-end">
                                                    <p>₱50.00</p>
                                                    <p class="total">₱</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                       
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-50">
                                    <a href="shop" class="cus-btn btn-white text-uppercase"><i class="fa fa-long-arrow-left color-primary me-2 fs-6"></i>Continue Shopping</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-50 text-end">
                                <button type="submit" id="proceedToCheckout" class="cus-btn btn-primary">Proceed to Check Out</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="d-xl-none mb-3">
                        <div class="cart-items mobile-show">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <table class="table text-center">                    
                                        <tbody>
                                        <?php foreach ($product as $p): ?>
                                            <tr>
                                                <td colspan="2" class="cart-product">
                                                <button class="remove">
                                                    <a href="<?= site_url('removeItem/'. $p['id']); ?>">
                                                    <i class="fa fa-times"> </i></a>  </button>
                                                
                                                    <div class="product-image mb-2 mt-2">
                                                    <img src="../public/uploadImages/<?php echo $p['image']; ?>" style="width:100px">
                                                    </div>
                                                    <div class="content">
                                                        <h5><?php echo $p['name']; ?></h5>
                                                        <ul class="list-unstyled">
                                                            <li><span>by</span> &nbsp; SMOK</li>
                                                            <li><span><i class="fas fa-bolt"></i></span> &nbsp; 5 – 25W</li>
                                                        </ul>
                                                        <p class="code pt-0"><span>SKU:</span> &nbsp; S20010905</p>
                                                    </div>
                                                </td>
                                            </tr>
                                         
                                            <tr>
                                                <td>
                                                    <p>Price</p>
                                                    <p>Quantity</p>
                                                    <p>Sub total</p>
                                                </td>
                                                <td>
                                                    <div>
                                                        <p class="price">₱<?php echo $p['price']; ?></p>
                                                    </div>
                                                    <div class="quantity">
                                                        <input class="decrement" type="button" value="-" >
                                                        <input type="text" name="quantity" value="1" maxlength="2" size="1" class="number" />
                                                        <input class="increment" type="button" value="+" >
                                                    </div>
                                                    <div>
                                                        <p class="sub-total">₱<?php echo $p['price']; ?></p>
                                                    </div>
                                                </td>
                                                <?php endforeach?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                              
                            </div>
                            <table class="table checkout-box">
                                <tr>
                                    <td class="left-content text-start">
                                        <p>Shipping Fee:</p>
                                        <p>Total Amount:</p>
                                    </td>
                                    <td class="right-content text-end">
                                        <p>$20.00</p>
                                        <p>$73.00</p>
                                    </td>
                                </tr>
                            </table>
                            <div class="mt-50 text-center">
                                <a href="checkout.html" class="cus-btn btn-primary">Proceed to Check Out</a>
                            </div>
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
   



<script>
    document.addEventListener("DOMContentLoaded", function () {
  // Get all product rows in the cart
  var productRows = document.querySelectorAll('.cart-items tbody tr');
  var totalElement = document.querySelector('.table .total');

  var totalAmount = 0;
  var shippingFee = 50;
  


  function updateTotal() {
     var totalWithShipping = totalAmount + shippingFee;
    totalElement.innerText = '₱' + totalWithShipping.toFixed(2);
  }

  productRows.forEach(function (row) {
    // Get the quantity input and the increment/decrement buttons for each row
    var quantityInput = row.querySelector('.quantity-wrap .number');
    var decrementButton = row.querySelector('.quantity-wrap .decrement');
    var incrementButton = row.querySelector('.quantity-wrap .increment');
    var priceElement = row.querySelector('.price');
    var subtotalElement = row.querySelector('.sub-total');

    // Add event listeners to the buttons for each row
    decrementButton.addEventListener('click', function () {
      updateQuantity(row, 0);
    });

    incrementButton.addEventListener('click', function () {
      updateQuantity(row, 0);
    });

    // Function to update the quantity for each row
    function updateQuantity(row, change) {
      var quantityInput = row.querySelector('.quantity-wrap .number');
      var currentQuantity = parseInt(quantityInput.value, 10) || 0;
      var newQuantity = Math.max(0, currentQuantity + change);

      // Ensure the new quantity is not negative
      quantityInput.value = newQuantity;

      // Update the subtotal for each row based on the new quantity
      updateSubtotal(row);
      totalAmount = 0;
      productRows.forEach(function (row) {
        var subtotalElement = row.querySelector('.sub-total');
        var subtotal = parseFloat(subtotalElement.innerText.replace('₱', ''), 10);
        totalAmount += subtotal ;
        updateTotal();
      });

     
    }

    // Function to update the subtotal for each row
    function updateSubtotal(row) {
      var price = parseFloat(priceElement.innerText.replace('₱', ''), 10);
      var quantity = parseInt(quantityInput.value, 10) || 0;
      var subtotal = price * quantity;

      // Update the subtotal display for each row
      subtotalElement.innerText = '₱' + subtotal.toFixed(2);

      // Update the total amount
      totalAmount += subtotal;
      updateTotal();
    }

    // Initial update of the subtotal and total amount
    updateSubtotal(row);
  });
});

</script>
      


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


<!-- Mirrored from techplinth.com/templates/vapemafia/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 01:45:53 GMT -->
</html>