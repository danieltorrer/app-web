<?php
$username="root";
$password="";
$servername="localhost";

$un = $_POST['un'];
$psw = $_POST['psw'];
$ce = $_POST['ce'];
$nom = $_POST['nom'];
$ap = $_POST['ap'];
$am = $_POST['am'];
$edad = $_POST['edad'];
$ciudad = $_POST['city'];
$estado = $_POST['edo'];
$pais = $_POST['pais'];

//conexion
$con = mysqli_connect($servername,$username,$password)
     or die("Unable to connect to MySQL");

//checar conexion 
if(!$con){
           die("Fallo en la Conexion:".mysql_connect_error());
}   
//manipular la base de datos

//echo "Manipular la BASE de DATOS"."<br>";

$selected = mysqli_select_db($con,'MyDB');

//echo"insert into usuarios (nombre_de_usuario,contrasena,correo_electronico,nombre,apellido_paterno,apellido_materno,edad,ciudad,estado,pais)
//	values("."'".$un."'".','."'".$psw."'".','."'".$ce."'".','."'".$nom."'".','."'".$ap."'".','."'".$am."'".','.$edad.','."'".$ciudad."'".','."'".$estado."'".','."'".$pais."'".");";

mysqli_query($con,"insert into usuarios (nombre_de_usuario,contrasena,correo_electronico,nombre,apellido_paterno,apellido_materno,edad,ciudad,estado,pais)
	values("."'".$un."'".','."'".$psw."'".','."'".$ce."'".','."'".$nom."'".','."'".$ap."'".','."'".$am."'".','.$edad.','."'".$ciudad."'".','."'".$estado."'".','."'".$pais."'".");");

mysqli_close($con);
header('Location: '. 'concursos.html');



?>