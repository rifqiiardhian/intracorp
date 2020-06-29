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
            <!-- Start Works Banner -->
            <div class="works-parallax" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/bootstrap/css/banner/testbanner1.png')">
                <div class="works-banner-text">
                    <div class="works-banner-title" data-aos="fade-right" data-aos-duration="1500">Our Works</div>
                    <p data-aos="fade-right" data-aos-duration="1500">Home / Our Works</p>
                </div>
            </div>
            <!-- End Works Banner -->

            <!-- Start Works Subtitle -->
            <div class="container-fluid bg-light p-5">
                <div class="row pt-2">
                    <div class="col-lg-12">
                        <h1 class="about-title text-center" data-aos="fade-down" data-aos-duration="1500">Works and Projects by Intra</h1>
                        <p class="subtitle-content text-center" data-aos="fade-up" data-aos-duration="1500">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Works Subtitle -->

            <!-- Start Works Content -->
            <div class="container-fluid container-works pl-5 pr-5 pb-5 bg-light">
                <div class="row row-works">
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
                </div>
                <div class="row row-works">
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
                </div>
            </div>
            <!-- End Works Content -->

            <!-- Start Satisfied Client -->
            <div class="container-fluid container-client">
                <div class="row row-client text-center">
                    <div class="col-md-12">
                        <div class="client-title pb-2" data-aos="fade-down" data-aos-duration="1500">Our Satisfied Clients</div>
                        <div class="client-subtitle" data-aos="fade-down" data-aos-duration="1500">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                        </div>
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

        </div>

        <!-- Footer -->
        @include('user/footer')

        <!-- JavaScript Links -->
        @include('include/javascript')
    </body>
</html>
