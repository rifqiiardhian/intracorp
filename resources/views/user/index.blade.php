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
            <!-- Start Home Banner -->
            <div class="home-parallax" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/bootstrap/css/banner/testbanner1.png')">
                <div class="home-banner-text">
                    <div class="banner-title ht-5" data-aos="fade-right" data-aos-duration="1500">Welcome to Intra Corp</div>
                    <p  data-aos="fade-left" data-aos-duration="1500"><b>GENERAL CONTRACTOR AND CONSULTANT ENGINEERING</b></p>
                </div>
            </div>
            <!-- End Home Banner -->

            <!-- Start Marquee Greetings -->
            <div class="container-fluid container-greeting bg-warning">
                <div class="row p-3">
                    <div class="col-lg-12">
                        <marquee>
                            <div class="text-greeting text-white">
                                {{ $greeting }}
                            </div>
                        </marquee>
                    </div>
                </div>
            </div>
            <!-- End Marquee Greetings -->

            <!-- Start 3 Company Section -->
            <div class="container-fluid container-company bg-light">
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

            <!-- Start About Us -->
            <div class="container-fluid container-about bg-light">
                <div class="row row-about pb-5">
                    <div class="col-md-12">
                        <div class="about-content">
                            <div class="about-title mb-2"  data-aos="fade-right" data-aos-duration="1500">About Us.</div>
                            <div class="about-text text-justify"  data-aos="fade-up" data-aos-duration="1500">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </div>
                            <div class="button-red-about" data-aos="fade-up" data-aos-duration="1500">
                                <a href="{{ url('/about-us') }}">
                                    <button class="btn btn-more mt-4"><span class="more-arrow-right">SHOW MORE</span></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End About Us -->

            <!-- Start Our Services -->
            <div class="home-parallax-services" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/bootstrap/css/banner/testbanner1.png')">
                <div class="container-fluid container-services">
                    <div class="row row-services">
                        <div class="col-md-12">
                            <div class="services-title pb-4" data-aos="fade-right" data-aos-duration="1500">Our Services.</div>
                        </div>
                        @foreach($services as $dataservice)
                        <div class="col-md-6">
                            <div class="card card-services" data-aos="fade-up" data-aos-duration="1500">
                                <div class="card-body card-body-services">
                                    <div class="services-content">{{ $dataservice->name }}</div>
                                </div>
                                <div class="services-overlay">
                                    <p class="text-services-overlay">{{ $dataservice->description }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- End Our Services -->

            <!-- Start Satisfied Client -->
            <div class="container-fluid container-client bg-light">
                <div class="row row-client text-center">
                    <div class="col-md-12">
                        <div class="client-title pb-2" data-aos="fade-down" data-aos-duration="1500">Our Satisfied Clients</div>
                        <p class="client-subtitle" data-aos="fade-down" data-aos-duration="1500">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                        </p>
                        <div class="customer-logos slider" data-aos="zoom-in" data-aos-duration="1500">
                            <div class="slide client-logo"><img src="{{ url('assets/images/logo/testlogoclient1.png') }}" class="img-fluid"/></div>
                            <div class="slide client-logo"><img src="{{ url('assets/images/logo/testlogoclient2.png') }}" class="img-fluid"/></div>
                            <div class="slide client-logo"><img src="{{ url('assets/images/logo/testlogoclient1.png') }}" class="img-fluid"/></div>
                            <div class="slide client-logo"><img src="{{ url('assets/images/logo/testlogoclient2.png') }}" class="img-fluid"/></div>
                            <div class="slide client-logo"><img src="{{ url('assets/images/logo/testlogoclient1.png') }}" class="img-fluid"/></div>
                            <div class="slide client-logo"><img src="{{ url('assets/images/logo/testlogoclient2.png') }}" class="img-fluid"/></div>
                            <div class="slide client-logo"><img src="{{ url('assets/images/logo/testlogoclient1.png') }}" class="img-fluid"/></div>
                            <div class="slide client-logo"><img src="{{ url('assets/images/logo/testlogoclient2.png') }}" class="img-fluid"/></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Satisfied Client -->

            <!-- Start Our Works -->
            <div class="container-fluid container-works p-5 bg-dark">
                <div class="row row-works">
                    <div class="col-md-12">
                        <div class="works-title pb-4" data-aos="fade-right" data-aos-duration="1500">Our Latest Works.</div>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-duration="1500">
                        <a href="{{ url('/our-works/detail') }}">
                            <div class="works-thumbnail">
                                <img src="{{ url('assets/images/works/testworks.png') }}" class="img-fluid img-works"/>
                                <div class="works-desc">
                                    <div class="works-text">Works Description</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-duration="1500">
                        <a href="{{ url('/our-works/detail') }}">
                            <div class="works-thumbnail">
                                <img src="{{ url('assets/images/works/testworks.png') }}" class="img-fluid img-works"/>
                                <div class="works-desc">
                                    <div class="works-text">Works Description</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-duration="1500">
                        <a href="{{ url('/our-works/detail') }}">
                            <div class="works-thumbnail">
                                <img src="{{ url('assets/images/works/testworks.png') }}" class="img-fluid img-works"/>
                                <div class="works-desc">
                                    <div class="works-text">Works Description</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 text-center pt-4">
                        <a href="{{ url('/our-works') }}">
                            <button class="btn btn-more" data-aos="zoom-in" data-aos-duration="1500"><span class="more-arrow-right">SHOW MORE</span></div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Our Works -->
        </div>

        <!-- Footer -->
        @include('user/footer')

        <!-- JavaScript Links -->
        @include('include/javascript')
    </body>
</html>
