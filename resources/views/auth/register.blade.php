@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inscription Etudiant') }}</div>

                <div class="card-body" id="hiddens">
                    @if (count($errors) > 0)
                            <div class="error ">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                     @endif
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nstudent" class="col-md-4 col-form-label text-md-right">{{ __('N° carte') }}</label>

                            <div class="col-md-6">
                                <input id="nstudent" type="text" class="form-control @error('nstudent') is-invalid @enderror" name="nstudent" value="{{ old('nstudent') }}" required autocomplete="nstudent" >

                                @error('nstudent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" id="promo1">
                            <label for="exampleInputTitre" class="col-md-4 col-form-label text-md-right">Promo</label>
                            <div class="col-md-6">
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
                          </div>

                          <div class="form-group row" id="specialite1">
                            <label for="exampleInputTitre" class="col-md-4 col-form-label text-md-right">Specilaité</label>
                            <div class="col-md-6">
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
                          </div>
        

                        

                        <div class="form-group row" v-show="seen">
                            <label for="nteacher" class="col-md-4 col-form-label text-md-right">{{ __('n teacher') }}</label>

                            <div class="col-md-6">
                                <input id="nteacher" type="text" class="form-control @error('nteacher') is-invalid @enderror" name="nteacher" value="0" required autocomplete="nteacher" >

                                @error('nteacher')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" v-show="seen">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('role') }}</label>

                            <div class="col-md-6">
                                <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value=3 required autocomplete="role" >

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
