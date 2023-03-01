<?php require_once 'refactoring.php' ?>
<?php

$id = '';
$authot
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $post = selectOne($id);

    if(!$post){

        header('Location:index.php');
        exit();
   
    }

}