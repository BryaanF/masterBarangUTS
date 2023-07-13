<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="row mb-0 mx-3 my-3">
    <div class="col-lg-9 col-xl-10">
        <h4 class="mb-3"><?php echo e($pageTitle); ?></h4>
    </div>
    <div class="col-lg-3 col-xl-2">
        <div class="d-grid gap-2">
            <a href="<?php echo e(route('item.create')); ?>" class="btn
btn-primary">Input Item</a>
        </div>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Item Code</th>
            <th scope="col">Name</th>
            <th scope="col">Price - IDR</th>
            <th scope="col">Description</th>
            <th scope="col">Unit</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">

        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->price); ?></td>
                <td><?php echo e($item->description); ?></td>
                <td><?php echo e($item->unit->name); ?></td>
                <td><?php echo $__env->make('items.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </tbody>
</table>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\Muhamad Brilliant\masterBarangUts\resources\views/items/index.blade.php ENDPATH**/ ?>