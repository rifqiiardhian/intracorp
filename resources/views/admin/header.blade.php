<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                    <h4>Intra Corp Admin Page</h4>
                </form>
                <div class="header-button">
                    <div class="noti-wrap">
                    </div>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="content">
                                <a class="js-acc-btn" href="">{{ $firstname }} {{ $lastname }}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <h5 class="name text-dark">{{ $firstname }} {{ $lastname }}</h5>
                                    <span class="email">{{ $username }}</span>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="{{ url('/a/admin/profile') }}"><i class="zmdi zmdi-account"></i>Edit Profile</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="{{ url('/a/admin/password') }}"><i class="zmdi zmdi-lock"></i>Change Password</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="{{ url('a/logout') }}"><i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
