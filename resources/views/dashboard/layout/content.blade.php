<div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax="">
            <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                <i class="ion-navicon"></i>
            </a>
            <div class="navbar-item pull-left h5" id="pageTitle">{{ isset( $pageTitle ) ? $pageTitle : 'Unnamed Page' }}</div>
            <!-- nabar right -->
            <ul class="nav navbar-nav pull-right">
                <li class="nav-item dropdown pos-stc-xs">
                <a class="nav-link" data-toggle="dropdown">
                    <i class="ion-android-search w-24"></i>
                </a>
                <div class="dropdown-menu text-color w-md animated fadeInUp pull-right">
                    <!-- search form -->
                    <form class="navbar-form form-inline navbar-item m-a-0 p-x v-m" role="search">
                    <div class="form-group l-h m-a-0">
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search projects...">
                        <span class="input-group-btn">
                            <button type="submit" class="btn white b-a no-shadow"><i class="fa fa-search"></i></button>
                        </span>
                        </div>
                    </div>
                    </form>
                    <!-- / search form -->
                </div>
                </li>
                <li class="nav-item dropdown pos-stc-xs">
                <a class="nav-link clear" data-toggle="dropdown">
                    <i class="ion-android-notifications-none w-24"></i>
                    <span class="label up p-a-0 danger"></span>
                </a>
                <!-- dropdown -->
                <div class="dropdown-menu pull-right w-xl animated fadeIn no-bg no-border no-shadow">
                    <div class="scrollable" style="max-height: 220px">
                        <ul class="list-group list-group-gap m-a-0">
                        <li class="list-group-item dark-white box-shadow-z0 b">
                            <span class="pull-left m-r">
                            <img src="images/a0.jpg" alt="..." class="w-40 img-circle">
                            </span>
                            <span class="clear block">
                            Use awesome <a href="#" class="text-primary">animate.css</a><br>
                            <small class="text-muted">10 minutes ago</small>
                            </span>
                        </li>
                        <li class="list-group-item dark-white box-shadow-z0 b">
                            <span class="pull-left m-r">
                            <img src="images/a1.jpg" alt="..." class="w-40 img-circle">
                            </span>
                            <span class="clear block">
                            <a href="#" class="text-primary">Joe</a> Added you as friend<br>
                            <small class="text-muted">2 hours ago</small>
                            </span>
                        </li>
                        <li class="list-group-item dark-white text-color box-shadow-z0 b">
                            <span class="pull-left m-r">
                            <img src="images/a2.jpg" alt="..." class="w-40 img-circle">
                            </span>
                            <span class="clear block">
                            <a href="#" class="text-primary">Danie</a> sent you a message<br>
                            <small class="text-muted">1 day ago</small>
                            </span>
                        </li>
                        </ul>
                    </div>
                </div>
                <!-- / dropdown -->
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link clear" data-toggle="dropdown">
                    <span class="avatar w-32">
                    <img src="images/a3.jpg" class="w-full rounded" alt="...">
                    </span>
                </a>
                <div class="dropdown-menu w dropdown-menu-scale pull-right">
                    <a class="dropdown-item" href="profile.html">
                    <span>Profile</span>
                    </a>
                    <a class="dropdown-item" href="setting.html">
                    <span>Settings</span>
                    </a>
                    <a class="dropdown-item" href="app.inbox.html">
                    <span>Inbox</span>
                    </a>
                    <a class="dropdown-item" href="app.message.html">
                    <span>Message</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="docs.html">
                    Need help?
                    </a>
                    <a class="dropdown-item" href="signin.html">Sign out</a>
                </div>
                </li>
            </ul>
            <!-- / navbar right -->
          </div>
    </div>
    <div class="app-footer white bg p-a b-t">
      <div class="pull-right text-sm text-muted">Version 1.0.1</div>
      <span class="text-sm text-muted">© Copyright.</span>
    </div>
    <div class="app-body">

        @yield( 'dashboard.body' )

    </div>
  </div>