<?php
session_start();
require 'database.php';
$usuario_login = $_POST['matricula'];
$pass_login = $_POST['password'];
$token;

if ($usuario_login === '' || $pass_login === '') {
  echo json_encode('Error 03');
} else {
  $records = $conn->prepare('SELECT matricula, password FROM admin WHERE matricula = :matricula');
  $records->bindParam(':matricula', $_POST['matricula']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);
  if ($results > 0) {
    if ($_POST['password'] == $results['password']) {
      $_SESSION['admin_id'] = $_POST['matricula'];
      echo json_encode('Ok');
    } else {
      echo json_encode('Error 02');
    }
  } else {
    echo json_encode('Error 01');
  }
}