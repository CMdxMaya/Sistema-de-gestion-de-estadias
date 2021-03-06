

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
  <!-- Morris chart -->
 
 <!DOCTYPE html>
<html lang="en">

<head>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SGE Sistema de Gestion de Estadias</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('plantillamx/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('plantillamx/css/sb-admin-2.min.css')}}" rel="stylesheet">


    <!-- Custom fonts for this template -->
  <link href="{{asset('plantillamx/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('plantillamx/css/sb-admin-2.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="{{asset('plantillamx/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

  

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{asset('principal')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{Session::get('sesiontipo')}} <sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{asset('principal')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Menu</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Altas</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Categorias:</h6>

                    @if(Session::get('sesiontipo')=="Admin")

            <a class="collapse-item"  href="{{asset('altacliente')}}">Alumnos</a>
            <a class="collapse-item" href="{{asset('altaempleado')}}">Profesores</a>
            <!--<a class="collapse-item"href="{{asset('altamesa')}}" >Mesa</a>-->
           <a class="collapse-item" href="{{asset('altazona')}}">Empresas</a>

            <a class="collapse-item" href="{{asset('altaproductos')}}">Evidencias</a>
            <!--<a class="collapse-item" href="{{asset('altatipodeproductos')}}" >Tipo de Productos</a>-->

            <a class="collapse-item" href="{{asset('altausuarios')}}" >Usuarios</a>

           @endif
            <a class="collapse-item" href="{{asset('altaproductos')}}">Evidencias</a>


          </div>
        </div>
      </li>

      
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Reportes</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>

                                @if(Session::get('sesiontipo')=="Admin")

            <a class="collapse-item"  href="{{asset('reporteclientes')}}">Alumnos</a>
            <a class="collapse-item" href="{{asset('reporteempleado')}}">Profesores</a>
          <!--  <a class="collapse-item" href="{{asset('reportemesa')}}" >Mesas</a>-->
           <a class="collapse-item" href="{{asset('reportezona')}}">Empresas</a>
            <a class="collapse-item" href="{{asset('reporteproductos')}}">Evidencias</a>
          <!--  <a class="collapse-item" href="{{asset('reportetipodeproductos')}}" >Tipo de Productos</a>-->


            <a class="collapse-item" href="{{asset('reporteusuarios')}}" >Usuarios</a>
            <!--<div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>-->
            @endif
                        <a class="collapse-item" href="{{asset('reporteproductos')}}">Evidencias</a>

     
          </div>
        </div>
      </li>

 

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->

      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">  {{Session::get('sesionname')}}</b>
</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            
                <div class="dropdown-divider"></div>
                <a  href="{{URL::action('accesoc@cerrarsesion')}}" class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Salir
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <!-- <h1 class="h3 mb-0 text-gray-800">KikosFood System</h1>


            <a  href="{{asset('venta')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generar Venta</a>-->


           <!--  <a href="{{asset('reporteentrada')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generar Reporte</a>-->
          </div>

      </div>
    </div>




 <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">



              
              <div class="col-lg-6 d-none d-lg-block bg-login-image" ></div>


              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bienvenido al SGU Sistema de Gestion de Estadias Porfavor Registralos datos Solicitados</h1>
                  </div>
                  <form class="user">
                 

                    <div class="form-group">
                      
                    </div>

                   
                  </form>
                
            
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

 
<div class="container">

    <!-- Outer Row -->
   <div class="row justify-content-center">

  <div class="col-xl-10 col-lg-12 col-md-9">
  <div class="card o-hidden border-0 shadow-lg my-5">
   <div class="card-body p-0">        
  <div class="row">
 <div class="col-lg-12">
  <div class="p-5">
  <div class="text-center">
  @yield('carrito')
         @yield('contenido')


                 


</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>




          
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Listo para salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="{{URL::action('accesoc@cerrarsesion')}}" >Salir</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('plantillamx/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('plantillamx/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{asset('plantillamx/vendor/jquery-easing/jquery.easing.min.js')}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{asset('plantillamx/js/sb-admin-2.min.js')}"></script>

  <!-- Page level plugins -->
  <script src="{asset('plantillamx/vendor/chart.js/Chart.min.js')}"></script>

  <!-- Page level custom scripts -->
  <script src="{asset('plantillamx/js/demo/chart-area-demo.js')}"></script>
  <script src="{asset('plantillamx/js/demo/chart-pie-demo.js')} "></script>

  <!-- Page level plugins -->
  <script src="{asset('plantillamx/vendor/datatables/jquery.dataTables.min.js')}"></script>
  <script src="{asset('plantillamx/vendor/datatables/dataTables.bootstrap4.min.js')}"></script>

  <!-- Page level custom scripts -->
  <script src="{asset('plantillamx/js/demo/datatables-demo.js')}"></script>

</body>

</html>
