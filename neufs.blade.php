@extends('layouts.index')

@section('content')
<section class="banner_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single_banner banner_fullwidth">
                        <div class="banner_thumb">
                            <a href="#"><img src="{{asset('assets/img/voiture/bmw1.jpg')}}" alt=""  style="height: 400px;"></a>
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
    <section class="featured_categories featured_c_three mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>Les voitures</strong> Neuves</span></h2>
                    </div>
                    <div class="featured_container">
                      <div class="row">
                          
                      @foreach($marques as $marque)
                            <div class="col-md-3">
                              <div class="single_items">
                                <div class="single_featured">
                                    <div class="featured_thumb">
                          
                                        <a href="{{route('voituresneufs',['id'=>$marque->id])}}"><img src="{{ asset('uploads/students/'.$marque->image) }}" alt=""style="width: 350px;"></a>
                                        
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



@endsection