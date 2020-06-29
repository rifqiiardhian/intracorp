<!--
Copyright 2020
Author          : Muhammad Rifqi Ardhian
Project Name    : Intra Corp Website
Description     : Company Profile Website
All Rights Reserved
-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Website Title -->
        <title>{{ $title }}</title>

        <!-- Website Icon -->
        <link rel="icon" href="{{ url('assets/icon/intraicon.ico')}}"/>

        <!-- CSS Links -->
        @include('include/css')

        <!-- Fonts Links -->
        @include('include/fonts')
    </head>
    <body class="bg-light">
        <!-- Loader -->
        <div id="loader" class="center"></div>

        <div class="container container-login">
            <div class="card card-login p-4 bg-light">
                @if ($message = Session::get('error'))
                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                    {{ $message }}
                </div>
                @endif
                <div class="about-title mb-3 animated fadeInDown">Login.</div>
                <form action="{{ url('/auth/login/check') }}" method="post">
                    {{ csrf_field() }}
                    <div class="input-group mb-4 animated fadeInRight">
                        <input type="text" class="form-control login-input" name="username" id="username" placeholder="Username" aria-label="Username" required>
                    </div>

                    <div class="input-group mb-5 animated fadeInLeft">
                        <input type="password" class="form-control login-input" name="password" id="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2" required>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i toggle="#password" class="fa fa-eye toggle-password"></i>
                            </span>
                        </div>
                    </div>
                    <div class="input-btn-login mb-4 animated fadeInRight">
                        <button type="submit" class="btn btn-login">Login</button>
                    </div>
                </form>

                <a href="{{ url('/') }}" class="link-back mb-4 animated fadeInUp"><span class="arrow-left-back">Back to Home</span></a>
            </div>
        </div>

        <!-- JavaScript Links -->
        @include('include/javascript')
    </body>
</html>
