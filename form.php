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
    <section class="section-container" style="margin: auto; width: 50%">
       <div class="content-wrapper" style="align-items: center;">
            <!-- FORM -->
            <form method="post" action="./import_info.php">

                <!-- FORM HEAD -->
                <div class="card card-header text-center bg-primary text-white"> <h1>Completa el siguiente formulario de satisfacción</h1> </div>
                
                <!-- FORM BODDY -->
                <div class="card card-body" style="align-items: center;"> 

                    <div class="" class="">

                        <!-- INPUT USERNAME -->
                        <div class="form-group" class="mail">
                            <label>Nombre de usuario</label>
                            <input class="form-control" value="" name="username" id="username" placeholder="Escribe aqui su nombre de usuario" type="text" required>
                        </div>

                        <!-- INPUT PUNTUACION -->
                        <div class="form-group" class="Points">
                            <label>Puntuacion</label>
                            <select onchange="displayDiv('contactme',this)" class="form-control lista lista_simple" name="ufeedback" id="ufeedback" required>                         
                                <option value="">Selecciona una puntuación</option>
                                <option value="1 - Insuficiente">1 - Insuficiente</option>
                                <option value="2 - Pasable">2 - Pasable</option>
                                <option value="3 - Pasable">3 - Bueno</option>
                                <option value="4 - Pasable">4 - Muy Bueno</option>
                                <option value="5 - Excelente">5 - Excelente</option>
                            </select>
                            
                            <!-- HIDDEN DIV - WORKS WITH A CONDITION -->
                            <div id="contactme" >
                                <label>Por favor, expliquenos el motivo por el cual usted selecciono una puntuación baja comunicate con nosotros: +595 XXX XXX XXX </label>
                            </div>

                        </div>

                        <!-- INPUT RECOMENDACION -->
                        <div class="form-group">
                            <label>Recomendación</label>
                            <textarea class="form-control" type="text" value="" name="urecomendacion" id="urecomendacion" style="height: 100px" placeholder="Aquí podrá presentar sus quejas y recomendaciones"></textarea>
                        </div>
                        
                        <!-- SAVE BUTTON -->
                        <div class="col-xl text-center" class="target">
                            <button class="btn btn-labeled btn-primary mb-2" id="submit" type="submit"><span class="btn-label"><i class="fa fa-save"></i></span> Enviar </button>                        
                        </div>

                        <!-- LOGOUT BUTTON -->
                        <div class="col-xl text-center">
                            <a href="logout.php" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Salir</a>    
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

