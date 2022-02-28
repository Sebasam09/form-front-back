<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>
    <section class="section-container">
       <div class="content-wrapper" style="margin: auto; width: 50%">
            <!-- FORM -->
            <form method="post" action="./import_register_info.php">

                <!-- FORM HEAD -->
                <div class="card card-header text-center bg-primary text-white"> <h1>Completa los campos para registrarte</h1> </div>
                
                <!-- FORM BODDY -->
                <div class="card card-body" style="align-items: center;"> 

                    <div class="" class="">

                        <!-- INPUT EMAIL -->
                        <div class="form-group" class="mail">
                            <label>Email</label>
                            <input class="form-control" value="" name="uemail" id="uemail" placeholder="ejemplo@gmail.com" type="remail" required>
                        </div>

                        <!-- INPUT NOMBRE DE USUARIO-->
                        <div class="form-group">
                            <label>Nombre de Usuario</label>
                            <input class="form-control" type="text" value="" name="username" id="username" placeholder="Escribe su nombre de usuario aquí" required>
                        </div>

                        <!-- INPUT NOMBRE -->
                        <div class="form-group">
                            <label>Nombre</label>
                            <input class="form-control" type="text" value="" name="uname" id="uname" placeholder="Escribe su nombre aquí" required>
                        </div>

                        <!-- INPUT APELLIDO -->
                        <div class="form-group">
                            <label>Apellido</label>
                            <input class="form-control" type="text" value="" name="ulname" id="ulname" placeholder="Escribe su apellido aquí" required>
                        </div>

                        <!-- INPUT CONTRASEÑA -->
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input class="form-control" value="" name="pwd" id="pwd" type="text" placeholder="Escribe su contraseña aquí" required>
                        </div>

                        <!-- INPUT REPEAT CONTRASEÑA -->
                        <div class="form-group">
                            <label>Repite su contraseña</label>
                            <input class="form-control" value="" name="rpwd" id="rpwd" type="text" placeholder="Repite su contraseña aquí" required>
                        </div>
                        
                        <!-- SAVE BUTTON -->
                        <div class="col-xl text-center" class="target">
                            <button class="btn btn-labeled btn-primary mb-2" id="submit" type="submit" style="width: 250px;"><span class="btn-label"><i class="fa fa-save"></i></span> Enviar </button>                        
                        </div>
                        
                        <!-- LOGOUT BUTTON -->
                        <div class="col-xl text-center">
                            <a href="logout.php" class="btn btn-danger" style="width: 250px;"><span class="glyphicon glyphicon-log-out"></span> Salir y registrarse</a>    
                        </div>

                    </div>
                </div>
            </form>
       </div> 
    </section>

    <!-- INCLUDE INDEX.JS SCRIPTS -->

    <script src="index.js"></script>

</body>
</html>

<!-- SQL CONNECTION -->

<?php

//SQL CONNECTION//

$con = new mysqli('localhost', 'root', '','formdatabase');


?>
