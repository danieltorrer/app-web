<?PHP
$username="root";
$password="";
$servername="localhost";

$nom = $_POST['nom'];
$cat = $_POST['cat'];
$fi = $_POST['fi'];
$fc = $_POST['fc'];
$fii = $_POST['fii'];
$fli = $_POST['fli'];

//conexion
$con = mysqli_connect($servername,$username,$password)
     or die("Unable to connect to MySQL");

//checar conexion 
if(!$con){
           die("Fallo en la Conexion:".mysql_connect_error());
}   
//manipular la base de datos

echo "Manipular la BASE de DATOS"."<br>";

$selected = mysqli_select_db($con,'MyDB');

 echo "insert into eventos (nombre_evento,categoria,fecha_de_inicio,fecha_de_clausura,fecha_de_inicio_de_inscripciones,fecha_limite_de_inscripciones)
	values("."'".$nom."'".','."'".$cat."'".','."'".$fi."'".','."'".$fc."'".','."'".$fii."'".','."'".$fli."'".");";

mysqli_query($con,"insert into eventos (nombre_evento,categoria,fecha_de_inicio,fecha_de_clausura,fecha_de_inicio_de_inscripciones,fecha_limite_de_inscripciones)
	values("."'".$nom."'".','."'".$cat."'".','."'".$fi."'".','."'".$fc."'".','."'".$fii."'".','."'".$fli."'".");");


mysqli_close($con);

?>