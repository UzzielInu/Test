

<!DOCTYPE html>
<html>
<head>
	<title>holis</title>
</head>
<body>
<form method="post" action="conexion.php">
Matricula   :<input type="Text" name="Matricula"><br>
Nombres:<input type="Text" name="Nombres"><br>
Apellidos :<input type="Text" name="Apellidos"><br>
E-mail   :<input type="Text" name="Email"><br>
<input type="Submit" name="enviar" value="Aceptar información">
</form>
</body>
</html>

<!-- <?php
// $servername = "localhost";
// $username = "root";
// $password = "12345";
// $dbname = "SS";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
// echo "Connected successfully";
// include_once("conexion.php");

// $sql = "INSERT INTO Alumnos (Matricula, Nombres, Apellidos, Telefono, Email, Semestre, Promedio, Creditos, Habilidades, ExperienciasEdu)
// VALUES ('S11018300', 'John Dony', 'Doe', '815784554', 'john@example.com', 'quinto', '9.5', '142', 'JAJAJAJAJajajajajajaja','jijijijijijijijiji')";

// if ($conexion->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conexion->error;
// }

// $conexion->close();
?> -->

