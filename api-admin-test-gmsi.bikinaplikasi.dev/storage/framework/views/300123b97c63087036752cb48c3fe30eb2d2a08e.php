<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title"><?php echo e(ucwords("activity groups")); ?></h4>
                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="javaScript:void();">Halaman</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e(ucwords("activity groups")); ?></li>
                    </ol>
                </div>
            </div>
            <!-- End Breadcrumb-->
            <div class="row">
                <div class="col-lg-12">
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

                                <div class="table-stats order-table ov-h table-responsive">

                                    <table class="table" id='dataTable'>
                                        <thead>
                                        <tr>
                                            <th width=3>No.</th>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $activity_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <th><?php echo e($loop->iteration); ?>.</th>
                                                <th><?php echo e($item->id); ?></th>
                                                <td><?php echo e($item->title); ?></td>
                                                <td><?php echo e($item->email); ?></td>

                                                <td class="text-center">
                                                    <a class="label label-primary"
                                                       href="<?php echo e(url('/activity-groups/' . $item->id . '/edit')); ?>">Edit</a>

                                                    <form action="<?php echo e(url('/activity-groups' . '/' . $item->id)); ?>"
                                                          method='post' style='display: inline;'
                                                          onsubmit="return confirm('Yakin akan menghapus data ini?')">
                                                        <?php echo method_field('DELETE'); ?>
                                                        <?php echo csrf_field(); ?>
                                                        <label class="label label-danger" href=""
                                                               for='btnSubmit-<?php echo e($item->id); ?>'
                                                               style='cursor: pointer;'>Hapus</label>
                                                        <button type="submit" id='btnSubmit-<?php echo e($item->id); ?>'
                                                                style="display: none;"></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const locationHrefHapusSemua = "<?php echo e(url('activity-groups/hapus_semua')); ?>";
        const locationHrefAktifkanSemua = "<?php echo e(url('activity-groups/aktifkan_semua')); ?>";
        const locationHrefCreate = "<?php echo e(url('activity-groups/create')); ?>";
        var columnOrders = [0];
        var urlSearch = "<?php echo e(url('activity-groups')); ?>";
        var q = "<?php echo e($_GET['q'] ?? ''); ?>";
        var placeholder = "Filter...";
        var tampilkan_buttons = true;
        var button_manual = true;
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bikinaplikasi\project\setup_server_default\sites\api-admin-test-gmsi.bikinaplikasi.dev\resources\views/activity-groups/index.blade.php ENDPATH**/ ?>