<?php

require_once('../refactoring.php');?>
<?php 
$errors = array();
$title= '';
$author= '';
$content= '';

if (isset($_POST['add-post'])) {

    // la gestion des erreurs de champs du fomrulaire 
    $errors = validatePost($_POST);

    // traitement d'image 
    if (!empty($_FILES['image']['name'])) {
        $image_name = $_FILES['image']['name'];
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
        //enregistrement de l'article 
        create($_POST['author'], $_POST['title'], $_POST['content'], $_POST['image']);
        header('location: index.php');
        exit();

    }else{
        $title =$_POST['title'];
        $author =$_POST['author'];
        $content =$_POST['content'];
       


    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../css/admin.css">

    <title>Admin Section - Add Post</title>
</head>

<body>
    <?php include '../inc/header.php'; ?>

    <!-- Admin Page Wrapper -->
    <div class="admin-container">


        <!-- // Left Sidebar -->


        <!-- Admin Content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.html" class="btn btn-big">Ajout d'un article</a>
                <a href="index.html" class="btn btn-big"> Gerer des articles</a>
            </div>


            <div class="container">

                <h2 class="page-title"> Gestions des articles</h2>
                <form action="create.php" enctype="multipart/form-data" method="post">
                    <div>
                        <label>Author</label>
                        <input type="text" name="author" value="<?=$author?>" class="text-input">
                    </div>
                    <div>
                        <label>Title</label>
                        <input type="text" name="title"value= "<?= $title ?>" class="text-input">
                    </div>
                    <div>
                        <label>Contenu</label>
                        <textarea cols="130" , rows="10" name="content" id="body"><?= $content ?></textarea>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>

                    <div>
                        <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
                    </div>
                </form>

            </div>

        </div>
        <!-- // Admin Content -->

    </div>
    <!-- // Page Wrapper -->


</body>

</html>