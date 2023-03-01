<?php
//traitement de single php 
$id= '';
if(isset($_GET['id']) && is_numeric($_GET['id'])){
   $id = $_GET['id'];
}
if(empty($_GET['id'])){
   die("cet article nexiste pas ");
}

// sauvegarde d'un commentaire

if(isset($_POST['add-comment'])){

   if(!empty($_POST['auteur']) && !empty($_POST['comment'])){

      $author = $_POST['auteur'];
      $comment = $_POST['comment'];
      $id= $_POST['id'];

      saveComment($author,$id,$comment); 
      header('Location:single.php?id='.$_POST['id']);
      exit();
   }
}

if (isset($_POST['register'])) {
   if (isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2'])) {
       $prenom = $_POST['prenom'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $password2 = $_POST['password2'];
       $role = "user";
       if ($password === $password2 && strlen($password) >= 6 && preg_match("/[a-z][0-9]/", $password)) {
           $pass = password_hash($_POST['password'], PASSWORD_ARGON2ID);
           register($prenom, $pass, $email, $role);
           exit();
       }
   } 
   
   }
   }