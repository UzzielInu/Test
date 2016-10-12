
<?php
$db="SS";
 $connection= mysqli_connect("localhost", "root", "12345", "SS");
 $acentos = $connection->query("SET NAMES 'utf8'");
   // // Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);

} 
//echo "Connected successfully";

// $sql = "INSERT INTO Alumnos (Matricula, Nombres, Apellidos, Telefono, Email, Semestre, Promedio, Creditos, Habilidades, ExperienciasEdu) VALUES ('$_REQUEST[Matricula]', '$_REQUEST[Nombres]', '$_REQUEST[Apellidos]', '$_REQUEST[Telefono]', '$_REQUEST[Email]', '$_REQUEST[Semestre]', '$_REQUEST[Promedio]', '$_REQUEST[Creditos]', '$_REQUEST[Habilidades]','$_REQUEST[Experiencias]')";

// if ($connection->query($sql) === TRUE) {
//  		//echo "Inserción exitosa";
//  	} else {
//  	echo "Error: " . $sql . "<br>" . $connection->error;
//  	}
//  	$connection->close();

// header('Location: ../../SSYER/table.php');

?>


