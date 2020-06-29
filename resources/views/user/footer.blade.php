<footer class="footer">
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ url('assets/images/logo/testlogokecil.png')}}" class="img-fluid mb-3 footer-logo"/>
                <p class="footer-subtitle">GENERAL CONTRACTOR AND CONSULTANT ENGINEERING</p>
            </div>
            <div class="col-md-4">
                <h3 class="footer-title mb-2">Contact Us</h3>
                <span><a href="tel:{{ $phone }}"><i class="zmdi zmdi-phone link-footer pr-3 icon-contact"></i></a></span>
                <span><a href="https://api.whatsapp.com/send?phone={{ $whatsapp }}&text=Saya%20tertarik%20dengan%20jasa%20Intra%20Kontraktor%20dan%20Konsultan%20Malang"><i class="zmdi zmdi-whatsapp link-footer p-3 icon-contact"></i></a></span>
                <span><a href="https://www.instagram.com/{{ $instagram }}"><i class="zmdi zmdi-instagram link-footer p-3 icon-contact"></i></a></span>
                <span><a href="mailto:{{ $email }}"><i class="zmdi zmdi-email link-footer pl-3 icon-contact"></i></a></span>
            </div>
            <div class="col-md-4">
                <h3 class="footer-title mb-2">Our Office</h3>
                <p class="footer-subtitle">{{ $office }}</p>
                <h3 class="footer-title mb-2">Our Workshop</h3>
                <p class="footer-subtitle">{{ $workshop }}</p>
            </div>
        </div>
        <hr/>
        <div class="row row-credit mt-5">
            <div class="col-md-12">
                <p class="text-center footer-subtitle">
                    Copyright &copy;2020 Intra Corp. All Rights Reserved
                    <br/>
                    Proudly Presented by Rifqi Ardhian
                </p>
            </div>
        </div>
    </div>
</footer>
