<nav class="navbar navbar-expand-lg animated fadeInDown" id="nav">
    <a class="navbar-brand" href="{{ url('/')}}">
        <img src="{{ url('assets/images/logo/intratitlelogo.png')}}" class="img-fluid logo-navbar"/>
    </a>
    <div class="navbar-toggler btn-nav" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <div class="animated-icon"><span></span><span></span><span></span></div>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li @if($active_menu == 'home') class="nav-item active" @else class="nav-item" @endif>
                <a class="line nav-link" href="{{ url('/')}}">Home</a>
            </li>
            <li @if($active_menu == 'about') class="nav-item active" @else class="nav-item" @endif>
                <a class="line nav-link" href="{{ url('/about-us') }}">About Us</a>
            </li>
            <li @if($active_menu == 'works') class="nav-item active" @else class="nav-item" @endif>
                <a class="line nav-link" href="{{ url('/our-works') }}">Our Works</a>
            </li>
            <li @if($active_menu == 'contact') class="nav-item active" @else class="nav-item" @endif>
                <a class="line nav-link" href="{{ url('/contact-us') }}">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>
