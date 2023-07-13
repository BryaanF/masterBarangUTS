<div class="d-flex">

    <a href="<?php echo e(route('item.edit', ['item' => $item->id])); ?>" class="btn btn-outline-dark btn-sm me-2"><i
            class="bi-pencil-square"></i></a>
    <div>
        <form action="<?php echo e(route('item.destroy', ['item' => $item->id])); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <button type="submit" class="btn btn-outline-dark btn-sm
    me-2"><i class="bi-trash"></i></button>
        </form>
    </div>
</div>
<?php /**PATH C:\Users\Muhamad Brilliant\masterBarangUts\resources\views/item/actions.blade.php ENDPATH**/ ?>