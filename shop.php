<?php
include_once './model/book.php';
$lsbook = array();
$lsbook = Book::getAll();
?>
<?php
include_once("./header.php");
?>
<!-- Breadcrumbs Area Start -->
<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <h2>SHOP LEFT SIDEBAR</h2>
                    <ul class="breadcrumbs-list">
                        <li>
                            <a title="Return to Home" href="index.php">Home</a>
                        </li>
                        <li>SHOP LEFT SIDEBAR</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs Area Start -->
<!-- Shop Area Start -->
<div class="shopping-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="shop-widget">
                    <div class="shop-widget-top">
                        <aside class="widget widget-categories">
                            <h2 class="sidebar-title text-center">CATEGORY</h2>
                            <ul class="sidebar-menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-double-right"></i>
                                        LEARNING
                                        <span>(5)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-double-right"></i>
                                        LIGHTING
                                        <span>(8)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-double-right"></i>
                                        LIVING ROOMS
                                        <span>(4)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-double-right"></i>
                                        LAMP
                                        <span>(7)</span>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget shop-filter">
                            <h2 class="sidebar-title text-center">PRICE SLIDER</h2>
                            <div class="info-widget">
                                <div class="price-filter">
                                    <div id="slider-range"></div>
                                    <div class="price-slider-amount">
                                        <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        <div class="widget-buttom">
                                            <input type="submit" value="Filter" />
                                            <input type="reset" value="CLEAR" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="shop-widget-bottom">
                        <aside class="widget widget-tag">
                            <h2 class="sidebar-title">POPULAR TAG</h2>
                            <ul class="tag-list">
                                <li>
                                    <a href="#">e-book</a>
                                </li>
                                <li>
                                    <a href="#">writer</a>
                                </li>
                                <li>
                                    <a href="#">book’s</a>
                                </li>
                                <li>
                                    <a href="#">eassy</a>
                                </li>
                                <li>
                                    <a href="#">nice</a>
                                </li>
                                <li>
                                    <a href="#">author</a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget widget-seller">
                            <h2 class="sidebar-title">TOP SELLERS</h2>
                            <div class="single-seller">
                                <div class="seller-img">
                                    <img src="img/shop/1.jpg" alt="" />
                                </div>
                                <div class="seller-details">
                                    <a href="shop.html">
                                        <h5>Cold mountain</h5>
                                    </a>
                                    <h5>$ 50.00</h5>
                                    <ul>
                                        <li><i class="fa fa-star icolor"></i></li>
                                        <li><i class="fa fa-star icolor"></i></li>
                                        <li><i class="fa fa-star icolor"></i></li>
                                        <li><i class="fa fa-star icolor"></i></li>
                                        <li><i class="fa fa-star icolor"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-seller">
                                <div class="seller-img">
                                    <img src="img/shop/2.jpg" alt="" />
                                </div>
                                <div class="seller-details">
                                    <a href="">
                                        <h5>The historian</h5>
                                    </a>
                                    <h5>$ 50.00</h5>
                                    <ul>
                                        <li><i class="fa fa-star icolor"></i></li>
                                        <li><i class="fa fa-star icolor"></i></li>
                                        <li><i class="fa fa-star icolor"></i></li>
                                        <li><i class="fa fa-star icolor"></i></li>
                                        <li><i class="fa fa-star icolor"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="shop-tab-area">
                    <div class="shop-tab-list">
                        <div class="shop-tab-pill pull-left">
                            <ul>
                                <li class="active" id="left"><a data-toggle="pill" href="#home"><i class="fa fa-th"></i><span>Grid</span></a></li>
                                <li><a data-toggle="pill" href="#menu1"><i class="fa fa-th-list"></i><span>List</span></a></li>
                            </ul>
                        </div>
                        <div class="shop-tab-pill pull-right">
                            <ul>
                                <li class="product-size-deatils">
                                    <div class="show-label">
                                        <label>Show : </label>
                                        <select>
                                            <option value="10" selected="selected">10</option>
                                            <option value="09">09</option>
                                            <option value="08">08</option>
                                            <option value="07">07</option>
                                            <option value="06">06</option>
                                        </select>
                                    </div>
                                </li>
                                <li class="product-size-deatils">
                                    <div class="show-label">
                                        <label><i class="fa fa-sort-amount-asc"></i>Sort by : </label>
                                        <select>
                                            <option value="position" selected="selected">Position</option>
                                            <option value="Name">Name</option>
                                            <option value="Price">Price</option>
                                        </select>
                                    </div>
                                </li>
                                <li class="shop-pagination"><a href="#">1</a></li>
                                <li class="shop-pagination"><a href="#">2</a></li>
                                <li class="shop-pagination"><a href="#"><i class="fa fa-caret-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="row tab-pane fade in active" id="home">
                            <div class="shop-single-product-area">
                                <?php foreach($lsbook as $item) {
                                ?>
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-banner">
                                        <div class="product-wrapper">
                                            <a href="single-product.php?id=<?php echo $item->id ?>" class="single-banner-image-wrapper">
                                                <img alt="" src="<?php echo $item->image ?>">
                                                <div class="price" data-price="<?php echo $item->price ?>"><span>$</span><?php echo $item->price ?></div>
                                            </a>
                                            <div class="product-description">
                                                <div class="functional-buttons">
                                                    <a href="#" title="Add to Cart" data-id="<?php echo $item->id ?>">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Add to Wishlist">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#<?php echo $item->id ?>">
                                                        <i class="fa fa-compress"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="banner-bottom text-center">
                                            <div class="banner-bottom-title">
                                                <a href="#"><?php echo $item->title ?></a>
                                            </div>
                                            <div class="rating-icon">
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>                                
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <div class="row">
                                <?php foreach($lsbook as $item){?>
                                <div class="single-shop-product">
                                    <div class="col-xs-12 col-sm-5 col-md-4">
                                        <div class="left-item">
                                            <a href="single-product.html" title="East of eden">
                                                <img src="<?php echo $item->image ?>" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-7 col-md-8">
                                        <div class="deal-product-content">
                                            <h4>
                                                <a href="single-product.html" title="East of eden"><?php echo $item->title ?></a>
                                            </h4>
                                            <div class="product-price">
                                                <span class="new-price">$ <?php echo $item->price ?></span>
                                                <span class="old-price">$ 0.00</span>
                                            </div>
                                            <div class="list-rating-icon">
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy
                                                material for a comfortable fit. Accessorize with a straw hat and
                                                you're ready for summer!</p>
                                            <div class="availability">
                                                <span>In stock</span>
                                                <span><a href="cart.php">Add to cart</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Area End -->
<?php 
include_once("./footer.php");
?>
 <!--Quickview Product Start -->
<div id="quickview-wrapper">
        <!-- Modal -->
        <?php foreach($lsbook as $item){ 
        ?>
        <div class="modal fade" id="<?php echo $item->id ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="" src="<?php echo $item->image ?>">
                                </div>
                            </div>
                            <div class="product-info">
                                <h1><?php echo $item->title ?></h1>
                                <div class="price-box">
                                    <p class="s-price"><span class="special-price"><span
                                                class="amount"><?php echo $item->price ?></span></span></p>
                                </div>
                                <a href="product-details.html" class="see-all">See all features</a>
                                <div class="quick-add-to-cart">
                                    <form method="post" class="cart">
                                        <div class="numbers-row">
                                            <input type="number" id="french-hens" value="1">
                                        </div>
                                        <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                    </form>
                                </div>
                                <div class="quick-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                                    tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis
                                    justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id
                                    nulla.
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons">
                                            <li><a target="_blank" title="Facebook" href="#"
                                                    class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" title="Twitter" href="#"
                                                    class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#"
                                                    class="pinterest social-icon"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li><a target="_blank" title="Google +" href="#"
                                                    class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" title="LinkedIn" href="#"
                                                    class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .product-info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
    <!--End of Quickview Product-->