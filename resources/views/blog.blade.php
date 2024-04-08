@extends('layouts.app')
@section("title")
&NotVerticalBar; Blog
@endsection
@section('content')
     <!-- breadcrumb-area -->
   @include("includes.breadcrumb",["header_1"=>"Blog",'header_2'=>"Blog","img"=>"assets/img/bg/about.jpg"])
    <!-- breadcrumb-area-end -->

          <!-- blog-details-area -->
          <section class="blog-details-area pt-120 pb-120">
            <div class="container">
                <div class="blog-details-wrap">
                    <div class="row justify-content-center">
                        <div class="col-71">
                            <div class="blog-details-thumb">
                                <img src="{{ asset("images/blog/$blog->image") }}" alt="" style="width:857px; height:480px">
                            </div>
                            <div class="blog-details-content">
                                <h2 class="title">{{ $blog->title }}</h2>
                                <div class="blog-meta-three">
                                    <ul class="list-wrap">
                                        <li><i class="far fa-calendar"></i>22 Jan, 2023</li>
                                        <li><img src="{{ asset("images/blog/avatar.png") }}" alt="" style="width: 15%"> by <a href="#">{{ $blog->user->name }}</a></li>
                                        <li><i class="fas fa-tags"></i> <a href="#">{{ $blog->category->cat_name }}</a></li>
                                        <li><i class="flaticon-speech-bubble"></i><a href="blog-details.html">0 Comments</a></li>
                                    </ul>
                                </div>
                                {!! $blog->content !!}
                                <div class="bd-content-bottom">
                                    <div class="row align-items-center">
                                        <div class="col-md-7">
                                            <div class="post-tags">
                                                <h5 class="title">Tags:</h5>
                                                <ul class="list-wrap">
                                                    @foreach ($categories as $category)
                                                        <li><a href="#">{{ $category->cat_name }}</a></li>
                                                    @endforeach
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="blog-post-share">
                                                <h5 class="title">Share:</h5>
                                                <ul class="list-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    {{-- <li><a href="#"><i class="fab fa-instagram"></i></a></li> --}}
                                                    {{-- <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                           
                      
                        </div>
                        <div class="col-29">
                            <aside class="blog-sidebar">
                                
                                <div class="blog-widget">
                                    <h4 class="bw-title">Categories</h4>
                                    <div class="bs-cat-list">
                                        <ul class="list-wrap">
                                            @foreach ($categories as $category)
                                               <li><a href="#">{{ $category->cat_name }}</a></li> 
                                            @endforeach
                                            
                                        </ul>
                                    </div>
                                </div>
                                
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details-area-end -->

        @include("includes.cta")
@endsection