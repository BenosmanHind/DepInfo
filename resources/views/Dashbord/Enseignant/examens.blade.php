@extends('layouts.enseignant')

@section('content')
<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Planifier un examen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">AddExamen</li>
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
            <form role="form"  method="POST" action="{{route('examens.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">


                   
                   <div class="form-group" >
                            <label for="exampleInputTitre">Module</label>
                            <div class="form-group">
                                  <select name="module" class="form-control" >
                                      <option value="">Select</option>
                                      @foreach ($modules as $module)
                                      <option value="{{$module->id}}">{{$module->nom}}</option>
                                      @endforeach
                                      
                                  </select>
                                  @error('promo')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                            </div>
                          </div>

                    <div class="form-group">
                        <div class="form-group" >
                            <label for="exampleInputTitre">Type</label>
                            <div class="form-group">
                                  <select name="type" class="form-control" >
                                      <option value="">Select</option>
                                      <option value="Controle">Controle</option>
                                      <option value="Test">Test</option>
                                      <option value="Examen">Examen</option>
                                     
                                  </select>
                                  @error('type')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                            </div>
                          </div>
                   <div class="form-group">
                    <label for="exampleInputTitre">Date</label>
                    <div >
                        
                        <input id="date" placeholder="Date d'examen" type="date" class="form-control @error('date') is-invalid @enderror" name="date"  required >

                        @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputTitre">Heure</label>
                    <div >
                        
                        <input id="heure" placeholder="L'heure d'examen" type="time" class="form-control @error('heure') is-invalid @enderror" name="heure"  required >

                        @error('heure')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputTitre">Salle</label>
                    <div >
                        
                        <input id="salle" placeholder="Sale d'examen" type="salle" class="form-control @error('salle') is-invalid @enderror" name="salle"  required >

                        @error('salle')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                 

              
                  
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success pl-4 pr-4">Planifier</button>
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


