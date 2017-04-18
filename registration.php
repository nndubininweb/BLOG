<?php
require_once('datebase.php');
require_once('models/articles.php');
$link = db_connect();
include('views/registration.html');
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
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
$login = trim($login);
$password = trim($password);
$result = mysqli_query($link, "SELECT id FROM users WHERE login='$login'");
$myrow = mysqli_fetch_array($result);
if (!empty($myrow['id'])) {
    exit ('The selected login is already in use.');
}
$result2 = mysqli_query($link, "INSERT INTO users (login,password) VALUES('$login','$password')");
if ($result2=='TRUE'){
    echo "Registration completed successfully.";
} else { echo 'Error.'; }
?>