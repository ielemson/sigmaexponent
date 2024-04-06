@extends('layouts.app')

@section('content')
     <!-- breadcrumb-area -->
   @include("includes.breadcrumb",["header_1"=>"Our Service",'header_2'=>"$service->title"])
    <!-- breadcrumb-area-end -->

        {{-- <!-- services-details-area -->
        <section class="services-details-area pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-71 order-0 order-lg-2">
                        <div class="services-details-wrap">
                            <div class="services-details-content">
                                <h2 class="title" style="text-align: center">{{ $service->title }}</h2>
                                <p style="text-align: justify">
                               {{ $service->content }}     
                               </p>                             
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </section>
        <!-- services-details-area-end --> --}}
        <section class="services-details-area pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-71 order-0 order-lg-2">
                        <div class="services-details-wrap">
                            <div class="services-details-thumb">
                                <img src="{{ asset("assets/images/services/$service->img") }}" alt="" style="height:35vw">
                            </div>
                            <div class="services-details-content">
                                <h2 class="title">{{ $service->title }}</h2>
                                <p>
                                    {!! $service->content !!}
                                </p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-29">
                        <aside class="services-sidebar">
                            <div class="services-cat-list mb-30">
                                <ul class="list-wrap">
                                    @foreach ($services as $main)
                                    <li class="{{ $service->id == $main->id ? 'active':'' }}"><a href="{{ route("frontend.service",$main->slug) }}">{{ $main->title }}<i class="flaticon-right-arrow"></i></a></li>
                                    @endforeach
                                   
                                </ul>
                            </div>
                         
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        
        @include("includes.cta")
@endsection