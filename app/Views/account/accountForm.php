<?php $this->layout(config('view.layout')); ?>
<?php $this->start('page'); ?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <form enctype="multipart/form-data" class="row" method="post" action="/account" id="form-register" novalidate>
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-1 py-1">
                <img class="rounded-circle mt-5" width="150px"   
                <?php
                if ($param['avatar_status']) :?>
                src="<?=request()->baseUrl() .'/' . $param['avatar'] ?>"
                <?php else : ?>
                src="<?= request()->baseUrl() . DIRECTORY_SEPARATOR . "assets/images/icon.jpg" ?>"
                <?php endif; ?>
                >              
                <span class="font-weight-bold"><?=$param['full_name']??null ?></span> <!--Sua cho nay lai -->
                <div class="form-check">
                <input type="checkbox" name="avatar_status" value="avatar_status" class="form-check-input width-auto" id="remember_me" />
                    <label class="form-check-label" for="avatar_status">Avatar Status</label>
                </div>
            </div>
            <div class="d-flex flex-row align-items-center mt-2">
                    <div class="mt-1 ml-70 ">
                        <label class="btn btn-outline-primary" for="my-file-selector">
                        <input id="my-file-selector" name="avatar" type="file" style="display:none" 
                        onchange="$('#upload-file-info').text(this.files[0].name)">
                        Upload avatar
                        </label>
                        <span style=" word-break: break-all;" id="upload-file-info"></span>
                    </div>
            </div>   
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
               
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label for="full_name" >Full Name</label>
                        <input
                            class="form-control <?= isset($errors['full_name']) ? ' is-invalid' : '' ?>"
                            type="text" id="" name="full_name" placeholder="Full Name"
                            value="<?= $param['full_name']??null ?>"
                            required
                        />
                        <div class="invalid-feedback">
                            <?= $errors['full_name']?? null;   ?>
                        </div>
                    </div>
                    <div class="col-md-12 mt-10">
                        <label for="phone">Phone </label>
                        <input
                            class="form-control <?= isset($errors['phone']) ? ' is-invalid' : '' ?>"
                            type="text"
                            id=""
                            name="phone"
                            placeholder="Your Phone"
                            value="<?= $param['phone']??null ?>"
                            required
                        />
                        <div class="invalid-feedback"><?= $errors['phone']?? null;   ?></div>
                    </div>
                    <div class="col-md-12 mt-10">
                        <label for="location">Location </label>
                        <input
                            class="form-control <?= isset($errors['location']) ? ' is-invalid' : '' ?>"
                            type="text"
                            id=""
                            name="location"
                            placeholder="Location"
                            value="<?= $param['location']??null ?>"
                            required
                        />
                        <div class="invalid-feedback"><?= $errors['location']?? null;   ?></div>
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
                <?php if(auth()['role'] != 0) :  ?>
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
                <?php endif; ?>
            </div>
        </div>
        </form>
    </div>
</div>
 <?php $this->stop(); ?>