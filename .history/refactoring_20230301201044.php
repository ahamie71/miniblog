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
function selectAll($noPage,$perPage)
{
    global $pdo;
    $results = $pdo->query('SELECT * FROM posts
     ORDER BY created_at DESC LIMIT '.($perPage*($noPage-1)).','.$perPage);
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

// selection de tout les articlres 

function pagination(){
    global $pdo;
    $query = $pdo->query("SELECT COUNT(*) as nbr_articles FROM posts");
    $query->execute();
        $nombres= $query->fetch();
    return $nombres['nbr_articles'];
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
function updatePost($id,$author,$title,$content,$image){

    global $pdo;

    $query = $pdo->prepare('UPDATE posts SET author = :auteur ,title = :titre, content =:content , image = :image WHERE id = :id');
    $query->execute([

        'auteur'=> $author,
        'titre'=>$title,
        'content'=>$content,
        'image' =>$image,
        'id'=>$id

    ]); 
    
}
// supprimer un article 

function deletePost($id){
 global $pdo;
 $query = $pdo->prepare('DELETE FROM posts WHERE id = :id');
 $query ->execute(['id'=>$id]);

}

// sauvegarder un commentaire

function saveComment($auteur, $post_id,$comment){

     global $pdo;
     $query = $pdo->prepare('INSERT INTO comments(id_post,auteur,comment, created_at)
     VALUES (:id_post,:auteur,:comment,NOW())');
     $query -> execute([
        'id_post'=>$post_id,
        'auteur'=>$auteur,
        'comment'=>$comment


     ]);
}
// reduperer un article dans la base

function findAllComments($id_post){
    global $pdo;
    $query = $pdo->prepare('SELECT * FROM comments WHERE id_post  = :post_id ORDER BY created_at DESC');
    $query->execute(array('post_id' => $id_post));

    $comments = $query->fetchAll();

    return $comments;


}
function register(string $prenom, string $password, string $email, string $role)
{
    global $pdo;
    $query = $pdo->prepare('INSERT INTO user (prenom,Email,password,role) VALUES (:prenom,:Email,:password,:role)');
    $query->execute(
        array(
            ':prenom' => $prenom,
            ':password' => $password,
            ':role' => $role,
            ':Email' => $email
        )
    );
}
function getUserByName($prenom)
{
    global $pdo;
    $req = "SELECT * FROM user WHERE prenom = '$prenom'";
    $userStatement = $pdo->prepare($req);
    $userStatement->execute();
    $user = $userStatement->fetch();
      
    return $user;
}

