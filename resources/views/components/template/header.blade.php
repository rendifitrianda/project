<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('template') }}" class="nav-link">Beranda</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                Rendi Fitrianda
                <img src="{{ url('public') }}/dist/img/user2-160x160.jpg" style="height: 100%" class="img-circle"
                    alt="User Image">
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <i class="fa fa-cog">
                            user
                        </i>
                    </div>
                </a>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <i class="fa fa-cog">
                            setting
                        </i>
                    </div>
                </a>
                <a href="{{ url('login') }}" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <i class="fa fa-sign-out">
                            logout
                        </i>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>
