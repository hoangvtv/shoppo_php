<?php $__env->startSection('title'); ?>
    <?php echo e(__('Login')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <!-- Page Title-->
<div class="page-title">
    <div class="container">
      <div class="row">
          <div class="col-lg-12">
            <ul class="breadcrumbs">
                <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a> </li>
                <li class="separator"></li>
                <li><?php echo e(__('Login/Register')); ?></li>
              </ul>
          </div>
      </div>
    </div>
  </div>
  <!-- Page Content-->

  <section class="h-100">
		<div class="container h-100 padding-bottom-3x">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>             
                  <div class="zmdi zmdi-facebook"></div>
                  <div class="twitter text-center mr-3"><div class="fa fa-twitter"></div></div>
							<form class="needs-validation" novalidate="" method="post" action="<?php echo e(route('user.login.submit')); ?>">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<div class="form-group input-group">
                  <input class="form-control" type="email" name="login_email" placeholder="<?php echo e(__('Email')); ?>" value="<?php echo e(old('login_email')); ?>"><span class="input-group-addon"><i class="icon-mail"></i></span>
                </div>
                <?php $__errorArgs = ['login_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <p class="text-danger"><?php echo e($message); ?></p>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
										<a href="<?php echo e(route('user.forgot')); ?>" class="float-end">
											Forgot Password?
										</a>
									</div>
									<div class="form-group input-group">
                  <input class="form-control" type="password" name="login_password" placeholder="<?php echo e(__('Password')); ?>" ><span class="input-group-addon"><i class="icon-lock"></i></span>
                  </div>
                  <?php $__errorArgs = ['login_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p class="text-danger"><?php echo e($message); ?></p>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div>


                  <?php if($setting->recaptcha == 1): ?>
                    <div class="col-lg-12 mb-4">
                        <?php echo NoCaptcha::renderJs(); ?>

                        <?php echo NoCaptcha::display(); ?>

                        <?php if($errors->has('g-recaptcha-response')): ?>
                        <?php
                            $errmsg = $errors->first('g-recaptcha-response');
                        ?>
                        <p class="text-danger mb-0"><?php echo e(__("$errmsg")); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

								<div class="d-flex align-items-center">
									<div class="form-check">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="remember_me">
                      <label class="custom-control-label" for="remember_me"><?php echo e(__('Remember me')); ?></label>
                    </div>
									</div>
									<button type="submit" class="btn btn-primary ms-auto"><span><?php echo e(__('Login')); ?></span>
									
									</button>
								</div>
                
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Don't have an account? <a href="<?php echo e(route('user.register')); ?>" class="text-dark"><?php echo e(__('Register')); ?></a>
							</div>
						</div>
            <div class="card p-3 text-center">
              <h6 class="form-text-color blue"> <?php echo e(__('Or Login with')); ?></h6>
              <div class="d-flex justify-content-center mt-1">
                  <?php if($setting->facebook_check == 1): ?>
                  <a class="facebook-btn mr-2" href="<?php echo e(route('social.provider','facebook')); ?>"><?php echo e(__('Facebook')); ?></a>
                  <?php endif; ?>
                  <?php if($setting->google_check == 1): ?>
                    <a class="google-btn" href="<?php echo e(route('social.provider','google')); ?>"> <?php echo e(__('Google')); ?></a>
                    <?php endif; ?>

              </div>
					</div>
				</div>
			</div>
		</div>
	</section>
  
  <!-- Site Footer-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\shopoo\core\resources\views/user/auth/login.blade.php ENDPATH**/ ?>