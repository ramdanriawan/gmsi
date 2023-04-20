<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row mt-3">
                <?php echo $__env->make("layouts.dashboard", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bikinaplikasi\project\setup_server_default\sites\api-admin-test-gmsi.bikinaplikasi.dev\resources\views/dashboard.blade.php ENDPATH**/ ?>