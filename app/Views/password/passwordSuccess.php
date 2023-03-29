<?php $this->layout(config('view.layout')); ?>
<?php $this->start('page'); ?>
<div class="account-login section mt-30">   
    <div class="container"> 
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                <div class="alert alert-success">
                    <h3 class="text-danger">
                        Change password successfully 
                    </h3>
                    <p><?=$messages['success'] ?></p>
                    <p>Please <a href="/home">click here</a> to continue</p>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php $this->stop(); ?>