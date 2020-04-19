@extends('layouts.admin')

@section('content')
<section class="content-header m-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Les Articles</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Articles</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Vous trouverez ci-joint la table des articles</h3>

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
                      <th>Titre</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($articles as $article)
                    <tr>
                      <td>{{$article->id}}</td>
                      <td>{{$article->title}}</td>
                      
                      <td class="">
                          <form action="{{url('/article'.$article->id)}}" method="post">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                            
                     
                          <a href="{{url('validate/'.$article->id)}}"  class="btn btn-warning btn-circle ">
                            <i class="fas fa-edit"> </i>
                          </a> 
                            
                           <a href="{{url('/articles'.$article->id)}}"  onclick="return confirm('Vous voulez vraiment supprimer?')" class="btn btn-danger btn-circle">
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
