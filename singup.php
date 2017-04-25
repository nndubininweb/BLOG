<?php
session_start();
require_once('models/autorizations.php');
require_once('datebase.php');
$link = db_connect();
include('views/singup.html');
if(isset($_POST['login'])){
    $login = $_POST['login'];
    if($login == ''){ unset($login); }
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
    if($password ==''){ unset($password); }
}
if(empty($login) or empty($password)){
    exit('Fill in all the fields.');
}
singup($link, $login, $password);
?>