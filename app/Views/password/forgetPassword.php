<?php $this->layout(config('view.layout')); ?>
<?php $this->start('page'); ?>
<div class="col-lg-6">
<div class="login-registration-style-1 registration mt-50" style="margin-left: 48%; background-color: #F8F8FF">
  <h1 class="heading-4 font-weight-500 title" style="text-align: center;">
    Find your account
  </h1>
  <div class="login-registration-form pt-10">
  <form action="/forget" method="POST" id="form-register" novalidate >
                  <div class="single-form form-default form-border">
                    <label>Username</label>
                    <div class="form-input">
                      <input
                      type="username" id="reg-user-name" name="username"
                      value="<?= $params['username']??null ?>" require placeholder="Username" />
                      <i class="mdi mdi-account"></i>
                    </div>
                  </div>
                  <div class="single-form form-default form-border">
                    <label>Email Address</label>
                    <div class="form-input">
                      <input 
                      type="email"
                      id="reg-email"
                      name="email"
                      placeholder="user123@gmail.com"
                      value="<?= $params['email']??null ?>"
                      required />
                      <i class="mdi mdi-email"></i>
                      <div class="invalid-feedback">
                      </div>
                    </div>
                  </div>
                  <div class="single-form form-default form-border">
                    <label>New Password</label>
                    <div class="form-input">
                      <input class="form-control <?= isset($errors['new_password'])?'is-invalid':'' ?>"
                      type="password"
                      id="new_password"
                      name="new_password"
                      placeholder="New Password"
                      required/>
                      <i class="mdi mdi-lock"></i>
                      <span toggle="#password-3" class="mdi mdi-eye-outline toggle-password"></span>
                      <div class="invalid-feedback">
                        <?= $errors['new_password']?? null;   ?>
                      </div>
                    </div>
                  </div>
                  <div class="single-form form-default form-border">
                    <label>Confirm Password</label>
                    <div class="form-input">
                      <input class="form-control <?= isset($errors['confirm_password'])?'is-invalid':'' ?>"
                      type="password"
                      id="reg-pass-confirm"
                      name="confirm_password"
                      placeholder="Confirm Password"
                      required/>
                      <i class="mdi mdi-lock"></i>
                      <span toggle="#password-3" class="mdi mdi-eye-outline toggle-password"></span>
                      <div class="invalid-feedback">
                        <?= $errors['confirm_password']?? null;   ?>
                      </div>
                    </div>
                  </div>
                  <div class="single-form">
                    <button class="main-btn primary-btn" style="width: 100%;" type="submit">Save</button>
                  </div>
	</form>
  </div>
  <p class="login" style="text-align: center;">Have an account? <a href="/login">Log in</a></p>
</div>
</div>
<?php $this->stop(); ?>