@extends('layouts.etudiant')

@section('content')
<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mes Modules</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Mes Modules</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Vous trouverez ci-joint la table des Modules</h3>
                

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                      
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="overflow: hidden;" >

                <div class="row p-4">

                    <div class="col-lg-6">
                        <h4><span class="badge badge-warning">Semeste 1</span></h4>


                        <div class="p-3 mb-2 mt-2 bg-primary text-white">Fondamentale</div>
                        
                         @foreach ($modulesS1 as $moduleS1)
                            @if ($moduleS1->type == 'Fondamentale')
                              <div class="p-1 ml-4" >{{$moduleS1->code}} : {{$moduleS1->description}}</div>

                        
                            @endif
                         @endforeach
                            
                        <div class="p-3 mb-2 mt-2 bg-primary text-white">Méthodologie</div>
                            @foreach ($modulesS1 as $moduleS1)
                              @if ($moduleS1->type == 'Méthodologie')
                                <div class="p-1 ml-4" >{{$moduleS1->code}} : {{$moduleS1->description}}</div>
                              
                              @endif
                          @endforeach
                        
                        <div class="p-3 mb-2 mt-2 bg-primary text-white">Découverte</div>
                          @foreach ($modulesS1 as $moduleS1)
                              @if ($moduleS1->type == 'Découverte')
                                <div class="p-1 ml-4" >{{$moduleS1->code}} : {{$moduleS1->description}}</div>
                              
                              @endif
                          @endforeach
                        
                        <div class="p-3 mb-2 mt-2 bg-primary text-white">Transversale</div>
                              @foreach ($modulesS1 as $moduleS1)
                                @if ($moduleS1->type == 'Transversale')
                                  <div class="p-1 ml-4" >{{$moduleS1->code}} : {{$moduleS1->description}}</div>
                                
                                @endif
                            @endforeach
                        


    
                    </div>
                    <div class="col-lg-6">
                        <h4><span class="badge badge-warning">Semeste 2</span></h4>

                        
                        <div class="p-3 mb-2 mt-2 bg-primary text-white " id="fdn">Fondamentale</div>
                        
                         @foreach ($modulesS2 as $moduleS2)
                            @if ($moduleS2->type == 'Fondamentale')
                              <div class="p-1 ml-4" >{{$moduleS2->code}} : {{$moduleS2->description}}</div>
                           
                            @endif
                         @endforeach
                            
                        <div class="p-3 mb-2 mt-2 bg-primary text-white">Méthodologie</div>
                            @foreach ($modulesS2 as $moduleS2)
                              @if ($moduleS2->type == 'Méthodologie')
                                <div class="p-1 ml-4" >{{$moduleS2->code}} : {{$moduleS2->description}}</div>
                              
                              @endif
                          @endforeach
                        
                        <div class="p-3 mb-2 mt-2 bg-primary text-white">Découverte</div>
                          @foreach ($modulesS2 as $moduleS2)
                              @if ($moduleS2->type == 'Découverte')
                                <div class="p-1 ml-4" >{{$moduleS2->code}} : {{$moduleS2->description}}</div>
                              
                              @endif
                          @endforeach
                        
                        <div class="p-3 mb-2 mt-2 bg-primary text-white">Transversale</div>
                              @foreach ($modulesS2 as $moduleS2)
                                @if ($moduleS2->type == 'Transversale')
                                  <div class="p-1 ml-4" >{{$moduleS2->code}} : {{$moduleS2->description}}</div>
                                
                                @endif
                            @endforeach
                        
    
                    </div>


                </div>
               
               
               

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      
    </section>

@endsection
