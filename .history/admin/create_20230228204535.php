<?php

require_once('../refactoring.php');

$errors= array();

if (isset($_POST['add-post'])) {
    // traitement d'image 
    
    $errors= validatePost($_POST);
    if (!empty($_FILES['image']['name'])) {
        $image_name = $_FILES['image']['name'];
        // on creer une destination 
        $destination = "../images/$image_name";

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        if ($result) {

            $_POST['image'] = $image_name;

        }

    }
    
    $_POST['content'] = nl2br(htmlentities($_POST['content']));

    //enregistrement de l'article 
    create($_POST['author'], $_POST['title'], $_POST['content'], $_POST['image']);
    header('location: index.php');
    exit();


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
                        <input type="text" name="author" class="text-input">
                    </div>
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" class="text-input">
                    </div>
                    <div>
                        <label>Contenu</label>
                        <textarea cols="130" , rows="10" name="content" id="body"></textarea>
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