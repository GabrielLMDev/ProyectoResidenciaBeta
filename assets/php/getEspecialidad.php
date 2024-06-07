<?php
session_start();
require 'database.php';
$id = $_POST['id'];
$semestre = $_POST['semestre'];
$resultados;
$records = $conn->prepare('SELECT * FROM `especialidad` WHERE id_especialidad = :id');
$records->bindParam(':id', $id);
$records->execute();
$results = $records->fetch(PDO::FETCH_ASSOC);

if ($results > 0) {
    $resultados = $results;
    //echo json_encode($results);
    $records = $conn->prepare('SELECT * FROM `semestre` WHERE id_especialidad = :id AND numero = :numero');
    $records->bindParam(':id', $id);
    $records->bindParam(':numero', $semestre);
    $records->execute();
    $rss = $records->fetch(PDO::FETCH_ASSOC);

    if ($results > 0) {
        $resultados += $rss;
        //echo json_encode($rss);
    }
    $_SESSION['semestre'] = $_POST['semestre'];
    echo json_encode($resultados);
}
