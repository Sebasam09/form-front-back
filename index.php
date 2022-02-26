<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script src="https://cdnjs.com/libraries/Chart.js"></script>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/">

</head>
<body onload='document.form1.text1.focus()'>
    <section class="section-container">
       <div class="content-wrapper">
            <div class="contenido" id="primario"></div>
            <!-- <div class="content-heading">FORMULARIO</div> -->

            <form method="post" action="./import_info.php" action="#" name="form1">
                <div class="card card-header text-center"> <h1>Completa el siguiente formulario de satisfacción</h1> </div>
                <div class="card card-body"> 

                    <div class="" class="">
                        <div class="form-group col-md-3" class="mail">
                            <label>Email</label>
                            <input class="form-control" type="text" value="" name="uemail" id="uemail" data-parsley-secundario="">
                        </div>

                        <div class="form-group col-md-3">
                            <label>Nombre</label>
                            <input class="form-control" type="text" value="" name="uname" id="uname" data-parsley-secundario="">
                        </div>

                        <div class="form-group col-md-3">
                            <label>Apellido</label>
                            <input class="form-control" type="text" value="" name="ulname" id="ulname" data-parsley-secundario="">
                        </div>

                        <div class="form-group col-md-3" class="Points">
                            <label>Puntuacion</label>
                            <select onchange="displayDiv('contactme',this)" class="form-control lista lista_simple" data-parsley-notblank="true" name="ufeedback" id="ufeedback" data-parsley-errors-container="#feedback_error" required="" aria-placeholder="">                         
                            <option value=" " ></option><option value="1 - Insuficiente">1 - Insuficiente</option><option value="2 - Pasable">2 - Pasable</option><option value="3 - Pasable">3 - Bueno</option><option value="4 - Pasable">4 - Muy Bueno</option><option value="5 - Excelente">5 - Excelente</option>
                            </select>
                            
                            <div id="contactme" >
                                <label>Por favor, expliquenos el motivo por el cual usted selecciono una puntuación baja comunicate con nosotros: +595 XXX XXX XXX </label>
                            </div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Recomendación</label>
                            <textarea class="form-control" type="text" value="" name="urecomendacion" id="urecomendacion" style="height: 100px"></textarea>
                            <!-- <input class="form-control" type="text" value="" name="urecomendacion" id="urecomendacion" data-parsley-secundario=""> -->
                        </div>
                        
                        <div class="col-xl text-center" class="target">
                            <button class="btn btn-labeled btn-primary mb-2" id="submit" type="submit"><span class="btn-label"><i class="fa fa-save"></i></span> Enviar </button>                        
                        </div>

                    </div>
                </div>
            </form>
       </div> 
    </section>

    <script src="index.js"></script>

</body>
</html>

<?php

//SQL CONNECTION//

$con = new mysqli('localhost', 'root', '','formdatabase');


?>