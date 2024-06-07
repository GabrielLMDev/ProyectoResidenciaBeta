<?php
require 'database.php';
$n_control = $_POST['n_control'];
$records = $conn->prepare('SELECT * FROM alumnos WHERE n_control = :n_control');
$records->bindParam(':n_control', $n_control);
$records->execute();
$results = $records->fetch(PDO::FETCH_ASSOC);

if ($results > 0) {
    echo json_encode($results);
}
