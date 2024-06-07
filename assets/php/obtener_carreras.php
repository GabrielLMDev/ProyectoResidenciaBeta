<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'demo';
$conn = new mysqli($server, $username, $password, $database);

// Consulta para obtener las carreras
$query = "SELECT id_especialidad, especialidad FROM especialidad";
$result = $conn->query($query);

$carreras = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $carreras[] = $row;
  }
}

// Devolver los datos como JSON
header('Content-Type: application/json');
echo json_encode($carreras);

$conn->close();
?>
