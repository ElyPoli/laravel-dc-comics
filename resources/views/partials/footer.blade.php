<footer>
    <!-- Sezione superiore del footer -->
    <div class="top-footer">
        <div class="container d-flex align-items-start justify-content-between">
            <!-- Menù -->
            <div class="d-flex align-items-start justify-content-between pb-3">
                <div class="pe-4">
                    <h3 class="text-uppercase text-white text-nowrap fw-bold fs-6 m-0 p-0 pt-4 pb-3">
                        {{ $footerLinks[0]['title'] }}</h3>
                    @foreach ($footerLinks[0]['subheading'] as $subheading)
                        <p>{{ $subheading }}</p>
                    @endforeach
                    <h3 class="text-uppercase text-white text-nowrap fw-bold fs-6 m-0 p-0 pt-4 pb-3">
                        {{ $footerLinks[1]['title'] }}</h3>
                    @foreach ($footerLinks[1]['subheading'] as $subheading)
                        <p>{{ $subheading }}</p>
                    @endforeach
                </div>
                <div class="pe-4 ps-4">
                    <h3 class="text-uppercase text-white text-nowrap fw-bold fs-6 m-0 p-0 pt-4 pb-3">
                        {{ $footerLinks[2]['title'] }}</h3>
                    @foreach ($footerLinks[2]['subheading'] as $subheading)
                        <p>{{ $subheading }}</p>
                    @endforeach
                </div>
                <div class="ps-4">
                    <h3 class="text-uppercase text-white text-nowrap fw-bold fs-6 m-0 p-0 pt-4 pb-3">
                        {{ $footerLinks[3]['title'] }}</h3>
                    @foreach ($footerLinks[3]['subheading'] as $subheading)
                        <p>{{ $subheading }}</p>
                    @endforeach
                </div>
            </div>

            <!-- Logo -->
            <img class="footer-logo" src="{{ asset('img/dc-logo-bg.png') }}" alt="DC logo">
        </div>
        <div class="container my-footer-copyright">
            <p>All Site Content TM and © 2020 DC Entertainment, unless otherwise <span>noted here</span>. All right
                reserved. <span>Cookies Settings</span></p>
        </div>
    </div>

    <!-- Sezione inferiore del footer -->
    <div class="bottom-footer pt-4 pb-4">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Pulsante -->
                <div class="col-12 col-md-6">
                    <div class="my-social d-flex align-items-center justify-content-center">
                        <button type="button" class="btn my-btn-footer text-uppercase">
                            sing-up now!
                        </button>
                    </div>
                </div>
                <!-- Social -->
                <div class="col-12 col-md-6">
                    <div class="my-social d-flex align-items-center justify-content-center pt-md-0 pt-4">
                        <p class="m-0 p-0 text-uppercase text-nowrap ps-4">Follow us</p>
                        <img src="{{ asset('img/footer-fb.png') }}" alt="Facebook">
                        <img src="{{ asset('img/footer-tw.png') }}" alt="Twitter">
                        <img src="{{ asset('img/footer-youtube.png') }}" alt="Youtube">
                        <img src="{{ asset('img/footer-pinterest.png') }}" alt="Pinterest">
                        <img src="{{ asset('img/footer-periscope.png') }}" alt="Periscope">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>