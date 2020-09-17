@extends('layouts.admin')

@section('content')
<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editer un examen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
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
             <form role="form"  method="POST" action="{{route('modules.update',['module' => $module->id])}}" class="user" enctype="multipart/form-data" >
                <input type="hidden" name="_method" value="PUT">
                @csrf
                {{ method_field('PATCH') }}
                <div class="card-body">


                   
                  <div class="form-group">
                    <label for="exampleInputTitre">Nom</label>
                    <div >
                        
                        <input id="nom" placeholder="Nom de module" type="text" value="{{ old('nom', $module->nom) }}" class="form-control @error('nom') is-invalid @enderror" name="nom"  required >

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
                              <option value="L2" @if($module->promo == 'L2') selected @endif> L2</option>
                              <option value="L3"@if($module->promo == 'L3') selected @endif> L3</option>
                              <option value="M1"@if($module->promo == 'M1') selected @endif> M1</option>
                              <option value="M2"@if($module->promo == 'M2') selected @endif> M2</option>
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
                          <select name="specialite" id="specialite1" class="form-control" >
                              <option value="">Select</option>
                              <option value="SIC"@if($module->specialite == 'SIC') selected @endif> SIC</option>
                              <option value="RSD"@if($module->specialite == 'RSD') selected @endif> RSD</option>
                              <option value="GL"@if($module->specialite == 'GL') selected @endif> GL</option>
                              <option value="MID"@if($module->specialite == 'MID') selected @endif> MID</option>
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
                              <option value="Fondamentale"@if($module->type == 'Fondamentale') selected @endif> Fondamentale</option>
                              <option value="Méthodologie"@if($module->type == 'Méthodologie') selected @endif> Méthodologie</option>
                              <option value="Découverte"@if($module->type == 'Découverte') selected @endif> Découverte</option>
                              <option value="Transversale"@if($module->type == 'Transversale') selected @endif> Transversale</option>
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
                        
                        <input id="code" placeholder="code" type="text" value="{{ old('code', $module->code) }}" class="form-control @error('code') is-invalid @enderror" name="code" required >

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
                              <option value="S1"@if($module->semestre == 'S1') selected @endif> S1</option>
                              <option value="S2"@if($module->semestre == 'S2') selected @endif> S2</option>
                          </select>
                          @error('semestre')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                    </div>
                  </div>
 
                  <div class="form-group">
                        <label for="exampleInputTitre">Description</label>
                        <div >
                            
                            <textarea id="description" placeholder="Nom de module"  type="text" class="form-control @error('description') is-invalid @enderror" name="description"  required >{{$module->description}}
                            </textarea>
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


