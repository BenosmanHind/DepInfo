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

    background-color: #E6E9EF;
    width: auto;

 }
 .document-content{

   background-color: #F4F6F9;;
    width: auto;
    

 }
 .document-content p{

font-size: 15px;

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
              <li class="breadcrumb-item active">Documents</li>
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

                       @foreach ($cours->reverse()  as $cour)

                        <div class="item pb-2">
                          <div class="document-content-title p-2 ">
                              <b> {{$cour->title}}</b>
                          </div>

                          <div class="document-content pt-1 pl-3 pr-3 pb-2">
                            <p >{{$cour->description}} </p>
                            
                             @foreach ($cour->medias as $media)

                            <a href="{{$media->lien}}"> <i class="far fa-file-alt pr-1"></i>   {{$media->name}}</a></br>
                       
                            @endforeach
                            
                          </div>

                        </div>
                        @endforeach

  
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

                  @foreach ($tds->reverse()  as $td)

                  <div class="item pb-2">
                    <div class="document-content-title p-2 ">
                        <b> {{$td->title}}</b>
                    </div>

                    <div class="document-content pt-1 pl-3 pr-3 pb-2">
                      <p >{{$td->description}} </p>
                      
                       @foreach ($td->medias as $media)

                      <a href="{{$media->lien}}"> <i class="far fa-file-alt pr-1"></i>  {{$media->name}}</a></br>
                 
                      @endforeach
                      
                    </div>

                  </div>
                  @endforeach

                   

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

                  @foreach ($tps->reverse()  as $tp)

                  <div class="item pb-2">
                    <div class="document-content-title p-2 ">
                        <b> {{$tp->title}}</b>
                    </div>

                    <div class="document-content pt-1 pl-3 pr-3 pb-2">
                      <p >{{$tp->description}} </p>
                      
                       @foreach ($tp->medias as $media)

                      <a href="{{$media->lien}}"> <i class="far fa-file-alt pr-1"></i>  {{$media->name}}</a></br>
                 
                      @endforeach
                      
                    </div>

                  </div>
                  @endforeach
                   

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
                  @foreach ($notes->reverse()  as $note)

                  <div class="item pb-2">
                    <div class="document-content-title p-2 ">
                        <b> {{$note->title}}</b>
                    </div>

                    <div class="document-content pt-1 pl-3 pr-3 pb-2">
                      <p >{{$note->description}} </p>
                      
                       @foreach ($note->medias as $media)

                      <a href="{{$media->lien}}"> <i class="far fa-file-alt pr-1"></i>  {{$media->name}}</a></br>
                 
                      @endforeach
                      
                    </div>

                  </div>
                  @endforeach
                   

                </div>
                  
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.cend section one -->



        </div>
      
    </section>

@endsection
