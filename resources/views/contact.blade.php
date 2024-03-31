@extends('layouts.app')

@section('content')
    <!-- breadcrumb-area -->
    @include("includes.breadcrumb",["header_1"=>"Contact",'header_2'=>"Contact Us","img"=>"assets/img/bg/contact.jpg"])
    <!-- breadcrumb-area-end -->

    <!-- contact-area -->
    <section class="inner-contact-area pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="inner-contact-img">
                        <img src="{{ asset("assets/img/banner/consult-1.jpg") }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-contact-info">
                        <h2 class="title">Our Mailing Address</h2>
                        <div class="contact-info-item">
                            {{-- <h5 class="title-two">Head Office</h5> --}}
                            <ul class="list-wrap">
                                <li> P.O Box 441564, Houston Texas, 77244</li>
                                <li>+1(832)406-6596</li>
                                <li>(+234)816-722-9055 </li>
                                <li>info@sigmaexponent.com</li>
                            </ul>
                        </div>
                        {{-- <div class="contact-info-item">
                            <h5 class="title-two">Australia Office</h5>
                            <ul class="list-wrap">
                                <li>100 Wilshire Blvd, Suite 700 Santa <br> Monica, CA 90401, USA</li>
                                <li>+1 (310) 620-8565</li>
                                <li>info@gmail.com</li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->


    <!-- contact-map -->
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d32956.582833847024!2d-95.6265229709829!3d29.744833522870984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sP.O%20Box%20441564%2C%20Houston%20Texas%2C%2077244!5e0!3m2!1sen!2sng!4v1711683818628!5m2!1sen!2sng"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.332792000835!2d144.96011341744386!3d-37.805673299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sbd!4v1685027435635!5m2!1sen!2sbd" allowfullscreen loading="lazy"></iframe> --}}
    </div>
    <!-- contact-map-end -->



@endsection