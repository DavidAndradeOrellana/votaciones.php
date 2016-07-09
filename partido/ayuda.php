<?php
session_start();
if(isset($_SESSION['usuario'])){


?>
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


  <h1>AYUDA PERSONALIZADAS  PARA INSCRIPCIÓN DE ALCALDES </h1>

  </header>
  
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
       <h1> </h1>
      
<div id="imagen1">
<figure>
 <img src="imagen/rt.png"></img>
  </figure>
</div>

<br><div id= "imagen2">
<figure>
 <img src="imagen/fdfdh.png"></img>
  </figure>
</div></br>



</body>

</html>
<?php
}else{
  header("location: inicio.php");
}
?>