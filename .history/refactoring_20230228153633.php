<?php
require_once('db.php');


function selectAll(){

$results = $pdo->query('SELECT * FROM posts
     ORDER BY created_at DESC LIMIT 0,3'); $posts = $results->fetchAll();
    return $posts;

}