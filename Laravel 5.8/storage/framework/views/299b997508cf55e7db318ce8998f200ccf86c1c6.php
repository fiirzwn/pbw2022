<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <img src="<?php echo e(url ('images/logo2.png')); ?>" class="rounded mx-auto d-block" width="500" alt=""><br>
        <b><p style="text-align: center;">Website ini menjual produk-produk diecast dengan berbagai merk terkenal, seperti hotwheels, minigt, maisto, dan masih banyak lagi.<br>
        Untuk kalian para pengunjung baru bisa melakukan register terlebih dahulu jika tidak punya akun.<br>
        Jika sudah ada akun maka login dan bisa melakukan transaksi.</p></b>
        </div>
       <?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3">
            <div class="card">
                <img src="<?php echo e(url ('uploads')); ?>/<?php echo e($barang->gambar); ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($barang->nama_barang); ?></h5>
                    <p class="card-text">
                        <strong>IDR <?php echo e(number_format($barang->harga)); ?></strong><br>
                        <strong>Stok sisa <?php echo e($barang->stok); ?> </strong><br>
                        <hr>
                        <strong>Deskripsi Produk</strong><br>
                        <?php echo e($barang->keterangan); ?>

                    </p>
                    <a href="<?php echo e(url('pesan')); ?>/<?php echo e($barang->id); ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
        </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\topup\resources\views/home.blade.php ENDPATH**/ ?>