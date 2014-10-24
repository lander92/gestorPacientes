<?php
/*
**establecemos conexion con el servidor.
**nombre del servidor: localhost.
**Nombre de usuario: root.
**Contraseña de usuario: 
**Si la conexion fallara mandamos un msj 'ha fallado la conexion'**/
function conectar(){
	$conexion=mysql_connect("localhost", "root", "") or die ("Error en la conexion");
	return $conexion;
}
?>