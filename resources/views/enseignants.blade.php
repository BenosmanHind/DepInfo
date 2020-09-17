@extends('layouts.admin')

@section('content')
<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Comptes Enseignants </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">enseignants</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Vous trouverez ci-joint la table des enseignants</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nom & prénom</th>
                      <th>N° Sécurité sociale</th>
                      <th>Date</th>
                      <th>Statu</th>
                      
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                   
                   @foreach ($ensg as $ensg)
                    <tr>
                      <td>{{$ensg->id}}</td>
                      <td>{{$ensg->name}}</td>
                      <td>{{$ensg->nteacher}}</td>
                      <td>{{$ensg->created_at}}</td>

                      <td >
                        @if ($ensg->accept == 0)
                             <h5><span class="Left badge badge-warning ">En attent</span></h5>
                        @else  <h5><span class="Left badge badge-success ">Approuvé</span></h5>
                        @endif
                           
                          
                      </td>
                     
                      <td class="">

                          <form action="{{url('enseignants/'.$ensg->id)}}" method="post">
                          {{csrf_field()}}
                          {{method_field('DELETE')}} 

                           @if($ensg->accept == 0)
                          <a href="{{url('enseignants/validate/'.$ensg->id)}}"  onclick="return confirm('Vous voulez vraiment approuver?')" class="btn btn-success btn-circle ">
                            <i class="fas fa-check"> </i>
                          </a> 
                          @else  <a href="{{url('enseignants/'.$ensg->id)}}"  onclick="return confirm('Vous voulez vraiment approuver?')" class="btn btn-success btn-circle disabled ">
                            <i class="fas fa-check"> </i>
                          </a> 
                          @endif
                          
                           <a href="{{url('enseignants/'.$ensg->id)}}"  onclick="return confirm('Vous voulez vraiment supprimer?')" class="btn btn-danger btn-circle">
                            <i class="fas fa-trash"> </i>
                          </a>
                          </form>
                      </td>
                    </tr>
                    @endforeach
                     
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      
    </section>

@endsection
