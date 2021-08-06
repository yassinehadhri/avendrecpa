@extends('layouts.index')

@section('content')

<div class="shop_area shop_reverse">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="widget_inner">
                            <div class="widget_list widget_filter">
                                <h2>Filter by price</h2>
                                <form action="#">
                                    <div id="slider-range"></div>
                                    <button type="submit">Filter</button>
                                    <input type="text" name="text" id="amount" />

                                </form>
                            </div>
                            <div class="widget_list widget_categories">
                                <h2>categories</h2>
                                <ul>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Categories1 (6)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Categories2(10)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Categories3 (4)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Categories4(10)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Categories5(8)</a>
                                        <span class="checkmark"></span>
                                    </li>

                                </ul>
                            </div>

                            <div class="widget_list widget_categories">
                                <h2>Manufacturer</h2>
                                <ul>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Brake Parts(6)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Accessories (10)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Engine Parts (4)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">hermes(10)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">louis vuitton(8)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Tommy Hilfiger(7)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">House Plants(6)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget_list widget_categories">
                                <h2>Select By Color</h2>
                                <ul>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Black (6)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#"> Blue (8)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Brown (10)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#"> Green (6)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Pink (4)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">White (2)</a>
                                        <span class="checkmark"></span>

                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Yellow (3)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="shop_sidebar_banner">
                            <a href="#"><img src="assets/img/bg/banner9.jpg" alt=""></a>
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="shop_banner">
                        <img src="assets/img/bg/banner8.jpg" alt="">
                    </div>
                    <div class="shop_title">
                        <h1>shop</h1>
                    </div>
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">

                            <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip" title="3"></button>

                            <button data-role="grid_4" type="button" class=" btn-grid-4" data-toggle="tooltip" title="4"></button>

                            <button data-role="grid_list" type="button" class="btn-list" data-toggle="tooltip" title="List"></button>
                        </div>
                        <div class=" niceselect_option">

                            <form class="select_option" action="#">
                                <select name="orderby" id="short">

                                    <option selected value="1">Sort by average rating</option>
                                    <option value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </form>


                        </div>
                        <div class="page_amount">
                            <p>Showing 1–9 of 21 results</p>
                        </div>
                    </div>
                    <!--shop toolbar end-->

                    <div class="row shop_wrapper">
                 <?php 
                        
                        $voiture=$marques->voiture()->where('');
                        ?> >
                        @foreach($marques->voiture as $voiture)
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="single_product">
                                <div class="product_name grid_name">
                                    <h3><a href="product-details.html" style="font-size: 19px;">{{$voiture->nom}}</a></h3>
                                   
                                </div>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{ asset('uploads/students/'.$voiture->image1) }}" alt="" style="height: 180px;width: 100%;"></a>
                                   
                                    <div class="right_caption">
                                        <div class="text_available">
                                            <p>Date :<span style="font-size: 12px;">{{$voiture->date}}</span></p>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">PRIX : {{$voiture->prix}}</span>
                                        
                                        </div>
                                        <div class="cart_links_btn">
                                            <a href="#" title="add to cart">add to cart</a>
                                        </div>
                                      
                                    </div>
                                  
                                </div>
                                
                                
                            </div>
                        </div>
                        @endforeach
                        
                                
                          
                        
                       

                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>

@endsection
