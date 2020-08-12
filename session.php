<?php
// Estableciendo la conexion a la base de datos
include("conexion.php");//Contiene de conexion a la base de datos

//session_start();// Iniciando Sesion


if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

// Guardando la sesion
$user_check=$_SESSION['login_user_sys'];
// SQL Query para completar la informacion del usuario
$ses_sql=mysqli_query($con, "select a.USUARIO, ROL, a.ID_EMPRESA , b.NOMBRE , b.ID_PERSONA
                                from ALESI_TUSUARIOS a,  ALESI_TPERSONAS b
                                where a.ID_PERSONA  = b.ID_PERSONA 
                                and a.USUARIO='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['USUARIO'];
$login_rol =$row['ROL'];
$login_emp =$row['ID_EMPRESA'];
$login_nombre =$row['NOMBRE'];
$login_id_persona =$row['ID_PERSONA'];

/*
//nuevo
$ses_sql1=mysqli_query($con, "select ROL from ALESI_TUSUARIOS where USUARIO='$user_check'");
$row1 = mysqli_fetch_assoc($ses_sql1);
$login_rol =$row1['ROL'];
//nuevo otro
$ses_sql2=mysqli_query($con, "select ID_EMPRESA from ALESI_TUSUARIOS where USUARIO='$user_check'");
$row2 = mysqli_fetch_assoc($ses_sql2);
$login_emp =$row2['ID_EMPRESA'];*/
if(!isset($login_session)){
mysqli_close($con); // Cerrando la conexion
header('Location: index.php'); // Redirecciona a la pagina de inicio
}
?>