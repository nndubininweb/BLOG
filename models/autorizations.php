<?php
function singup($link, $login, $password){
    $result = mysqli_query($link, "SELECT id FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
        exit ('The selected login is already in use.');
    }
    $result2 = mysqli_query($link, "INSERT INTO users (login,password) VALUES('$login','$password')");
    if ($result2=='TRUE'){
        echo "Registration completed successfully.";
    } else { echo 'Error.'; }
}
?>