<!--====== Header Style 1 Part Start ======-->
<section class="header-style-1">
        <div class="header-big">
            <div class="header-items-active">
                <div class="single-header-item bg_cover" style="background-image: url(assets/images/header-1/header-big-1.jpg);">
                </div>
                <div class="single-header-item bg_cover" style="background-image: url(assets/images/header-1/header-big-2.jpg);">    
                </div>
                <div class="single-header-item bg_cover" style="background-image: url(assets/images/header-1/header-big-3.jpg);">
                </div>
            </div>
        </div>
        <div class="header-min">
            <div class="header-min-item product-style-25 bg_cover"
                style="background-image: url(assets/images/header-1/header-min-1.jpg);">
                <div class="product-content">
                    <h4 class="title"><a href="#">Vans Old Skool</a></h4>
                    <a href="javascript:void(0)" class="main-btn primary-btn-border"> <img src="assets/images/icon-svg/cart-5.svg" alt="">$ 100</a>
                </div>
            </div>
            <div class="header-min-item product-style-25 bg_cover"
                style="background-image: url(assets/images/header-1/header-min-2.jpg);">
                <div class="product-content">
                    <h4 class="title"><a href="#">Converse All Star</a></h4>
                    <a href="javascript:void(0)" class="main-btn primary-btn-border"> <img src="assets/images/icon-svg/cart-5.svg" alt="">$ 99</a>
                </div>
            </div>
        </div>
    </section>
    <section class="clients-logo-section pt-20 pb-20">
        <div class="container">
            <div class="row client-logo-active">
                <div class="col-lg-3">
                    <div class="single-logo-wrapper">
                        <img src="assets/images/client-logo/vans.jpg" style="width: 75%;" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-logo-wrapper">
                        <img src="assets/images/client-logo/converse.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-logo-wrapper">
                        <img src="assets/images/client-logo/adidas.jpg" style="width: 75%" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-logo-wrapper">
                        <img src="assets/images/client-logo/nike.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Product 4 Vans Style 7 Part Start ======-->
    <section class="product-wrapper pt-50 pb-50">
        <div class="container">   
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-50">
                        <img src="assets/images/client-logo/vans1.jpg" alt="">
                    </div>
                </div>
            </div>   
            <div class="row">
            <?php
                $items = get_product();
                foreach ($items as $item) : ?>
                <?php if ($item->brand_id == 1) :?>        
                <div class="col-lg-6">
                    <div class="product-style-7 mt-30">
                        <div class="product-image">
                            <?php if ($item->discount != 0) :?>
                                <span class="icon-text text-style-1"><?=$item->discount ?>% off</span>
                            <?php endif ?>
                            <div class="product-active">
                                <div class="product-item active">
                                    <img src="<?=request()->baseUrl() .'/' . $item['image_1'] ?>" alt="product">
                                </div>
                                <div class="product-item">
                                    <img src="<?=request()->baseUrl() .'/' . $item['image_2'] ?>" alt="product">
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <ul class="product-meta">
                                <li>
                                    <a class="add-wishlist" href="javascript:void(0)">
                                        <i class="mdi mdi-heart-outline"></i>
                                        Add to Favorite
                                    </a>
                                </li>
                                <li>
                                    <span><i class="mdi mdi-star"></i> 4.5/5</span>
                                </li>
                            </ul>
                            <h4 class="title"><a href="#"><?=$item->name ?></a></h4>
                            <p>Reference Vans</p>
                            <?php if ($item->discount != 0) :?>
                                <span class="price" style="text-decoration: line-through;">$ <?=$item->price ?></span>
                                <span class="price">$ <?=$item->price* ((100 - $item->discount) / 100)?></span>
                            <?php else : ?>
                                <span class="price">$ <?=$item->price ?></span>
                            <?php endif; ?>
                            <a href="javascript:void(0)" class="main-btn primary-btn">
                                <img src="assets/images/icon-svg/cart-4.svg" alt="">
                                Add to Cart
                            </a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--====== Product 4 Vans Style 7 Part Ends ======-->

    <!--====== Product 1 Converse Style 7 Part Start ======-->
    <section class="product-wrapper pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-50">
                        <img src="assets/images/client-logo/converse1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
                $items = get_product();
                foreach ($items as $item) : ?>
                <?php if ($item->brand_id == 2) :?>        
                <div class="col-lg-6">
                    <div class="product-style-7 mt-30">
                        <div class="product-image">
                            <?php if ($item->discount != 0) :?>
                                <span class="icon-text text-style-1"><?=$item->discount ?>% off</span>
                            <?php endif ?>
                            <div class="product-active">
                                <div class="product-item active">
                                    <img src="<?=request()->baseUrl() .'/' . $item['image_1'] ?>" alt="product">
                                </div>
                                <div class="product-item">
                                    <img src="<?=request()->baseUrl() .'/' . $item['image_2'] ?>" alt="product">
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <ul class="product-meta">
                                <li>
                                    <a class="add-wishlist" href="javascript:void(0)">
                                        <i class="mdi mdi-heart-outline"></i>
                                        Add to Favorite
                                    </a>
                                </li>
                                <li>
                                    <span><i class="mdi mdi-star"></i> 4.5/5</span>
                                </li>
                            </ul>
                            <h4 class="title"><a href="#"><?=$item->name ?></a></h4>
                            <p>Reference Vans</p>
                            <?php if ($item->discount != 0) :?>
                                <span class="price" style="text-decoration: line-through;">$ <?=$item->price ?></span>
                                <span class="price">$ <?=$item->price* ((100 - $item->discount) / 100)?></span>
                            <?php else : ?>
                                <span class="price">$ <?=$item->price ?></span>
                            <?php endif; ?>
                            <a href="javascript:void(0)" class="main-btn primary-btn">
                                <img src="assets/images/icon-svg/cart-4.svg" alt="">
                                Add to Cart
                            </a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--====== Product 1 Converse Style 7 Part Ends ======-->

    <!--====== Product 2 Adidas Style 7 Part Start ======-->
    <section class="product-wrapper pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-50">
                        <img style="width: auto; height:auto" src="assets/images/client-logo/Adidas-Background.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
                $items = get_product();
                foreach ($items as $item) : ?>
                <?php if ($item->brand_id == 3) :?>        
                <div class="col-lg-6">
                    <div class="product-style-7 mt-30">
                        <div class="product-image">
                            <?php if ($item->discount != 0) :?>
                                <span class="icon-text text-style-1"><?=$item->discount ?>% off</span>
                            <?php endif ?>
                            <div class="product-active">
                                <div class="product-item active">
                                    <img src="<?=request()->baseUrl() .'/' . $item['image_1'] ?>" alt="product">
                                </div>
                                <div class="product-item">
                                    <img src="<?=request()->baseUrl() .'/' . $item['image_2'] ?>" alt="product">
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <ul class="product-meta">
                                <li>
                                    <a class="add-wishlist" href="javascript:void(0)">
                                        <i class="mdi mdi-heart-outline"></i>
                                        Add to Favorite
                                    </a>
                                </li>
                                <li>
                                    <span><i class="mdi mdi-star"></i> 4.5/5</span>
                                </li>
                            </ul>
                            <h4 class="title"><a href="#"><?=$item->name ?></a></h4>
                            <p>Reference Vans</p>
                            <?php if ($item->discount != 0) :?>
                                <span class="price" style="text-decoration: line-through;">$ <?=$item->price ?></span>
                                <span class="price">$ <?=$item->price* ((100 - $item->discount) / 100)?></span>
                            <?php else : ?>
                                <span class="price">$ <?=$item->price ?></span>
                            <?php endif; ?>
                            <a href="javascript:void(0)" class="main-btn primary-btn">
                                <img src="assets/images/icon-svg/cart-4.svg" alt="">
                                Add to Cart
                            </a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--====== Product 2 Adidas Style 7 Part Ends ======-->

    <!--====== Product 3 Nike Style 7 Part Start ======-->
    <section class="product-wrapper pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-50">
                        <img src="assets/images/client-logo/Nike-Background.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
                $items = get_product();
                foreach ($items as $item) : ?>
                <?php if ($item->brand_id == 4) :?>        
                <div class="col-lg-6">
                    <div class="product-style-7 mt-30">
                        <div class="product-image">
                            <?php if ($item->discount != 0) :?>
                                <span class="icon-text text-style-1"><?=$item->discount ?>% off</span>
                            <?php endif ?>
                            <div class="product-active">
                                <div class="product-item active">
                                    <img src="<?=request()->baseUrl() .'/' . $item['image_1'] ?>" alt="product">
                                </div>
                                <div class="product-item">
                                    <img src="<?=request()->baseUrl() .'/' . $item['image_2'] ?>" alt="product">
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <ul class="product-meta">
                                <li>
                                    <a class="add-wishlist" href="javascript:void(0)">
                                        <i class="mdi mdi-heart-outline"></i>
                                        Add to Favorite
                                    </a>
                                </li>
                                <li>
                                    <span><i class="mdi mdi-star"></i> 4.5/5</span>
                                </li>
                            </ul>
                            <h4 class="title"><a href="#"><?=$item->name ?></a></h4>
                            <p>Reference Vans</p>
                            <?php if ($item->discount != 0) :?>
                                <span class="price" style="text-decoration: line-through;">$ <?=$item->price ?></span>
                                <span class="price">$ <?=$item->price* ((100 - $item->discount) / 100)?></span>
                            <?php else : ?>
                                <span class="price">$ <?=$item->price ?></span>
                            <?php endif; ?>
                            <a href="javascript:void(0)" class="main-btn primary-btn">
                                <img src="assets/images/icon-svg/cart-4.svg" alt="">
                                Add to Cart
                            </a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--====== Product Style 7 Part Ends ======-->
<section >
<div class="title1">
        <p style="font-size: 25px;">News <strong>Shoes</strong></p>
    </div>
    <div class="news">
        <div class="news-item">
            <a href="#">
                <div class="news-item-img">
                    <img src="assets/images/header-1/anh6.jpg" alt="">
                </div>
                <p class="news-item-p1">CONVESERSE X KEITH HARING - EXPLOSION WITH UNIQUE DESIGN YES 1-0-2</p>
                <p class="news-item-p2">Despite many years of ups and downs in the fashion race with many major sneaker brands, Converse has always kept its own unique features that every believer still loves and believes in. To refresh the designs and give customers the best experience, Converse and Keith Haring have collaborated on this launch.....</p>
            </a>
        </div>
        <div class="news-item">
            <a href="#">
                <div class="news-item-img">
                    <img src="assets/images/header-1/anh7.jpg" alt="">
                </div>
                <p class="news-item-p1">VANS ERA COMFYCUSH - HIDE ALL COMFORT IN THE SHOES..</p>
                <p class="news-item-p2">Finding a pair of sneakers that are dynamic, comfortable but also fashionable to be able to meet today's "shifting" life is not a simple problem....</p>
            </a>
        </div>
        <div class="news-item">
            <a href="#">
                <div class="news-item-img">
                    <img src="assets/images/header-1/anh8.jpg" alt="">
                </div>
                <p class="news-item-p1">VANS X SE BIKES - SUCCESSFUL CHALLENGES WITH RACING SHOES.. </p>
                <p class="news-item-p2">Not only considered a symbol of art skateboarding, Vans shoes are also the pride and feature of many other street adventure sports.....</p>
            </a>
        </div>
        <div class="news-item">
            <a href="#">
                <div class="news-item-img">
                    <img src="assets/images/header-1/anh9.jpg" alt="">
                </div>
                <p class="news-item-p1">CONVERSE SHOES CONVERSE 1970S HIGH KITCHEN FASHION..</p>
                <p class="news-item-p2">Launched after 2013, Chuck 70s is a redesigned shoe line based on the classic All Star version, but Chuck's fashion language is renewed in a trending way, and has its own unique features. than...</p>
            </a>
        </div>
    </div>
    <div class="see-all pt-100">
        <a href="#" class="see-all-button" title="XEM TẤT CẢ">SEE MORE</a>
    </div>
</section>