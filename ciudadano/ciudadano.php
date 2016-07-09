<?php
session_start();
if(isset($_SESSION['usuario'])){


?>
<?php include './clases/Coneccion.php';?>
<?php include'functions.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta meta="description" content="PROTOTIVO DE VOTACIONES" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>EL SALVADOR EN ELECCIONES</title>
  <link rel="stylesheet" href="css/estilo1.css">
  <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilo3.css" />
  


   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
  
 <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
</head>
<body>
 <header>


  <h1>BIENVENIDO AL REGISTRO DE  LOS CIUDADANOS</h1>

  </header>
  
   <nav id="menu">
 <div id="inicio">
      
  <nav>
    <ul>
     
 
      
        <li><a href="manejadorciudadano.php?accion=con">MODIFICAR</a></li>
     
     
    </ul>
  </nav>
</div>
</div>

     <div id="header">
      <ul class="nav">
         <li><a href="/votacion2/tribunal.php">Inicio </a></li>
          <li><a href="/votacion2/elecciones/elecciones.php">Apertura de elecciones  </a></li>
         <li><a href="/votacion2/partido/partido.php">Partido politico  </a></li>
        <li><a href="">Incripciones</a>
          <ul>
            <li><a href="/votacion2/incripcion/alcalde/alcalde.php">Alcade</a></li>
            <li><a href="/votacion2/incripcion/presidente/presidente.php">Presidente</a></li>
            <li><a href="/votacion2/incripcion/diputados/diputado.php">Diputado</a></li>
            <li><a href="/votacion2/incripcion/cualicion/cualicion.php">Coaliciones</a>
            </li>
          </ul>
        </li>
        <li><a href="/votacion2/ciudadano/ciudadano.php">Ciudadano</a></li>
          </ul>
    </div>
 <div class="jumbotron">
  
      <form action="manejadorciudadano.php?accion=save" method="post" id="ciudadano">
            
            <table class="table-bordered">
             
            <div class="row">
            
                   <div class="col-xs-3">
                    Dui
                </div>
                <div class="col-xs-3">
                      
                    <input type="text" name="dui" class="required digits form-control"required digits >
                </div>
                 </div>

                    <div class="row">
                <div class="col-xs-3">
                  Nombre
                </div>
                <div class="col-xs-3">
                    <input type="text" name="nombre"  class="required  form-control" required >
                </div>
                </div>
                    <div class="row">
                 <div class="col-xs-3">
                    Apellido
                </div>
                <div class="col-xs-3">
                    <input type="text" name="apellido" class="required  form-control" required >
                </div>
            </div>
                 <div class="row">
            <div class="col-xs-3">
                      Genero
                </div>
                <div class="col-xs-3">
                    <select name='genero' class="required form-control" required >
                        <option value=""></option>
                         <option value="M">MACULINO</option>
                        <option value="F">FEMENINO</option>
                          </select >
                        </div>
            </div>
        
               
            <div class="row">
            <div class="col-xs-3">
                    Facha nacimiento
                </div>
                 <div class="col-xs-3">
                    <div class="input-group">                    
                    <input type="text" name="fecha_nacimiento" id="fechac" class="required form-control" required >
                    <span id="fechac" class=" input-group-addon glyphicon glyphicon-calendar"></span>
                </div>
                </div>
            </div>

                        </div>
            </div>
            <div class="row">
            <div class="col-xs-3">
                    Departamento
                </div>
                <div class="col-xs-3">
                     <select  id="departamento" name= "id_departamento" class="required form-control" required>
                     <option value=""></option>
                            <option></option>
            <?php __ListarEstados(); ?>
         </select>
    
                         
                        </div>
            </div>
            <div class="row">
            <div class="col-xs-3">
                    Municipio
                </div>
                <div class="col-xs-3">
                 <select  id="municipio" name ="id_municipio" class="required form-control" required >
                  <option value=""></option>
                        
         </select>
                        </div>
            </div>
          <div class="row">
            <div class="col-xs-3">
                    Fcha de expedicion
                </div>
                 <div class="col-xs-3">
                    <div class="input-group">                    
                    <input type="text" name="fecha_expedicion" id="axpe" class="required form-control" required >
                    <span id="axpe" class=" input-group-addon glyphicon glyphicon-calendar"></span>
                </div>
                </div>
            </div>

                        </div>
            </div>

          <div class="row">
            <div class="col-xs-3">
                    Departamento
                </div>
                <div class="col-xs-3">
                     <select  id="depar" name="depar_expedicion" class="required form-control" required>
                    <option value=""></option>
                              <option></option>
            <?php __ListarEstados(); ?>
         </select>
    
                         
                        </div>
            </div>
            <div class="row">
            <div class="col-xs-3">
                    Municipio
                </div>
                <div class="col-xs-3">
                 <select   id="muni"  name="mun_expedicion" class="required form-control" required >
                  <option value=""></option>
                         
         </select>
                        </div>
            </div>
                 <div class="row">
            <div class="col-xs-3">
                    Fecha de expiracion
                </div>
                 <div class="col-xs-3">
                    <div class="input-group">                    
                    <input type="text" name="fecha_expiracion" id="expedicion" class="required form-control" required >
                    <span id="expedicion" class=" input-group-addon glyphicon glyphicon-calendar"></span>
                </div>
                </div>
            </div>

                        </div>
            </div>
         <div class="row">
                 <div class="col-xs-3">
                    Direccion
                </div>
                <div class="col-xs-3">
                    <input type="text" name="direccion" class="required  form-control" required >
                </div>
            </div>
           <div class="row">
            <div class="col-xs-3">
                    Departamento
                </div>
                <div class="col-xs-3">
                     <select   id="departamen"  name= "depar_direccion" class="required form-control" required>
                     <option value=""></option>
                                  <option></option>
            <?php __ListarEstados(); ?>
         </select>
    
                         
                        </div>
            </div>
            <div class="row">
            <div class="col-xs-3">
                    Municipio
                </div>
                <div class="col-xs-3">
                 <select   id="munici" name ="mun_direccion" class="required form-control" required >
         <option value=""></option>
                    
         </select>
                        </div>
            </div>
                       
            <div class="row">
       
                <td colspan="2">
                    <input type="submit" name='bot' value='Enviar' class="btn btn-primary">
                </div>
            </div>
        </table>
        </form>
    </div>
    
     <script type="text/javascript">
        $().ready(function () {
            $("#ciudadano").validate({});
        });
        $(document).ready(
            function(){
                $("#fechac").datepicker(    
                    {
                        changeMonth: true,
                        changeYear: true,
                        dateFormat: 'yy-mm-dd',
                        showAnim:'slide'
                    }
                    
                 );
            }
           
       )
    </script>


         <script type="text/javascript">
        $().ready(function () {
            $("#ciudadano").validate({});
        });
        $(document).ready(
            function(){
                $("#expedicion").datepicker(    
                    {
                        changeMonth: true,
                        changeYear: true,
                        dateFormat: 'yy-mm-dd',
                        showAnim:'slide'
                    }
                    
                 );
            }
           
       )
    </script>

         <script type="text/javascript">
        $().ready(function () {
            $("#ciudadano").validate({});
        });
        $(document).ready(
            function(){
                $("#axpe").datepicker(    
                    {
                        changeMonth: true,
                        changeYear: true,
                        dateFormat: 'yy-mm-dd',
                        showAnim:'slide'
                    }
                    
                 );
            }
           
       )
    </script>


<script type="text/javascript">
$( "#departamento" ).change(function() {
    var municipio = $("select#departamento option:selected").val();
    var datastring = 'municipio='+municipio;

        $.ajax({

            type: 'POST',
            url: 'municipios.php',
            data: datastring,
               success: function(data){
                 $('#municipio').html('');
                 $('#municipio').html(data);
               }
        });
});


 </script>

   </script>
<script type="text/javascript">
$( "#depar" ).change(function() {
    var municipio = $("select#depar option:selected").val();
    var datastring = 'municipio='+municipio;

        $.ajax({

            type: 'POST',
            url: 'municipios.php',
            data: datastring,
               success: function(data){
                 $('#muni').html('');
                 $('#muni').html(data);
               }
        });
});


 </script>

<script type="text/javascript">
$( "#departamen" ).change(function() {
    var municipio = $("select#departamen option:selected").val();
    var datastring = 'municipio='+municipio;

        $.ajax({

            type: 'POST',
            url: 'municipios.php',
            data: datastring,
               success: function(data){
                 $('#munici').html('');
                 $('#munici').html(data);
               }
        });
});


 </script>

   </script>
</body>

</html>
 <?php
}else{
  header("location: /votacion2/inicio.php");
}
?>