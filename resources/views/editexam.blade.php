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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Examens</li>
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
             <form role="form"  method="POST" action="{{url('/gerer-examen/'.$examen->id)}}" class="user" enctype="multipart/form-data" >
                <input type="hidden" name="_method" value="PUT">

                @csrf
                {{ method_field('PATCH') }}
                <div class="card-body">


                   
                 

                  <div class="form-group" id="promo1">
                    <label for="exampleInputTitre">Promo</label>
                    <div class="form-group">
                          <select name="promo" id="promo" class="form-control" >
                              <option value="">Select</option>
                              <option value="L2"@if($examen->promo == 'L2') selected @endif> L2</option>
                              <option value="L3"@if($examen->promo == 'L3') selected @endif> L3</option>
                              <option value="M1"@if($examen->promo == 'M1') selected @endif> M1</option>
                              <option value="M2"@if($examen->promo == 'M2') selected @endif> M2</option>>L2</option>
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
                              <option value="SIC"@if($examen->specialite == 'SIC') selected @endif> SIC</option>
                              <option value="RSD"@if($examen->specialite == 'RSD') selected @endif> RSD</option>
                              <option value="GL"@if($examen->specialite == 'GL') selected @endif> GL</option>
                              <option value="MID"@if($examen->specialite == 'MID') selected @endif> MID</option>
                          </select>
                          @error('specialite')
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
                              <option value="S1"@if($examen->semestre == 'S1') selected @endif> S1</option>
                              <option value="S2"@if($examen->semestre == 'S2') selected @endif> S2</option>
                          </select>
                          @error('semestre')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                    </div>
                  </div>

                   <div class="form-group" >
                            <label for="exampleInputTitre">Type</label>
                            <div class="form-group">
                                  <select name="type" class="form-control" >
                                      <option value="">Select</option>
                                      <option value="control" @if($examen->type == 'control') selected @endif> Control</option>
                                      <option value="examen" @if($examen->type == 'examen') selected @endif>Examen</option>
                    
                                  </select>
                                  @error('promo')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                            </div>
                          </div>
                  
                  
                         <div class="form-group">
                            <label for="picture">Uploder un fichier</label>
                          @foreach ($examen->media as $media)
                              
                         
                          <div><a href="{{$media->lien}}">{{$media->name}}</a></div>
                          @endforeach
        
                                <input name="fichier" id="fichier" type="file" class="form-control-file" multiple >
                                
                          </div>
                         


                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success pl-4 pr-4">save</button>
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


