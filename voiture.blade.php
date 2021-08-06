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
                                <a href="{{route('ajoutervehicule')}}">
                            <button type="button" class="btn btn-primary"  id="btinsertiondonner" style="font-family:'Georgia, serif';font-size:15px;color:black">Ajouter un véhicule</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>ID</th>
                                                <th>Nom de modèle</th>
                                                <th>Date</th>
                                                <th>Prix</th>
                                                <th>KMS</th>
                                                <th>Localité</th>
                                                <th>couleur</th>
                                               
                                                <th>Marque_ID </th>
                                              
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($voitures as $voiture)
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="{{ asset('uploads/students/'.$voiture->image1) }}" alt="" style="width:80px;height:50px"></td>
                                                <td>{{$voiture->id}}</td>
                                                <td>{{$voiture->nom}}</td>
                                                <td>{{$voiture->date}}</td>
                                                <td>{{$voiture->prix}}</td>
                                                <td>{{$voiture->kms}}</td>
                                                <td>{{$voiture->localite}}</td>
                                                <td>{{$voiture->couleur}}</td>
                                                
                                                <td>{{$voiture->marque->nom}}</td>
                                           
                                                
                                                <td>
													<div class="d-flex">
														<a href="{{route('modifiervoiture',['id'=>$voiture->id])}}" class="btn btn-primary shadow btn-xs sharp mr-1" style="background-color: #ffc107;border:black 1px"><i class="fa fa-pencil"></i></a>
														<a href="{{route('deletevoiture',['id'=>$voiture->id])}}" onclick="return myFunction()"; class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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