@extends('layouts.admine')

@section('content')

<div class="content-body">
            <div class="container-fluid">
               
                <!-- row -->


                <div class="row">
                   
                    
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                             <span>Ajouter accesoire</span>
                            </div>
                            <div class="card-body">
                            <form class="form-valide" action="{{route('storeaccesoire')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                        <div class="row">

                                        <div class="col-xl-6 ">     
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="nom">Nom <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="nom" name="nom" placeholder="donner le nom">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="Prix">Prix <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="prix" name="prix" placeholder="donner le Prix">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="reference">reference <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="reference" name="reference" placeholder="donner le reference" >
                                                    </div>
                                                </div>

                                        </div>
                                            <div class="col-xl-6">
                                             
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="val-image">Image <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="file" class="form-control" id="Image" name="image" placeholder="">
                                                    </div>
                                                </div>
         
                                                <div class="form-group row">
                                                <label class="col-lg-3 col-form-label"  >Marque</label>
                                                    <div class="col-lg-6">
                                                    <select class="form-control default-select" id="marque" name="marque">
                                                @foreach($marques as $marque)
                                                <option value="{{$marque->id}}">{{$marque->nom}}</option>
                                                @endforeach
                                                
                                            </select>
                                                    </div>
                                                </div>

                                            

                                            </div>
                                        </div>
                                        <div class="row justify-content-center">

                                        <div class="col-xl-8 ">  
                                        <div class="form-group">
                                                    <label class=" col-form-label" for="Description">Description <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="">
                                                        <textarea class="form-control" id="Description" name="description" rows="5" placeholder=""style="height: 250px;"></textarea>
                                                    </div>
                                        </div>
                                        
                                        
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