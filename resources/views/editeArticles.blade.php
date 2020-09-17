@extends('layouts.admin')

@section('content')
<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editer un article</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">AddArticles</li>
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

              
            <form role="form"  method="POST" action="{{route('articles.update',['article' => $article->id])}}">
                @csrf
                {{ method_field('PATCH') }}
                <div class="card-body">


                   
                  <div class="form-group">
                    <label for="exampleInputTitre">Nom</label>
                    <div >
                        
                    <input id="title" placeholder="Nom de l'Article" type="text" value="{{$article->title}}" class="form-control @error('title') is-invalid @enderror" name="title"  required >

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>


                 


            

                  <div class="form-group">
                    <label for="exampleInputTitre">Description</label>
                    <div >
                        
                        <textarea id="description" placeholder="un text ..."   class="form-control @error('description') is-invalid @enderror" name="description"  required>{{$article->description}}</textarea>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>


                  
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>



                   <div class="card-footer">
                  <button type="submit" class="btn btn-success pl-4 pr-4">Save</button>
                </div>
                  
                </div>
                <!-- /.card-body -->

               
              </form>
            </div>
            <!-- /.card -->

            
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          
          <!--/.col (right) -->
        
       
      
      
    </section>

@endsection
