<form action="/register" method="POST" id="form-register" novalidate >
                  <div class="single-form form-default form-border">
                    <label>Username</label>
                    <div class="form-input">
                      <input class="<?= isset($errors['username'])?'is-invalid':'' ?>"
                      type="username" id="reg-user-name" name="username"
                      value="<?= $params['username']??null ?>" require placeholder="Username" />
                      <i class="mdi mdi-account"></i>
                      <div class="invalid-feedback">
                      <?= $errors['username']?? null;   ?>
                    </div>
                    </div>
                  </div>
                  <div class="single-form form-default form-border">
                    <label>Choose Password</label>
                    <div class="form-input">
                      <input class="form-control <?= isset($errors['password'])?'is-invalid':'' ?>"
                      type="password"
                      id="reg-pass"
                      value="<?= $params['password']??null ?>"
                      name="password"
                      placeholder="Password"
                      required/>
                      <i class="mdi mdi-lock"></i>
                      <span toggle="#password-3" class="mdi mdi-eye-outline toggle-password"></span>
                      <div class="invalid-feedback">
                        <?= $errors['password']?? null;   ?>
                      </div>
                    </div>
                  </div>
                  <div class="single-form form-default form-border">
                    <label>Confirm Password</label>
                    <div class="form-input">
                      <input class="form-control <?= isset($errors['confirm_password'])?'is-invalid':'' ?>"
                      type="password"
                      id="reg-pass-confirm"
                      value="<?= $params['confirm_password']??null ?>"
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
                  <div class="single-form form-default form-border">
                    <label>Email Address</label>
                    <div class="form-input">
                      <input class="<?= isset($errors['email'])?'is-invalid':'' ?>"
                      type="email"
                      id="reg-email"
                      name="email"
                      placeholder="user123@gmail.com"
                      value="<?= $params['email']??null ?>"
                      required />
                      <i class="mdi mdi-email"></i>
                      <div class="invalid-feedback">
                        <?= $errors['email']?? null;   ?>
                      </div>
                    </div>
                  </div>
                  <div style="margin-left: 31%;" class="single-checkbox checkbox-style-3">
                  <input type="checkbox" id="checker" name="checker"
                    class="<?= isset($errors['checker'])?'is-invalid':'' ?>"/>
                    <label for="checker"><span></span> </label>
                    <p>I accept the Terrms of Use.</p>
                    <div class="invalid-feedback" >
                        <?= $errors['checker']?? null;   ?>
                      </div>
                  </div>
                  <div class="single-form">
                    <button class="main-btn primary-btn" style="width: 100%;" type="submit">Sign up</button>
                  </div>
</form>