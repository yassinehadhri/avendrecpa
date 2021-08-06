@extends('layouts.index')

@section('content')


   <!--Offcanvas menu area start-->
   <div class="off_canvars_overlay"></div>
    <div class="Offcanvas_menu canvas_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <span>MENU</span>
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">

                        <div class="canvas_close">
                            <a href="#"><i class="ion-android-close"></i></a>
                        </div>


                        <div class="top_right text-right">
                            <ul>
                                <li class="top_links"><a href="#"><i class="ion-android-person"></i> My Account<i class="ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="checkout.html">Checkout </a></li>
                                        <li><a href="my-account.html">My Account </a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>
                                <li class="language"><a href="#"><img src="assets/img/logo/language.png" alt="">en-gb<i class="ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#"><img src="assets/img/logo/language.png" alt=""> English</a></li>
                                        <li><a href="#"><img src="assets/img/logo/language2.png" alt=""> Germany</a></li>
                                    </ul>
                                </li>
                                <li class="currency"><a href="#">$ USD<i class="ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">EUR – Euro</a></li>
                                        <li><a href="#">GBP – British Pound</a></li>
                                        <li><a href="#">INR – India Rupee</a></li>
                                    </ul>
                                </li>


                            </ul>
                        </div>
                        <div class="Offcanvas_follow">
                            <label>Follow Us:</label>
                            <ul class="follow_link">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="search-container">
                            <form action="#">
                                <div class="search_box">
                                    <input placeholder="Search entire store here ..." type="text">
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </div>
                            </form>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                        <li><a href="index-5.html">Home 5</a></li>
                                        <li><a href="index-6.html">Home 6</a></li>
                                        <li><a href="index-7.html">Home 7</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                <li><a href="shop-list.html">List View</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">other Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="my-account.html">my account</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Types</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="product-sidebar.html">product sidebar</a></li>
                                                <li><a href="product-grouped.html">product grouped</a></li>
                                                <li><a href="variable-product.html">product variable</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="services.html">services</a></li>
                                        <li><a href="faq.html">Frequently Questions</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="compare.html">compare</a></li>
                                        <li><a href="privacy-policy.html">privacy policy</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="my-account.html">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">About Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Offcanvas menu area end-->

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li><a href="shop.html">shop</a></li>
                            <li><a href="shop.html">Clothing</a></li>
                            <li>product details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--product details start-->
    <div class="product_details mt-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">

                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="expandedImg" src="{{ asset('uploads/students/'.$voitures->image1) }}" data-zoom-image="assets/img/product/product15.jpg" alt="big-1">
                            </a>
                        </div>

                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                @foreach((array)json_decode($voitures->image) as $image)
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/product8.jpg" data-zoom-image="assets/img/product/product8.jpg">
                                        <img src="{{ asset('uploads/students/'.$image) }}" alt="zo-th-1"  onclick="myFunction(this);" />
                                    </a>

                                </li>
                                @endforeach
                                <script>
function myFunction(imgs) {
  // Get the expanded image
  var expandImg = document.getElementById("expandedImg");
  // Get the image text
  var imgText = document.getElementById("imgtext");
  // Use the same src in the expanded image as the image being clicked on from the grid
  expandImg.src = imgs.src;
  // Use the value of the alt attribute of the clickable image as text inside the expanded image
  imgText.innerHTML = imgs.alt;
  // Show the container element (hidden with CSS)
  expandImg.parentElement.style.display = "block";
}

                                </script>
                            </ul>
                        </div>
                    </div>
                </div>
             
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <form action="#">

                            <h2>Modèle :  {{$voitures->nom}}</h2>
                         
                            <div class="price_box">
                                <span class="current_price"></span>
                                <span class=""><i class="far fa-money-bill-alt" style="font-size:19px;color:#ffc107"></i> <SPAN style="font-size:19px">LE PRIX :</SPAN> {{$voitures->prix}} DNT</span>

                            </div>
                            <div class="product_desc">
                                <p> {{$voitures->description}}</p>
                            </div>
                            <div class="product_variant color">
                            <div class="order_table table-responsive">
                                <table>
                             
                                    <tbody>
                           
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Marque</th>
                                            <td>{{$voitures->marque->nom}}</td>
                                        </tr>
                                        <tr>
                                            <th>Modèle</th>
                                            <td>{{$voitures->nom}}</td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>Prix</th>
                                            <td>{{$voitures->prix}}</td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>DATE</th>
                                            <td>{{$voitures->date}}</td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>Localité</th>
                                            <td>{{$voitures->localite}}</td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>Couleur</th>
                                            <td>{{$voitures->couleur}}</td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>Energie</th>
                                            <td>{{$voitures->energie}}</td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>Boite vitesse</th>
                                            <td>{{$voitures->boitevitesse}}</td>
                                        </tr>

                                    </tfoot>
                                </table>
                            </div>
                            
                            </div>
                            
                           
                        </form>
                      

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product details end-->






    
    <!--product info start-->
    <div class="product_d_info">


   

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
                    @foreach ($lesvoitures as $voiture)
                        
                            <div class="single_product">
                                <div class="product_name">
                                    <h3><a href="{{route('voituredetails',['id'=>$voiture->id])}}">{{$voiture->nom}}</a></h3>
                                  
                                </div>
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{route('voituredetails',['id'=>$voiture->id])}}"><img src="{{ asset('uploads/students/'.$voiture->image1) }}" alt="" style="width: 350px;height: 190px;"></a>
                            
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
                                            <span class="regular_price">PRIX :{{$voiture->prix}} DT</span>
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







        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">
                        <div class="product_info_button">
                            <ul class="nav" role="tablist" id="nav-tab">
                                <li>
                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Description</a>
                                </li>
                               
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                <div class="product_info_content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                    <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.</p>
                                </div>
                            </div>
                        

                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product info end-->

    <!--product area start-->
  

@endsection 
