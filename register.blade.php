@extends('layouts.index')

@section('content')


    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->


  
                <!--login area start-->

          <!--register area start-->
        <div class="col-lg-6 col-md-6" style="margin: auto;padding-bottom: 40px;">
                    <div class="account_form register">
                        <h2>Register</h2>
                        <form action="{{route('register')}}" method="POST">
                        <p>
                                <label>Nom <span>*</span></label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </p>
                            <p>
                                <label>Email address <span>*</span></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </p>
                            <p>
                                <label>Passwords <span>*</span></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            </p>
                            <p>
                                <label> Confirm Passwords <span>*</span></label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </p>

                            <div class="login_submit">
                                <button type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div> 
                <!--register area end-->
           
            
            </div>
        </div>
    </div>
    <!-- customer login end -->
  

@endsection
