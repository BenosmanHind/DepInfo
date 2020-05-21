@extends('layouts.admin')

@section('content')
<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ajouter un module</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">AddModule</li>
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
            <form role="form"  method="POST" action="{{route('modules.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">


                   
                  <div class="form-group">
                    <label for="exampleInputTitre">Nom</label>
                    <div >
                        
                        <input id="nom" placeholder="Nom de module" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom"  required >

                        @error('nom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputTitre">Promo</label>
                    <div >
                        
                        <input id="promo" placeholder="Promo" type="text"  class="form-control @error('promo') is-invalid @enderror" name="promo"  required>

                        @error('promo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>



                  <div class="form-group">
                    <label for="exampleInputTitre">Spécialité</label>
                    <div >
                        
                        <input id="spécialité" placeholder="Spécialité"  type="text"  class="form-control @error('spécialité') is-invalid @enderror" name="spécialité"  required>

                        @error('spécialité')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputTitre">Semestre</label>
                    <div >
                        
                        <input id="semestre" placeholder="Semestre" type="text"   class="form-control @error('semestre') is-invalid @enderror" name="semestre"  required>

                        @error('semestre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
