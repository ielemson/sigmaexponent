@extends('layouts.app')
@section("title")
&NotVerticalBar; Our Services
@endsection
@section('content')
     <!-- breadcrumb-area -->
   @include("includes.breadcrumb",["header_1"=>"Services",'header_2'=>"Our Services","img"=>"assets/img/bg/about.jpg"])
    <!-- breadcrumb-area-end -->

         <!-- blog-area -->
       @if (count($services) > 0)
       
            <!-- services-area -->
            <section class="services-area-six">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title-two mb-60">
                                <span class="sub-title">What We Do For You</span>
                                <h2 class="title">We Offer Different Services</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-top-content mb-30">
                                <p>At Sigma Exponent, our services are topnoch with experienced staff to handle your request.
                                Kindly go through our list of services we offer.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                   @foreach ($services as $service)
                   <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                    <div class="services-item-two">
                        <div class="services-thumb-two">
                            <img src="{{asset("assets/images/services/$service->img")}}" alt="">
                            
                        </div>
                        <div class="services-content-two">
                            <div class="icon">
                                <i class="flaticon-inspiration"></i>
                            </div>
                            <h2 class="title"><a href="{{ route("frontend.service",$service->slug) }}">{{ $service->title }}</a></h2>
                            {{-- <p>Morem ipsum dolor ametey consectre adipiscing.</p> --}}
                        </div>
                    </div>
                </div>
                   @endforeach
                    </div>
                </div>
            </section>
            <!-- services-area-end -->
       @else
               <!-- error-area -->
               <section class="error-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="error-content">
                                {{-- <h1 class="error-404">4<span>0</span>4</h1> --}}
                                <h2 class="title">OOPS! Nothing Was Found</h2>
                                <p>We will postour services soon</p>
                                <a href="{{ url("/") }}" class="btn btn-three">Go Back To Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- error-area-end -->
       @endif
        <!-- blog-area-end -->

        @include("includes.cta")
@endsection