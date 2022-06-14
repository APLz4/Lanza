<!-- Menghubungkan dengan view template master -->


<?php $__env->startSection('title','HOME'); ?>
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
<?php $__env->startSection('judul', 'Halaman Home'); ?>

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
<?php $__env->startSection('konten'); ?>
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="tab-content" id="v-pills-tabContent">
    <div class="jumbotron">
        <h1 class="display-4">Selamat Datang </h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
      </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/tamplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/lanza-app/resources/views/home.blade.php ENDPATH**/ ?>