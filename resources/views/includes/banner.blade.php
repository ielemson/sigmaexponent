 <!-- header-area -->

 <div id="header-fixed-height"></div>
 <header class="header-style-six">
     <div class="heder-top-wrap">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-7">
                     <div class="header-top-left">
                         <ul class="list-wrap">
                             <li><i class="flaticon-location"></i>{{ $setting->address }}</li>
                             <li><i class="flaticon-mail"></i><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-5">
                     <div class="header-top-right">
                         <div class="header-contact">
                             <a href="tel:+1 8324066596"><i class="flaticon-phone-call"></i>{{ $setting->hotline }}</a>
                         </div>
                         <div class="header-social">
                             <ul class="list-wrap">
                                 <li><a href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                 <li><a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                 {{-- <li><a href="#"><i class="fab fa-instagram"></i></a></li> --}}
                                 {{-- <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li> --}}
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div id="sticky-header" class="menu-area">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                     <div class="menu-wrap">
                         <nav class="menu-nav">
                             <div class="logo">
                                 <a href="{{ url("/") }}"><img src="{{ asset("assets/img/logo/logo.png") }}" alt="Logo"></a>
                             </div>
                             <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="active"><a href="{{ route('welcome') }}">Home</a>
                                     
                                    </li>
                                    <li class=""><a href="{{ route('about') }}">About Us</a>
                                       
                                    </li>
                                    <li ><a href="{{ route("Ourservices") }}">Services</a>
                                        {{-- <ul class="sub-menu">
                                          
                                            @if (count($services) > 0)
                                            @foreach ($services as $service)
                                            <li><a href="{{ route("frontend.service",$service->slug) }}">
                                              {{ $service->title }}
                                              </a>
                                          </li>
                                         
                                            @endforeach 
                                         @endif
                                           
                                           
                                        </ul> --}}
                                    </li>
                                    <li><a href="{{ route("frontend.posts") }}">Blog</a>
                                        
                                    </li>
                                    <li><a href="{{ route('contact') }}">Contacts</a></li>
                                    @auth
                                    <li><a href="#">User</a>
                                        <ul class="sub-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>
                                    <a  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                            Logout
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </li>
                            @else
                                <li><a href="{{ route('login') }}">Login</a></li>
                            @endauth
                                </ul>
                             </div>
                             <div class="header-action d-none d-md-block">
                                 <ul class="list-wrap">
                                     <li class="header-search"><a href="#"><i class="flaticon-search"></i></a></li>
                                     <li class="header-btn"><a href="{{ route("contact") }}" class="btn btn-two">Contact Us</a></li>
                                 </ul>
                             </div>
                         </nav>
                     </div>

                     <!-- Mobile Menu  -->
                     <div class="mobile-menu">
                         <nav class="menu-box">
                             <div class="close-btn"><i class="fas fa-times"></i></div>
                             <div class="nav-logo">
                                 <a href="index.html"><img src="{{ asset("assets/img/logo/logo.png") }}" alt="Logo"></a>
                             </div>
                             <div class="mobile-search">
                                 <form action="#">
                                     <input type="text" placeholder="Search here...">
                                     <button><i class="flaticon-search"></i></button>
                                 </form>
                             </div>
                             <div class="menu-outer">
                                 <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                             </div>
                             <div class="social-links">
                                 <ul class="clearfix list-wrap">
                                     <li><a href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                     <li><a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                     {{-- <li><a href="#"><i class="fab fa-instagram"></i></a></li> --}}
                                     {{-- <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li> --}}
                                     {{-- <li><a href="#"><i class="fab fa-youtube"></i></a></li> --}}
                                 </ul>
                             </div>
                         </nav>
                     </div>
                     <div class="menu-backdrop"></div>
                     <!-- End Mobile Menu -->

                 </div>
             </div>
         </div>
     </div>

     <!-- header-search -->
     {{-- <div class="search-popup-wrap" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="search-close">
             <span><i class="fas fa-times"></i></span>
         </div>
         <div class="search-wrap text-center">
             <div class="container">
                 <div class="row">
                     <div class="col-12">
                         <h2 class="title">... Search Here ...</h2>
                         <div class="search-form">
                             <form action="#">
                                 <input type="text" name="search" placeholder="Type keywords here">
                                 <button class="search-btn"><i class="fas fa-search"></i></button>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div> --}}
     <!-- header-search-end -->

 </header>
 <!-- header-area-end -->