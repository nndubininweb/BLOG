<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Blog | Sing In</title>
    <meta charset="utf-8">
</head>
<body>
    <h2>Sing In</h2>
    <p>
        <a href="index.php">To main</a>
        <a href="singup.php">Sing Up</a>
    </p>
    <form action='testreg.php' method='post'>
        <p>
            <label>Login:<br></label>
            <input name='login' type='text'>
        </p>
        <p>
            <label>Password:<br></label>
            <input name='password' type='password'>
        </p>
        <p>
            <input type='submit' name='submit' value='Sign In'>
        </p>
    </form>
    <?php
    if(empty($_SESSION['login']) or empty($_SESSION['id'])){
        echo 'You entered as a guest.';
    } else {
        echo 'You entered as a'.$_SESSION['login'].'.';
    }
    ?>
</body>
</html>