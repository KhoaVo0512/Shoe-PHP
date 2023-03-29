<?php $this->layout(config('view.layout')); ?>
<?php $this->start('page'); ?>
<div class="breadcrumbs" style="background-color: #f9f9f9; padding: 20px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Login</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li>
                        <a href="/home"><i class="lni lni-home"></i>Home</a>
                    </li>
                    <li>
                      <i class="lni lni-chevron-right"></i>Login
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div style="margin-left: 33%;" >
          <div class="col-lg-6">
            <div class="login-registration-style-2 mt-50 " style="background-color: #f9f9f9;">
              <h1 class="heading-4 font-weight-500 title">Login</h1>
              <div class="login-registration-form pt-10">
                <form action="/login" method="POST">
                <?php if (!empty($errors)) : ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php
                                    foreach ($errors as $err) {
                                        echo "<li>$err</li>";
                                    }
                                    ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                  <div class="single-form form-default form-border">
                    <label for="username">Username</label>
                    <div class="form-input">
                      <input type="text" name="username" id="username" require placeholder="username" />
                      <i class="mdi mdi-account-circle"></i>
                    </div>
                  </div>
                  <div class="single-form form-default form-border">
                    <label>Choose Password</label>
                    <div class="form-input">
                      <input id="password" name="password" require type="password" placeholder="password" />
                      <i class="mdi mdi-lock"></i>
                      <span
                        toggle="#password-5"
                        class="mdi mdi-eye-outline toggle-password"
                      ></span>
                    </div>
                  </div>
                  <div
                    class="login-checkbox-forget d-sm-flex justify-content-between align-items-center">
                    <div class="single-checkbox checkbox-style-3">
                      <input type="checkbox" id="remember_me" name="remember_me" value="remember_password" />
                      <label for="remember_me"><span></span> </label>
                      <p>Remember Me</p>
                    </div>
                    <a class="forget" href="/forget">Forget Password?</a>
                  </div>
                  <div class="single-form">
                    <button class="main-btn primary-btn" type="submit">Sign in</button>
                  </div>
                </form>
              </div>
              <div class="d-sm-flex justify-content-between align-items-center">
                <p class="login">
                  Don’t have an account? <a href="/register">Sign up</a>
                </p>

                <ul>
                  <li><p class="account">Or</p></li>
                  <li>
                    <a href="#0" class="facebook-login-registration"
                      ><i class="lni lni-facebook-original"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#0" class="google-login-registration"
                      ><img src="assets/images/google-logo.svg" alt=""
                    /></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
</div>
<?php $this->stop(); ?>