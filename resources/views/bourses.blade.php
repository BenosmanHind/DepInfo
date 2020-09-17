@extends('layouts.admin')

@section('content')
<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Les Bourses</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Bourses</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Vous trouverez ci-joint la table des bourses</h3>
                <a class="btn btn-success float-right" href="{{url('addbourse')}}"> <i class="fas fa-plus mr-2"></i> Ajouter</a>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Titre</th>
                      <th>Lieu </th>
                      <th>Spécialité</th>
                      <th>Année Universitaire</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($bourses as $bourse)
                    <tr>
                      <td>{{$bourse->id}}</td>
                      <td>{{$bourse->title}}</td>
                      <td>{{$bourse->lieu}}</td>
                      <td>{{$bourse->spécialité}}</td>
                      <td>{{$bourse->année_universitaire}}</td>

                      <td class="">
                          <form action="{{url('bourses/'.$bourse->id)}}" method="post">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                            
                     
                          <a href="{{route('bourses.edit' ,['bourse' => $bourse->id])}}"  class="btn btn-warning btn-circle ">
                            <i class="fas fa-edit"> </i>
                          </a> 
                            
                           <button type="submit" onclick="return confirm('Vous voulez vraiment supprimer?') "class="btn btn-danger btn-circle">
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
