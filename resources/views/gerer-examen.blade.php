@extends('layouts.admin')

@section('content')
<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Planning Examens / Controles</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Planning examens</li>
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
            <form role="form"  method="POST" action="{{route('gerer-examen.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
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
                   <div class="form-group">
                    <label for="exampleInputTitre">Semestre</label>
                    <div class="form-group">
                          <select name="semestre" id="semestre" class="form-control" >
                              <option value="">Select</option>
                              <option value="S1">S1</option>
                              <option value="S2">S2</option>
                          </select>
                          @error('semestre')
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
                                      <option value="controle">Controles</option>
                                      <option value="examen">Examens</option>
                                     
                                  </select>
                                  @error('type')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                            </div>
                          </div>
                        </div>

                            <div class="form-group">
                              <label for="picture">Uploder un fichier</label>
          
                                  <input name="fichier" id="fichier" type="file" class="form-control-file" >
                                  
                            </div>

                         
 
           
                <!-- /.card-body -->
                

                <div class="card-footer">
                  <button type="submit" class="btn btn-success pl-4 pr-4">Planifier</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

              </div>


              <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Vos Documents</h3>
  
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>Promo</th>
                    <th>Spécialité</th>
                  
                    <th>Semestre</th>
                    <th>Type</th>
                  
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                @foreach ($examens as $examen)
              
                  <tr>
                    <td>{{$examen->id}}</td>
                    <td>{{$examen->promo}}</td>

                    <td>{{$examen->specialite}}</td>
                    <td>{{$examen->semestre}}</td>
                    <td>{{$examen->type}}</td>
                    

                    <td class="">
                      
                        <form action="{{url('/gerer-examen'.$examen->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                          
                   
                        <a href="{{}}"  class="btn btn-warning btn-circle ">
                          <i class="fas fa-edit"> </i>
                        </a> 
                          
                        <button type="submit" class="btn btn-danger btn-circle" onclick="return confirm('Vous voulez vraiment supprimer?')"> 
                          <i class="fas fa-trash"> </i>
                      </a></button>
                        </form>
                    </td>
                  </tr>
                @endforeach
                  
                 
                </tbody>
              </table>
                  
                  </div>

                  
              
            </div>
              
              
              

            
          
           
          
          
        
       
      
      
    </section>

@endsection



