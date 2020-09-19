@extends('layouts.etudiant')

@section('content')


<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mon Emploi Du Temps</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Emploi du temps</li>
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
        
    
              <div class="row " >

             

              <div class="col-6">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Planning <span class="badge badge-pill badge-info ml-2">semestre1</span> </h3>

                      <div class="card-tools">
                          <div class="input-group input-group-sm" style="width: 150px;">
                         
                          </div>
                        </div>
                      </div>
                      <div class="card-body table-responsive p-0 " style="overflow: hidden;">

                      <div class="row d-flex justify-content-center p-4">
 

                      <div class="item pb-2">

                        
                            <div class="document-content pt-1 pl-3 pr-3 pb-2">

                              @if($planningS1->media)

                              
                              <a href="{{$planningS1->media->lien}} " > <i class="far fa-file-alt pr-1"></i>  {{$planningS1->media->name}}</a></br>
                              @endif
                            </div>    
                            
                 
                            
              
                       </div>

                   </div>

                </div>

                </div>
                </div>
              
           









                

              <div class="col-6">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Planning <span class="badge badge-pill badge-info ml-2">semestre2</span> </h3>

                      <div class="card-tools">
                          <div class="input-group input-group-sm" style="width: 150px;">
                         
                          </div>
                        </div>
                      </div>
                      <div class="card-body table-responsive p-0 " style="overflow: hidden;">

                      <div class="row d-flex justify-content-center p-4">


                      <div class="item pb-2">
                 

                  <div class="document-content pt-1 pl-3 pr-3 pb-2">
                    @if($planningS2->media)
                    <a href="{{$planningS2->media->lien}} " > <i class="far fa-file-alt pr-1"></i>  {{$planningS2->media->name}}</a></br>
                    @endif
                  </div>     
            
                    


             </div>

                      </div>

                </div>

                </div>
                </div>
              </div>
            </div>


          </div>

  
                     
                          




        </section>

@endsection
