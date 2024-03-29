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
              

            
                

              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Admin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header ">
                <h3 class="card-title">Vous trouverez ci-joint la table des admins </h3>
                 <a class="btn btn-success float-right" href="{{url('addadmin')}}"> <i class="fas fa-plus mr-2"></i> Ajouter</a>
                
              
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
                    
                    <?php $i = 1; ?>
                    
                   @foreach ($adms as $adm)
                    <tr>
                    <td>{{$i++}}</td>
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

                            <button type="submit" onclick="return confirm('Vous voulez vraiment supprimer?')" class="btn btn-danger btn-circle">
                            <i class="fas fa-trash"> </i>
                          
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
