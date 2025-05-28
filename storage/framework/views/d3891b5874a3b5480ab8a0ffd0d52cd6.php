<?php $__env->startSection('title'); ?>
    Blog Details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section class="blog-details">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h2 style="color: #00D9A5;font-weight: 500;font-size: 30px;" class="text-center mt-3 mb-5">Blog Details</h2>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h3 class="text-center mb-4" style="color: blue;font-weight: 500; font-size: 40px"><?php echo e($blog->title); ?></h3>
                        <img src="<?php echo e(asset($blog->image)); ?>" alt="Blog Image" class="img-fluid mb-5">
                        <h3 class="text-center mb-4" style="color: #00D9A5;font-weight: 500; font-size: 35px"><?php echo e($blog->title); ?></h3>
                        <p class="mb-4" style="color: #0b2e13;line-height: 36px;word-spacing: 2px; font-size: 22px;font-family: Roboto;"><?php echo e($blog->description); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="page-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 style="color: #00D9A5;font-weight: 500;font-size: 30px;" class="text-center mt-1 mb-2">Related Blog</h2>

                    <div class="row">


                        <?php $__currentLoopData = $relatedBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4 col-lg-4 py-3 wow zoomIn">
                                <div class="card-doctor">
                                    <div class="header">
                                        <img src="<?php echo e(asset($blogs->image)); ?>" alt="" height="300px">
                                        <div class="meta">
                                            <a href="#"><span class=""></span></a>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <h5><a href="<?php echo e(route('blog-details',['id'=>$blogs->id])); ?>"><?php echo e($blogs->title); ?></a></h5>
                                        <span class="text-sm text-grey"><?php echo e($blogs->date); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                </div>
            </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->

    <!-- New section for related blogs -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hospital-management-with-laravel\resources\views/user/blog/blog-details.blade.php ENDPATH**/ ?>