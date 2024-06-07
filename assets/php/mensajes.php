<?php
require 'database.php';
$n_control = $_POST['n_control'];

$records = $conn->prepare('SELECT COUNT(n_control) AS n_control
FROM mensajes
WHERE n_control=' . $n_control);
$records->execute();
$contador = $records->fetch(PDO::FETCH_ASSOC);

if ($contador > 0) {
    $cont = $contador;
    echo json_encode($cont);
} else {
    $cont = 0;
    echo json_encode($cont);
}
