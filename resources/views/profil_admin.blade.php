@extends('layouts.admin')

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
              <form method="POST" action="{{url('/profil_admin'.Auth::user()->id)}}">
                <input type="hidden" name="_methode" value="PUT">
                @csrf
                <div class="card-body" id="hiddens">



                  <div class="form-group">
                    <label for="exampleInputTitre">Nom</label>
                    <div >
                        
                        <input id="name" placeholder="Entrer le nom" type="text"  value="{{ old('name', Auth::user()->name) }}" class="form-control @error('name') is-invalid @enderror" name="name"  required >

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
                        
                        <input id="email" placeholder="Entrer l'email" type="email" value="{{ old('email', Auth::user()->email) }}" class="form-control @error('email') is-invalid @enderror" name="email"  required >

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>

                    
                    <div class="form-group">
                            <label for="password">Un nouveau mot de passe ? <p style="font-size: 15px; font-weight:450; margin-bottom : -2px;">(Laissez le champ vide si vous voulez garder l'ancien)</p></label>
                            <div>
                                <input id="password" placeholder="Saisir le nouveau mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group">
                         <label for="picture">Photo de profil</label>

                        <input name="picture" id="picture" type="file" class="form-control-file" >
                        
                        </div>
                           

                     
                     
                    
                   <div class="card-footer">
                  <button type="submit" class="btn btn-success pl-4 pr-4">Save</button>
                </div>
              </form>
            </div>
                    
</section>      
    
@endsection
