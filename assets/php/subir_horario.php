<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'demo';
$conn = new mysqli($server, $username, $password, $database);
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Obtener los valores del formulario
$semestre = $_POST['semestre'];
$carrera = $_POST['carrera'];
$grupo = $_POST['grupo'];

// Verificar si se ha seleccionado un archivo
if (isset($_FILES['pdfFile'])) {
    $file = $_FILES['pdfFile'];

    // Verificar si no hay errores durante la subida del archivo
    if ($file['error'] === UPLOAD_ERR_OK) {
        $tmpName = $file['tmp_name'];
        $fileName = $file['name'];

        // Leer el contenido del archivo
        $pdfData = file_get_contents($tmpName);

        // Escapar caracteres especiales en el contenido del archivo
        $pdfData = $conn->real_escape_string($pdfData);

        // Insertar los datos en la base de datos
        $query = "INSERT INTO horarios (semestre, carrera, grupo, archivo) VALUES ('$semestre', '$carrera', '$grupo', '$pdfData')";
        if ($conn->query($query) === TRUE) {
            echo "El horario académico se ha subido correctamente a la base de datos.";
        } else {
            echo "Error al subir el horario académico a la base de datos: " . $conn->error;
        }
    } else {
        echo "Error al subir el archivo PDF.";
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
