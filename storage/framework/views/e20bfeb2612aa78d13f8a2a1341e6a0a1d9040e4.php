<?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="container">
        <div class="alert alert-dark">
            <button type="button" aria-hidden="true" class="close" onclick="this.parentElement.style.display='none'">X</button>
            <span><b> Danger - </b> <?php echo e($error); ?></span>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(session('successMsg')): ?>
    <div class="container">
        <div class="alert alert-dark">
            <button type="button" aria-hidden="true" class="close" onclick="this.parentElement.style.display='none'">X</button>
            <span><b> Success - </b> <?php echo e(session('successMsg')); ?></span>
        </div>
    </div>
<?php endif; ?><?php /**PATH C:\Users\Matthias Kamau\Desktop\xampp2\htdocs\Laravel\100539\resources\views/Matthias_Kamau/layouts/notices.blade.php ENDPATH**/ ?>