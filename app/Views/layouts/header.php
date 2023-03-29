<div class="navigation navbar-area">
        <header class="navbar-style-7 position-relative">
            <div class="container">
                <!-- navbar mobile Start -->
                <div class="navbar-mobile d-lg-none">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <!-- navbar cart start -->
                            <div class="navbar-toggle icon-text-btn">
                                <a class="icon-btn primary-icon-text mobile-menu-open-7" href="javascript:void(0)">
                                    <i class="mdi mdi-menu"></i>
                                </a>
                            </div>
                            <!-- navbar cart Ends -->
                        </div>
                        <div class="col-6">
                            <!-- desktop logo Start -->
                            <div class="mobile-logo text-center">
                                <a href="#"><img style="width: 30%;" src="<?= request()->baseUrl(); ?>/assets/images/logo.png" alt="Logo"></a>
                            </div>
                            <!-- desktop logo Ends -->
                        </div>
                        <div class="col-3">
                            <!-- navbar cart start -->
                            <div class="navbar-cart">
                                <a class="icon-btn primary-icon-text icon-text-btn" href="javascript:void(0)">
                                    <img src="<?= request()->baseUrl(); ?>/assets/images/icon-svg/cart-1.svg" alt="Icon">
                                    <span class="icon-text text-style-1">3</span>
                                </a>
                                <div class="navbar-cart-dropdown">
                                    <div class="checkout-style-2">
                                        <div class="checkout-header d-flex justify-content-between">
                                            <h6 class="title">Shopping Cart</h6>
                                        </div>
    
                                        <div class="checkout-table table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="checkout-product">
                                                            <div class="product-cart d-flex">
                                                                <div class="product-thumb">
                                                                    <img src="<?= request()->baseUrl(); ?>/assets/images/product-cart/product-1.jpg"
                                                                        alt="Product">
                                                                </div>
                                                                <div class="product-content media-body">
                                                                    <h5 class="title">
                                                                        <a href="#">Vans Old Skool</a>
                                                                    </h5>
                                                                    <ul>
                                                                        <li><span>Size</span></li>
                                                                        <li><span>40</span></li>
                                                                        <li>
                                                                            <a class="delete" href="javascript:void(0)">
                                                                                <i class="mdi mdi-delete"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="checkout-quantity">
                                                            <div class="product-quantity d-inline-flex">
                                                                <button type="button" id="sub" class="sub">
                                                                    <i class="mdi mdi-minus"></i>
                                                                </button>
                                                                <input type="text" value="1">
                                                                <button type="button" id="add" class="add">
                                                                    <i class="mdi mdi-plus"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td class="checkout-price">
                                                            <p class="price">$99.00</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="checkout-product">
                                                            <div class="product-cart d-flex">
                                                                <div class="product-thumb">
                                                                    <img src="<?= request()->baseUrl(); ?>/assets/images/product-cart/product-2.jpg"
                                                                        alt="Product">
                                                                </div>
                                                                <div class="product-content media-body">
                                                                    <h5 class="title">
                                                                        <a href="#">Converse Chuck 1970S</a>
                                                                    </h5>
                                                                    <ul>
                                                                        <li><span>Size</span></li>
                                                                        <li><span>41</span></li>
                                                                        <li>
                                                                            <a class="delete" href="javascript:void(0)">
                                                                                <i class="mdi mdi-delete"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="checkout-quantity">
                                                            <div class="product-quantity d-inline-flex">
                                                                <button type="button" id="sub" class="sub">
                                                                    <i class="mdi mdi-minus"></i>
                                                                </button>
                                                                <input type="text" value="1">
                                                                <button type="button" id="add" class="add">
                                                                    <i class="mdi mdi-plus"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td class="checkout-price">
                                                            <p class="price">$100.00</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="checkout-product">
                                                            <div class="product-cart d-flex">
                                                                <div class="product-thumb">
                                                                    <img src="<?= request()->baseUrl(); ?>/assets/images/product-cart/product-3.jpg"
                                                                        alt="Product">
                                                                </div>
                                                                <div class="product-content media-body">
                                                                    <h5 class="title">
                                                                        <a href="#">Vans Authentic</a>
                                                                    </h5>
                                                                    <ul>
                                                                        <li><span>Size</span></li>
                                                                        <li><span>36</span></li>
                                                                        <li>
                                                                            <a class="delete" href="javascript:void(0)">
                                                                                <i class="mdi mdi-delete"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="checkout-quantity">
                                                            <div class="product-quantity d-inline-flex">
                                                                <button type="button" id="sub" class="sub">
                                                                    <i class="mdi mdi-minus"></i>
                                                                </button>
                                                                <input type="text" value="1">
                                                                <button type="button" id="add" class="add">
                                                                    <i class="mdi mdi-plus"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td class="checkout-price">
                                                            <p class="price">$68.00</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
    
                                        <div class="checkout-footer">
                                            <div class="checkout-sub-total d-flex justify-content-between">
                                                <p class="value">Subtotal Price:</p>
                                                <p class="price">$237</p>
                                            </div>
                                            <div class="checkout-btn">
                                                <a href="#" class="main-btn primary-btn-border">View Cart</a>
                                                <a href="#" class="main-btn primary-btn">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- navbar cart Ends -->
                        </div>
                    </div>
                    <!-- navbar search start -->
                    <div class="navbar-search mt-15 search-style-5">
                        <div class="search-select">
                            <select>
                                <option value="">All</option>
                                <option value="1">Vans</option>
                                <option value="2">Converse</option>
                                <option value="3">Adidas</option>
                                <option value="4">Nike</option>
                                
                            </select>
                        </div>
                        <form method="GET" action="/search" >
                            <div style="display: flex;">
                                <div class="search-input" >
                                    <input name="search" class="search-input" type="text" placeholder="Search">
                                </div>
                                <div class="search-btn">
                                    <button type="submit" name="submit"><i class="lni lni-search-alt"></i></button>
                                </div>
                            </div>
                        </form> 
                    </div>
                    <!-- navbar search Ends -->
                </div>
                <!-- navbar mobile Start -->
            </div>
    
            <div class="navbar-container navbar-sidebar-7">
                <!-- navbar close  Ends -->
                <div class="navbar-close d-lg-none">
                    <a class="close-mobile-menu-7" href="javascript:void(0)"><i class="mdi mdi-close"></i></a>
                </div>
                <!-- navbar close  Ends -->
    
                <!-- navbar top Start -->
                <div class="navbar-top-wrapper">
                    <div class="container-lg">
                        <div class="navbar-top d-lg-flex justify-content-between">
                            <!-- navbar top left Start -->
                            <div class="navbar-top-left">
                                <ul class="navbar-top-link">
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="mdi mdi-phone-in-talk"></i>
                                            +84932789789
                                        </a>
                                    </li>
                                    
                                    
                                </ul>
                            </div>
                            <!-- navbar top left Ends -->
                            <!-- navbar top right Start -->
                            <div class="navbar-top-right">
                                <ul class="navbar-top-link">
                                    <li>
                                        <select>
                                            <option value="0">$ USD</option>
                                            <option value="1">Đ VND</option>
                                        </select>
                                    </li>
                                    <li>
                                        <select>
                                            <option value="0">English</option>
                                            <option value="1">Vietnamese</option>
                                        </select>
                                    </li>
                                    <?php if (auth()) : ?>
                                <li>
                                    <!-- Profiles User -->
                                    <a href="<?=request()->baseUrl(); ?>/account" >
                                        <i class="lni lni-user"></i> Account
                                    </a>
                                </li>        
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#logoutModal" aria-controls="logoutModal">
                                        <i class="lni lni-power-switch"></i> Sign Out
                                    </a>
                                </li>
                        <?php else : ?>                        
                                <li>
                                    <a href="<?=request()->baseUrl(); ?>/login">Sign In</a>
                                </li>
                                <li>
                                    <a href="/register">Register</a>
                                </li>
                        <?php endif; ?>
                                </ul>
                            </div>
                            <!-- navbar top right Ends -->
                        </div>
                    </div>
                </div>
                <!-- navbar top Ends -->
    
                <!-- main navbar Start -->
                <div class="navbar-wrapper">
                    <div class="container-lg">
                        <nav class="main-navbar d-lg-flex justify-content-between align-items-center">
                            <!-- desktop logo Start -->
                            <div class="desktop-logo d-none d-lg-block">
                                <a href="#"><img style="width: 30%" src="<?= request()->baseUrl(); ?>/assets/images/logo.png" alt="Logo"></a>
                            </div>
                            <!-- desktop logo Ends -->
                            <!-- navbar menu Start -->
                            <div class="navbar-menu">
                                <ul class="main-menu">
                                    <li class="position-static menu-item-has-children">
                                        <a href="/home">Home</a>
                                    </li>
                                    <li><a href="#">Vans</a></li>
                                    <li><a href="#">Converse</a></li>
                                    <li><a href="#">Adidas</a></li>
                                    <li><a href="#">Nike</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                            <!-- navbar menu Ends -->
                            <div class="navbar-search-cart d-none d-lg-flex">
                                <!-- navbar search start -->
                                <div class="navbar-search search-style-5">
                                    <div class="search-select">
                                        <select>
                                            <option value="">All</option>
                                            <option value="1">Vans</option>
                                            <option value="2">Adidas</option>
                                            <option value="3">Converse</option>
                                            <option value="4">Nike</option>
                                        </select>
                                    </div>
                                    <form method="GET" action="/search" >
                                        <div style="display: flex;">
                                        <div class="search-input" >
                                            <input name="search" class="search-input" type="text" placeholder="Search">
                                        </div>
                                    <div class="search-btn">
                                        <button type="submit" name="submit"><i class="lni lni-search-alt"></i></button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <!-- navbar search Ends -->
                                <!-- navbar cart start -->
                                <div class="navbar-cart">
                                    <a class="icon-btn primary-icon-text icon-text-btn" href="javascript:void(0)">
                                        <img src="<?= request()->baseUrl(); ?>/assets/images/icon-svg/cart-1.svg" alt="Icon">
                                        <span class="icon-text text-style-1">3</span>
                                    </a>
    
                                    <div class="navbar-cart-dropdown">
                                        <div class="checkout-style-2">
                                            <div class="checkout-header d-flex justify-content-between">
                                                <h6 class="title">Shopping Cart</h6>
                                            </div>
    
                                            <div class="checkout-table">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="checkout-product">
                                                                <div class="product-cart d-flex">
                                                                    <div class="product-thumb">
                                                                        <img src="<?= request()->baseUrl(); ?>/assets/images/product-cart/product-1.jpg"
                                                                            alt="Product">
                                                                    </div>
                                                                    <div class="product-content media-body">
                                                                        <h5 class="title">
                                                                            <a href="#">Vans Old Skool</a>
                                                                        </h5>
                                                                        <ul>
                                                                            <li><span>Size</span></li>
                                                                            <li><span>40</span></li>
                                                                            <li>
                                                                                <a class="delete" href="javascript:void(0)">
                                                                                    <i class="mdi mdi-delete"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="checkout-quantity">
                                                                <div class="product-quantity d-inline-flex">
                                                                    <button type="button" id="sub" class="sub">
                                                                        <i class="mdi mdi-minus"></i>
                                                                    </button>
                                                                    <input type="text" value="1">
                                                                    <button type="button" id="add" class="add">
                                                                        <i class="mdi mdi-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td class="checkout-price">
                                                                <p class="price">$99.00</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="checkout-product">
                                                                <div class="product-cart d-flex">
                                                                    <div class="product-thumb">
                                                                        <img src="<?= request()->baseUrl(); ?>/assets/images/product-cart/product-2.jpg"
                                                                            alt="Product">
                                                                    </div>
                                                                    <div class="product-content media-body">
                                                                        <h5 class="title">
                                                                            <a href="#">Converse Chuck 1970S</a>
                                                                        </h5>
                                                                        <ul>
                                                                            <li><span>Size</span></li>
                                                                            <li><span>41</span></li>
                                                                            <li>
                                                                                <a class="delete" href="javascript:void(0)">
                                                                                    <i class="mdi mdi-delete"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="checkout-quantity">
                                                                <div class="product-quantity d-inline-flex">
                                                                    <button type="button" id="sub" class="sub">
                                                                        <i class="mdi mdi-minus"></i>
                                                                    </button>
                                                                    <input type="text" value="1">
                                                                    <button type="button" id="add" class="add">
                                                                        <i class="mdi mdi-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td class="checkout-price">
                                                                <p class="price">$100.00</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="checkout-product">
                                                                <div class="product-cart d-flex">
                                                                    <div class="product-thumb">
                                                                        <img src="<?= request()->baseUrl(); ?>/assets/images/product-cart/product-3.jpg"
                                                                            alt="Product">
                                                                    </div>
                                                                    <div class="product-content media-body">
                                                                        <h5 class="title">
                                                                            <a href="#">Vans Authentic</a>
                                                                        </h5>
                                                                        <ul>
                                                                            <li><span>Size</span></li>
                                                                            <li><span>36</span></li>
                                                                            <li>
                                                                                <a class="delete" href="javascript:void(0)">
                                                                                    <i class="mdi mdi-delete"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="checkout-quantity">
                                                                <div class="product-quantity d-inline-flex">
                                                                    <button type="button" id="sub" class="sub">
                                                                        <i class="mdi mdi-minus"></i>
                                                                    </button>
                                                                    <input type="text" value="1">
                                                                    <button type="button" id="add" class="add">
                                                                        <i class="mdi mdi-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td class="checkout-price">
                                                                <p class="price">$68.00</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
    
                                            <div class="checkout-footer">
                                                <div class="checkout-sub-total d-flex justify-content-between">
                                                    <p class="value">Subtotal Price:</p>
                                                    <p class="price">$237</p>
                                                </div>
                                                <div class="checkout-btn">
                                                    <a href="#" class="main-btn primary-btn-border">View
                                                        Cart</a>
                                                    <a href="#" class="main-btn primary-btn">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- navbar cart Ends -->
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- main navbar Ends -->
            </div>
            <div class="overlay-7"></div>
        </header>
    </div>