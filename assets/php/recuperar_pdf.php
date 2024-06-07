<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'demo';
$conn = new mysqli($server, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recupera el ID del PDF enviado desde el formulario
$pdf_id = $_POST['pdf_id'];

// Realiza una consulta para obtener los datos del PDF
$sql = "SELECT archivo FROM nombre_tabla WHERE id = '$pdf_id'";
//SELECT `archivo` FROM `horarios` WHERE semestre = 8 AND carrera = 2 AND grupo = "GA"
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Recupera los datos del PDF de la consulta
    $row = $result->fetch_assoc();
    $pdf_data = $row['pdf_data'];

    // Cierra la conexión a la base de datos
    $conn->close();

    // Muestra el archivo PDF en el navegador
    header('Content-type: application/pdf');
    echo $pdf_data;
} else {
    echo "No se encontró el PDF con el ID proporcionado.";
}
?>
