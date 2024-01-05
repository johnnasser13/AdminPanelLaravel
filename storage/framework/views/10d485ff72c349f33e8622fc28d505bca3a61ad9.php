<<!-- resources/views/admin/import.blade.php -->



<?php $__env->startSection('content'); ?>
    <h2>Import Users</h2>

    <form action="<?php echo e(route('admin.import.post')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="file" name="file" required>
        <button type="submit">Import</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('pages.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\John\laravel\tech_test\resources\views/admin/import.blade.php ENDPATH**/ ?>