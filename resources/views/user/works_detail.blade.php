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
            <div class="worksdetail-parallax" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/bootstrap/css/banner/testbanner1.png')">
                <div class="worksdetail-banner-text">
                    <div class="worksdetail-banner-title" data-aos="fade-right" data-aos-duration="1500">Works Detail</div>
                </div>
            </div>
            <!-- End Works Banner -->

            <!-- Start Works Detail -->
            <div class="container-fluid container-detail bg-light">
                <div class="row row-detail">
                    <div class="col-lg-12 pb-4">
                        <h1 class="about-title" data-aos="fade-right" data-aos-duration="1500">Project / Works Title</h1>
                        <p class="subtitle-detail" data-aos="fade-right" data-aos-duration="1500">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div id="carouselExampleIndicators" class="carousel slide detail-image" data-ride="carousel" data-aos="zoom-in-right" data-aos-duration="1500">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ url('assets/images/worksdetail/worksdetail1.png')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ url('assets/images/worksdetail/worksdetail2.png')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ url('assets/images/worksdetail/worksdetail3.png')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ url('assets/images/worksdetail/worksdetail1.png')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ url('assets/images/worksdetail/worksdetail2.png')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ url('assets/images/worksdetail/worksdetail3.png')}}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="detail-description">
                            <div class="detail-text">
                                <h1 class="detail-title mb-3" data-aos="fade-down" data-aos-duration="1500">What We Do ?</h1>
                                <div class="about-text text-justify" data-aos="fade-up" data-aos-duration="1500">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <div class="client-detail-logo">
                            <h6 class="detail-logo-title mt-3" data-aos="fade-right" data-aos-duration="1500">CLIENT IN THIS PROJECTS</h6>
                            <img src="{{ url('assets/images/logo/testlogokecil.png')}}" class="img-fluid" style="max-width: 200px"  data-aos="fade-left" data-aos-duration="1500"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Works Detail -->

        </div>

        <!-- Footer -->
        @include('user/footer')

        <!-- JavaScript Links -->
        @include('include/javascript')
    </body>
</html>
