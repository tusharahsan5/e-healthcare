<header>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-sm">
                    <div class="site-info">
                        <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                        <span class="divider">|</span>

                        <?php if(Route::has('login')): ?>
                            <?php if(auth()->guard()->check()): ?>
                                <div class="btn-group" role="group" style="color: white;">
                                    <a class="btn btn-primary" style="color: white;margin-left: 10px;margin-right: 10px" href="<?php echo e(route('myquery')); ?>">My Query</a>

                                    <div class="btn-group">
                                        <button type="button" style="background-color: #00D9A5;" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            History
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?php echo e(route('myaprescription')); ?>">Prescroption</a>
                                            <a class="dropdown-item" href="<?php echo e(route('show-cart-Lab')); ?>">Lab</a>
                                            <a class="dropdown-item" href="<?php echo e(route('show-cartMed')); ?>">Medicines</a>
                                        </div>
                                    </div>

                                    <div class="btn-group ml-2">
                                        <button type="button" style="background-color: #00D9A5;" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Cart
                                        </button>
                                        <div class="dropdown-menu">

                                            <a class="dropdown-item" href="<?php echo e(route('show-cart-Lab')); ?>">Lab</a>
                                            <a class="dropdown-item" href="<?php echo e(route('show-cartMed')); ?>">Medicines</a>
                                        </div>
                                    </div>

                                    <div class="btn-group ml-2">
                                        <button type="button" style="background-color: #00D9A5;" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Order
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?php echo e(route('myorder')); ?>">My Order</a>
                                            <a class="dropdown-item" href="<?php echo e(route('show-lab-order')); ?>">Lab</a>
                                            <a class="dropdown-item" href="<?php echo e(route('show-Medi-order')); ?>">Medicines</a>
                                        </div>
                                    </div>


                                </div>

                            <?php endif; ?>
                         <?php endif; ?>

                    </div>
                </div>
                <div class="col-sm-4 text-right text-sm">
                    <div class="social-mini-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-twitter"></span></a>
                        <a href="#"><span class="mai-logo-dribbble"></span></a>
                        <a href="#"><span class="mai-logo-instagram"></span></a>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>"><span class="text-primary">Ahsani</span>-Care</a>

            <form action="#">
                <div class="input-group input-navbar">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
                </div>
            </form>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('about')); ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('alldoctors')); ?>">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('allblog')); ?>">Blogs</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="<?php echo e(route('all-report')); ?>">Lab Test</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('all-medicine')); ?>">Pharmacy</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('contact.create')); ?>">Contact</a>
                    </li>


                    <?php if(Route::has('login')): ?>
                     <?php if(auth()->guard()->check()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('myappointment')); ?>" style="background-color: #00D9A5;color: white; border-radius: 10px;">Appointments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('foodpage')); ?>" style="background-color: #00D9A5;color: white; margin-left: 7px; border-radius: 10px;">Food</a>
                            </li>
                            <?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
                     <?php else: ?>
                    <li class="nav-item">
                        <a class="btn btn-primary ml-lg-3" href="<?php echo e(route('login')); ?>">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-primary ml-lg-3" href="<?php echo e(route('register')); ?>">Register</a>
                    </li>
                        <?php endif; ?>
                    <?php endif; ?>


                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>
<?php /**PATH C:\laragon\www\hospital-management-with-laravel\resources\views/user/include/header.blade.php ENDPATH**/ ?>