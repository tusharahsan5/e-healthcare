<div id="layoutSidenav_nav" style="width: 250px;">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">


                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="<?php echo e(route('home')); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>



                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(Auth::user()->usertype == 2 || Auth::user()->usertype == 1): ?>
                <div class="sb-sidenav-menu-heading">History</div>
                <a class="nav-link" href="<?php echo e(route('showhistory')); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Appointment History
                </a>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>



                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(Auth::user()->usertype == 1): ?>
                <div class="sb-sidenav-menu-heading">Users</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#users" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user-doctor"></i></div>
                    Users
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="users" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo e(route('users.create')); ?>">Add User</a>
                        <a class="nav-link" href="<?php echo e(route('users.index')); ?>">Manage Users</a>
                    </nav>
                </div>
                


                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#user" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user-doctor"></i></div>
                    Doctors
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="user" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo e(route('doctor.create')); ?>">Add Doctor</a>
                        <a class="nav-link" href="<?php echo e(route('doctor.index')); ?>">Manage Doctors</a>
                    </nav>
                </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>





                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(Auth::user()->usertype == 4 || Auth::user()->usertype == 1): ?>
                <div class="sb-sidenav-menu-heading">Manages</div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar-check"></i></div>
                    Appointments
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>


                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">

                        <a class="nav-link" href="<?php echo e(route('showappointment')); ?>">Manage Appointments</a>
                    </nav>
                </div>


                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#complain" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-file-circle-question"></i></div>
                    User's Query
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="complain" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo e(route('contact.index')); ?>">View Query</a>
                    </nav>
                </div>

                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>



                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(Auth::user()->usertype == 3 || Auth::user()->usertype == 1): ?>
                <div class="sb-sidenav-menu-heading">Food</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#food" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-utensils"></i></div>
                    Food
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="food" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo e(route('food.create')); ?>">Add Food</a>
                        <a class="nav-link" href="<?php echo e(route('food.index')); ?>">Manage Food</a>
                    </nav>
                </div>



                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#order" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-folder"></i></div>
                    Order
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="order" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo e(route('manage.order')); ?>">Manage Order</a>

                    </nav>
                </div>

                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>



                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(Auth::user()->usertype == 1): ?>
                <div class="sb-sidenav-menu-heading">Blog</div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#cat" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="cat" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo e(route('category.create')); ?>">Add Category</a>
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#blog" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-rss"></i></div>
                    Blogs
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="blog" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo e(route('blog.create')); ?>">Add Blog</a>
                        <a class="nav-link" href="<?php echo e(route('blog.index')); ?>">Manage Blog</a>
                    </nav>
                </div>

                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>




                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(Auth::user()->usertype == 5 || Auth::user()->usertype == 1): ?>
                            <div class="sb-sidenav-menu-heading">Pharmachy</div>
                            <a class="nav-link" href="<?php echo e(route('pharmachy.create')); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Add Medicines
                            </a>

                            <a class="nav-link" href="<?php echo e(route('pharmachy.index')); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Manage Medicines
                            </a>

                            <a class="nav-link" href="<?php echo e(route('medi-order')); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Manage Order
                            </a>


                            <div class="sb-sidenav-menu-heading">Laberatory Tests</div>
                            <a class="nav-link" href="<?php echo e(route('lab.create')); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Add Test
                            </a>

                            <a class="nav-link" href="<?php echo e(route('lab.index')); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Manage Test
                            </a>

                            <a class="nav-link" href="<?php echo e(route('lab-order')); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Manage Order
                            </a>

                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>







            </div>
        </div>

        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
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
        </div>

    </nav>
</div>
<?php /**PATH C:\laragon\www\hospital-management-with-laravel\resources\views/admin/include/left-sidebar.blade.php ENDPATH**/ ?>