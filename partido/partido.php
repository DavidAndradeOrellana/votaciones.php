<?php
session_start();
if(isset($_SESSION['usuario'])){


?>
<?php
include 'clases/config.php';
?>
 <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  
  <title>EL SALVADOR EN ELECCIONES</title>
  <link rel="stylesheet" href="css/estilo1.css">
  <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilo3.css" />


<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    </head>
<body>
 <header>


  <h1>UNA NUEVA FORMA PARA EJERSER TU VOTO</h1>


  </header>
   
   <nav id="menu">
 <div id="inicio">
      
  <nav>
    <ul>
      <li><a href="manejadorpartido.php?accion=con">MODIFICAR</a></li>
     
     
    </ul>
   
  </nav>
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
         <li><a href="/votacion2/partido/ayuda.php">Ayuda</a></li>
          </ul>
    </div>

<div id="tex">
<form action="partido.php" method="get">
 <P> Ingrese por fabor un numero de DUI:
<input type="text" name="palabra" value="buscar"  />

<input type="submit" name="buscador" value="Buscar"class="btn btn-primary"  /></P>
</form>
</div></br>
    <div class="jumbotron">
       <form action="manejadorPartido.php?accion=save"  method="post" id="partido">
            
       

                <?php
if (isset($_GET['buscador']))
{

$buscar = $_GET['palabra'];


if (empty($buscar))
{
echo "No se ha ingresado ninguna palabra";
}
else
{

$sql = "SELECT * FROM ciudadano WHERE id_dui LIKE '%$buscar%'";
$result = mysql_query($sql,$connect);

$total = mysql_num_rows($result);

if ($row = mysql_fetch_array($result)) {


do {
?>
  <div class="row">
            
                <div class="col-xs-2">
                  Dui
</div>
                <div class="col-xs-2">
                    <input type="text" name="id_dui" class="required digits form-control"value="<?php echo $row['id_dui'];?>">
 </div>
                </div>
                <div class="row">
            
                <div class="col-xs-2">
                  Rezponsable
                </div>
                <div class="col-xs-2">
                    <input type="text" name="responsable" class="required  form-control"value="<?php echo $row['nombre'];?>">
 </div>
                </div>
 
               
<?php
}
while ($row = mysql_fetch_array($result));
}
else
{
echo "Este numero de DUI no existente: $buscar";
}
}
}
?>
            

                
            <div class="row">
              <div class="col-xs-2">
                  Partido
                </div>
                <div class="col-xs-2">
                    <input type="text" name="partido" class="required form-control" required>
                </div>
                </div>
                   
                    <div class="row">
            <div class="col-xs-2">
                    Bandera
                </div>
                <div>
                    <input  type="file" name="bandera" required   >
                </div>
            </div>
            <div class="row">
                <td colspan="2">
                    <input type="submit" name='bot' value='REGISTAR' class="btn btn-primary">
                </div>
            </div>
        </table>
        </form>

    



</body>

</html>
 <?php
}else{
  header("location: /votacion2/inicio.php");
}
?>