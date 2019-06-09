<!DOCTYPE html>
<html lang="es">
<head>
	<title>Conexion... DB</title>
</head>
<body>
<?php
try{
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "sistemacademico";

  // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}/*else {
	echo "Conexion establesidad";
}*/

}catch (Exception $e){
	die ("Erro en la conexion...");
}
?>
</body>
</html>