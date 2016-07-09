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
    <link rel="stylesheet" href="css/estilos2.css" />


         <meta charset="iso-8859-1">
       <meta name="Descripcion" content="multimedia">
     <meta name="Contenido" content="Aplicacion">
      <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
</head>
<body>
 <header>

<h1>EL SALVADOR EN ELECCIONES   </h1>
 
  </header>
  
<div id="header">
      <ul class="nav">
        <li><a href="logout.php">Salir </a></li>
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
    <div id= "bienvenida">
      <figure>
 <img src="imagen/hj.gif"></img>
  </figure>
</div>
<div id="tex">
  <h2>SISTEMA DE  VOTACIÓN </h2>

<p>Se ha bienvenido/a  a esta nuevo sistema de inscripción, de  los  candidatos  a contienda  en este nuevo año electoral,
 le  explicaremos  el funciona miento de  este  sistema paso a  paso . </p>

 <p>1- Antes  de  iniciar  con las respectivas  inscripciones,  se ve be de verificar  que estén  inscrito los  ciudadanos,
    si no están registras  en la base de datos de debe de hacer la respectiva inscripción.  </p>

    <p>2- Luego de  haber  registrados  los  ciudadanos  debemos de  apertura las elecciones, en el menú  la  encontraremos 
     esta opción como aperturas  de  elección,  donde  se elegirá  que tipos  de elecciones se están realizando, como las  siguientes 
      diputados, alcaldes  o presidente donde  al final se pondrá el  año electoras  te  se está   realizando. </p>

      <p>3- Se  registrara  los  partidos  políticos  que  estarán en contienda,  primeramente se tendrá que ingresar  el número de DUI  
        del representante  del partido político a  participar  en las  elecciones , ingresara el en nombre  del partido político con su
   respectiva bandera, donde  tendrá también  el privilegio de  modificar  cuando se haya equivocado a la ora de registro , 
    podrá de eliminar  al partido político cuando este  se requiera retirar, esta 
     opción la  encontrara  en el menú como  partido político. </p>

<p>4- Se registrara los candidatos en contienda tanto para  alcaldes, presidentes, diputados  y  se registrara  también a los  
  candidatos  que participan en coaliciones, esta  opción  la encontraremos en el menú como  inscripciones ,
   tendrá  el privilegio de modificar  cuando ocurra un error  y podrá eliminar 
    si  el candidato se retira  de la contienda  electoral. </p>
<P>
5- En cada  formulario consta  con un buscador  en la  cual ingresara el número del DUI del ciudadano para poder registrar en cada  uno  del formulario. 
</P>
    <p>6- Final mente  se  cerrara  las  inscripciones.</p>

    <p>Esto es todo sobre  la explicación global  sobre  el funcionamiento de  este  sistema de  votación... Gracias por  seguir las  indicaciones.

</p>
</div>


</body>

</html>
<?php
}else{
  header("location: inicio.php");
}
?>