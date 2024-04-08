@php
    $setting = \App\Models\Setting::find(1);
@endphp
<section class="about-area-three">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="about-img-wrap-three">
                    <img src="{{ asset("assets/img/banner/consult.jpg") }}" alt="" data-aos="fade-down-right" data-aos-delay="0">
                    <img src="assets/img/images/consult.jpg" alt="" data-aos="fade-left" data-aos-delay="400">
                    <div class="experience-wrap" data-aos="fade-up" data-aos-delay="300">
                        {{-- <h2 class="title">25 <span>Years</span></h2> --}}
                        <p>High Depth of Experienced Resources</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-three">
                    <div class="section-title-two mb-20 tg-heading-subheading animation-style3">
                        <span class="sub-title">Get To know US</span>
                        <h2 class="title tg-element-title">About Us</h2>
                    </div>
                    <p class="info-one">
                        {{ $setting->about }} 
                    </p>
                    <br>
                    <h2 class="title tg-element-title">Who We Are</h2>

                     <p class="info-one">
                      {{$setting->who_we_are}}
                    </p>
            
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="about-shape-wrap-two">
        <img src="assets/img/images/h2_about_shape01.png" alt="">
        <img src="assets/img/images/h2_about_shape02.png" alt="">
        <img src="assets/img/images/h2_about_shape03.png" alt="" data-aos="fade-left" data-aos-delay="500">
    </div> --}}
</section>