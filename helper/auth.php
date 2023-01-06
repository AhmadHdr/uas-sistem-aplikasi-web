<?php
session_start();

function isLogin()
{
  if(!isset($_SESSION['login'])){
    header('Location: ../index.php');
  }
}

function checkRole()
{
  if($_SESSION['login']['user_role'] == 'admin'){
    return 'admin';
  }elseif($_SESSION['login']['user_role'] == 'common'){
    return 'common';
  }
}