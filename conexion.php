<?php
//conexion a la base de datos
function conectar(){
	$conexion=mysql_connect("localhost", "root", "") or die ("Error en la conexion");
	return $conexion;
}
?>