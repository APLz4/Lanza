<!-- Menghubungkan dengan view template master -->


<?php $__env->startSection('title','Data Mahasiswa'); ?>
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
<?php $__env->startSection('konten'); ?>
<div class="container-fluid">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        
      </tr>
    </thead>
    <tbody>
      <?php $i=1 ;?>
      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <th scope="row"><?= $i++ ?></th>
          <td><?php echo e($u->nama); ?></td>
          <td><?php echo e($u->email); ?></td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
    </tbody>
  </table>
</div>
<?php if($users->hasPages()): ?>
   <div class="card-footer">
      <?php echo e($users->links()); ?>

    </div>
<?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/tamplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/lanza-app/resources/views/mahasiswa.blade.php ENDPATH**/ ?>