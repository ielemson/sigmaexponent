
@php
    $setting = \App\Models\Setting::find(1);
@endphp
<!-- banner-area -->
<section class="banner-area-eight fix banner-bg-eight" data-background="{{ asset("assets/img/banner/h9_hero_bg.jpg") }}">
    <div class="container-fluid p-0">
        <div class="row g-0 justify-content-end">
            <div class="col-xl-6 col-lg-7">
                <div class="banner-content-eight">
                    <span class="title" data-aos="fade-up" data-aos-delay="200">Sigma Exponent</span>
                    <h3 class="title" data-aos="fade-up" data-aos-delay="300">Consulting <br> & Investment Services </h3>
                    <p data-aos="fade-up" data-aos-delay="500">
                        At Sigma Exponent LLC, we redeﬁne possibilities in the realm of investment and consulting.
                    </p>
                    <div class="banner-btn-seven" data-aos="fade-up" data-aos-delay="700">
                        <a href="{{ route("Ourservices") }}" class="btn btn-three border-btn">See Our Services</a>
                    </div>
                    <div class="banner-content-shape">
                        <img src="{{ asset("assets/img/banner/h9_hero_shape01.png") }}" alt="" data-aos="fade-up-right" data-aos-delay="800">
                        <img src="{{ asset("assets/img/banner/h9_hero_shape02.png") }}" alt="" data-aos="fade-down-left" data-aos-delay="800">
                    </div>
                    <div class="banner-follow-wrap">
                        <h6 class="title">Follow us</h6>
                        <ul class="list-wrap">
                            <li><a href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-area-end -->