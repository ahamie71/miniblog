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
