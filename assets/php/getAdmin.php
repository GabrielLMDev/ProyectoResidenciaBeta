<?php
require 'database.php';
$matricula = $_POST['matricula'];
$records = $conn->prepare('SELECT nombre FROM admin WHERE matricula = :matricula');
$records->bindParam(':matricula', $matricula);
$records->execute();
$results = $records->fetch(PDO::FETCH_ASSOC);

if ($results > 0) {
    echo json_encode($results);
}
