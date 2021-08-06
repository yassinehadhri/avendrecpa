@extends('layouts.index')

@section('content')
    <!--Offcanvas menu area start-->
    <section class="slider_section  mb-42">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="slider_area slider_three owl-carousel">
                       
                        <div class="single_slider d-flex align-items-center" data-bgimg="{{asset('assets/img/voiture/re1.jpg')}}">
                            <div class="slider_content"style="color:white">
                                <h2>Brade Wheels</h2>
                                <h1>Total Alloy Wheels Protection</h1>
                                <a class="button" href="shop.html">shopping now</a>
                            </div>
                        </div>
                        <div class="single_slider d-flex align-items-center" data-bgimg="{{asset('assets/img/voiture/img1.jpg')}}">
                            <div class="slider_content"style="color:black">
                                <h2>Top Quality</h2>
                                <h1>Aftermarket Trobocharger Specialist</h1>
                                <a class="button" href="shop.html">shopping now</a>
                            </div>
                        </div>
                        <div class="single_slider d-flex align-items-center" data-bgimg="{{asset('assets/img/voiture/bmw2.jpg')}}">
                            <div class="slider_content" style="color:white">
                                <h2>Top Quality</h2>
                                <h1>Aftermarket Trobocharger Specialist</h1>
                                <a class="button" href="shop.html">shopping now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 offset-md-4 offset-lg-0">
                    <div class="sidebar_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/img/bg/banner6.jpg" alt=""></a>
                            <div class="banner_text">
                                <h4>Jegs Oil</h4>
                                <h3>Engine</h3>
                                <h2>50% Off</h2>
                                <a href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="featured_categories featured_c_three mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>Featured</strong>Categories</span></h2>
                    </div>
                    <div class="featured_container">
                      <div class="row">
                      @foreach($marques as $marque)
                            <div class="col-md-4">
                              <div class="single_items">
                                <div class="single_featured">
                                    <div class="featured_thumb">
                                        <a href="{{route('voiture.marque',['id'=>$marque->id])}}"><img src="{{ asset('uploads/students/'.$marque->image) }}" alt=""></a>
                                    </div>
                                    <div class="featured_content">
                                        <h3 class="product_name"><a href="{{route('voiture.marque',['id'=>$marque->id])}}">{{$marque->nom}}</a></h3>
                                        <div class="sub_featured">
                                            <ul>
                                           
                                                @foreach($marque->voiture as $voiture)
                                                <li><a href="{{route('voiture.marque',['id'=>$marque->id])}}">{{$voiture->nom}}</a></li>
                                               
                                              @endforeach
                                            </ul>
                                        </div>
                                        <a class="view_more" href="{{route('voiture.marque',['id'=>$marque->id])}}">shop now</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        @endforeach
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







 <!--shipping area start-->
 <section class="shipping_area mb-50">
        <div class="container">
            <div class=" row">
                <div class="col-12">
                    <div class="shipping_inner">
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <img src="assets/img/about/shipping1.png" alt="">
                            </div>
                            <div class="shipping_content">
                                <h2>Free Shipping</h2>
                                <p>Free shipping on all US order</p>
                            </div>
                        </div>
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <img src="assets/img/about/shipping2.png" alt="">
                            </div>
                            <div class="shipping_content">
                                <h2>Support 24/7</h2>
                                <p>Contact us 24 hours a day</p>
                            </div>
                        </div>
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <img src="assets/img/about/shipping3.png" alt="">
                            </div>
                            <div class="shipping_content">
                                <h2>100% Money Back</h2>
                                <p>You have 30 days to Return</p>
                            </div>
                        </div>
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <img src="assets/img/about/shipping4.png" alt="">
                            </div>
                            <div class="shipping_content">
                                <h2>Payment Secure</h2>
                                <p>We ensure secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--shipping area end-->

    <section class="banner_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single_banner banner_fullwidth">
                        <div class="banner_thumb">
                            <a href="#"><img src="assets/img/bg/banner5.jpg" alt=""></a>
                            <div class="banner_text">
                                <h2>Win the cost of your</h2>
                                <h3>Tyres back</h3>
                                <p>Chance to win when you buy 2 + Pirell Tyres in March</p>
                                <a href="shop.html">Discover Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

   


<section class="product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>Piéces</span></h2>
                        <ul class="product_tab_button nav" role="tablist" id="nav-tab">
                            <li>
                                <a class="active" data-toggle="tab" href="#brake" role="tab" aria-controls="brake" aria-selected="true">Brake Parts</a>
                            </li>
                         
                           
                        </ul>
                    </div>

                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="brake" role="tabpanel">
                    <div class="product_carousel product_column5 owl-carousel">
                    @foreach ($pieces as $piece)
                        
                            <div class="single_product">
                                <div class="product_name">
                                    <h3><a href="{{route('piecesdetails',['id'=>$piece->id])}}">{{$piece->nom}}</a></h3>
                                    <p class="manufacture_product"><a href="#">Piéce</a></p>
                                </div>
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{route('piecesdetails',['id'=>$piece->id])}}"><img src="{{ asset('uploads/students/'.$piece->image) }}" alt="" style="width: 350px;height: 190px;"></a>
                            
                                    <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content">
                                 
                                    <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">PRIX :{{$piece->prix}} DT</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                  
                   
                        @endforeach
                    </div>
                </div>
          
               
            </div>
        </div>
    </section>
    <!--product area end-->



    @endsection






{{--@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif--}}