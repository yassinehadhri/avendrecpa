@extends('layouts.index')

@section('content')
<div class="blog_page_section blog_sidebar blog_reverse mt-23">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="blog_sidebar_widget">
                        <div class="widget_list widget_search">
                            <h3 >Search</h3>
                            <form action="#">
                                <input placeholder="Search..." type="text">
                                <button type="submit">search</button>
                            </form>
                        </div>
    
                   
                   
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
                            <a href="#"><img src="{{asset('assets/img/voiture/mr.jpg')}}" alt=""></a>
                        </div>
                    
              
                      
                    </div>
                </div>
                <div class="col-lg-9 col-md-20">
                    <div class="blog_wrapper">
                        @foreach($voitures as $voiture)
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="{{route('voituredetails',['id'=>$voiture->id])}}"><img src="{{ asset('uploads/students/'.$voiture->image1) }}" alt="" style="width:250px"></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="{{route('voituredetails',['id'=>$voiture->id])}}">{{$voiture->nom}}</a></h3>
                                <div class="blog_meta">
                                    <span class="post_date"><i class="fa-calendar fa"></i>{{$voiture->date}}</span>
                                    <span class="author"><i class="fas fa-money-bill-alt"></i> PRIX:{{$voiture->prix}} </span>
                                   
                                    <span class="category">
                                    <i class="fas fa-map-marker-alt"></i>
                                        <a href="#">localisation :{{$voiture->localite}}  </a>
                                    </span>
                                </div>
                                <div class="blog_desc">
                                    <?php 
                                    ?>
                                    <p{> {{$voiture->description}}</p>
                                </div>
                             <a  href="{{route('voituredetails',['id'=>$voiture->id])}}">  <button type="button" class="btn btn-warning"style="font-size:15px" >Read More</button></a>
                              
                           
                            </div>
                        </div>
                       @endforeach
                       
                    </div>
                </div>

            </div>
        </div>
    </div>





    
    <div class="blog_pagination">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pagination">
                        <ul>
                            <li class="current">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#">next</a></li>
                            <li><a href="#">>></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection