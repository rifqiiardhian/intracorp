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
            <!-- Start Contact Banner -->
            <div class="contact-parallax" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/bootstrap/css/banner/testbanner1.png')">
                <div class="contact-banner-text">
                    <div class="contact-banner-title" data-aos="fade-right" data-aos-duration="1500">Contact Us</div>
                    <p data-aos="fade-right" data-aos-duration="1500">Home / Contact Us</p>
                </div>
            </div>
            <!-- End Contact Banner -->

            <!-- Start Maps Area -->
            <div class="container-fluid container-maps pt-5 bg-light">
                <div class="row row-maps">
                    <div class="col-lg-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d246.96098323144216!2d112.6111229070687!3d-7.960066730424656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827c5559b751%3A0x9fdfd1429584e18b!2sJl.%20Bend.%20Wlingi%20No.30%2C%20Sumbersari%2C%20Kec.%20Lowokwaru%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065145!5e0!3m2!1sid!2sid!4v1592141094126!5m2!1sid!2sid"
                        width="100%" height="300" frameborder="0" style="border:0;" class="company-maps" allowfullscreen="" aria-hidden="false" tabindex="0" crossorigin="anonymous"></iframe>
                    </div>
                </div>
            </div>
            <!-- End Maps Area -->

            <!-- Start Contact Form and Information -->
            <div class="container-fluid container-contact bg-light">
                <div class="row row-contact">
                    <div class="col-md-4">
                        <div class="contact-info">
                            <img src="{{ url('assets/images/logo/testlogokecil.png')}}" class="img-fluid contact-logo" style="max-width: 200px"/>
                            <h4 class="text-dark mb-3">Intra Corporation</h4>
                            <h5 class="contact-info-title">Office</h5>
                            <div class="contact-content">
                                Jalan Raya No. 1 Kec. Lowokwaru Kota Malang, Jawa Timur, Indonesia 65156
                            </div>
                            <h5 class="contact-info-title">Phone</h5>
                            <div class="contact-content">
                                0341767677 / +6281679789799
                            </div>
                            <h5 class="contact-info-title">Email</h5>
                            <div class="contact-content">
                                intra_ko@yahoo.co.id
                            </div>
                            <h5 class="contact-info-title">Instagram</h5>
                            <div class="contact-content">
                                @intra.ko
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <form action="" method="">
                            <div class="form-group">
                                <input type="text" name="first-name" id="first-name" class="contact-form" placeholder="First Name"/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="last-name" id="last-name" class="contact-form" placeholder="Last Name"/>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="contact-form" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" class="contact-form" placeholder="Subject"/>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" class="contact-form" style="height: 250px" placeholder="Your Message"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-contact">SEND MESSAGE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End COntact Form and Information -->

        </div>

        <!-- Footer -->
        @include('user/footer')

        <!-- JavaScript Links -->
        @include('include/javascript')
    </body>
</html>
