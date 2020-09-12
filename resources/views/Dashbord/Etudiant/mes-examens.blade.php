@extends('layouts.etudiant')

@section('content')


<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mes Examens</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Examens</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

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
            width: 100%;
        
         }
         .document-content{
        
           background-color: #F4F6F9;;
            width: 100%;
            
        
         }
         .document-content p{
        
        font-size: 15px;
        
        }
        .item{
          width: 100%;

        }

        .countdown{
         font-size: 24px;
         color : white;
        }
        .document-countdown{
          background-color: #6998CC;;
            width: 100%;
        }

        .fa-clock{
          color: #Ffff;
          font-size: 1.5em;

           
         

        }
        .semestre{
          font-size: 18px;
          background-color: #007BFF;

        }

        .semestre1{
          font-size: 18px;
          background-color: #007BFF;
          float: right;

        }

        </style>
        
        
        <span class="badge badge-pill badge-info semestre ">Semestre 1</span>
        <span class="badge badge-pill badge-info semestre1 ">Semestre 2</span>

              <div class="row " >

               
                
               <div class="col-6 row pt-4 mr-3"  style="background-color:#E6EBF4;">

               
        
                  <div class="col-6">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Examens <span class="badge badge-pill badge-info ml-2">individuels</span> </h3>
                       
        
                        <div class="card-tools">
                          <div class="input-group input-group-sm" style="width: 150px;">
                         
                          </div>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body table-responsive p-0 " style="overflow: hidden;">

                        <div class="row d-flex justify-content-center p-4">

                          @foreach ($examsS1 as $examS1)
                              
                         
        
                     
                          <div class="item pb-2">
                            <div class="document-content-title p-2 ">
                             
                              <b> Prochain Examen: {{$examS1->nom}}</b>
                            
                            </div>
        
                            <div class="document-countdown d-flex justify-content-between pt-1 pl-3 pr-3 pb-2">
                            <span  class="countdown" data-countdown="{{$examS1->date}}" data-heure="{{$examS1->heure}}" id="demo"></span> <i class="far fa-clock mt-2 "></i>
                             


                            </div>
        
                          </div>
                          @endforeach
        
                           
        
                        </div>
         
                    
                          
                      </div>
                      <!-- /.card-body -->
                    </div>
                  </div>
                  <!-- /.cend section one -->
        
                  <div class="col-6">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Examens<span class="badge badge-pill badge-info ml-2">Finaux</span> </h3>
                       
        
                        <div class="card-tools">
                          <div class="input-group input-group-sm" style="width: 150px;">
                         
                          </div>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body table-responsive p-0 " style="overflow: hidden;">
        
                        <div class="row d-flex justify-content-center p-4">
        
                          @foreach ($examensS1 as $examen)
        
                          <div class="item pb-2">
                            <div class="document-content-title p-2 ">
                              @if($examen->type == 'examen')
                              <b> Planning Examens : {{$examen->semestre}}</b>
                              @else 
                               <b> Planning Controls : {{$examen->semestre}}</b>
                               @endif
                            </div>
        
                            <div class="document-content pt-1 pl-3 pr-3 pb-2">

                               @foreach ($examen->media as $media)
                             
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

                </div>


                  <!-- /.cend section one -->

                  <div class="col-6 row  pt-4" style="background-color:#E6EBF4;">

               
        
                    <div class="col-6">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Examens <span class="badge badge-pill badge-info ml-2">individuels</span> </h3>
                         
          
                          <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                           
                            </div>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0 " style="overflow: hidden;">
  
                          <div class="row d-flex justify-content-center p-4">
          
                       
                            @foreach ($examsS2 as $examS2)
                              
                         
        
                     
                            <div class="item pb-2">
                              <div class="document-content-title p-2 ">
                               
                                <b> Prochain Examen: {{$examS2->nom}}</b>
                              
                              </div>
          
                              <div class="document-countdown d-flex justify-content-between pt-1 pl-3 pr-3 pb-2">
                              <span  class="countdown" data-countdown="{{$examS2->date}}" data-heure="{{$examS2->heure}}"  id="demo"></span> <i class="far fa-clock mt-2 "></i>
                               
  
  
                              </div>
          
                            </div>
                            @endforeach
                     
          
                             
          
                          </div>
           
                      
                            
                        </div>
                        <!-- /.card-body -->
                      </div>
                    </div>
                    <!-- /.cend section one -->
                    
          
                    <div class="col-6">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Examens<span class="badge badge-pill badge-info ml-2">Finaux</span> </h3>
                         
          
                          <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                           
                            </div>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0 " style="overflow: hidden;">
          
                          <div class="row d-flex justify-content-center p-4">
          
                            @foreach ($examensS2 as $examen)
          
                            <div class="item pb-2">
                              <div class="document-content-title p-2 ">
                                @if($examen->type == 'examen')
                                <b> Planning Examens : {{$examen->semestre}}</b>
                                @else 
                                 <b> Planning Controls : {{$examen->semestre}}</b>
                                 @endif
                              </div>
          
                              <div class="document-content pt-1 pl-3 pr-3 pb-2">
  
                                 @foreach ($examen->media as $media)
                               
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
  
                  </div>
                  <!-- /.cend section one -->
        
                
        
        
                </div>
              
            </section>

@endsection
