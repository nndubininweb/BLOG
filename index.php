<?php
session_start();
require_once('datebase.php');
require_once('models/articles.php');
$link = db_connect();
$articles = articles_all($link);
include('views/articles.html');
?>