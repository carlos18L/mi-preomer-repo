<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <!-- Custom styles -->
    <link rel="stylesheet" type="text/css" href="assets/login.css">
</head>
<body>
    <section class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 login-sec">
                    <h2 class="text-center">Iniciar Sesion</h2>
                    <form class="login-form">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Usuario</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-uppercase">Contraseña</label>
                            <input type="password" class="form-control" placeholder="">
                        </div>
                        <div class="form-check">
                             
                            <a href="Home" class="btn btn-login float-left">Iniciar Sesión</a>
                        </div>
                    </form>
                    
                </div>
                <div class="col-md-8 banner-sec">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                             
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="assets/imagenes/logoitzte.png" alt="First slide" style="display: block; margin: 0 auto;">

                                <div class="carousel-caption d-none d-md-block">
                                       
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="assets/imagenes/izclogo.png"  style="display: block; margin: 0 auto;">
                                <div class="carousel-caption d-none d-md-block">
                                      
                                </div>
                            </div>
                            
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- Custom Script -->
    <script>
        $(document).ready(function(){
            // Activate Carousel
            $("#carouselExampleIndicators").carousel({
                interval: 2500 // Cambia aquí el intervalo en milisegundos (3 segundos en este ejemplo)
            });
        });
    </script>
</body>
</html>
