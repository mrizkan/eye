<!-- Top Bar Start -->
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="<?php echo base_url(); ?>Customer/insertview" class="logo">
            <!--<i class="zmdi zmdi-group-work icon-c-logo"></i>-->
            <span><img src="<?php echo base_url(); ?>images/logo.png" width="100px" height="60px"></span></a>
    </div>

    <nav class="navbar navbar-custom">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <button class="button-menu-mobile open-left waves-light waves-effect">
                    <i class="zmdi zmdi-menu"></i>
                </button>
            </li>

        </ul>

        <ul class="nav navbar-nav pull-right">
            <li class="nav-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <img src="<?php echo base_url(); ?>images/admin.png" alt="user" class="img-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-arrow profile-dropdown " aria-labelledby="Preview">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="text-overflow"><small>Welcome ! Rizwan</small> </h5>
                    </div>

                    <!-- item-->


                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                    </a>

                    <!-- item-->


                    <!-- item-->
                    <a href="<?php echo base_url('Customer/index'); ?>" class="dropdown-item notify-item">
                        <i class="zmdi zmdi-power"></i> <span>Logout</span>
                    </a>

                </div>
            </li>

        </ul>


    </nav>

</div>
<!-- Top Bar End -->