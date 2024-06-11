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

    <div class="container">
      <a href="<?php echo e(route('pasien.create')); ?>" class="btn btn-success">Tambah Data</a>
      <hr>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">No RM</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">No HP</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
             <?php $__currentLoopData = $pasien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <tr>
                      <td><?php echo e($loop->iteration); ?></td>
                      <td><?php echo e($data->norm); ?></td>
                      <td><?php echo e($data->nama); ?></td>
                      <td><?php echo e($data->alamat); ?></td>
                      <td><?php echo e($data->no_hp); ?></td>
                      <td>
                          <a href="<?php echo e(route('pasien.edit',$data->id)); ?>" class="btn btn-info">Edit</a>
                          <form action="<?php echo e(route('pasien.destroy',$data->id)); ?>" method="post">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                          </form>
                      </td>
                 </tr>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
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


<?php /**PATH D:\laragon\www\laravell11\resources\views/pasien/data.blade.php ENDPATH**/ ?>