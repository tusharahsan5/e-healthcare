<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php echo $__env->yieldContent('title'); ?></title>  
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="<?php echo e(asset('admin-assets')); ?>/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <?php echo $__env->make('admin.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Navbar-->
</nav>
<div id="layoutSidenav">
    <?php echo $__env->make('admin.include.left-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="layoutSidenav_content">
        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <footer class="py-4 bg-light mt-auto">
           <?php echo $__env->make('admin.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?php echo e(asset('admin-assets')); ?>/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?php echo e(asset('admin-assets')); ?>/assets/demo/chart-area-demo.js"></script>
<script src="<?php echo e(asset('admin-assets')); ?>/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="<?php echo e(asset('admin-assets')); ?>/js/datatables-simple-demo.js"></script>

</body>
</html>
<?php /**PATH C:\laragon\www\hospital-management-with-laravel\resources\views/admin/master.blade.php ENDPATH**/ ?>