@extends('layouts.enseignant')

@section('content')


<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modifier ce document !</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Documents</li>
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
              <form action="{{url('/documents/'.$document->id)}}" method="POST" class="user" enctype="multipart/form-data" >
                <input type="hidden" name="_method" value="PUT">
                @csrf
            

                <div class="card-body row" >

                    <div class="col-lg-6">
                        <div class="form-group" >
                            <label for="exampleInputTitre">Vous voulez envoyer un ?</label>
                            <div class="form-group">
                                  <select name="type" class="form-control" >
                                      <option value="">Select</option>
                                      <option value="cours" @if($document->doc == 'cours') selected @endif> Cours</option>
                                      <option value="td" @if($document->doc == 'td') selected @endif>TD</option>
                                      <option value="tp" @if($document->doc == 'tp') selected @endif>TP</option>
                                      <option value="note" @if($document->doc == 'note') selected @endif>Note</option>
                                  </select>
                                  @error('promo')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                            </div>
                          </div>

                    

                        <div class="form-group">
                            <label for="exampleInputTitre">Titre</label>
                            <div >
                                
                            <input id="titre" placeholder="Titre" type="text" value="{{ old('titre', $document->title) }}" class="form-control @error('titre') is-invalid @enderror" name="titre"  required >
        
                                @error('titre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputTitre">Description</label>
                        <div >
                            
                            <textarea id="description" placeholder="Nom de module"  type="text" class="form-control @error('description') is-invalid @enderror" name="description"  required >{{$document->description}}
                            </textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                  </div>
                  </div>
      
                  <div class="col-lg-6">
                
                          <div class="form-group" >
                            <label for="exampleInputTitre">Module</label>
                            <div class="form-group">
                                  <select name="module" class="form-control" >
                                      <option value="">Select</option>
                                      @foreach ($modules as $module)
                                      <option value="{{$module->id}}" @if($document->module_id == $module->id) selected @endif>{{$module->nom}}</option>
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
                            <label for="picture">Uploder un fichier</label>
                          @foreach ($document->medias as $media)
                              
                         
                          <div><a href="{{$media->lien}}">{{$media->name}}</a></div>
                          @endforeach
        
                                <input name="fichier" id="fichier" type="file" class="form-control-file" multiple >
                                
                          </div>
                         

                          <button type="submit" class="btn btn-success pl-4 pr-4 ">Envoyer aux étudiants</button>
                 </div>


            </div>
              </form>

                  
                  </div>
 

                
            




            
                    
</section>      
    
@endsection
