<?php require_once 'refactoring.php' ?>
<?php

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $post = selectOne($id);

    if($post){

        
    }
}