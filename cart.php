<?php
include_once("./header.php");
?>
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
?>
<!-- Breadcrumbs Area Start -->
<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <h2>SHOPPING CART</h2>
                    <ul class="breadcrumbs-list">
                        <li>
                            <a title="Return to Home" href="index.php">Home</a>
                        </li>
                        <li>Shopping Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs Area end -->
<!-- Cart Area Start -->
<div class="shopping-cart-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wishlist-table-area table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th class="product-remove">Remove</th>
                                <th class="product-image">Image</th>
                                <th class="t-product-name">Product Name</th>
                                <th class="product-edit">Edit</th>
                                <th class="product-unit-price">Unit Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($cart as $item){ ?>
                            <tr>
                                <td data-id="<?php echo $item->id ?>" class="product-remove" >
                                    <a href="#">
                                        <i class="flaticon-delete" ></i>
                                    </a>
                                </td>
                                <td class="product-image">
                                    <a href="#">
                                        <img src="<?php echo $item->image ?>" alt="">
                                    </a>
                                </td>
                                <td class="t-product-name">
                                    <h3>
                                        <a href="#"><?php echo $item->title ?></a>
                                    </h3>
                                </td>
                                <td class="product-edit">
                                    <p>
                                        <a href="#">Edit</a>
                                    </p>
                                </td>
                                <td class="product-unit-price">
                                    <span class="amount"><?php echo $item->price ?></span>
                                </td>
                                <td class="product-quantity product-cart-details">
                                    <input class="quantity" data-id="<?php echo $item->id ?>" type="number" value="<?php echo $item->quantity ?>">
                                </td>
                                <td class="product-quantity">
                                    <p><?php echo $item->sum ?></p>
                                </td>
                            </tr>
                            <?php }?>                            
                        </tbody>
                    </table>
                </div>
                <div class="shopingcart-bottom-area">
                    <a class="left-shoping-cart" href="shop.php">CONTINUE SHOPPING</a>
                    <div class="shopingcart-bottom-area pull-right">
                        <a class="right-shoping-cart" href="#">CLEAR SHOPPING CART</a>
                        <a class="right-shoping-cart" href="#">UPDATE SHOPPING CART</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart Area End -->
<!-- Discount Area Start -->
<div class="discount-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="discount-main-area">
                    <div class="discount-top">
                        <h3>DISCOUNT CODE</h3>
                        <p>Enter your coupon code if have one</p>
                    </div>
                    <div class="discount-middle">
                        <input type="text" placeholder="">
                        <a class="" href="#">APPLY COUPON</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="subtotal-main-area">
                    <div class="subtotal-area">
                        <h2>SUBTOTAL<span><?php echo $sum?></span></h2>
                    </div>
                    <div class="subtotal-area">
                        <h2>GRAND TOTAL<span class="total"><?php echo $sum?></span></h2>
                    </div>
                    <a href="#">CHECKOUT</a>
                    <p>Checkout With Multiple Addresses</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Discount Area End -->
<?php 
include_once("./footer.php");
?>