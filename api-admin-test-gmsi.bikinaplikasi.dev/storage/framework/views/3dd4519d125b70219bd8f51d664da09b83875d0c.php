<div class="form-group <?php echo e($errors->has('activity groups') ? 'has-error' : ''); ?>">
    <label for="activity groups" class="control-label"><?php echo e('activity groups'); ?></label>

    <select name="activity_group_id" class="form-control form-control-line" id="activity_groups" required>
        <?php $__currentLoopData = $activityGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionKey => $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($optionKey); ?>"
                <?php echo e((isset($todos->activity_groups) && $todos->activity_groups == $optionValue) || old('activity_groups') == $optionValue ? 'selected' : ''); ?>>
                <?php echo e($optionValue); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <?php $__errorArgs = ['activity_groups'];
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
               name="title" type="text" id="title" value="<?php echo e(isset($todos->title) ? $todos->title : old('title')); ?>"
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

<div class="form-group <?php echo e($errors->has('is_active') ? 'has-error' : ''); ?>">
    <label for="is_active" class="control-label"><?php echo e(ucwords('Is Active')); ?></label>
    <div class="col-md-12">
        <input placeholder="is_active" class="form-control form-control-line <?php $__errorArgs = ['is_active'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
               name="is_active" type="number" min=0 max=1 id="is_active" value="<?php echo e(isset($todos->is_active) ? $todos->is_active : old('is_active')); ?>"
               required>

        <?php $__errorArgs = ['is_active'];
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

<div class="form-group <?php echo e($errors->has('priority') ? 'has-error' : ''); ?>">
    <label for="priority" class="control-label"><?php echo e('priority'); ?></label>

    <select name="priority" class="form-control form-control-line" id="priority" required>
        <?php $__currentLoopData = ['very-high', 'medium', 'low']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionKey => $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($optionValue); ?>"
                <?php echo e((isset($todos->priority) && $todos->priority == $optionValue) || old('priority') == $optionValue ? 'selected' : ''); ?>>
                <?php echo e($optionValue); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <?php $__errorArgs = ['priority'];
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

<div class="form-group">
    <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Simpan</button>
    </div>
</div>
<?php /**PATH D:\bikinaplikasi\project\setup_server_default\sites\api-admin-test-gmsi.bikinaplikasi.dev\resources\views/todos/form.blade.php ENDPATH**/ ?>