<?php
require 'database-mensajes.php';
$n_control = $_POST['n_control'];
$_arrayMensajes;
$query = "SELECT remitente, cuerpo, fecha FROM mensajes WHERE n_control =" . $n_control;
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
       $_arrayMensajes [] = $row;
    }
    echo json_encode($_arrayMensajes);
}