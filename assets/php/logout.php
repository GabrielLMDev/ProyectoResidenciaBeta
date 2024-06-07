<?php
require 'database.php';
session_start();
$n_control = $_POST['n_control'];
$sql = "UPDATE estatus SET sesion = '0' WHERE n_control =" . $n_control;
if ($conn->query($sql)) {
  $_SESSION['user_id'];
  session_unset();
  session_destroy();
  echo json_encode('Ok');
} else {
  echo json_encode('Error 210');
}
