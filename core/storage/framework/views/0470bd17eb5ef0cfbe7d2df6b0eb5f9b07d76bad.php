<?php $__env->startSection('content'); ?>


        <div class="wrapper wrapper-login">
            <div class="container container-login animated fadeIn">
                <h3 class="text-center"><?php echo e(__('Change Password')); ?></h3>
                <div class="login-form">

                    <form action="<?php echo e(route('user.change.password')); ?>" method="POST">

                        <?php echo csrf_field(); ?>

                        <?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



                        <div class="form-group form-floating-label">
                            <input id="new_password" name="new_password" type="password" class="form-control input-border-bottom" >
                            <label for="new_password" class="placeholder"><?php echo e(__('New Password')); ?></label>
                            
                        </div>

                        <div class="form-group form-floating-label">
                            <input id="renew_password" name="renew_password" type="password" class="form-control input-border-bottom" >
                            <label for="renew_password" class="placeholder"><?php echo e(__('Re-Type New Password')); ?></label>
                            
                        </div>

                        <input type="hidden" name="file_token" value="<?php echo e($token); ?>">

                        <div class="form-action mb-3">
                            <button type="submit" class="btn btn-secondary  btn-login"><?php echo e(__('Change Password')); ?></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.back-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\shopoo\core\resources\views/user/auth/changepass.blade.php ENDPATH**/ ?>