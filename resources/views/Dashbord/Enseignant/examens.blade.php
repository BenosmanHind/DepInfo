@extends('layouts.enseignant')

@section('content')


<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PLanifier Un Examen !</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Examens</li>
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
              <form action="{{route('documents.store')}}" method="POST" class="user" enctype="multipart/form-data" >
                @csrf
            

                <div class="card-body row" >

                    <div class="col-lg-6">
                        <div class="form-group" >
                            <label for="exampleInputTitre">Type</label>
                            <div class="form-group">
                                  <select name="type" class="form-control" >
                                      <option value="">Select</option>
                                      <option value="cours">Control</option>
                                      <option value="td">Examen</option>
                                      <option value="tp">Test TP</option>
                                      
                                  </select>
                                  @error('promo')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                            </div>
                          </div>

                         <div class="form-group">
                         <label for="exampleInputTitre">Date</label>
                         <div >
                        
                        <input id="date" placeholder="date d'examen" type="date" class="form-control @error('date') is-invalid @enderror" name="date"  required >

                        @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                    

                        <div class="form-group">
                            <label for="exampleInputTitre">Salle</label>
                            <div >
                                
                                <input id="titre" placeholder="Salle" type="text" class="form-control @error('titre') is-invalid @enderror" name="titre"  required >
        
                                @error('titre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                      </div>

                    
                  </div>
      
                 
                         
                
                   
                 
                
                       <div class="card-footer">
                        <button type="submit" class="btn btn-success pl-4 pr-4">Créer</button>
                      </div>
            </div>
              </form>

                  
                  </div>
              </div>
            </div>
                    
</section>      
    
@endsection
