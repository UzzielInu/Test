<?php
// process form
$link = mysqli_connect("localhost", "root", "12345");
mysqli_select_db($link, "SS");
mysqli_query($link, "SET NAMES 'utf8'");

$sql = "INSERT INTO Alumnos (Matricula, Nombres, Apellidos, Telefono, Email, Semestre, Promedio, Creditos, Habilidades, ExperienciasEdu)"+"VALUES ('$Matricula', '$Nombres', '$Apellidos', '$Email', 'john@example.com', 'quinto', '9.5', '142', 'JAJAJAJAJajajajajajaja','jijijijijijijijiji')";
$result = mysql_query($sql);
echo "¡Gracias! Hemos recibido sus datos.\n";

 // "INSERT INTO Alumnos (Matricula, Nombres, Apellidos, Telefono, Email, Semestre, Promedio, Creditos, Habilidades, ExperienciasEdu) VALUES ('S11018300', 'John Dony', 'Doe', '815784554', 'john@example.com', 'quinto', '9.5', '142', 'JAJAJAJAJajajajajajaja','jijijijijijijijiji')";