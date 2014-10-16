<?php
/*establecemos conexion con el servidor.
 * nombre del servidor: localhost.
 * Nombre de usuario: root.
 * Contraseña de usuario: "".
 * Si la conexion fallara mandamos un msj 'ha fallado la conexion'*/
mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());

/*Luego hacemos la conexión a la base de datos y mandamos un msj si hay algun error*/
mysql_select_db('gestorPacientes')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
 
/*guardo en variables los datos enviados en el formulario.*/
$dni = $_POST["dni"];   
$password = $_POST["password"];

/*guardo en una variable la consulta que voy a realizar*/
$result = mysql_query("SELECT * FROM usuarios WHERE dni = '$dni'");

//Validamos si el nombre del usuario existe en la base de datos o es correcto
if($row = mysql_fetch_array($result)){     
//Si el usuario es correcto ahora validamos su contraseña
 if($row["password"] == $password){
 	switch ($row["tipo"]){
 		case "medico":
 			//Creamos sesión
	 		session_start();  
	  		//Almacenamos el nombre de usuario en una variable de sesión usuario
	  		$_SESSION['dni'] = $dni;  
	  		$_SESSION['tipo']=$tipo; 
	  		//Redireccionamos a la pagina: index.php
	 		 header("Location: ../medico/indexMedico.php");
	 		 break;

 		case "paciente":
 			//Creamos sesión
	 		session_start();  
	  		//Almacenamos el nombre de usuario en una variable de sesión usuario
	  		$_SESSION['dni'] = $dni; 
	  		$_SESSION['tipo']=$tipo; 
	  		//Redireccionamos a la pagina: index.php
	 		 header("Location: ../paciente/indexPacientes.php");  
	 		 break;
 	}
 }else{
  /*En caso que la contraseña sea incorrecta enviamos un msj 
   * y redireccionamos a login.php*/
  ?>
   <script languaje="javascript">
    alert("Contraseña Incorrecta");
    location.href = "index.php";
   </script>
  <?php          
 }
}else{
 /*en caso que el nombre de administrador es incorrecto 
  * enviamos un msj y redireccionamos a login.php*/
?>
 <script languaje="javascript">
  alert("El nombre de usuario es incorrecto!");
  location.href = "index.php";
 </script>
<?php           
}

//Mysql_free_result() se usa para liberar la memoria empleada al realizar una consulta
mysql_free_result($result);

/*Mysql_close() se usa para cerrar la conexión a la Base de datos y es 
 * necesario hacerlo para no sobrecargar al servidor.*/
mysql_close();
?>