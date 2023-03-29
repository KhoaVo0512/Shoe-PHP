<?php

use App\Models\Brand;

$this->layout(config('view.layout')); ?>
<?php $this->start('page'); ?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <form enctype="multipart/form-data" class="row" method="post" action="/admin/product" id="form-register" novalidate>
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column py-5">             
                <div class="form-check">
                <h4 class="" >Upload image</h4>
                </div>
            </div>
            <div class="d-flex flex-row align-items-center mt-2">
                    <div class="mt-1">
                        <label class="btn btn-outline-primary" for="my-file-selector">
                        <input id="my-file-selector" name="image_1" type="file" style="display:none" 
                        onchange="$('#upload-file-info').text(this.files[0].name)">
                        Upload image 1
                        </label>
                        <span style=" word-break: break-all;" id="upload-file-info"></span>
                        <div class="invalid-feedback">
                            <?= $errors['image_1']?? null;   ?>
                        </div>
                    </div>
            </div>
            <div class="d-flex flex-row align-items-center mt-2">
                    <div class="mt-1 ">
                        <label class="btn btn-outline-primary" for="my-file-selector_2">
                        <input id="my-file-selector_2" name="image_2" type="file" style="display:none" 
                        onchange="$('#upload-file-info_2').text(this.files[0].name)">
                        Upload image 2
                        </label>
                        <span style=" word-break: break-all;" id="upload-file-info_2"></span>
                        <div class="invalid-feedback">
                            <?= $errors['image_2']?? null;   ?>
                        </div>
                    </div>
            </div>    
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right" >Insert Product</h4>
                </div>
               
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label for="name" >Product Name</label>
                        <input
                            class="form-control <?= isset($errors['name']) ? ' is-invalid' : '' ?>"
                            type="text" id="" name="name" placeholder="Product Name"
                            value="<?= $param['name']??null ?>"
                            required
                        />
                        <div class="invalid-feedback">
                            <?= $errors['name']?? null;   ?>
                        </div>
                    </div>
                    <div class="col-md-12 mt-10">
                        <label for="price">Pice </label>
                        <input
                            class="form-control <?= isset($errors['price']) ? ' is-invalid' : '' ?>"
                            type="text"
                            id=""
                            name="price"
                            placeholder="Product Price"
                            value="<?= $param['price']??null ?>"
                            required
                        />
                        <div class="invalid-feedback"><?= $errors['price']?? null;   ?></div>
                    </div>
                    <div class="col-md-12 mt-10">
                        <label for="price">Discount (%) </label>
                        <input
                            class="form-control <?= isset($errors['discount']) ? ' is-invalid' : '' ?>"
                            type="text"
                            id=""
                            name="discount"
                            placeholder="Product Discount"
                            value="<?= $param['discount']??null ?>"
                            required
                        />
                        <div class="invalid-feedback"><?= $errors['discount']?? null;   ?></div>
                    </div>      
                    <div class="col-md-12 mt-10">
                    <label for="brand">Brand </label>
                    <select name="brand_id" id="brand_id" class="form-select" aria-label="Default select example">
                                <option selected                               
                                    value="<?=$param['brand_id']?? null ?>"                       
                                >
                                <?php if (isset($param['brand_id'])) : ?>
                                    <?php $brand=get_brand(); ?>
                                    <?php foreach ($brand as $brands) : ?>
                                        <?php if(($brands->id) == $param['brand_id'] ) : ?>
                                        <?= $brands->id . ' - ' .  $brands->name_brand ?>
                                        <?php endif ?>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                Select your Brands 
                                <?php endif; ?>                         
                                </option>
                            
                                <?php $brand=get_brand(); ?>
                                    <?php foreach ($brand as $brands) : ?>
                                    <?php if ($brands->id != $param['brand_id']) : ?>
                                        <option value="<?= $brands->id ?>"><?= $brands->id . ' - ' .  $brands->name_brand ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                    </select>
                        <div class="invalid-feedback"><?= $errors['brand_id']?? null;   ?></div>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" name="submit" type="submit">Save Profile</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="col-md-12 ">
                    <div class="product-image ml-60 " style="border-style:groove; border-color:blue">
                        <a href="/account/password"><img style="width: 20%; display: block; margin-left: auto; margin-right: auto;" src="<?=request()->baseUrl(); ?>/assets/images/lock.jpg"></a>
                        <h4 class="title" style="text-align: center;"><a href="/account/password">Change Password </a></h4>
                    </div>
                </div>
                <div class="col-md-12 mt-50">
                    <div class="product-image ml-60 " style="border-style:groove; border-color:blue">
                        <a href="/admin/product"><img style="width: 20%; display: block; margin-left: auto; margin-right: auto;" src="<?=request()->baseUrl(); ?>/assets/images/product.png"></a>
                        <h4 class="title"style="text-align: center;"><a href="/admin/product">Insert Product </a></h4>
                    </div>
                </div>
                <div class="col-md-12 mt-50">
                    <div class="product-image ml-60 " style="border-style:groove; border-color:blue">
                        <a href="/admin/product_list"><img style="width: 20%; display: block; margin-left: auto; margin-right: auto;" src="<?=request()->baseUrl(); ?>/assets/images/product.png"></a>
                        <h4 class="title"style="text-align: center;"><a href="/admin/product_list">Product List</a></h4>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
    <?php $this->stop(); ?>