@extends('layouts.enseignant')

@section('content')
<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modules que vous enseignez !</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Modules</li>
            </ol>
          </div>
        </div>
      </div>

      
          <div class="container-fluid col-md-8 pt-5 "  id="app">
      
          
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Merci de remplir les champs</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('admins/add') }}" enctype="multipart/form-data" class="user">
                @csrf
                <div class="card-body row" id="hiddens">

                    <div class="col-lg-6">

                    

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


                          <div class="form-group" id="module">
                            <label for="exampleInputTitre">Module</label>
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


                
                   <div class="card-footer">
                  <button type="submit" class="btn btn-success pl-4 pr-4">Ajouter</button>
                </div>
            </div>
              </form>

              <div class="col-lg-6 text-center">
                  Mes Modules
              </div>
            </div>
                    
</section>      
    
@endsection
