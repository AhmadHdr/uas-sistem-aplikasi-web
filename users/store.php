<?php
session_start();
require_once '../helper/connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$user_role = $_POST['user_role'];

$query = mysqli_query($connection, "insert into users(username, password, user_role) value('$username', '$password', '$user_role')");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
  ?>