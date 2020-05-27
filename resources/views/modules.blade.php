@extends('layouts.admin')

@section('content')
<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Les Modules </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Modules</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Vous trouverez ci-joint la table des modules</h3>
                 <a class="btn btn-success float-right" href="{{url('addmodules')}}"> <i class="fas fa-plus mr-2"></i> Ajouter</a>


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
                      <th>Nom</th>
                      <th>Promo</th>
                      <th>Spécialité</th>
                      <th>Type</th>
                      <th>Code</th>
                      <th>Semestre</th>
                      <th>Déscription</th>
                    
                      
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                   
                   @foreach ($mod as $mod)
                    <tr>
                      <td>{{$mod->id}}</td>
                      <td>{{$mod->nom}}</td>
                      <td>{{$mod->promo}}</td>
                      <td>{{$mod->specialite}}</td>
                      <td>{{$mod->type}}</td>
                      <td>{{$mod->code}}</td>
                      <td>{{$mod->semestre}}</td>
                      <td>{{$mod->description}}</td>

                     
                      <td class="">

                          <form action="{{url('modules/'.$mod->id)}}" method="post">
                          {{csrf_field()}}
                          {{method_field('DELETE')}} 

                          
                          
                           <a href="{{url('modules/'.$mod->id)}}"  onclick="return confirm('Vous voulez vraiment supprimer?')" class="btn btn-danger btn-circle">
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
