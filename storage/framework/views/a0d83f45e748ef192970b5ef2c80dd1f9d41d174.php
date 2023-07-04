<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>

<?php $__env->startSection('content'); ?>
    <div class="container-sm mt-5">
        <form action="<?php echo e(route('employees.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <?php if($errors->any()): ?>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="alert alert-danger
alert-dismissible fade show">
                                <?php echo e($error); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Create Employee</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kodebarang" class="form-label">Kode Barang</label>
                            <input class="form-control" type="text" name="kodebarang" id="kodebarang" value=""
                                placeholder="Enter Kode Barang ">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="namabarang" class="form-label">Nama Barang</label>
                            <input class="form-control" type="text" name="namabarang" id="namabarang" value=""
                                placeholder="Enter Nama Barang">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="hargabarang" class="form-label">Harga Barang</label>
                            <input class="form-control" type="text" name="hargabarang" id="hargabarang" value=""
                                placeholder="Enter Harga Barang">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsibarang" class="form-label">Deksripsi Barang</label>
                            <input class="form-control" type="text" name="deskripsibarang" id="deskripsibarang" value=""
                                placeholder="Enter Deskripsi Barang">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="<?php echo e(route('employees.index')); ?>" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle
me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark
btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php $__env->stopSection(); ?>
</body>

</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\EKKY DEA\modul6\resources\views/employee/create.blade.php ENDPATH**/ ?>