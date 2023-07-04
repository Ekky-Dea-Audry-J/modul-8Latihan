<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>Belajar Controller & View pada Laravel</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <header class="masthead">
        <div class="container px-5">
            <div class="row gx-9 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h2 class="display-1 lh-1 mb-5 text-black">Belajar Controller & View pada Laravel</h2>
                        <p class="lead fw-normal text-muted mb-5">Ekky dea Audry Jaya</p>
                        <div class="d-grid gap-2">
                            <a class="btn btn-dark" href="<?php echo e(url('/home')); ?>">Home</a>
                         </div>
                        <div class="position-absolute bottom-0 end-0 translate-center">

                            <a href="#!"><img class="app-badge" src="https://cdn-icons-png.flaticon.com/512/4293/4293130.png" alt="..." /></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Masthead device mockup feature-->
                    <div class="masthead-device-mockup">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(90)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                        </svg>

                        </div>

                </div>
            </div>
        </div>
    </header>

<?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH C:\Users\EKKY DEA\modul4\resources\views/welcome.blade.php ENDPATH**/ ?>