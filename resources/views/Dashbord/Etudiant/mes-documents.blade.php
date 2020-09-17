@extends('layouts.etudiant')

@section('content')

<style>


.mdl{
    height: 100px;
    width: 100px;
    font-size: 20px;

 }
 
  .badge-info{
    border-radius: 0;
    background-color: coral;
  }
 

 .card-header{
   background-color: #343a40;
   color: aliceblue;
 }
</style>


<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Choisir un module</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Articles</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Les modules du <span class="badge badge-pill badge-info ml-2">semestre 1</span> </h3>
               

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                 
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 " style="overflow: hidden;">

                <div class="row p-4">

                  <div class="mr-2">
                    @foreach ($modulesS1 as $moduleS1)
                      <a href="{{url('documentView/'.$moduleS1->id)}}"> 
                      
                      <button type="button" class="btn btn-primary mdl">
                      
                      <div class="p-1 ml-8" >{{$moduleS1->nom}} </div>
                      
                    </button>
                    </a>
                  @endforeach
 
                  
                  </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          
          </div>
        </div>

       
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Les modules du <span class="badge badge-pill badge-info ml-2">semestre 2</span> </h3>
               

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                 
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 " style="overflow: hidden;">

                <div class="row p-4">

                  <div class="mr-2">
                  
                 @foreach ($modulesS2 as $moduleS2)
                     <a href="{{url('documentView/'.$moduleS2->id)}}"> 
                    <button type="button" class="btn btn-primary mdl">
                    
                     <div class="p-1 ml-8" >{{$moduleS2->nom}} </div>
                     
                  </button>
                   </a>
                  @endforeach
 
                  
                  </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          
         
        </div>


 

          
          </div>
        </div>
      
    </section>

@endsection
