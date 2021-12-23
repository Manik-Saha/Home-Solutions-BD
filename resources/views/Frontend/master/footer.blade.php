   <!-- FOOTER AREA START -->
   <?php

    use App\Models\Footer;

    $footer = Footer::find(1);
    ?>
   <footer class="ltn__footer-area  ">
       <div class="footer-top-area  section-bg-2 plr--5">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                       <div class="footer-widget footer-about-widget">
                           <div class="footer-logo">
                               <div class="site-logo">
                                   <i style="font-size:50px;" class="fas fa-home"></i> <a href="/">
                                       <h5>Home Solution BD</h5>
                                   </a>
                               </div>
                           </div>
                           <p>{{ $footer['About'] }}</p>
                           <div class="footer-address">
                               <ul>
                                   <li>
                                       <div class="footer-address-icon">
                                           <i class="icon-placeholder"></i>
                                       </div>
                                       <div class="footer-address-info">
                                           <p>{{ $footer['Address'] }}</p>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="footer-address-icon">
                                           <i class="icon-call"></i>
                                       </div>
                                       <div class="footer-address-info">
                                           <p><a href="tel:{{ $footer['Phone'] }}">{{ $footer['Phone'] }}</a></p>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="footer-address-icon">
                                           <i class="icon-mail"></i>
                                       </div>
                                       <div class="footer-address-info">
                                           <p><a href="mailto:{{ $footer['Email'] }}">{{ $footer['Email'] }}</a></p>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                           <div class="ltn__social-media mt-20">
                               <ul>
                                   <li><a href="{{ $footer['Facebook'] }}" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                   <li><a href="{{ $footer['Twitter'] }}" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                   <li><a href="{{ $footer['Linkedin'] }}" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                   <li><a href="{{ $footer['Instagram'] }}" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                   <li><a href="{{ $footer['Youtube'] }}" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                       <div class="footer-widget footer-menu-widget clearfix">
                           <h4 class="footer-title">Company</h4>
                           <div class="footer-menu">
                               <ul>
                                   <li><a href="/about">About</a></li>
                                   <li><a href="/contact-us">Contact Us</a></li>

                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                       <div class="footer-widget footer-menu-widget clearfix">
                           <h4 class="footer-title">Services</h4>
                           <div class="footer-menu">
                               <ul>
                                   <li><a href="/interior">Our Services</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                       <div class="footer-widget footer-menu-widget clearfix">
                           <h4 class="footer-title">Customer Care</h4>
                           <div class="footer-menu">
                               <ul>
                                   <li><a href="/customer/login">Login</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-3">
                       <h4 class="footer-title">Our Headquater Location</h4>
                       <div class="map-responsive">
                           <iframe src="{{ $footer['Location'] }}" width="600" height="300" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5">
           <div class="container-fluid ltn__border-top-2">
               <div class="row">
                   <div class="col-md-6 col-12">
                       <div class="ltn__copyright-design clearfix">
                           <p>All Rights Reserved @ Company <span class="current-year"></span></p>
                       </div>
                   </div>
                   <div class="col-md-6 col-12 align-self-center">
                       <div class="ltn__copyright-menu text-end">
                           <ul>
                               <li><a href="#">Terms & Conditions</a></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </footer>
   <!-- preloader area end -->

   <!-- All JS Plugins -->
   <script src="{{asset('frontend/js/plugins.js')}}"></script>
   <!-- Main JS -->
   <script src="{{asset('frontend/js/main.js')}}"></script>
   <script>
       @if(Session::has('message'))
       toastr.options = {
           "closeButton": true,
           "progressBar": true,

       }
       toastr.success("{{ session('message') }}");
       @endif

       @if(Session::has('error'))
       toastr.options = {
           "closeButton": true,
           "progressBar": true
       }
       toastr.error("{{ session('error') }}");
       @endif

       @if(Session::has('info'))
       toastr.options = {
           "closeButton": true,
           "progressBar": true
       }
       toastr.info("{{ session('info') }}");
       @endif

       @if(Session::has('warning'))
       toastr.options = {
           "closeButton": true,
           "progressBar": true
       }
       toastr.warning("{{ session('warning') }}");
       @endif
   </script>

   </body>

   <!-- Mirrored from tunatheme.com/tf/html/quarter-preview/quarter/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Nov 2021 16:32:42 GMT -->

   </html>