@extends('layouts.admin')

@section('content')
<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editer un module</h1>
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
             <form role="form"  method="POST" action="{{route('modules.update',['module' => $module->id])}}">
                @csrf
                {{ method_field('PATCH') }}
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

                  <div class="form-group" id="promo1">
                    <label for="exampleInputTitre">Promo</label>
                    <div class="form-group">
                          <select name="promo" id="promo" class="form-control" >
                              <option value="">Select</option>
                              <option value="L2">L2</option>
                              <option value="L3">L3</option>
                              <option value="M1">M1</option>
                              <option value="M2">M2</option>
                          </select>
                          @error('promo')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                    </div>
                  </div>



                  <div class="form-group" id="specialite1">
                    <label for="exampleInputTitre">Specilaité</label>
                    <div class="form-group">
                          <select name="specialite" id="specialite" class="form-control" >
                              <option value="">Select</option>
                              <option value="SIC">SIC</option>
                              <option value="RSD">RSD</option>
                              <option value="GL">GL</option>
                              <option value="MID">MID</option>
                          </select>
                          @error('specialite')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                    </div>
                  </div>

                  <div class="form-group" >
                    <label for="exampleInputTitre">Type</label>
                    <div class="form-group">
                          <select name="type" id="type" class="form-control" >
                              <option value="">Select</option>
                              <option value="Fondamentale">Fondamentale</option>
                              <option value="Méthodologie">Méthodologie</option>
                              <option value="Découverte">Découverte</option>
                              <option value="Transversale">Transversale</option>
                          </select>
                          @error('type')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                    </div>
                  </div>

                  <div class="form-group">
                    <label >Code</label>
                    <div >
                        
                        <input id="code" placeholder="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" required >

                        @error('code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputTitre">Semestre</label>
                    <div class="form-group">
                          <select name="semestre" id="semestre" class="form-control" >
                              <option value="">Select</option>
                              <option value="S1">S1</option>
                              <option value="S2">S2</option>
                          </select>
                          @error('semestre')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                    </div>
                  </div>
 
                  <div class="form-group">
                    <label >Déscription</label>
                    <div >
                        
                        <input id="description" placeholder="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" required >

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>

                  
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success pl-4 pr-4">Editer</button>
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


