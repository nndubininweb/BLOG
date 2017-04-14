<?php
function articles_all($link){
    $query = "SELECT * FROM articles ORDER BY id";
    $result = mysqli_query($link, $query);
    if(!$result)
        die(mysqli_error($link));
    $n = mysqli_num_rows($result);
    $articles = array();
    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }
    return $articles;
}
function articles_get($id){
}
function articles_new($title, $date, $content){
}
function articles_edit($id, $title, $date, $content){
}
function articles_delete($id){
}
?>