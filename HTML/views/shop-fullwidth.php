<?php
require_once "header.php";
?>
    <!-- ============================================================= Header End ============================================================= -->
    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="../home-v1.php">Home</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>
                    <a href="../shop.php">Shop</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>Page 1
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="shop-control-bar">
                            <div class="handheld-sidebar-toggle">
                                <button type="button" class="btn sidebar-toggler">
                                    <i class="fa fa-sliders"></i>
                                    <span>Filters</span>
                                </button>
                            </div>
                            <!-- .handheld-sidebar-toggle -->
                            <h1 class="woocommerce-products-header__title page-title">Shop</h1>
                            <ul role="tablist" class="shop-view-switcher nav nav-tabs">
                                <li class="nav-item">
                                    <a href="#grid" title="Grid View" data-toggle="tab" class="nav-link active">
                                        <i class="tm tm-grid-small"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#grid-extended" title="Grid Extended View" data-toggle="tab" class="nav-link ">
                                        <i class="tm tm-grid"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#list-view-large" title="List View Large" data-toggle="tab" class="nav-link ">
                                        <i class="tm tm-listing-large"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#list-view" title="List View" data-toggle="tab" class="nav-link ">
                                        <i class="tm tm-listing"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#list-view-small" title="List View Small" data-toggle="tab" class="nav-link ">
                                        <i class="tm tm-listing-small"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- .shop-view-switcher -->
                            <form class="form-techmarket-wc-ppp" method="POST">
                                <select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp">
                                    <option value="20">Show 20</option>
                                    <option value="40">Show 40</option>
                                    <option value="-1">Show All</option>
                                </select>
                                <input type="hidden" value="5" name="shop_columns">
                                <input type="hidden" value="15" name="shop_per_page">
                                <input type="hidden" value="right-sidebar" name="shop_layout">
                            </form>
                            <!-- .form-techmarket-wc-ppp -->
                            <form method="get" class="woocommerce-ordering">
                                <select class="orderby" name="orderby">
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option selected="selected" value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                                <input type="hidden" value="5" name="shop_columns">
                                <input type="hidden" value="15" name="shop_per_page">
                                <input type="hidden" value="right-sidebar" name="shop_layout">
                            </form>
                            <!-- .woocommerce-ordering -->
                            <nav class="techmarket-advanced-pagination">
                                <form class="form-adv-pagination" method="post">
                                    <input type="number" value="1" class="form-control" step="1" max="5" min="1" size="2" id="goto-page">
                                </form> of 5<a href="#" class="next page-numbers">→</a>
                            </nav>
                            <!-- .techmarket-advanced-pagination -->
                        </div>
                        <!-- .shop-control-bar -->
                        <div class="tab-content">
                            <div id="grid" class="tab-pane active" role="tabpanel">
                                <div class="woocommerce columns-7">
                                    <div class="products">
                                        <div class="product first">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/1.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="../cart.php">Add to cart</a>
                                                <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/2.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Video & Air Quality Monitor</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="../cart.php">Add to cart</a>
                                                <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/3.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="../cart.php">Add to cart</a>
                                                <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/4.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Video & Air Quality Monitor</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="../cart.php">Add to cart</a>
                                                <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/5.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="../cart.php">Add to cart</a>
                                                <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/6.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="../cart.php">Add to cart</a>
                                                <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product last">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/7.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Watch Stainless with Grey Suture Leather Strap</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="../cart.php">Add to cart</a>
                                                <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product first">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/8.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="../cart.php">Add to cart</a>
                                                <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/9.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="../cart.php">Add to cart</a>
                                                <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/10.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">XONE Wireless Controller</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="../cart.php">Add to cart</a>
                                                <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/11.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="../cart.php">Add to cart</a>
                                                <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/12.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Gear Virtual Reality 3D with Bluetooth Glasses</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="../cart.php">Add to cart</a>
                                                <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/13.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="../cart.php">Add to cart</a>
                                                <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product last">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/14.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Gear Virtual Reality 3D with Bluetooth Glasses</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="../cart.php">Add to cart</a>
                                                <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product first">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/15.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="../cart.php">Add to cart</a>
                                                <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/16.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="../cart.php">Add to cart</a>
                                                <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/17.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="../cart.php">Add to cart</a>
                                                <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/5.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="../cart.php">Add to cart</a>
                                                <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/12.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="../cart.php">Add to cart</a>
                                                <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/1.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Bbd 23-Inch Screen LED-Lit Monitorss Buds</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="../cart.php">Add to cart</a>
                                                <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product last">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/8.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">XONE Wireless Controller</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="../cart.php">Add to cart</a>
                                                <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                    </div>
                                    <!-- .products -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .tab-pane -->
                            <div id="grid-extended" class="tab-pane" role="tabpanel">
                                <div class="woocommerce columns-7">
                                    <div class="products">
                                        <div class="product first">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/1.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="../cart.php">Add to cart</a>
                                            <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/2.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Watch Stainless with Grey Suture Leather Strap</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="../cart.php">Add to cart</a>
                                            <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/3.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="../cart.php">Add to cart</a>
                                            <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/4.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="../cart.php">Add to cart</a>
                                            <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/5.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="../cart.php">Add to cart</a>
                                            <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/6.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="../cart.php">Add to cart</a>
                                            <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                        </div>
                                        <!-- .product -->
                                        <div class="product last">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/7.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">XONE Wireless Controller</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="../cart.php">Add to cart</a>
                                            <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                        </div>
                                        <!-- .product -->
                                        <div class="product first">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/8.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Bbd 23-Inch Screen LED-Lit Monitorss Buds</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="../cart.php">Add to cart</a>
                                            <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/9.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Gear Virtual Reality 3D with Bluetooth Glasses</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="../cart.php">Add to cart</a>
                                            <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/10.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="../cart.php">Add to cart</a>
                                            <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/11.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="../cart.php">Add to cart</a>
                                            <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/12.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Video & Air Quality Monitor</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="../cart.php">Add to cart</a>
                                            <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/13.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Gear Virtual Reality 3D with Bluetooth Glasses</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="../cart.php">Add to cart</a>
                                            <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                        </div>
                                        <!-- .product -->
                                        <div class="product last">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/14.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="../cart.php">Add to cart</a>
                                            <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                        </div>
                                        <!-- .product -->
                                        <div class="product first">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/15.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="../cart.php">Add to cart</a>
                                            <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/16.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="../cart.php">Add to cart</a>
                                            <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/17.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="../cart.php">Add to cart</a>
                                            <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/5.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="../cart.php">Add to cart</a>
                                            <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/12.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Watch Stainless with Grey Suture Leather Strap</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="../cart.php">Add to cart</a>
                                            <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                        </div>
                                        <!-- .product -->
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/1.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">Bbd 23-Inch Screen LED-Lit Monitorss Buds</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="../cart.php">Add to cart</a>
                                            <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                        </div>
                                        <!-- .product -->
                                        <div class="product last">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/8.jpg">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="../cart.php">Add to cart</a>
                                            <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                        </div>
                                        <!-- .product -->
                                    </div>
                                    <!-- .products -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .tab-pane -->
                            <div id="list-view-large" class="tab-pane" role="tabpanel">
                                <div class="woocommerce columns-1">
                                    <div class="products">
                                        <div class="product list-view-large first ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/1.jpg">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="brand">
                                                            <a href="#">
                                                                <img alt="galaxy" src="../assets/images/brands/5.png">
                                                            </a>
                                                        </div>
                                                        <!-- .brand -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                        <span class="sku_wrapper">SKU:
                                                                    <span class="sku">5487FB8/13</span>
                                                                </span>
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                        <div class="availability">
                                                            Availability:
                                                            <p class="stock in-stock">1000 in stock</p>
                                                        </div>
                                                        <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="../cart.php">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product list-view-large ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/2.jpg">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="brand">
                                                            <a href="#">
                                                                <img alt="galaxy" src="../assets/images/brands/5.png">
                                                            </a>
                                                        </div>
                                                        <!-- .brand -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                        <span class="sku_wrapper">SKU:
                                                                    <span class="sku">5487FB8/13</span>
                                                                </span>
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                        <div class="availability">
                                                            Availability:
                                                            <p class="stock in-stock">1000 in stock</p>
                                                        </div>
                                                        <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="../cart.php">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product list-view-large ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/3.jpg">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="brand">
                                                            <a href="#">
                                                                <img alt="galaxy" src="../assets/images/brands/5.png">
                                                            </a>
                                                        </div>
                                                        <!-- .brand -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                        <span class="sku_wrapper">SKU:
                                                                    <span class="sku">5487FB8/13</span>
                                                                </span>
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                        <div class="availability">
                                                            Availability:
                                                            <p class="stock in-stock">1000 in stock</p>
                                                        </div>
                                                        <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="../cart.php">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product list-view-large ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/4.jpg">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="brand">
                                                            <a href="#">
                                                                <img alt="galaxy" src="../assets/images/brands/5.png">
                                                            </a>
                                                        </div>
                                                        <!-- .brand -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                        <span class="sku_wrapper">SKU:
                                                                    <span class="sku">5487FB8/13</span>
                                                                </span>
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                        <div class="availability">
                                                            Availability:
                                                            <p class="stock in-stock">1000 in stock</p>
                                                        </div>
                                                        <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="../cart.php">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product list-view-large ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/5.jpg">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="brand">
                                                            <a href="#">
                                                                <img alt="galaxy" src="../assets/images/brands/5.png">
                                                            </a>
                                                        </div>
                                                        <!-- .brand -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                        <span class="sku_wrapper">SKU:
                                                                    <span class="sku">5487FB8/13</span>
                                                                </span>
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                        <div class="availability">
                                                            Availability:
                                                            <p class="stock in-stock">1000 in stock</p>
                                                        </div>
                                                        <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="../cart.php">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product list-view-large ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/6.jpg">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="brand">
                                                            <a href="#">
                                                                <img alt="galaxy" src="../assets/images/brands/5.png">
                                                            </a>
                                                        </div>
                                                        <!-- .brand -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                        <span class="sku_wrapper">SKU:
                                                                    <span class="sku">5487FB8/13</span>
                                                                </span>
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                        <div class="availability">
                                                            Availability:
                                                            <p class="stock in-stock">1000 in stock</p>
                                                        </div>
                                                        <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="../cart.php">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                    </div>
                                    <!-- .products -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .tab-pane -->
                            <div id="list-view" class="tab-pane" role="tabpanel">
                                <div class="woocommerce columns-1">
                                    <div class="products">
                                        <div class="product list-view last">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/1.jpg">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="brand">
                                                            <a href="#">
                                                                <img alt="galaxy" src="../assets/images/brands/5.png">
                                                            </a>
                                                        </div>
                                                        <!-- .brand -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                        <div class="availability">
                                                            Availability:
                                                            <p class="stock in-stock">1000 in stock</p>
                                                        </div>
                                                        <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="../cart.php">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product list-view first ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/2.jpg">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="brand">
                                                            <a href="#">
                                                                <img alt="galaxy" src="../assets/images/brands/5.png">
                                                            </a>
                                                        </div>
                                                        <!-- .brand -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                        <div class="availability">
                                                            Availability:
                                                            <p class="stock in-stock">1000 in stock</p>
                                                        </div>
                                                        <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="../cart.php">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product list-view ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/3.jpg">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="brand">
                                                            <a href="#">
                                                                <img alt="galaxy" src="../assets/images/brands/5.png">
                                                            </a>
                                                        </div>
                                                        <!-- .brand -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                        <div class="availability">
                                                            Availability:
                                                            <p class="stock in-stock">1000 in stock</p>
                                                        </div>
                                                        <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="../cart.php">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product list-view ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/4.jpg">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="brand">
                                                            <a href="#">
                                                                <img alt="galaxy" src="../assets/images/brands/5.png">
                                                            </a>
                                                        </div>
                                                        <!-- .brand -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                        <div class="availability">
                                                            Availability:
                                                            <p class="stock in-stock">1000 in stock</p>
                                                        </div>
                                                        <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="../cart.php">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product list-view ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/5.jpg">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="brand">
                                                            <a href="#">
                                                                <img alt="galaxy" src="../assets/images/brands/5.png">
                                                            </a>
                                                        </div>
                                                        <!-- .brand -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                        <div class="availability">
                                                            Availability:
                                                            <p class="stock in-stock">1000 in stock</p>
                                                        </div>
                                                        <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="../cart.php">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product list-view ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/6.jpg">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="brand">
                                                            <a href="#">
                                                                <img alt="galaxy" src="../assets/images/brands/5.png">
                                                            </a>
                                                        </div>
                                                        <!-- .brand -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                        <div class="availability">
                                                            Availability:
                                                            <p class="stock in-stock">1000 in stock</p>
                                                        </div>
                                                        <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="../cart.php">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                    </div>
                                    <!-- .products -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .tab-pane -->
                            <div id="list-view-small" class="tab-pane" role="tabpanel">
                                <div class="woocommerce columns-1">
                                    <div class="products">
                                        <div class="product list-view-small ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/1.jpg">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="../cart.php">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product list-view-small last">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/2.jpg">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="../cart.php">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product list-view-small first ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/3.jpg">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="../cart.php">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product list-view-small ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/4.jpg">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="../cart.php">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product list-view-small ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/5.jpg">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="../cart.php">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product list-view-small ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/6.jpg">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="../cart.php">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product list-view-small ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/7.jpg">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="../cart.php">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product list-view-small ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/8.jpg">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="../cart.php">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                        <div class="product list-view-small last">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/9.jpg">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="../wishlist.php" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="../single-product-fullwidth.php">
                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="../cart.php">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="../compare.php">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                    </div>
                                    <!-- .products -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .tab-pane -->
                        </div>
                        <!-- .tab-content -->
                        <div class="shop-control-bar-bottom">
                            <form class="form-techmarket-wc-ppp" method="POST">
                                <select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp">
                                    <option value="20">Show 20</option>
                                    <option value="40">Show 40</option>
                                    <option value="-1">Show All</option>
                                </select>
                                <input type="hidden" value="5" name="shop_columns">
                                <input type="hidden" value="15" name="shop_per_page">
                                <input type="hidden" value="right-sidebar" name="shop_layout">
                            </form>
                            <!-- .form-techmarket-wc-ppp -->
                            <p class="woocommerce-result-count">
                                Showing 1&ndash;15 of 73 results
                            </p>
                            <!-- .woocommerce-result-count -->
                            <nav class="woocommerce-pagination">
                                <ul class="page-numbers">
                                    <li>
                                        <span class="page-numbers current">1</span>
                                    </li>
                                    <li><a href="#" class="page-numbers">2</a></li>
                                    <li><a href="#" class="page-numbers">3</a></li>
                                    <li><a href="#" class="page-numbers">4</a></li>
                                    <li><a href="#" class="page-numbers">5</a></li>
                                    <li><a href="#" class="next page-numbers">→</a></li>
                                </ul>
                                <!-- .page-numbers -->
                            </nav>
                            <!-- .woocommerce-pagination -->
                        </div>
                        <!-- .shop-control-bar-bottom -->
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
            </div>
            <!-- .row -->
        </div>
        <!-- .col-full -->
    </div>
    <!-- #content -->
<?php
require_once "footer.php";
?>