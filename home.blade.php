@extends('layouts.admine')

@section('content')
<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				
                <div class="row">
			
					<div class="col-xl-10 col-xxl-12">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-danger">
									<div class="card-body  p-4">
										<div class="media">
											<span class="mr-3">
												<i class="flaticon-381-calendar-1"></i>
											</span>
											<div class="media-body text-white text-right">
												<p class="mb-1">Pieces</p>
												<h3 class="text-white">{{count($marques)}}</h3>
											</div>
										</div>
									</div>
								</div>
							</div>	
							<div class="col-xl-6 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-success">
									<div class="card-body p-4">
										<div class="media">
											<span class="mr-3">
												<i class="flaticon-381-diamond"></i>
											</span>
											<div class="media-body text-white text-right">
												<p class="mb-1">Voitures</p>
												<h3 class="text-white">{{count($voitures)}}</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-info">
									<div class="card-body p-4">
										<div class="media">
											<span class="mr-3">
												<i class="flaticon-381-heart"></i>
											</span>
											<div class="media-body text-white text-right">
												<p class="mb-1">Employeurs</p>
												<h3 class="text-white">{{count($employeurs)}}</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-primary">
									<div class="card-body p-4">
										<div class="media">
											<span class="mr-3">
												<i class="flaticon-381-user-7"></i>
											</span>
											<div class="media-body text-white text-right">
												<p class="mb-1">Accesoires</p>
												<h3 class="text-white">{{count($accesoires)}}</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="card-title">Revenue</h4>
										<select class="form-control style-1 default-select ">
											<option>2021</option>
											<option>2020</option>
											<option>2019</option>
										</select>
									</div>
									<div class="card-body pt-2">
										<h3 class="text-primary font-w600">$41,512k <small class="text-dark ml-2">$25,612k</small></h3>
										<div id="chartBar"></div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
			   </div>
            </div>
        </div>
        
@endsection
