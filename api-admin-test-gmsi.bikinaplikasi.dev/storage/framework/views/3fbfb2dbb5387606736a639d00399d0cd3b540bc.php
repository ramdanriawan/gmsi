
<div class="form-group <?php echo e($errors->has('title') ? 'has-error' : ''); ?>">
    <label for="title" class="control-label"><?php echo e(ucwords('title')); ?></label>
    <div class="col-md-12">
        <input placeholder="title" class="form-control form-control-line <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
               name="title" type="text" id="title" value="<?php echo e(isset($activity_groups->title) ? $activity_groups->title : old('title')); ?>"
               required>

        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="invalid-feedback text-danger" role="alert">
        <strong><?php echo e($message); ?></strong>
    </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

</div>

<div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
    <label for="email" class="control-label"><?php echo e(ucwords('email')); ?></label>
    <div class="col-md-12">
        <input placeholder="email" class="form-control form-control-line <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
               name="email" type="text" id="email" value="<?php echo e(isset($activity_groups->email) ? $activity_groups->email : old('email')); ?>"
               required>

        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="invalid-feedback text-danger" role="alert">
        <strong><?php echo e($message); ?></strong>
    </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

</div>

<div class="form-group">
    <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Simpan</button>
    </div>
</div>
<?php /**PATH D:\bikinaplikasi\project\setup_server_default\sites\api-admin-test-gmsi.bikinaplikasi.dev\resources\views/activity-groups/form.blade.php ENDPATH**/ ?>