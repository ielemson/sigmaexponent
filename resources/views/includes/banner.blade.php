 <!-- header-area -->
 <div id="header-fixed-height"></div>
 <header class="header-style-six">
     <div class="heder-top-wrap">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-7">
                     <div class="header-top-left">
                         <ul class="list-wrap">
                             <li><i class="flaticon-location"></i>256 Avenue, Mark Street, Newyork City</li>
                             <li><i class="flaticon-mail"></i><a href="mailto:gerow@gmail.com">gerow@gmail.com</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-5">
                     <div class="header-top-right">
                         <div class="header-contact">
                             <a href="tel:0123456789"><i class="flaticon-phone-call"></i>+123 8989 444</a>
                         </div>
                         <div class="header-social">
                             <ul class="list-wrap">
                                 <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                 <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                 <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                 <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
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
                                 <a href="index.html"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                             </div>
                             <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="active"><a href="{{ route('welcome') }}">Home</a>
                                     
                                    </li>
                                    <li class=""><a href="{{ route('about') }}">About Us</a>
                                       
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Services</a>
                                        <ul class="sub-menu">
                                          
                                            <li class="menu-item-has-children"><a href="services-details.html">Services Details</a>
                                                <ul class="sub-menu">
                                                    <li><a href="services-details.html">Services Details One</a></li>
                                                    <li><a href="services-details-2.html">Services Details Two</a></li>
                                                    <li><a href="services-details-3.html">Services Details Three</a></li>
                                                    <li><a href="services-details-4.html">Services Details Four</a></li>
                                                    <li><a href="services-details-5.html">Services Details Five</a></li>
                                                </ul>
                                            </li>
                                           
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Our Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('contact') }}">contacts</a></li>
                                </ul>
                             </div>
                             <div class="header-action d-none d-md-block">
                                 <ul class="list-wrap">
                                     <li class="header-search"><a href="#"><i class="flaticon-search"></i></a></li>
                                     <li class="header-btn"><a href="contact.html" class="btn btn-two">Get a Quote</a></li>
                                 </ul>
                             </div>
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
                                     <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                     <li><a href="#"><i class="fab fa-youtube"></i></a></li>
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
     <div class="search-popup-wrap" tabindex="-1" role="dialog" aria-hidden="true">
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
     </div>
     <!-- header-search-end -->

 </header>
 <!-- header-area-end -->