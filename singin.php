<?php
session_start();
include('views/singin.html');
if(empty($_SESSION['login']) or empty($_SESSION['id'])){
    echo 'You entered as a guest.';
} else {
    echo 'You entered as a '.$_SESSION['login'].'.';
}
?>