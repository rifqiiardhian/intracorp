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
        <!-- Website Keywords -->
        <meta name="keywords" content="intra, intra corp, intra malang, contractor malang, kontraktor malang, konsultan malang">
        <!-- Website Description -->
        <meta name="description" content="Intra Corp General Contractor and Consultant Engineering based in Malang, Indonesia">
        <!-- Website Author -->
        <meta name="author" content="Rifqi Ardhian">
        <!-- Website Title -->
        <title>{{ $title }}</title>
        <!-- Website Icon -->
        <link rel="icon" href="{{ url('assets/icon/intraicon.ico')}}"/>
        <!-- CSS Links -->
        @include('include/css')
        <!-- Fonts Links -->
        @include('include/fonts')
    </head>
    <body>
        <!-- Loader -->
        <div id="loader" class="center"></div>

        <!-- Navbar Menu -->
        @include('user/menu')

        <div class="content">
            <!-- Start About Banner -->
            <div class="about-parallax" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/bootstrap/css/banner/testbanner1.png')">
                <div class="about-banner-text">
                    <div class="about-banner-title" data-aos="fade-right" data-aos-duration="1500">About Us</div>
                    <p data-aos="fade-right" data-aos-duration="1500">Home / About Us</p>
                </div>
            </div>
            <!-- End About Banner -->

            <!-- Start Company History -->
            <div class="container-fluid container-history bg-light">
                <div class="row row-history">
                    <div class="col-lg-12">
                        <h1 class="pb-3 about-title" data-aos="fade-right" data-aos-duration="2000">About Intra Corporation</h1>
                        <div class="history-content text-justify" data-aos="fade-up" data-aos-duration="1500">
                            {!! $about !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Company History -->

            <!-- Start 3 Company Section -->
            <div class="container-fluid container-company pb-4 bg-light">
                <div class="row row-company text-center">
                    <div class="col-md-4">
                        <div class="card card-company" data-aos="fade-up" data-aos-duration="1500">
                            <div class="card-body card-body-company">
                                <img src="{{ url('assets/images/logo/testlogobesar.png') }}" class="img-fluid"/>
                            </div>
                            <div class="company-overlay bg-warning">
                                <p class="text-company-overlay">Logo 1 Description</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-company" data-aos="fade-up" data-aos-duration="1500">
                            <div class="card-body card-body-company">
                                <img src="{{ url('assets/images/logo/testlogobesar.png') }}" class="img-fluid"/>
                            </div>
                            <div class="company-overlay bg-warning">
                                <p class="text-company-overlay">Logo 2 Description</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-company" data-aos="fade-up" data-aos-duration="1500">
                            <div class="card-body card-body-company">
                                <img src="{{ url('assets/images/logo/testlogobesar.png') }}" class="img-fluid"/>
                            </div>
                            <div class="company-overlay bg-warning">
                                <p class="text-company-overlay">Logo 3 Description</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End 3 Company Section -->

            <!-- Start Vision and Mission -->
            <div class="container-fluid container-vision">
                <div class="row row-vision">
                    <div class="col-lg-12 mb-3">
                        <div class="vision-title" data-aos="fade-right" data-aos-duration="1500">Our Vision.</div>
                    </div>
                    <div class="col-lg-12">
                        <div class="vision-content text-justify mb-3" data-aos="fade-up" data-aos-duration="1500">
                            {{ $vision }}
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="mission-title" data-aos="fade-right" data-aos-duration="1500">Our Mission.</div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mission-content text-justify" data-aos="fade-up" data-aos-duration="1500">
                            {!! html_entity_decode($mission) !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Vision and Mission -->

            <!-- Start Goals Content -->
            <div class="container-fluid container-goals p-4 bg-warning">
                <div class="row p-5">
                    <div class="col-lg-12 mb-3">
                        <div class="goals-title text-center" data-aos="fade-down" data-aos-duration="1500">Intra Corp Goals</div>
                    </div>
                    <div class="col-lg-12 pb-3">
                        <div class="goals-content text-center" data-aos="fade-up" data-aos-duration="1500">
                            {{ $goals }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Goals Content -->

        </div>

        <!-- Footer -->
        @include('user/footer')

        <!-- JavaScript Links -->
        @include('include/javascript')
    </body>
</html>
