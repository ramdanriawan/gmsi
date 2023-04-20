<?php if(in_array(auth()->user()->level, ['Admin'])): ?>
    <li>
        <a <?php if(Route::current()->action['as'] == 'todos.index'): ?> class='active-menu'
           <?php endif; ?> href="<?php echo e(route('todos.index')); ?>"><i class="fa fa-table"></i>Todos</a>
    </li>
<?php endif; ?>

<?php if(in_array(auth()->user()->level, ['Admin'])): ?>
    <li>
        <a <?php if(Route::current()->action['as'] == 'activity-groups.index'): ?> class='active-menu'
           <?php endif; ?> href="<?php echo e(route('activity-groups.index')); ?>"><i class="fa fa-table"></i>Activity Groups</a>
    </li>
<?php endif; ?>
<?php /**PATH D:\bikinaplikasi\project\setup_server_default\sites\api-admin-test-gmsi.bikinaplikasi.dev\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>