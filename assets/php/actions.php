<?php
session_start();
require 'database.php';
$usuario_login = $_POST['n_control'];
$pass_login = $_POST['password'];
$token;

if ($usuario_login === '' || $pass_login === '') {
  echo json_encode('Error 03');
} else {
  $records = $conn->prepare('SELECT n_control, password FROM acceso WHERE n_control = :n_control');
  $records->bindParam(':n_control', $_POST['n_control']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);
  if ($results > 0) {
    if (password_verify($_POST['password'], $results['password'])) {
      $records = $conn->prepare('SELECT sesion FROM estatus WHERE n_control = :n_control');
      $records->bindParam(':n_control', $_POST['n_control']);
      $records->execute();
      $results = $records->fetch(PDO::FETCH_ASSOC);
      if ($results['sesion'] === 0) {
        token();
        $_SESSION['user_id'] = $_POST['n_control'];
        echo json_encode('Ok');
      } else {
        echo json_encode('Error 110');
      }
    } else {
      echo json_encode('Error 02');
    }
  } else {
    echo json_encode('Error 01');
  }
}

function token()
{
  require 'database.php';
  $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $fecha = date('mdy');
  $token = $fecha . substr(str_shuffle($permitted_chars), 0, 20);
  $time = date('m/d/Y g:ia');
  $sql = "UPDATE acceso SET token = '" . $token . "' WHERE n_control =" . $_POST['n_control'];
  if ($conn->query($sql)) {
    $sql = "INSERT INTO historial_accesos (n_control, token, fecha) VALUES (:user, :token, :fecha_acceso)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':user', $_POST['n_control']);
    $stmt->bindParam(':token', $token);
    $stmt->bindParam(':fecha_acceso', $time);
    if ($stmt->execute()) {
      access();
    } else {
      echo json_encode('Error 210');
    }
  } else {
    echo json_encode('Error 100');
  }
}

function historial()
{
  require 'database.php';
  $sql = "INSERT INTO historial_accesos (n_control, token) VALUES (:user, :token)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':user', $_POST['n_control']);
  $stmt->bindParam(':token', $token);
  if ($stmt->execute()) {
    access();
  } else {
    echo json_encode('Error 210');
  }
}

function access()
{
  require 'database.php';
  $sql = "UPDATE estatus SET sesion = '1' WHERE n_control =" . $_POST['n_control'];
  if ($conn->query($sql)) {
  } else {
    echo json_encode('Error 101');
  }
}
