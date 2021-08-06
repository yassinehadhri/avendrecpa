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
                            <form class="form-valide" action="{{route('storecategemployeurs')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                        <div class="row">
                                        <div class="col-xl-6 ">

                                        <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="nom">Titre <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="titre" name="titre" placeholder="donner le titre">
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
                                                        <textarea class="form-control" id="Description" name="description" rows="5" placeholder=""style="height: 300px;"></textarea>
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