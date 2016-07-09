<?php
	if(isset($_GET["dui"])){
		$con=mysql_connect("localhost","root");
		mysql_select_db("tribunal");
		$dui=$_GET["dui"];
		if(mysql_query( $sql = "UPDATE `diputado` SET voto = voto+1 WHERE `diputado`.`id_diputado` = ".$_GET["partido"].";")){

			echo "GUARDADO";
		mysql_query("update ciudadano set estado=0 where id_dui='".$dui."'");
			 header("location: logo.php");
		
		
		}else{
			echo "error";
			}
	}
?>