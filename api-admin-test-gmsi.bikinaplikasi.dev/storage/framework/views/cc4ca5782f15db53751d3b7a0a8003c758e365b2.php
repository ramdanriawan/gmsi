<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">Activity Groups</h4>
                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="javaScript:void();">Halaman</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Activity Groups</li>
                    </ol>
                </div>
            </div>
            <!-- End Breadcrumb-->
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <div class="card px-1">
                            <div class="card-body">
                                <?php if(session()->has("error")): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo e(session()->get("error")); ?>

                                    </div>
                                <?php elseif(session()->has("success")): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo e(session()->get("success")); ?>

                                    </div>
                                <?php elseif(session()->has("warning")): ?>
                                    <div class="alert alert-warning" role="alert">
                                        <?php echo e(session()->get("warning")); ?>

                                    </div>
                                <?php endif; ?>

                                <form class="form-horizontal form-material" action="<?php echo e(url('/activity-groups')); ?>"
                                      method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>

                                    <?php echo $__env->make('activity-groups.form', ['formMode' => 'create'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bikinaplikasi\project\setup_server_default\sites\api-admin-test-gmsi.bikinaplikasi.dev\resources\views/activity-groups/create.blade.php ENDPATH**/ ?>