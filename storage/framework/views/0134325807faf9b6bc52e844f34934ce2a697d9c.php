<div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored border-bottom-theme-color-2-1px">
        <div class="container">
          <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
            <ul class="menuzord-menu">
              <li class="<?php echo e(Request::segment(1)=='' ? 'active' : ''); ?>"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('messages.home')); ?></a></li>
              <li class="<?php echo e(Request::segment(1)=='about-us' ? 'active' : ''); ?>"><a href="<?php echo e(url('/about-us')); ?>"><?php echo e(__('messages.aboutus')); ?></a></li>
              <li class="<?php echo e(Request::segment(1)=='contact-us' ? 'active' : ''); ?>"><a href="<?php echo e(url('/contact-us')); ?>"><?php echo e(__('messages.contactus')); ?></a></li>
              <li class="<?php echo e(Request::segment(1)=='events' ? 'active' : ''); ?>"><a href="<?php echo e(url('/events')); ?>"><?php echo e(__('messages.event')); ?></a></li>
             

            <li><a href="#"><?php echo e(__('messages.course')); ?><span class="label labek-info">New</span></a>
                <ul class="dropdown">
                    <?php $__currentLoopData = $arrCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $objCourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li> 
                    <a href="<?php echo e(url('course_details')); ?>/<?php echo e($objCourse->id); ?>"><?php echo e($objCourse->name); ?></a>
                  </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>

              </li>
              
               
            </ul>
            <ul class="pull-right flip hidden-sm hidden-xs">
              <li>
                <!-- Modal: Book Now Starts -->
                <a class="btn btn-colored btn-flat bg-theme-color-2 text-white font-14 bs-modal-ajax-load mt-0 p-25 pr-15 pl-15" data-toggle="modal" data-target="#BSParentModal" href="ajax-load/reservation-form.html"><?php echo e(__('messages.booknow')); ?></a>
                <!-- Modal: Book Now End -->
              </li>
            </ul>
            <div id="top-search-bar" class="collapse">
              <div class="container">
                <form role="search" action="#" class="search_form_top" method="get">
                  <input type="text" placeholder="Type text and press Enter..." name="s" class="form-control" autocomplete="off">
                  <span class="search-close"><i class="fa fa-search"></i></span>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div><?php /**PATH D:\xamp\htdocs\new\Auth_laravel\resources\views/layouts/nav_front.blade.php ENDPATH**/ ?>