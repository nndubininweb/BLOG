<?php
require_once('datebase.php');
require_once('models/articles.php');
$article = articles_get();
include('views/articles.html')
?>