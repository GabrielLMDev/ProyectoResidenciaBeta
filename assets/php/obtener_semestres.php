<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'demo';
$conn = new mysqli($server, $username, $password, $database);


// Obtener el ID de carrera enviado desde el cliente
$carreraId = $_GET['carreraId'];

// Consulta para obtener los semestres de la carrera seleccionada
$query = "SELECT id_semestre, semestre, numero FROM semestre WHERE id_especialidad = $carreraId";
$result = $conn->query($query);

$semestres = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $semestres[] = $row;
  }
}

// Devolver los datos como JSON
header('Content-Type: application/json');
echo json_encode($semestres);

$conn->close();
?>