<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('content'); ?>
    <p>Data Pasien: <?php echo e($nama); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\laravell11\resources\views/pasien/datapasien.blade.php ENDPATH**/ ?>