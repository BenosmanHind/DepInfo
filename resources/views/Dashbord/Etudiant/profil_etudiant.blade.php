@extends('layouts.etudiant')

@section('content')
<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
        </div>
      </div>

      
          <div class="container-fluid col-md-6 pt-5 "  id="app">
      
          
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Merci de remplir les champs</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="card-body" id="hiddens">



                  <div class="form-group">
                    <label for="exampleInputTitre">Nom</label>
                    <div >
                        
                        <input id="name" placeholder="Entrer le nom" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  required >

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputTitre">Email</label>
                    <div >
                        
                        <input id="email" placeholder="Entrer l'email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required >

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                    <div class="form-group ">
                    <label for="exampleInputTitre">N° carte</label>
                    <div>
                    
                           
                                <input id="nstudent" placeholder="Entrer N° carte"  type="text" class="form-control @error('nstudent') is-invalid @enderror" name="nstudent" value="{{ old('nstudent') }}" required autocomplete="nstudent" >

                                @error('nstudent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>
                      </div>
                      <div class="form-group " id="promo1">
                            <label for="exampleInputTitre" >Promo</label>
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

                        <div class="form-group " id="specialite1">
                            <label for="exampleInputTitre" >Spécialité</label>
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

                           

                  


                
                   <div class="card-footer">
                  <button type="submit" class="btn btn-success pl-4 pr-4">Register</button>
                </div>
              </form>
            </div>
                    
</section>      
    
@endsection
