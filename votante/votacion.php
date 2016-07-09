<?php
	if(isset($_GET["dui"])){
		$con=mysql_connect("localhost","root");
		mysql_select_db("tribunal");
		$dui=$_GET["dui"];
		if(mysql_query( $sql = "UPDATE `alcalde` SET voto = voto+1 WHERE `alcalde`.`id_alcalde` = ".$_GET["partido"].";")){

			echo "GUARDADO";
		mysql_query("update ciudadano set estado=0 where id_dui='".$dui."'");
			 header("location: logout.php");
		
		
		}else{
			echo "error";
			}
	}
?>