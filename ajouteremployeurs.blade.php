@extends('layouts.admine')

@section('content')

<div class="content-body">
            <div class="container-fluid">
               
                <!-- row -->


                <div class="row">
                   
                    
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                             <span>Ajouter employeur</span>
                            </div>
                            <div class="card-body">
                            <form class="form-valide" action="{{route('storeemployeurs')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                        <div class="row">

                                        <div class="col-xl-6 ">     

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="nom">Nom<span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="nom" name="nom" placeholder="donner le nom de employeur">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="prenom">Prénom <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="donner le Prénom">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="email">Email <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="mail" class="form-control" id="email" name="email" placeholder="donner  l'email" >
                                                    </div>
                                                </div>

                                                
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="salaire">Salaire <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control" id="salaire" name="salaire" placeholder="donner le salaire">
                                                    </div>
                                                </div>

                                               


                                        </div>
                                            <div class="col-xl-6">
                                             
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="val-number">Image <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="file" class="form-control" id="image" name="image" placeholder="5.0">
                                                    </div>
                                                </div>

                                
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="telephone">Téléphone <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="telephone" name="telephone" placeholder="donner le numéro telephone">
                                                    </div>
                                                </div>
                                                 
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="prime">Prime <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control" id="prime" name="prime" placeholder="donner le prime">
                                                    </div>
                                                </div>
                                               

                                            

                                            </div>
                                        </div>
                                        <div class="row justify-content-center">

                                        <div class="col-xl-8 ">  
                                        <div class="form-group row">
                                            <label class="col-lg-5 col-form-label"  >catégorie employeur</label>
                                            <div class="col-lg-9">
                                            <select class="form-control default-select" id="categorie" name="categorie">
                                            @foreach($categemployeurs as $categemployeur)
                                              <option value="{{$categemployeur->id}}">{{$categemployeur->titre}}</option>
                                              
                                              @endforeach
                                          
                                          </select>
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