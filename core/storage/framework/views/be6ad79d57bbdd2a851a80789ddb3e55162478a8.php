
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

  <!-- <section class="h-300">
		<div class="container h-300 padding-bottom-3x">
			<div class="row justify-content-sm-center h-300">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4"><?php echo e(__('Register')); ?></h1>
							<form class="needs-validation" novalidate="" method="post" action="<?php echo e(route('user.login.submit')); ?>">
                <?php echo csrf_field(); ?>
                <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-fn"><?php echo e(__('First Name')); ?></label>
                  <input class="form-control" type="text" name="first_name" placeholder="<?php echo e(__('First Name')); ?>" id="reg-fn" value="<?php echo e(old('first_name')); ?>">
                <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger"><?php echo e($message); ?></p>
                <?php endif; ?>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-ln"><?php echo e(__('Last Name')); ?></label>
                  <input class="form-control" type="text" name="last_name" placeholder="<?php echo e(__('Last Name')); ?>" id="reg-ln" value="<?php echo e(old('last_name')); ?>">
                  <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger"><?php echo e($message); ?></p>
                <?php endif; ?>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-email"><?php echo e(__('E-mail Address')); ?></label>
                  <input class="form-control" type="email" name="email" placeholder="<?php echo e(__('E-mail Address')); ?>" id="reg-email" value="<?php echo e(old('email')); ?>">
                  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <p class="text-danger"><?php echo e($message); ?></p>
                  <?php endif; ?>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-phone"><?php echo e(__('Phone Number')); ?></label>
                  <input class="form-control" name="phone" type="text" placeholder="<?php echo e(__('Phone Number')); ?>" id="reg-phone" value="<?php echo e(old('phone')); ?>">
                  <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <p class="text-danger"><?php echo e($message); ?></p>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-pass"><?php echo e(__('Password')); ?></label>
                  <input class="form-control" type="password" name="password" placeholder="<?php echo e(__('Password')); ?>" id="reg-pass">
                  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <p class="text-danger"><?php echo e($message); ?></p>
                  <?php endif; ?>
                </div>

              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-pass-confirm"><?php echo e(__('Confirm Password')); ?></label>
                  <input class="form-control" type="password" name="password_confirmation" placeholder="<?php echo e(__('Confirm Password')); ?>" id="reg-pass-confirm">
                </div>
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

              <div class="col-12 text-center">
                <button class="btn btn-primary margin-bottom-none" type="submit"><span><?php echo e(__('Register')); ?></span></button>
              </div>
                
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

  <div class="container padding-bottom-3x mb-1">
  <div class="row  justify-content-sm-center" >
          <div class="col-md-6">
            <div class="card register-area">
                <div class="card-body ">
                    <h4 class="margin-bottom-1x text-center"><?php echo e(__('Register')); ?></h4>
            <form class="row" action="<?php echo e(route('user.register.submit')); ?>" method="POST">
                <?php echo csrf_field(); ?>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-fn"><?php echo e(__('First Name')); ?></label>
                  <input class="form-control" type="text" name="first_name" placeholder="<?php echo e(__('First Name')); ?>" id="reg-fn" value="<?php echo e(old('first_name')); ?>">
                <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger"><?php echo e($message); ?></p>
                <?php endif; ?>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-ln"><?php echo e(__('Last Name')); ?></label>
                  <input class="form-control" type="text" name="last_name" placeholder="<?php echo e(__('Last Name')); ?>" id="reg-ln" value="<?php echo e(old('last_name')); ?>">
                  <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger"><?php echo e($message); ?></p>
                <?php endif; ?>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-email"><?php echo e(__('E-mail Address')); ?></label>
                  <input class="form-control" type="email" name="email" placeholder="<?php echo e(__('E-mail Address')); ?>" id="reg-email" value="<?php echo e(old('email')); ?>">
                  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <p class="text-danger"><?php echo e($message); ?></p>
                  <?php endif; ?>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-phone"><?php echo e(__('Phone Number')); ?></label>
                  <input class="form-control" name="phone" type="text" placeholder="<?php echo e(__('Phone Number')); ?>" id="reg-phone" value="<?php echo e(old('phone')); ?>">
                  <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <p class="text-danger"><?php echo e($message); ?></p>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-pass"><?php echo e(__('Password')); ?></label>
                  <input class="form-control" type="password" name="password" placeholder="<?php echo e(__('Password')); ?>" id="reg-pass">
                  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <p class="text-danger"><?php echo e($message); ?></p>
                  <?php endif; ?>
                </div>

              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-pass-confirm"><?php echo e(__('Confirm Password')); ?></label>
                  <input class="form-control" type="password" name="password_confirmation" placeholder="<?php echo e(__('Confirm Password')); ?>" id="reg-pass-confirm">
                </div>
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

              <div class="col-12 text-center">
                <button class="btn btn-primary margin-bottom-none" type="submit"><span><?php echo e(__('Register')); ?></span></button>
              </div>
            </form>
                </div>
            </div>
          </div>
        </div>
  </div>
  <!-- Site Footer-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\shopoo\core\resources\views/user/auth/register.blade.php ENDPATH**/ ?>