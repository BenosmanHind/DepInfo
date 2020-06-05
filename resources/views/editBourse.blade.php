@extends('layouts.admin')

@section('content')
<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editer une bourse</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">AddScholarship</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
      
      <div class="container-fluid col-md-8 pt-5">
      
          
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Merci de remplir les champs</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              
            <form role="form"  method="POST" action="{{route('bourses.update',['bourse' => $bourse->id])}}">
                @csrf
                {{ method_field('PATCH') }}
                <div class="card-body">


                   
                  <div class="form-group">
                    <label for="exampleInputTitre">Nom</label>
                    <div >
                        
                    <input id="title" placeholder="Nom " type="text" value="{{$bourse->title}}" class="form-control @error('title') is-invalid @enderror" name="title"  required >

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputTitre">Lieu</label>
                    <div >
                        
                        <input id="lieu" placeholder="Lieu de bourse" type="text" value="{{$bourse->lieu}}" class="form-control @error('lieu') is-invalid @enderror" name="lieu"  required >

                        @error('lieu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>


                 

                  <div class="form-group">
                    <label for="exampleInputTitre">Spécialité</label>
                    <div >
                        
                        <input id="spécialité" placeholder="Spécialité concernée" type="text" value="{{$bourse->spécialité}}" class="form-control @error('spécialité') is-invalid @enderror" name="spécialité"  required >
  
                        @error('spécialité')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
               
                  <div class="form-group">
                    <label for="exampleInputTitre">Année universitaire</label>
                    <div >
                        
                        <input id="année_universitaire" placeholder="Année" type="text" value="{{$bourse->année_universitaire}}" class="form-control @error('année_universitaire') is-invalid @enderror" name="année_universitaire"  required >
  
                        @error('année_universitaire')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputTitre">Description</label>
                    <div >
                        
                        <textarea id="description" placeholder="un text ..."   class="form-control @error('description') is-invalid @enderror" name="description"  required>{{$bourse->description}}</textarea>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputTitre">Liens</label>
                    <div >
                        
                        <input id="link" placeholder="Lien " type="text" value="{{$bourse->link}}" class="form-control @error('link') is-invalid @enderror" name="link"  required >

                        @error('link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success pl-4 pr-4">Créer</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          
          <!--/.col (right) -->
        
       
      
      
    </section>

@endsection