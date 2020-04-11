<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" <?php echo e(asset('css/app.css')); ?> ">
    <script src="<?php echo e(asset('js/app.js')); ?> "></script>
    <title>API PRACTICAL CAT</title>
</head>
<body>
    <div id="main">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-big">
<div class="container">
<a class="navbar-brand" href="/">Matthias Kamau 100539 </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?php if(Request::is('feepayments')): ?>
                        active
                        <?php endif; ?>">
                            <a class="nav-link" href="/feepayments">Fees Paid<span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </div>
          </nav>

     <main class="py-5">
     <?php echo $__env->make('Matthias_Kamau.layouts.notices', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <?php echo $__env->yieldContent('work'); ?>
      </main>
    </div>
</body>
</html><?php /**PATH C:\Users\Matthias Kamau\Desktop\xampp2\htdocs\Laravel\100539\resources\views/Matthias_Kamau/layouts/app.blade.php ENDPATH**/ ?>