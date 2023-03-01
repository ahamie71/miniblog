
<?php

$id = '';
$author = '';
$title= '';
$content = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $post = selectOne($id);

    if(!$post){

        header('Location:index.php');
        exit();
   
    }
       $author = $post['author'];
       $title = $post['title'];
       $content = $post['content'];
}
if(isset($_POST['update-post'])) {
    $errros= ValidatePost(($_POST));

   // traitement des images
if (!empty($_FILES['image']['name'])) {
        $image_name =time().'_'. $_FILES['image']['name'];
        // on creer une destination 
        $destination = "../images/$image_name";

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        if ($result) {

            $_POST['image'] = $image_name;

        } else {
            array_push($errors, 'l\enregistrement de l\'image a echoué');
        }

    } else {
        array_push($errors, 'Une image est demandée');
    }
    if (count($errors) == 0) {

        $_POST['content'] = nl2br(htmlentities($_POST['content']));
}

?>