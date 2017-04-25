<?php
session_start();
require_once('datebase.php');
$link = db_connect();
if(isset($_POST['login'])){
    $login = $_POST['login'];
    if($login == ''){
        unset($login);
    }
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
    if($password == ''){
        unset($password);
    }
}
if(empty($login) or empty($password)){
    exit('You did not enter all the information.');
}
$result = mysqli_query($link, "SELECT * FROM users WHERE login='$login'");
$myrow = mysqli_fetch_array($result);
if(empty($myrow['password'])){
    exit('Entered username or password is incorrect.');
} else {
    if($myrow['password'] == $password){
        $_SESSION['login'] = $myrow['login'];
        $_SESSION['id'] = $myrow['id'];
        echo 'You havae successfully logged into the site. <a href="index.php">To main</a>';
    } else {
        exit('Entered username or password is incorrect.');
    }
}
?>