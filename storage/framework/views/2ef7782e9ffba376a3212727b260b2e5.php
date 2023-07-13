<?php
    $currentRouteName = Route::currentRouteName();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Master Barang UTS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link <?php if($currentRouteName == 'home'): ?> active fw-bold <?php endif; ?>"
                        href="<?php echo e(route('home')); ?>">Home</a>
                    <a class="nav-link <?php if($currentRouteName == 'item.index'): ?> active fw-bold <?php endif; ?>"
                        href="<?php echo e(route('item.index')); ?>">Item</a>
                </div>
            </div>
        </div>
    </nav>
<?php /**PATH C:\Users\Muhamad Brilliant\masterBarangUts\resources\views/layout/header.blade.php ENDPATH**/ ?>