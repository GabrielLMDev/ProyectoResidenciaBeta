<?php
require 'database.php';
session_start();
  $_SESSION['admin_id'];
  session_unset();
  session_destroy();
  echo json_encode('Ok');
