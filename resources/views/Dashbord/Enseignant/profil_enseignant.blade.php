@extends('layouts.enseignant')

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
              <form method="POST" action="{{url('/dashbord/enseignant/profil_enseignant'.Auth::user()->id)}}">
                <input type="hidden" name="_methode" value="PUT">
                @csrf
                <div class="card-body" id="hiddens">



                  <div class="form-group">
                    <label for="exampleInputTitre">Nom</label>
                    <div >
                        
                        <input id="name" placeholder="Entrer le nom" type="text" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror" name="name"  required >

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
                        
                        <input id="email" placeholder="Entrer l'email" type="email" value="{{$user->email}}" class="form-control @error('email') is-invalid @enderror" name="email"  required >

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="exampleInputTitre">N° sécurité sociale</label>
                    <div>
                    
                           
                                <input id="nteacher" placeholder="Entrer N° sécurité sociale"  type="text" value="{{$user->nteacher}}" class="form-control @error('nteacher') is-invalid @enderror" name="nteacher" value="{{ old('nteacher') }}" required autocomplete="nteacher" >

                                @error('nteacher')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>
                         <div class="form-group">
                            <label for="password">Un nouveau mot de passe ?</label>

                            <div>
                                <input id="password" placeholder="Saisir le nouveau mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                
                       
                        
                   <div class="card-footer">
                  <button type="submit" class="btn btn-success pl-4 pr-4">Register</button>
                </div>
              </form>
            </div>
                    
</section>      
    
@endsection
