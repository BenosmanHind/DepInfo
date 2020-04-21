@extends('layouts.admin')

@section('content')
<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ajouter Un Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">AddAdmin</li>
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
              <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="user">
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
                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>

                            <div>
                                <input id="password" placeholder="Saisir mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                  <div class="form-group" v-show="seen">
                            <label for="nteacher">{{ __('n teacher') }}</label>

                            <div>

                                <input id="nteacher" type="text" class="form-control @error('nteacher') is-invalid @enderror" name="nteacher" value="0" required autocomplete="nteacher" >

                                @error('nteacher')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    <div class="form-group" v-show="seen">
                            <label for="nteacher">{{ __('n student') }}</label>

                            <div>
                              
                                <input id="nstudent" type="text" class="form-control @error('nstudent') is-invalid @enderror" name="student" value="0" required autocomplete="nstudent" >

                                @error('nstudent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group" v-show="seen">
                            <label for="specialite">{{ __('Promo') }}</label>

                            <div>
                                <input id="specialite" type="text" class="form-control @error('specialite') is-invalid @enderror" name="specialite" value="0" required autocomplete="specialite" >

                                @error('specialite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group" v-show="seen">
                            <label for="role">{{ __('role') }}</label>

                            <div>
                                <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value=1 required autocomplete="role" >

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                   <div class="card-footer">
                  <button type="submit" class="btn btn-success pl-4 pr-4">Créer</button>
                </div>
              </form>
            </div>
                    
</section>      
    
@endsection
