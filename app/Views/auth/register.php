
<?php $this->layout(config('view.layout')); ?>
<?php $this->start('page'); ?>
<div class="col-lg-6">
<div class="login-registration-style-1 registration mt-50" style="margin-left: 48%; background-color: #F8F8FF">
  <h1 class="heading-4 font-weight-500 title" style="text-align: center;">
    Create an Account with
  </h1>
  <div class="login-registration-form pt-10">
  <?php
  $this->insert("auth/registerForm", ['errors'=>$errors??[],'params'=>$params??[]]);
  ?>
  </div>
  <p class="login" style="text-align: center;">Have an account? <a href="/login">Log in</a></p>
</div>
</div>
<?php $this->stop(); ?>
