<?php $this->layout(config('view.layout')); ?>
<?php $this->start('page'); ?>
<section class="product-wrapper pt-50 pb-50">
        <div class="container">   
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-50">
                        <img src="assets/images/client-logo/search.jpg" alt="">
                    </div>
                </div>
            </div>   
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-50">
                        <h1 class="heading-1 font-weight-700 text-center">Search Items <?=$_GET['search'] ?></h1>
                    </div>
                </div>
                <?php
                foreach ($find as $item) : ?>   
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
                <?php endforeach; ?>
                <?php if(count($find) == 0) : ?>
                    <h1 class="heading-1 font-weight-700 text-center">product is not available!!</h1>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php $this->stop(); ?>