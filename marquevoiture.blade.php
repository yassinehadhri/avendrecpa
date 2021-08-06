@extends('layouts.admine')

@section('content')
  <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                 
                    </div>
                 
                </div>
                <!-- row -->


                <div class="row">
                   
                    
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{route('ajouterlamarque')}}">
                            <button type="button" class="btn btn-primary" id="btinsertiondonner">Ajouter la marque</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>image</th>
                                                <th>id</th>
                                                <th>nom de la marque</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($marques as $marque)
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="{{ asset('uploads/students/'.$marque->image) }}" alt="" style="width:80px;height:50px"></td>
                                                <td>{{$marque->id}}</td>
                                                <td>{{$marque->nom}}</td>
                                                
                                                <td>
													<div class="d-flex">
														<a href="{{route('modifiermarque',['id'=>$marque->id])}}" class="btn btn-primary shadow btn-xs sharp mr-1" style="background-color: #ffc107;border:black 1px"><i class="fa fa-pencil"></i></a>
														<a href="{{route('deletemarque',['id'=>$marque->id])}}" onclick="return myFunction();" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>												
												</td>												
                                            </tr>
                                            @endforeach
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
				</div>
            </div>
     
     
     
        </div> 

@endsection