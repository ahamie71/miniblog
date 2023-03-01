<?php
require_once 'db.php';


// validation d'un article 
function ValidatePost($post)
{
    $errors = array();
    if (empty(($post['author']))) {
        array_push($errors, 'Veiller remplir votre nom');
    }
    if (empty($post['title'])) {
        array_push($errors, 'Veiller remplir le titre  ');

    }
    if (empty($post['content'])) {
        array_push($errors, 'Veiller remplir le content ');

    }
      return $errors;

}

// recuperation de tous les articles 
function selectAll()
{
    global $pdo;
    $results = $pdo->query("SELECT * FROM posts
     ORDER BY created_at DESC LIMIT 0,3");
    $posts = $results->fetchAll();
    return $posts;
}

// recuperation d'un article grâce a son identfiant 
function selectOne($id)
{
    global $pdo;
    $query = $pdo->prepare('SELECT * FROM posts WHERE id = :post_id');
    $query->execute(array('post_id' => $id));
    $post = $query->fetch();

    return $post;
}

// enregistrement d'un artile 
function create($author, $title, $content, $image)
{
    global $pdo;
    $query = $pdo->prepare('INSERT INTO posts (author, title, content, image,created_at)VALUES (:auteur, :titre, :contenu,:image,NOW())');
    $query->execute([
        ':auteur' => $author,
        ':titre' => $title,
        ':contenu' => $content,
        'image' => $image
    ]);


}

// modifier un article 
function updatePost