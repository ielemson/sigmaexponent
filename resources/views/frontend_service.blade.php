@extends('layouts.app')

@section('content')
     <!-- breadcrumb-area -->
   @include("includes.breadcrumb",["header_1"=>"Our Service",'header_2'=>"$service->title"])
    <!-- breadcrumb-area-end -->

        <!-- services-details-area -->
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
        <!-- services-details-area-end -->
        
        @include("includes.cta")
@endsection