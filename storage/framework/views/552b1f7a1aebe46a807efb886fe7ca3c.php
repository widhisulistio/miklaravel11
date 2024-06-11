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
        Edit Data Pasien
     <?php $__env->endSlot(); ?>

    <div class="container">
      <h1>Edit Data Pasien</h1>
      <hr>
      <form action="<?php echo e(route('pasien.update', $pasien->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
          <label for="norm" class="form-label">No Rekam Medis</label>
          <input type="text" class="form-control" id="norm" name="norm" aria-describedby="NoRM" value="<?php echo e($pasien->norm); ?>" disabled>
          <?php $__errorArgs = ['norm'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="alert alert-danger" role="alert">
            <?php echo e($message); ?>

          </div>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pasien</label>
            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" value="<?php echo e($pasien->nama); ?>">
            <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger" role="alert">
              <?php echo e($message); ?>

            </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="alamat" value="<?php echo e($pasien->alamat); ?>">
            <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger" role="alert">
              <?php echo e($message); ?>

            </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No Handphone</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" aria-describedby="no_hp" value="<?php echo e($pasien->no_hp); ?>">
            <?php $__errorArgs = ['no_hp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger" role="alert">
              <?php echo e($message); ?>

            </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
    
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4d4f2bbf38bd25d7bdd02288cc92f0c4)): ?>
<?php $attributes = $__attributesOriginal4d4f2bbf38bd25d7bdd02288cc92f0c4; ?>
<?php unset($__attributesOriginal4d4f2bbf38bd25d7bdd02288cc92f0c4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4d4f2bbf38bd25d7bdd02288cc92f0c4)): ?>
<?php $component = $__componentOriginal4d4f2bbf38bd25d7bdd02288cc92f0c4; ?>
<?php unset($__componentOriginal4d4f2bbf38bd25d7bdd02288cc92f0c4); ?>
<?php endif; ?>



<?php /**PATH D:\laragon\www\laravell11\resources\views/pasien/edit.blade.php ENDPATH**/ ?>