<?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissable fade show text-center">
        <button class="close" data-dismiss="alert" aria-label="Close">×</button>
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>


<?php if(session('error')): ?>
    <div class="alert alert-danger alert-dismissable fade show text-center">
        <button class="close" data-dismiss="alert" aria-label="Close">×</button>
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?><?php /**PATH D:\DUT\Projects\12_PFE\Ecommercel7\resources\views/frontend/layouts/notification.blade.php ENDPATH**/ ?>