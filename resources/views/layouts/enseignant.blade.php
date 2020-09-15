<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

 <title>D-INFO | Dashboard</title>

  <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">+

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
   
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
    
      <li class="nav-item">

        <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <div class="text center">
                                      <i class="nav-icon fas fa-sign-out-alt text-danger mr-1"></i>
                                       <span class="text-danger">{{ __('Déconnecter') }}</span >
                                       </div>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

        

        

      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
       
            @if(Auth::user()->media)
           <img  src="{{Auth::user()->media->lien}}" class="image-preview-image" lt="profile">
            @else <img src="https://www.chanelrenovation.fr/wp-content/uploads/2019/08/neutre.jpg" class="img-circle elevation-2" alt="User Image">
            @endif
      
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Aller au site</p>
                </a>
              </li>
             
              
            </ul>
          </li>
          
          <li class="nav-header">Foctionalités</li>
           <li class="nav-item">
            <a href="{{url('dashbord/enseignant/modules')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>


              Modules

              </p>
            </a>
          </li>
           
          <li class="nav-item">
            <a href="{{url('dashbord/enseignant/documents')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Gérer Documents 

              

                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/examens')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>

                Planifier Examens

              </p>
            </a>
          </li>

         

        
         
          <li class="nav-item">
          <a href="{{url('dashbord/enseignant/reglement')}}" class="nav-link">
              <i class="nav-icon fas fa-exclamation-triangle"></i>
              <p>
              Le Réglement Intérieur
              </p>
            </a>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Paramètre
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/profil')}} "class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mon Profil</p>
                </a>
              </li>
              
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    
  </aside>

          
          

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          @include('flash-mesage')
        @yield('content')
        </div>


  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://adminlte.io">Hind@DepInfo</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="/js/app.js"></script>
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script>

$(document).ready(function(){
 
  $('#promo').on('change',function(){
    $("#moduleOpt").empty(); 
    var promo = $(this).val();
    if(promo == "M1" ||  promo == "M2"){
      $('#specialite').prop('selectedIndex',0);
      $('#divspecialite').show();
            $('#specialite').on('change',function(){
            $("#moduleOpt").empty(); 
            var specialite = $(this).val();
            $.ajax({
            url: '/moduleAjax/'+promo + '/' + specialite ,
            type:'GET',
            success: function (response) { 
              $("#moduleOpt").empty(); 
                  for (var i = 0, len = response.length; i < len; i++) {                 
                  $("#moduleOpt").append("<option value='"+ response[i] + "'>"+ response[i] + "</option>"); 
                }
                              
              }
          });
          });
      
    }else{
      $("#divspecialite").hide(); 

      
      $.ajax({
        
       url: '/moduleAjax/' + promo,
       type:'GET',

       success: function (response) { 
            for (var i = 0, len = response.length; i < len; i++) {
            $("#moduleOpt").append("<option value='"+ response[i] + "'>"+ response[i] + "</option>"); 
           }
                        
        }
     });
    }
  });

  
  });
  
</script>


<script>

  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$("#btn-mdl").click(function(e){
e.preventDefault();
module = $('#moduleOpt').val();

$.ajax({

   url:'/Mesmodules/',
   method:'POST',
   data:{
            
         module:module,
            
          },
   
   success:function(response){
   
    Swal.fire(
              'Success',
              'Module ajouté!',
              'success'
            );

       $("#moduleAdd").append(
        '<div class="row d-flex justify-content-center" id="MesModule"> <h3> <span class="badge badge-primary">'+ module 
        +'</span></h3> <button type="button" class="btn btn-delete" data-id="'+response[2]+'"><i class="fas fa-times"></i></button>  </div>'
       
       ); 

   },
   error:function(error){
      console.log(error)
   }
});
});

</script>

<script>

$.ajaxSetup({
headers: {
  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});


$(".btn-delete").click("#btn_a",function(e){
e.preventDefault();
var id = $(this).data("id");

Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {

  if (result.value) {

       $.ajax({
        url:'/Mesmodules/'+id,
        method:'DELETE',
        data:{         
              id:id,        
            },

        success:function(response){
              
        },
        error:function(error){
            console.log(error)
        }
        });

    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success',
    )
    location.reload();  

  }

 




});


});

</script>

<script>

  $(document).ready(function(){
  $("#specialite1").hide();
  $('#promo').on('change',function(){
    var promo = $(this).val();
    if(promo == "M1" ||  promo == "M2"){
      $("#specialite1").show();
    }else{
      $("#specialite1").hide(); 
    }
  });
  });
  
  </script>



<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>

</body>
</html>
