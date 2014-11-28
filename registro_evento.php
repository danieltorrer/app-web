<?PHP
$username="root";
$password="";
$servername="localhost";

$nom = $_POST['nom'];
$des = $_POST['des'];
$cat = $_POST['cat'];
$fi = $_POST['fi'];
$fc = $_POST['fc'];
$fii = $_POST['fii'];
$fli = $_POST['fli'];

$tam=$_FILES['upfile']['size'];
$tipo=$_FILES['upfile']['type'];
$tmpNombre=$_FILES['upfile']['tmp_name'];

$ruta="img/".$_FILES['upfile']['name'];
$subio=false;
if($tam<=400000){
   if(is_uploaded_file($_FILES['upfile']['tmp_name'])){
      copy($_FILES['upfile']['tmp_name'], $ruta);
      $subio= true;
    }
  } 
  else  echo "The FILE is so Big... <br>"; 
   
//if($subio) echo "SUCCESS File uploaded <br>";

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

//echo $ruta;//"insert into eventos (nombre_evento,descripcion,categoria,fecha_de_inicio,fecha_de_clausura,fecha_de_inicio_de_inscripciones,fecha_limite_de_inscripciones,cartel)
	//values("."'".$nom."'".','."'".$des."'"."'".$cat."'".','."'".$fi."'".','."'".$fc."'".','."'".$fii."'".','."'".$fli."'".");";

mysqli_query($con,"insert into eventos (nombre_evento,descripcion,categoria,fecha_de_inicio,fecha_de_clausura,fecha_de_inicio_de_inscripciones,fecha_limite_de_inscripciones,cartel)
	values("."'".$nom."'".','."'".$des."'".","."'".$cat."'".','."'".$fi."'".','."'".$fc."'".','."'".$fii."'".','."'".$fli."'".","."'".$ruta."'".");");


mysqli_close($con);
header('Location: '. 'concursos.html');


?>