<?php
require_once 'db.php';

// recuperation de tous les articles 
function selectAll(){ 
    global $pdo;
    $results = $pdo->query("SELECT * FROM posts
     ORDER BY created_at DESC LIMIT 0,3");
    $posts = $results->fetchAll();
    return $posts;
}

// recuperation d'un article grâce a son identfiant 
function selectOne($id){
    global $pdo;
 $query= $pdo->prepare('SELECT * FROM posts WHERE id = :post_id');
$query->execute(array('post_id' => $id));
$post = $query->fetch();

return $post;
}

// enregistrement d'un artile 
 function create($author, $title, $content, $image){
    global $pdo;
    $query =$pdo ->prepare('INSERT INTO posts (author, title, content, image,created_at)VALUES (:auteur, :titre, :contenu,:image,N")')

 }
