<?php 
  $login_user_details  = \Sentinel::check();
  $session_user = Session::get('user');
?>
 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo e(url('/admin_css_js')); ?>/css_and_js/admin/dist/img/user2-160x160.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo e($session_user->store_name); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li <?php if(Request::segment(2)=='dashbord'): ?> class="active" <?php endif; ?>>
          <a href="<?php echo e(url('/admin')); ?>/dashbord">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        
  <?php if($session_user->role=='admin'): ?>

        <li <?php if(Request::segment(2)=='manage_booking' || Request::segment(2)=='view_booking'): ?> class="active" <?php endif; ?>>
          <a href="<?php echo e(url('/admin')); ?>/manage_booking">
            <i class="fa fa-television"></i> <span>Manage Booking</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li <?php if(Request::segment(2)=='book_you_service' || Request::segment(2)=='book_you_service'): ?> class="active" <?php endif; ?>>
          <a href="<?php echo e(url('/admin')); ?>/book_you_service">
            <i class="fa fa-television"></i> <span>Book Your service</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li <?php if(Request::segment(2)=='test_drive' || Request::segment(2)=='test_drive'): ?> class="active" <?php endif; ?>>
          <a href="<?php echo e(url('/admin')); ?>/test_drive">
            <i class="fa fa-television"></i> <span>Test Drive Requests</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li <?php if(Request::segment(2)=='quotations' || Request::segment(2)=='quotations'): ?> class="active" <?php endif; ?>>
          <a href="<?php echo e(url('/admin')); ?>/quotations">
            <i class="fa fa-television"></i> <span>Quotations</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li <?php if(Request::segment(2)=='insurance' || Request::segment(2)=='insurance'): ?> class="active" <?php endif; ?>>
          <a href="<?php echo e(url('/admin')); ?>/insurance">
            <i class="fa fa-television"></i> <span>Insurance</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li <?php if(Request::segment(2)=='finance' || Request::segment(2)=='finance'): ?> class="active" <?php endif; ?>>
          <a href="<?php echo e(url('/admin')); ?>/finance">
            <i class="fa fa-television"></i> <span>Finance</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
    <?php endif; ?>
        <li class="treeview <?php if(Request::segment(2)=='change_password'): ?> active <?php endif; ?>">
          <a href="#">
            <i class="fa fa-gear"></i> <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if(Request::segment(2)=='change_password'): ?> class="active" <?php endif; ?>><a href="<?php echo e(url('/admin')); ?>/change_password"><i class="fa fa-circle-o"></i> Change Password</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside><?php /**PATH /home/marutiseva/public_html/nexa/admin/resources/views/admin/layout/sidebar.blade.php ENDPATH**/ ?>