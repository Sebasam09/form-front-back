<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="section-container">
       <div class="content-wrapper">
            <div class="contenido" id="primario"></div>
            <div class="content-heading">FORMULARIO</div>

            <form method="post" action="./import_info.php" action="./rsuccess.php" class="card card-default">
                <div class="card card-header">Completa el siguiente formulario</div>
                <div class="card card-body">

                    <div class="row">
                        <div class="form-group col-md-3">
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

                        <div class="form-group col-md-3">
                            <label>Puntuacion</label>
                            <select class="form-control lista lista_simple" data-parsley-notblank="true" name="ufeedback" id="ufeedback" data-parsley-errors-container="#feedback_error" required="">                         
                              <option value="1 - Insuficiente">1 - Insuficiente</option><option value="2 - Pasable">2 - Pasable</option><option value="3 - Pasable">3 - Bueno</option><option value="4 - Pasable">4 - Muy Bueno</option><option value="5 - Excelente">5 - Excelente</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Recomendación</label>
                            <input class="form-control" type="text" value="" name="urecomendacion" id="urecomendacion" data-parsley-secundario="">
                        </div>
                        
                        <div class="col-xl text-center" class="target">
                            <button class="btn btn-labeled btn-primary mb-2" id="submit" type="submit"><span class="btn-label"><i class="fa fa-save"></i></span> Guardar </button>                        
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