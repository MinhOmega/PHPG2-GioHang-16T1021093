<?php
include_once './model/book.php';
include_once './model/cart.php';

$cart = array();

if (isset($_SESSION["cart"])) {
    $cart = $_SESSION["cart"];
}
$sum = 0;
foreach ($cart as $item) {
    # code...
    $sum += $item->sum;
}
session_start();
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home One || Witter Multipage Responsive Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,700,600,500,300' rel='stylesheet' type='text/css'>

    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- Font-Awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- pe-icon-7-stroke css -->
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <!-- Flaticon css -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- venobox css -->
    <link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="screen" />
    <!-- nivo slider css -->
    <link rel="stylesheet" href="lib/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="lib/css/preview.css" type="text/css" media="screen" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <!--Header Area Start-->
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-6 col-xs-6">
                    <div class="header-logo">
                        <a href="index.php">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-1 col-sm-6 visible-sm  col-xs-6">
                    <div class="header-right">
                        <ul>
                            <li>
                                <a href="account.php"><i class="flaticon-people"></i></a>
                            </li>
                            <li class="shoping-cart">
                                <a href="#">
                                    <i class="flaticon-shop"></i>
                                    <span>2</span>
                                </a>
                                <div class="add-to-cart-product">
                                    <?php foreach ($cart as $item) {
                                        ?>
                                        <div class="cart-product">
                                            <div class="cart-product-image">
                                                <a href="single-product.php">
                                                    <img src="<?php echo $item->image ?>" alt="">
                                                </a>
                                            </div>
                                            <div class="cart-product-info">
                                                <p>
                                                    <span><?php echo $item->quantity ?></span>
                                                    x
                                                    <a href="single-product.php"><?php echo $item->title ?></a>
                                                </p>
                                                <a href="single-product.php">S, Orange</a>
                                                <span class="cart-price">$ <?php echo $item->price ?></span>
                                            </div>
                                            <div class="cart-product-remove">
                                                <i class="fa fa-times" data-id="<?php echo $item->id ?>"></i>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="total-cart-price">
                                        <div class="cart-product-line fast-line">
                                            <span>Items</span>
                                            <span class="free-shiping"><?php echo sizeof($cart) ?></span>
                                        </div>
                                        <div class="cart-product-line">
                                            <span>Total</span>
                                            <span class="total">$ <?php echo $sum ?></span>
                                        </div>
                                    </div>
                                    <div class="cart-checkout">
                                        <a href="checkout.php">
                                            Check out
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 hidden-xs">
                    <div class="mainmenu text-center">
                        <nav>
                            <ul id="nav">
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="shop.php">FEATURED</a></li>
                                <li><a href="shop.php">REVIEW BOOK</a></li>
                                <li><a href="about.php">ABOUT AUTHOR</a></li>
                                <li><a href="#">pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="cart.php">Cart Page</a></li>
                                        <li><a href="checkout.php">Check Out</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="my-account.php">My Account</a></li>
                                        <li><a href="shop.php">Shopping Page</a></li>
                                        <li><a href="single-product.php">Single Shop Page</a></li>
                                        <li><a href="wishlist.php">Wishlist Page</a></li>
                                        <!-- <li><a href="404.php">404 Page</a></li> -->
                                    </ul>
                                </li>
                                <li><a href="contact.php">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-1 hidden-sm">
                    <div class="header-right">
                        <ul>
                            <li>
                                <a href="account.php"><i class="flaticon-people"></i></a>
                            </li>
                            <li class="shoping-cart">
                                <a href="#">
                                    <i class="flaticon-shop"></i>
                                    <span>2</span>
                                </a>
                                <div class="add-to-cart-product">
                                <?php foreach ($cart as $item) {
                                        ?>
                                        <div class="cart-product">
                                            <div class="cart-product-image">
                                                <a href="single-product.php">
                                                    <img src="<?php echo $item->image ?>" alt="">
                                                </a>
                                            </div>
                                            <div class="cart-product-info">
                                                <p>
                                                    <span><?php echo $item->quantity ?></span>
                                                    x
                                                    <a href="single-product.php"><?php echo $item->title ?></a>
                                                </p>
                                                <a href="single-product.php">S, Orange</a>
                                                <span class="cart-price">$ <?php echo $item->price ?></span>
                                            </div>
                                            <div class="cart-product-remove">
                                                <i class="fa fa-times" data-id="<?php echo $item->id ?>"></i>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="total-cart-price">
                                        <div class="cart-product-line fast-line">
                                            <span>Items</span>
                                            <span class="free-shiping"><?php echo sizeof($cart) ?></span>
                                        </div>
                                        <div class="cart-product-line">
                                            <span>Total</span>
                                            <span class="total">$ <?php echo $sum ?></span>
                                        </div>
                                    </div>
                                    <div class="cart-checkout">
                                        <a href="checkout.php">
                                            Check out
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
                                    <div class="cart-checkout">
                                        <a href="cart.php">
                                            View creddit and Pay
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Header Area End-->
    <!-- Mobile Menu Start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="shop.php">FEATURED</a></li>
                                <li><a href="shop.php">REVIEW BOOK</a></li>
                                <li><a href="about.php">ABOUT AUTHOR</a></li>
                                <li><a href="#">pages</a>
                                    <ul>
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="cart.php">Cart Page</a></li>
                                        <li><a href="checkout.php">Check Out</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="my-account.php">My Account</a></li>
                                        <li><a href="shop.php">Shopping Page</a></li>
                                        <li><a href="single-product.php">Single Shop Page</a></li>
                                        <li><a href="wishlist.php">Wishlist Page</a></li>
                                        <li><a href="#">404 Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu End -->