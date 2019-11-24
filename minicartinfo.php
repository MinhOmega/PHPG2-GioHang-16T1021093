<?php
include_once './model/book.php';
include_once './model/cart.php';
session_start();

//Khởi tạo giỏ hàng rỗng
$cart = array();

//Lấy giỏ hàng từ session ra
if(isset($_SESSION["cart"])){
    $cart = $_SESSION["cart"];
}

$temp = 0;
foreach ($cart as $item) {
    # code...
    if($_REQUEST["id"]==$item->id){
        $item->quantity+=$_REQUEST["quantity"];
        $item->sum= $item->quantity * $item->price;
        $temp++;
        break;
    }

}

if($temp==0){
    $book = new Cart($_REQUEST["id"], $_REQUEST["title"], $_REQUEST["price"], $_REQUEST["quantity"], $_REQUEST["price"], $_REQUEST["image"]);
    //Thêm vào giỏ hàng
    array_push($cart, $book);
}

$sum = 0;
foreach ($cart as $item) {
	# code...
	$sum += $item->sum;
}


//Thêm giỏ hàng vào session
$_SESSION['cart'] = $cart;

?>
<div class="shoping-cart">
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
</div>