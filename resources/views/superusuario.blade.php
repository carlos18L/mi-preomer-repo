
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  PIT ITSTE
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href=" assets/bootstrap.min.css" rel="stylesheet" />
  <link href=" assets/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="">
  <div class="wrapper ">
  <div class="sidebar bg-primary bg-primary-dark text-black" data-color="white" data-active-color="primary">
  <div class="logo">
        <a href="" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="assets/imagenes/logoperfil.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href=" " class="simple-text logo-normal ">
          Jesus Maldonado
      </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="Home">
              <i class="bi bi-house-fill text-white"></i>


              <p class="texto-negro texto-grueso texto-grande">Inicio</p>

            </a>
          </li>
          
          
          <li>
            <a href="./icons.html">
              <i class="bi bi-file-earmark-text-fill text-white"></i>
              <p class="texto-negro texto-grueso texto-grande">Documentos</p>
            </a>
          </li>
          <li>
            <a href="asiguser">
              <i class="bi bi-person-plus-fill text-white"></i>
              <p class="texto-negro texto-grueso texto-grande" >Asignar Usuarios</p>
            </a>
          </li>
           
          <li  class="active">
            <a href="superusuario">
              <i class="bi bi-person-fill-gear text-white"></i>
              <p class="texto-negro texto-grueso texto-grande" >Mi Perfil</p>
            </a>
          </li>
           
           
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand texto-grueso texto-grande" href="javascript:;" >Bienvenido al sistema de tutorias del ITSTE</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Buscar">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="bi bi-search"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
               
               
               <li class="nav-item">
                 <a class="nav-link btn-rotate" href="javascript:;">
                   <i class="bi bi-gear"></i>
                   <p>
                     <span class="d-lg-none d-md-block">Account</span>
                   </p>
                 </a>
               </li>
             </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                 
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="assets/imagenes/ing.jpg" alt="...">
                    <h5 class="title">Jesus Maldonado</h5>
                  </a>
                   
                </div>
                <p class="description text-center">
                  Administrador
                </p>
              </div>
               
              </div>
            </div>
             
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Editar perfil</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Nombre de usuario</label>
                        <input type="text" class="form-control"  placeholder="Company" value="Maldonado13-56">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Contraseña Actual</label>
                        <input type="password" class="form-control" placeholder="********">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Contraseña Nueva</label>
                        <input type="password" class="form-control" placeholder=" ">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Nombres</label>
                        <input type="text" class="form-control" placeholder="Company" value="Jesus">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" value="Maldonado">
                      </div>
                    </div>
                  </div>
                   
                   
                     
                     
                   
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Guardar cambios </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
         
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>