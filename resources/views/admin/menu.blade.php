<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="{{ url('a/dashboard') }}">
                    <img src="{{ url('assets/images/logo/intratitlelogo.png')}}" alt="CoolAdmin"  class="img-fluid" style="max-width: 50px"/>
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li @if($active == 'home') class="active" @endif><a href="{{ url('a/dashboard') }}"><i class="fas fa-tachometer-alt"></i>Home</a></li>
                <li @if($active == 'web-profile') class="active" @endif><a href="{{ url('a/website-profile') }}"><i class="fas fa-align-justify"></i>Website Profile</a></li>
                <li @if($active == 'greeting') class="active" @endif><a href="{{ url('/a/greeting') }}"><i class="fas fa-quote-right"></i>Greeting</a></li>
                <li @if($active == 'logo') class="active" @endif><a href="{{ url('/a/website-logo') }}"><i class="fas fa-home"></i>Logo</a></li>
                <li @if($active == '') class="active" @endif><a href=""><i class="fas fa-image"></i>Banner</a></li>
                <li @if($active == '') class="active" @endif><a href=""><i class="fas fa-sitemap"></i>Company</a></li>
                <li @if($active == 'service') class="active" @endif><a href="{{ url('/a/service') }}"><i class="fas fa-check-circle"></i>Service</a></li>
                <li @if($active == '') class="active" @endif><a href=""><i class="fa fa-globe"></i>Client</a></li>
                <li @if($active == '') class="active" @endif><a href=""><i class="fas fa-road"></i>Works</a></li>
                <li @if($active == '') class="active" @endif><a href=""><i class="fas fa-envelope"></i>Message</a></li>
                <li @if($active == '') class="active" @endif><a href=""><i class="fas fa-users"></i>User</a></li>
                <li @if($active == 'contact') class="active" @endif><a href="{{ url('/a/contact') }}"><i class="fas fa-phone-square"></i>Contact</a></li>
                <li><a href="{{ url('a/logout') }}"><i class="fas fa-power-off"></i>Logout</a></li>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ url('assets/images/logo/testlogokecil.png')}}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li @if($active == 'home') class="active" @endif><a href="{{ url('a/dashboard') }}"><i class="fas fa-tachometer-alt"></i>Home</a></li>
                <li @if($active == 'web-profile') class="active" @endif><a href="{{ url('a/website-profile') }}"><i class="fas fa-align-justify"></i>Website Profile</a></li>
                <li @if($active == 'greeting') class="active" @endif><a href="{{ url('/a/greeting') }}"><i class="fas fa-quote-right"></i>Greeting</a></li>
                <li @if($active == 'logo') class="active" @endif><a href="{{ url('/a/website-logo') }}"><i class="fas fa-home"></i>Logo</a></li>
                <li @if($active == '') class="active" @endif><a href=""><i class="fas fa-image"></i>Banner</a></li>
                <li @if($active == '') class="active" @endif><a href=""><i class="fas fa-sitemap"></i>Company</a></li>
                <li @if($active == 'service') class="active" @endif><a href="{{ url('/a/service') }}"><i class="fas fa-check-circle"></i>Service</a></li>
                <li @if($active == '') class="active" @endif><a href=""><i class="fa fa-globe"></i>Client</a></li>
                <li @if($active == '') class="active" @endif><a href=""><i class="fas fa-road"></i>Works</a></li>
                <li @if($active == '') class="active" @endif><a href=""><i class="fas fa-envelope"></i>Message</a></li>
                <li @if($active == '') class="active" @endif><a href=""><i class="fas fa-users"></i>User</a></li>
                <li @if($active == 'contact') class="active" @endif><a href="{{ url('/a/contact') }}"><i class="fas fa-phone-square"></i>Contact</a></li>
                <li><a href="{{ url('a/logout') }}"><i class="fas fa-power-off"></i>Logout</a></li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
