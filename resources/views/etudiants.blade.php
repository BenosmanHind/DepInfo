@extends('layouts.admin')

@section('content')
<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Comptes étudiants </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">étudiants</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Vous trouverez ci-joint la table des étudiants</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
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
                      <th>Spécialité</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($etuds as $etud)
                    <tr>
                      <td>{{$etud->id}}</td>
                      <td>{{$etud->name}}</td>
                      <td>{{$etud->updated_at}}</td>

                      <td >
                        @if ($etud->accept == 0)
                             <h5><span class="Left badge badge-warning ">En attent</span></h5>
                        @else  <h5><span class="Left badge badge-success ">Approuvé</span></h5>
                        @endif
                           
                          
                      </td>
                      <td>{{$etud->specialite}}</td>
                      <td class="">
                          <form action="{{url('etudiants/'.$etud->id)}}" method="post">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                          <a href="" class="btn btn-success btn-circle">
                            <i class="fas fa-check"> </i>
                          </a>
                          <a href="" class="btn btn-warning btn-circle">
                            <i class="fas fa-pencil-alt"> </i>
                          </a>
                          <a href="" class="btn btn-danger btn-circle">
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
