@extends('layouts.master')

@section('content')
    <!-- banner-area -->
    @include('includes.home_banner')
    <!-- banner-area-end -->
    <!-- features-area -->
    {{-- <section class="features-area-two pt-80">
<div class="container">
<div class="features-item-wrap">
<div class="row justify-content-center">
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="features-item-two">
<div class="features-icon-two">
<i class="flaticon-profit"></i>
</div>
<div class="features-content-two">
<h4 class="title">Growing Business</h4>
<p>Finance helps you to convert into a strategic asset get.</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="features-item-two">
<div class="features-icon-two">
<i class="flaticon-investment"></i>
</div>
<div class="features-content-two">
<h4 class="title">Finance Investment</h4>
<p>Finance helps you to convert into a strategic asset get.</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="features-item-two">
<div class="features-icon-two">
<i class="flaticon-taxes"></i>
</div>
<div class="features-content-two">
<h4 class="title">Tax Advisory</h4>
<p>Finance helps you to convert into a strategic asset get.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section> --}}
    <!-- features-area-end -->

    <!-- about-area -->
    @include('includes.who_we_are')
    <!-- about-area-end -->

    <!-- cta-area -->
    <section class="cta-area-seven fix">
        <div class="cta-bg" data-background="{{ asset("assets/img/bg/h9_cta_bg.jpg") }}"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div
                        class="section-title-two white-title text-center text-lg-start tg-heading-subheading animation-style3">
                        <h2 class="title tg-element-title">Let’s Discuss About How We Can Help Make Your Business Better</h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cta-btn-two">
                        <a href="{{ route('contact') }}" class="btn btn-three border-btn">Let’s Work Together</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-shape">
            <img src="{{ asset("assets/img/images/h9_cta_shape.png") }}" alt="shape" data-aos="fade-down-left" data-aos-delay="400">
        </div>
    </section>
    <!-- cta-area-end -->
    <!-- features-area -->
    <section class="features-area-eight">
        <div class="container custom-container-five">
            <div class="features-inner-wrap">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="features-item-five">
                            <div class="features-icon-five">
                                <i class="flaticon-layers"></i>
                            </div>
                            <div class="features-content-five">
                                <h2 class="title">Our Mission</h2>
                                <p style="text-align: justify">
                                    Our mission is to catalyze growth and prosperity for our clients through strategic
                                    investment solutions and unparalleled consulting services. We strive to foster enduring
                                    relationships built on trust, integrity, and shared success.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="features-item-five">
                            <div class="features-icon-five">
                                <i class="flaticon-mission"></i>
                            </div>
                            <div class="features-content-five">
                                <h2 class="title">Our Approach</h2>
                                <p style="text-align: justify">
                                    Sigma Exponent LLC adopts a holistic approach to investment and consulting, grounded in
                                    a commitment to understanding our clients' unique objectives, challenges, and
                                    opportunities. By fostering open communication and collaboration, we cultivate enduring
                                    partnerships that transcend transactional interactions and evolve into lasting
                                    value-driven
                                    relationships.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-4">
                        <div class="features-item-five">
                            <div class="features-icon-five">
                                <i class="flaticon-business-presentation"></i>
                            </div>
                            <div class="features-content-five">
                                <h2 class="title">Why Choose Us</h2>
                                <p style="text-align: justify">
                                    <b>Expertise</b>: Our team brings together diverse expertise across various sectors and
                                    disciplines to deliver comprehensive solutions tailored to your needs. <br>
                                    <b>Innovation</b>: We embrace innovation and leverage cutting-edge technologies to stay
                                    ahead
                                    of market trends and deliver forward-thinking strategies. <br>
                                    <b>Integrity</b>: Integrity is at the core of everything we do. We prioritize
                                    transparency, honesty,
                                    and ethical conduct in all our interactions. <br>
                                    <b>Results-Oriented</b>: We are committed to delivering measurable results that exceed
                                    expectations and drive sustainable growth for our clients.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-4">
                        <div class="features-item-five">
                            <div class="features-icon-five">
                                <i class="flaticon-handshake"></i>
                            </div>
                            <div class="features-content-five">
                                <h2 class="title">Get In Touch</h2>
                                <p style="text-align: justify">
                                    Ready to unlock your full potential today to discover how
                                    our investment and consulting solutions can accelerate your journey towards ﬁnancial
                                    success.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- features-area-end -->

    @include("includes.cta")
@endsection
