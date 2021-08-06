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
                                <a href="{{route('ajouteremployeurs')}}">
                            <button type="button" class="btn btn-primary"  id="btinsertiondonner" style="font-family:'Georgia, serif';font-size:15px;color:black">Ajouter employeurs</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>ID</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Email</th>
                                                <th>téléphone</th>
                                                <th>salaire</th>
                                                <th>Prime</th>
                                                <th>categorie_id </th>
                                              
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($employeurs as $employeur)
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="{{ asset('uploads/students/'.$employeur->image) }}" alt=""  style="width:80px;height:50px"></td>
                                                <td>{{$employeur->id}}</td>
                                                <td>{{$employeur->nom}}</td>
                                                <td>{{$employeur->prenom}}</td>
                                                <td>{{$employeur->email}}</td>
                                                <td>{{$employeur->telephone}}</td>
                                                <td>{{$employeur->salaire}}</td>
                                                <td>{{$employeur->prime}}</td>
                                                
                                                <td>{{$employeur->categemployeurs->titre}}</td>
                                           
                                                
                                                <td>
													<div class="d-flex">
														<a href="{{route('modifieremployeurs',['id'=>$employeur->id])}}" class="btn btn-primary shadow btn-xs sharp mr-1" style="background-color: #ffc107;border:black 1px"><i class="fa fa-pencil"></i></a>
														<a href="{{route('deleteemployeurs',['id'=>$employeur->id])}}" onclick="return myFunction()"; class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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