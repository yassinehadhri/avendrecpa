@extends('layouts.admine')

@section('content')

<div class="content-body">
            <div class="container-fluid">
               
                <!-- row -->


                <div class="row">
                   
                    
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                             <span>Ajouter une marque</span>
                            </div>
                            <div class="card-body">
                            <form class="form-valide" action="{{route('modifiervoiture.store',$voiture->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                        <div class="row">

                                        <div class="col-xl-6 ">     

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="nom">Nom<span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="nom" name="nom" placeholder="donner le nom de modèle" value="{{$voiture->nom}}">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="Prix">Prix <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="prix" name="prix" placeholder="donner le Prix" value="{{$voiture->prix}}">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="Date">Date <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="date" class="form-control" id="date" name="date" placeholder="donner le Date" value="{{$voiture->date}}">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="Kms">Kms <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control" id="Kms" name="kms" placeholder="donner le kilométrage" value="{{$voiture->kms}}">
                                                    </div>
                                                </div>
                                    

                                        <div class="form-group row">
                                                <label class="col-lg-3 col-form-label"  >Boite vitesse</label>
                                                    <div class="col-lg-6">
                                                    <select class="form-control default-select" id="sel1"name="boitevitesse">
                                                <option>Automatique</option>
                                                <option>Manuel</option>
                                              
                                            </select>
                                                    </div>
                                                </div>

                                                <div class=" row" >
                                                  
                                            
                                                    <div class="col-lg-6" style="">    <center>
                                                        <input class="form-check-input" type="radio" name="type" value="neuf" >
                                                        <label class="form-check-label">
                                                          Neuf
                                                        </label>
                                                    </div>

                                                    <div class="col-lg-6 "  style=""> 
                                                        <input class="form-check-input" type="radio" name="type" value="occasion">
                                                        <label class="form-check-label">
                                                            Occasion
                                                        </label>
                                                    </div>

                                                    </div>
                                                  </center>
                                                                               
                                            
										


                                        </div>
                                            <div class="col-xl-6">
                                             
                                            <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="val-number">Image <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="file" class="form-control" id="image" name="image1" placeholder="5.0">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="Localité">Localité <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="Localité" name="localite" placeholder="donner le localisation"value="{{$voiture->localite}}">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="couleur">Couleur <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="Couleur" name="couleur" placeholder="donner le Couleur" value="{{$voiture->couleur}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-lg-3 col-form-label"  >Energie</label>
                                                    <div class="col-lg-6">
                                                    <select class="form-control default-select" id="sel1"name="energie">
                                                <option>Essance</option>
                                                <option>Diseal</option>
                                                <option>Electrique</option>
                                                <option>Hybrides</option>
                                            </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-lg-3 col-form-label"  >Modéles</label>
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
                                         <div class="form-group">
                                                    <label class=" col-form-label" for="Description">Description <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="">
                                                        <textarea class="form-control" id="Description" name="description" rows="5" placeholder=""style="height: 250px;">
                                                        {{$voiture->description}}
                                                    
                                                    </textarea>
                                                    </div>
                                        </div>
                                        <div class="row justify-content-center">

                                        
                                    
                                        
                                        
                                        </div>
                                        
                                <div class="row justify-content-center" style="margin-top:30px;">
                                         <div class="col-md-8">  
                                             <div class="custom-file">
                                                 <input type="file" name="imageFile[]" class="custom-file-input" id="images" multiple="multiple">
                                                 <label class="custom-file-label text-center" for="images">Ajouter les photos de projet</label>
                                             </div>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class=" mb-3 text-center" style="margin-top:20px;margin-left:10px;">
                                                 <div class="imgPreview"><div> </div>
                                    </div>



                                    </div>

                                        <div class="form-group row justify-content-center">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                                    </div>
                                                </div>
                                    </form>
                            
                        </div>
                    </div>
					
					
				</div>
            </div>
     
     
     
        </div> 
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script>
        $(function() {
        // Multiple images preview with JavaScript
        var multiImgPreview = function(input, imgPreviewPlaceholder) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#images').on('change', function() {
            multiImgPreview(this, 'div.imgPreview');
        });
        });    
    </script>

@endsection

     
     
     
   
