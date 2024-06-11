<?php if (isset($component)) { $__componentOriginal4d4f2bbf38bd25d7bdd02288cc92f0c4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4d4f2bbf38bd25d7bdd02288cc92f0c4 = $attributes; } ?>
<?php $component = App\View\Components\Template2::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('template2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Template2::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> 
        Data Pasien
     <?php $__env->endSlot(); ?>
    <h1>Ini data pemeriksaan pasien</h1>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4d4f2bbf38bd25d7bdd02288cc92f0c4)): ?>
<?php $attributes = $__attributesOriginal4d4f2bbf38bd25d7bdd02288cc92f0c4; ?>
<?php unset($__attributesOriginal4d4f2bbf38bd25d7bdd02288cc92f0c4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4d4f2bbf38bd25d7bdd02288cc92f0c4)): ?>
<?php $component = $__componentOriginal4d4f2bbf38bd25d7bdd02288cc92f0c4; ?>
<?php unset($__componentOriginal4d4f2bbf38bd25d7bdd02288cc92f0c4); ?>
<?php endif; ?><?php /**PATH D:\laragon\www\laravell11\resources\views/pasien/pemeriksaan2.blade.php ENDPATH**/ ?>