<?php
require_once 'db.php';
function selectAll(){ 
    
$pdo = new PDO('mysql:host=localhost;dbname=mBlog;charset=utf8', 'root', 'root');  
    $results = $pdo->query("SELECT * FROM posts
     ORDER BY created_at DESC LIMIT 0,3");
    $posts = $results->fetchAll();
    return $posts;
}
