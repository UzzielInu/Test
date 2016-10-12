<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
<?php
 $connection= mysqli_connect("localhost", "root", "12345", "SS");
   // // Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
//echo "Connected successfully";

$sql = "INSERT INTO Seleccion (Matricula, Opcion1, Opcion2, Opcion3, FechaRegistro) VALUES ('$_REQUEST[Matricula]', '$_REQUEST[Opcion]', '$_REQUEST[Opcion]', '$_REQUEST[Opcion]', '_REQUEST[Fecha]')";

if ($connection->query($sql) === TRUE) {
 		//echo "Inserción exitosa";
 	} else {
 	echo "Error: " . $sql . "<br>" . $connection->error;
 	}
 	$connection->close();

//header('Location: ../../SSYER/table.php');

?>
</body>
</html>
