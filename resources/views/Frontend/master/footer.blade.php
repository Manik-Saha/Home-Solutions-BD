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
                           <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
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
   <!-- FOOTER AREA END -->


   <!-- MODAL AREA START (Quick View Modal) -->
   <div class="ltn__modal-area ltn__quick-view-modal-area">
       <div class="modal fade" id="quick_view_modal" tabindex="-1">
           <div class="modal-dialog modal-lg" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           <!-- <i class="fas fa-times"></i> -->
                       </button>
                   </div>
                   <div class="modal-body">
                       <div class="ltn__quick-view-modal-inner">
                           <div class="modal-product-item">
                               <div class="row">
                                   <div class="col-lg-6 col-12">
                                       <div class="modal-product-img">
                                           <img src="{{url('frontend/img/product/4.png')}}" alt="#">
                                       </div>
                                   </div>
                                   <div class="col-lg-6 col-12">
                                       <div class="modal-product-info">
                                           <div class="product-ratting">
                                               <ul>
                                                   <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                   <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                   <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                   <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                   <li><a href="#"><i class="far fa-star"></i></a></li>
                                                   <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                               </ul>
                                           </div>
                                           <h3><a href="product-details.html">3 Rooms Manhattan</a></h3>
                                           <div class="product-price">
                                               <span>$34,900</span>
                                               <del>$36,500</del>
                                           </div>
                                           <hr>
                                           <div class="modal-product-brief">
                                               <p></p>
                                           </div>
                                           <div class="modal-product-meta ltn__product-details-menu-1 d-none">
                                               <ul>
                                                   <li>
                                                       <strong>Categories:</strong>
                                                       <span>
                                                           <a href="#">Parts</a>
                                                           <a href="#">Car</a>
                                                           <a href="#">Seat</a>
                                                           <a href="#">Cover</a>
                                                       </span>
                                                   </li>
                                               </ul>
                                           </div>
                                           <div class="ltn__product-details-menu-2 d-none">
                                               <ul>
                                                   <li>
                                                       <div class="cart-plus-minus">
                                                           <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                       </div>
                                                   </li>
                                                   <li>
                                                       <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                           <i class="fas fa-shopping-cart"></i>
                                                           <span>ADD TO CART</span>
                                                       </a>
                                                   </li>
                                               </ul>
                                           </div>
                                           <!-- <hr> -->
                                           <div class="ltn__product-details-menu-3">
                                               <ul>
                                                   <li>
                                                       <a href="#" class="" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                           <i class="far fa-heart"></i>
                                                           <span>Add to Wishlist</span>
                                                       </a>
                                                   </li>
                                                   <li>
                                                       <a href="#" class="" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                           <i class="fas fa-exchange-alt"></i>
                                                           <span>Compare</span>
                                                       </a>
                                                   </li>
                                               </ul>
                                           </div>
                                           <hr>
                                           <div class="ltn__social-media">
                                               <ul>
                                                   <li>Share:</li>
                                                   <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                   <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                   <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                                   <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>

                                               </ul>
                                           </div>
                                           <label class="float-end mb-0"><a class="text-decoration" href="product-details.html"><small>View Details</small></a></label>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- MODAL AREA END -->

   <!-- MODAL AREA START (Add To Cart Modal) -->
   <div class="ltn__modal-area ltn__add-to-cart-modal-area">
       <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
           <div class="modal-dialog modal-md" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <div class="ltn__quick-view-modal-inner">
                           <div class="modal-product-item">
                               <div class="row">
                                   <div class="col-12">
                                       <div class="modal-product-img">
                                           <img src="{{url('frontend/img/product/1.png')}}" alt="#">
                                       </div>
                                       <div class="modal-product-info">
                                           <h5><a href="product-details.html">3 Rooms Manhattan</a></h5>
                                           <p class="added-cart"><i class="fa fa-check-circle"></i> Successfully added to your Cart</p>
                                           <div class="btn-wrapper">
                                               <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                                               <a href="checkout.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                           </div>
                                       </div>
                                       <!-- additional-info -->
                                       <div class="additional-info d-none">
                                           <p>We want to give you <b>10% discount</b> for your first order, <br> Use discount code at checkout</p>
                                           <div class="payment-method">
                                               <img src="{{url('frontend/img/icons/payment.png')}}" alt="#">
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- MODAL AREA END -->

   <!-- MODAL AREA START (Wishlist Modal) -->
   <div class="ltn__modal-area ltn__add-to-cart-modal-area">
       <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
           <div class="modal-dialog modal-md" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <div class="ltn__quick-view-modal-inner">
                           <div class="modal-product-item">
                               <div class="row">
                                   <div class="col-12">
                                       <div class="modal-product-img">
                                           <img src="{{url('frontend/img/product/7.png')}}" alt="#">
                                       </div>
                                       <div class="modal-product-info">
                                           <h5><a href="product-details.html">3 Rooms Manhattan</a></h5>
                                           <p class="added-cart"><i class="fa fa-check-circle"></i> Successfully added to your Wishlist</p>
                                           <div class="btn-wrapper">
                                               <a href="wishlist.html" class="theme-btn-1 btn btn-effect-1">View Wishlist</a>
                                           </div>
                                       </div>
                                       <!-- additional-info -->
                                       <div class="additional-info d-none">
                                           <p>We want to give you <b>10% discount</b> for your first order, <br> Use discount code at checkout</p>
                                           <div class="payment-method">
                                               <img src="{{url('frontend/img/icons/payment.png')}}" alt="#">
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- MODAL AREA END -->

   </div>
   <!-- Body main wrapper end -->

   <!-- preloader area start -->
   <div class="preloader d-none" id="preloader">
       <div class="preloader-inner">
           <div class="spinner">
               <div class="dot1"></div>
               <div class="dot2"></div>
           </div>
       </div>
   </div>
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