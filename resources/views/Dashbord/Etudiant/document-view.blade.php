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

 .document-content-title{

    background-color: #DEDFE0;
    width: 300px;

 }
 .document-content{

   background-color: #F4F6F9;;
    width: 300px;

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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Articles</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

      <div class="row">


          <div class="col-3">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Voir les<span class="badge badge-pill badge-info ml-2">Cours</span> </h3>
               

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                 
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 " style="overflow: hidden;">
 
                <div class="row p-4">
                    <div class="document-content-title p-2">
                        <b> Chapitre 1 </b>
                    </div>

                    <div class="document-content p-2">
                       <p> Ce chapitre est pour vous, Ce chapitre est pour vous </p>
                    </div>
                   
                   

                </div>
                  
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.cend section one -->

          <div class="col-3">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Voir les<span class="badge badge-pill badge-info ml-2">TDs</span> </h3>
               

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                 
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 " style="overflow: hidden;">

                <div class="row p-4">
                   

                </div>
                  
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.cend section one -->

          <div class="col-3">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Voir les<span class="badge badge-pill badge-info ml-2">TPs</span> </h3>
               

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                 
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 " style="overflow: hidden;">

                <div class="row p-4">
                   

                </div>
                  
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.cend section one -->

          <div class="col-3">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Voir les<span class="badge badge-pill badge-info ml-2">Notes</span> </h3>
               

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                 
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 " style="overflow: hidden;">

                <div class="row p-4">
                   

                </div>
                  
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.cend section one -->



        </div>
      
    </section>

@endsection
