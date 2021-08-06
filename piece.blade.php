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
                                <a href="{{route('ajouterpiece')}}">
                            <button type="button" class="btn btn-primary"  id="btinsertiondonner" style="font-family:'Georgia, serif';font-size:15px;color:black">Ajouter les pièces</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>ID</th>
                                                <th>Nom de Pièce</th>
                                                <th>Prix</th>
                                                <th>Reference</th>
                                                <th>Model</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($pieces as $piece)
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="{{ asset('uploads/students/'.$piece->image) }}" alt="" style="width:80px;height:50px"></td>
                                                <td>{{$piece->id}}</td>
                                                <td>{{$piece->nom}}</td>
                                                <td>{{$piece->prix}}</td>
                                                <td>{{$piece->references}}</td>
                                                <td>{{$piece->marque->nom}}</td>
                                            
 
                                                <td>
													<div class="d-flex">
														<a href="{{route('modifierpiece',['id'=>$piece->id])}}" class="btn btn-primary shadow btn-xs sharp mr-1" style="background-color: #ffc107;border:black 1px"><i class="fa fa-pencil"></i></a>
														<a href="{{route('deletepiece',['id'=>$piece->id])}}" onclick="return myFunction()"; class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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