
 <!-- header-area -->
 <div id="header-fixed-height"></div>
 <header>
     <div id="sticky-header" class="menu-area menu-area-five">
         <div class="container-fulid">
             <div class="row g-0">
                 <div class="col-12">
                     <div class="menu-wrap">
                         <nav class="menu-nav">
                             <div class="offcanvas-menu offcanvas-menu-three">
                                 <a href="#" class="menu-tigger">
                                     <span></span>
                                     <span></span>
                                     <span></span>
                                 </a>
                             </div>
                             <div class="logo">
                                 <a href="{{ url("/") }}"><img src="{{ asset("assets/img/logo/logo.png") }}" alt="logo"></a>
                             </div>
                             <div class="navbar-wrap main-menu d-none d-lg-flex">
                                 <ul class="navigation">
                                     <li><a href="{{ url("/") }}">Home</a>
                                        
                                     </li>
                                     <li ><a href="{{ route("about") }}">About Us</a>
                                        
                                     </li>
                                     <li class="menu-item-has-children"><a href="#">Our Services</a>
                                         <ul class="sub-menu">
                                            @if (count($services) > 0)
                                            @foreach ($services as $service)
                                            <li><a href="{{ route("frontend.service",$service->slug) }}">
                                              {{ $service->title }}
                                              </a>
                                          </li>
                                         
                                            @endforeach 
                                         @endif
                                         </ul>
                                     </li>
                                     <li><a href="{{ route("frontend.posts") }}">Blog</a></li>
                                     <li><a href="{{ route("contact") }}">contacts</a></li>
                                 </ul>
                             </div>
                             <div class="header-action header-action-five d-none d-md-block">
                                 <ul class="list-wrap">
                                     <li class="header-search"><a href="#"><i class="flaticon-search"></i></a></li>
                                     <li class="header-contact-two header-contact-four">
                                         <div class="icon">
                                             <i class="flaticon-phone-call"></i>
                                         </div>
                                         <div class="content">
                                             <span>Hot Line Number</span>
                                             <a href="tel:+18324066596 ">+1 832 406 6596 </a>
                                         </div>
                                     </li>
                                     <li class="header-btn header-btn-four">
                                         <a href="{{ route("contact") }}" class="btn btn-two border-btn">Get Consultant</a>
                                     </li>
                                 </ul>
                             </div>
                             <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                         </nav>
                     </div>

                     <!-- Mobile Menu  -->
                     <div class="mobile-menu">
                         <nav class="menu-box">
                             <div class="close-btn"><i class="fas fa-times"></i></div>
                             <div class="nav-logo">
                                 <a href="index.html"><img src="assets/img/logo/logo.png" alt="Logo"></a>
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
                                     <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                     <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                     {{-- <li><a href="#"><i class="fab fa-instagram"></i></a></li> --}}
                                     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
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

 

     <!-- offCanvas-menu -->
     <div class="extra-info">
         <div class="close-icon menu-close">
             <button><i class="far fa-window-close"></i></button>
         </div>
         <div class="logo-side mb-30">
             <a href="{{ url("/") }}"><img src="{{ asset("assets/img/logo/logo.png") }}" alt="logo"></a>
         </div>
         <div class="side-info mb-30">
             <div class="contact-list mb-30">
                 <h4>Office Address</h4>
                 <p>P.O Box 441564, Houston Texas, 77244</p>
             </div>
             <div class="contact-list mb-30">
                 <h4>Phone Number</h4>
                 <p>+1 832 406 6596 </p>
                 <p>+234 816 722 9055</p>
             </div>
             <div class="contact-list mb-30">
                 <h4>Email Address</h4>
                 <p>info@sigmaexponent.com</p>
             </div>
         </div>
       
     </div>
     <div class="offcanvas-overly"></div>
     <!-- offCanvas-menu-end -->

 </header>
 <!-- header-area-end -->