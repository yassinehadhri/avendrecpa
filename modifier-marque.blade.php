@extends('layouts.admine')

@section('content')

<div class="content-body">
            <div class="container-fluid">
               
                <!-- row -->


                <div class="row">
                   
                    
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                             <span>Modifier la marque</span>
                            </div>
                            <div class="card-body">
                            <form class="form-valide" action="{{route('modifiermarque.store',['id'=>$marque->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                        <div class="row">
                                        <div class="col-xl-6 ">     
                                        <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="nom">Nom <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="nom" name="nom" placeholder="donner le nom" value="{{$marque->nom}}">
                                                    </div>
                                                </div>
                                           
                                            
                                        
                                            </div>
                                            <div class="col-xl-6">
                                             
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-number">Image <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="file" class="form-control" id="Image" name="image" placeholder="5.0">
                                                    </div>
                                                </div>
                                          
                                               
                                               
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                    <label class=" col-form-label" for="Description">Description <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="">
                                                        <textarea class="form-control" id="Description" name="description" rows="5" placeholder=""style="height: 300px;">
                                                        {{$marque->description}}</textarea>
                                                    </div>
                                        </div>
                                        <div class="form-group row">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                    </form>
                            </div>
                        </div>
                    </div>
					
					
				</div>
            </div>
     
     
     
        </div> 


@endsection
