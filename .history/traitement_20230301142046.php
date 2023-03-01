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

   if(!empty($_POST['author']) && !empty($_POST['comment']){

      $author = $_POST['author'];
      $comment = $_POST['comment'];
      $id= $_POST['id'];
      saveComment($author,$)
   }
}