<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="card text-center">
    <div class="card-header">
        Welcome to my page!
    </div>
    <div class="card-body">
        <img src="<?php echo e(Vite::asset('resources/images/profile.png')); ?>" class="img-rounded img-fluid" alt="..."
            style="width:200px;height:300px;">
        <h5 class="card-title">Muhamad Brilliant Fikri Nanda Hartadi</h5>
        <p class="card-text">Nickname : Liant <br> Place and Date of Birth : Surabaya, 17 Januari 2002 <br> Gender : Male
            <br> Major : Information System <br> Hobby : Gaming, Riding, Swiming <br> Email :
            <a href="mailto:briliantfikri@gmail.com">briliantfikri@gmail.com</a>
        </p>
        <a href="mailto:briliantfikri@gmail.com" class="btn btn-primary">Contact Me!</a>
    </div>
    <div class="card-footer text-body-secondary">
        Thank You!
    </div>
</div>
<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\Muhamad Brilliant\masterBarangUts\resources\views/home.blade.php ENDPATH**/ ?>