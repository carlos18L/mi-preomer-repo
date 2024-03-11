 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href=" assets/bootstrap.min.css" rel="stylesheet" />
  <link href=" assets/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
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
            <li  class="active">
              <a href="./map.html">
                <i class="bi bi-person-plus-fill text-white"></i>
                <p class="texto-negro texto-grueso texto-grande" >Asignar Usuarios</p>
              </a>
            </li>
             
            <li >
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
                  <input type="text" id="searchInput" value="" class="form-control" placeholder="Buscar">
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Usuarios</h4>
                    </div>
                    <div class="card-body">
                         
                        <div class="table-responsive">
                            <table class="table" id="usuariosTable">
                    <thead class=" text-primary">
                      <th>
                        Nombre
                      </th>
                      <th>
                        Apellido paterno
                      </th>
                      <th>
                        Apellido Materno
                      </th>
                      <th class="text-right">
                        Rol
                      </th>
                    </thead>
                    <tbody>
                        <tr>
                          <td>
                            Maria
                          </td>
                          <td>
                            Smith
                          </td>
                          <td>
                            Rodriguez
                          </td>
                          <td class="text-right">
                            Tutorado
                          </td>
                        </tr>
                        <tr>
                          <td>
                            John
                          </td>
                          <td>
                            Brown
                          </td>
                          <td>
                            Hooper
                          </td>
                          <td class="text-right">
                            Tutor
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Sophia
                          </td>
                          <td>
                            Johnson
                          </td>
                          <td>
                            Nguyen
                          </td>
                          <td class="text-right">
                            Admin
                          </td>
                        </tr>
                        <tr>
                          <td>
                            David
                          </td>
                          <td>
                            Martinez
                          </td>
                          <td>
                            Davis
                          </td>
                          <td class="text-right">
                            Tutorado
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Olivia
                          </td>
                          <td>
                            Miller
                          </td>
                          <td>
                            Lee
                          </td>
                          <td class="text-right">
                            Tutor
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Ethan
                          </td>
                          <td>
                            Taylor
                          </td>
                          <td>
                            Walker
                          </td>
                          <td class="text-right">
                            Tutorado
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Jesus
                          </td>
                          <td>
                            Maldonado
                          </td>
                          <td>
                            Cholula
                          </td>
                          <td class="text-right">
                            Admin
                          </td>
                        </tr>
                      </tbody>
                      
                  </table>
                  <button class="btn btn-primary">registrar Usuario   </button>
                </div>
              </div>
            </div>
          </div>
           
      </div>
      <footer class="footer footer-black  footer-white ">
         
      </footer>
    </div>
  </div>
  <script src="assets/js/buscar.js"></script>

 
 <!--  Google Maps Plugin    -->
 <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
 <!-- Chart JS -->
 
 
 
</body>


</html>