@extends('layouts.app')
@section("title")
&NotVerticalBar; Our Blogs
@endsection
@section('content')
     <!-- breadcrumb-area -->
   @include("includes.breadcrumb",["header_1"=>"Blog",'header_2'=>"Blog","img"=>"assets/img/bg/about.jpg"])
    <!-- breadcrumb-area-end -->

         <!-- blog-area -->
       @if (count($blogs) > 0)
       <section class="blog-area pt-120 pb-120">
        <div class="container">
            <div class="inner-blog-wrap">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="blog-post-wrap">
                            <div class="row">
                                @if (count($blogs) > 0)
                                    @foreach ($blogs as $post)
                                    <div class="col-md-4">
                                        <div class="blog-post-item-two">
                                            <div class="blog-post-thumb-two">
                                                <a href="{{ route("frontend.post",$post->slug) }}"><img src="{{ asset("images/blog/$post->image") }}" alt="{{ $post->title }}" style="width:392px; height:260px"></a>
                                               
                                            </div>
                                            <div class="blog-post-content-two">
                                                <h2 class="title"><a href="{{ route("frontend.post",$post->slug) }}">{{ $post->title }}</a></h2>
                                                <p>
                                                    {!! Illuminate\Support\Str::limit($post->content, 50) !!}
                                                </p>
                                                <div class="blog-meta">
                                                    <ul class="list-wrap">
                                                        <li>
                                                            <a href="{{ route("frontend.post",$post->slug) }}"><img src="{{ asset("images/blog/avatar.png") }}" alt="">{{ $post->user->name }}</a>
                                                        </li>
                                                        <li><i class="far fa-calendar"></i>{{ Carbon\Carbon::parse($post->created_at)->isoFormat('MMM YY') }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif
                              
                               
                            </div>
                            <div class="pagination-wrap mt-30">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination list-wrap">
                                     {{ $blogs->links() }}
                                       
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </section>
       @else
               <!-- error-area -->
               <section class="error-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="error-content">
                                {{-- <h1 class="error-404">4<span>0</span>4</h1> --}}
                                <h2 class="title">OOPS! Nothing Was Found</h2>
                                <p>We will post some blogs soon</p>
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