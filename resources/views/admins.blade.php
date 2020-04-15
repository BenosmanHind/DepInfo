@extends('layouts.admin')

@section('content')
<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Comptes admins </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              

            
                

              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header ">
                <h3 class="card-title">Vous trouverez ci-joint la table des admin </h3>
                
              
                <div class="card-tools " >
                
                  <div class="input-group input-group-sm" >
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default " style="height: 32px;"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nom & prénom</th>
                      <th>Date</th>
                      <th>Statu</th>
                      
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($adms as $adm)
                    <tr>
                      <td>{{$adm->id}}</td>
                      <td>{{$adm->name}}</td>
                      <td>{{$adm->updated_at}}</td>

                      <td >
                        @if ($adm->accept == 0)
                             <h5><span class="Left badge badge-warning ">En attent</span></h5>
                        @else  <h5><span class="Left badge badge-success ">Approuvé</span></h5>
                        @endif
                           
                          
                      </td>
                      
                      <td class="">
                          
                          <form action="{{url('admins/'.$adm->id)}}" method="post">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}

                         @if($adm->accept == 0)
                          <a href="{{url('admins/validate/'.$adm->id)}}"  onclick="return confirm('Vous voulez vraiment approuver?')" class="btn btn-success btn-circle ">
                            <i class="fas fa-check"> </i>
                          </a> 
                          @else  <a href="{{url('admins/'.$adm->id)}}"  onclick="return confirm('Vous voulez vraiment approuver?')" class="btn btn-success btn-circle disabled ">
                            <i class="fas fa-check"> </i>
                          </a> 
                          @endif
                          
                           <a href="{{url('admins/'.$adm->id)}}" onclick="return confirm('Vous voulez vraiment supprimer?')" class="btn btn-danger btn-circle">
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
