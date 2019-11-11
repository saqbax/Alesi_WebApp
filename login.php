<?php
session_start(); // Iniciando sesion
$error=''; // Variable para almacenar el mensaje de error
$variable=''; // Variable para almacenar el mensaje de error
	if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Usuario y/o Password Invalido";
		}
	else
	{
	// Define $username y $password
	$username=$_POST['username'];
	$password=$_POST['password'];
	// Estableciendo la conexion a la base de datos
	include("conexion.php");//Contiene de conexion a la base de datos

	// Para proteger de Inyecciones SQL 
	$username    = mysqli_real_escape_string($con,(strip_tags($username,ENT_QUOTES)));
	$password =  sha1($password);//Algoritmo de encriptacion de la contraseña 

	$sql = "SELECT USUARIO, PASS FROM ALESI_TUSUARIOS WHERE USUARIO = '" . $username . "' and PASS='".$password."';";
	$query=mysqli_query($con,$sql);

	$counter=mysqli_num_rows($query);
		if ($counter==1){
				$_SESSION['login_user_sys']=$username; // Iniciando la sesion
				header("location: profile.php"); // Redireccionando a la pagina profile.php
		} else {
			$error = "El correo electrónico o la contraseña es inválida.";	
			$variable = $counter;
		}
	}
}
?>