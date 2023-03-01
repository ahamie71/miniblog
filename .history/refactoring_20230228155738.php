<?php
require_once 'db.php';
function selectAll(){ 
    
$db = new PDO('mysql:host=localhost;dbname=train;charset=utf8', 'root', 'root');
    $results = $pdo->query("SELECT * FROM posts
     ORDER BY created_at DESC LIMIT 0,3");
    $posts = $results->fetchAll();
    return $posts;
}
