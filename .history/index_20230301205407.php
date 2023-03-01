<?php
require_once 'refactoring.php';
$perPage= 3;
$nombreTotal= pagination();

$noPage= 1;
$pages = ceil($nombreTotal/$perPage);
if (isset($_GET['page'])) {
    $noPage = $_GET['page'];
    
  }

$posts = selectAll($noPage,$perPage);
// on va recuperer tout les articles de la abse de donnée .
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Mini | Blog</title>
</head>

<body>
   
     <?php include('inc/header.php'); ?>

 <h1>BIENVENUE <?php echo $_SESSION['user']['prenom']?></h1>
    <!-- Page Wrapper -->
    <div class="page-container">

        <!-- Post Slider -->
        <div class="posts">
            <h1 class="posts-title">Articles</h1>
            <div class="post-container">

               <?php foreach ($posts as $post):?>

                <div class="container mt3">
                    <div class= "card" style="width:400px">
                    <img src="<?php echo 'images/' .$post['image']?>" alt="mon image" class="slider-image">
                    <div class="card-body">
                        <a href="single.php?id=<?= $post['id']?> class ="btn btn-sucess"><?php echo $post['title']?></a></button>
                        <i><?php echo $post['author']?></i>
                        &nbsp;
                        <i><?php echo  date( 'd F,Y',strtotime($post['created_at']));?></i>
                    </div>
                </div>
                </div>
                <?php endforeach; ?>
               
            

            </div>
        </div>

        <div class="pagination">
      <?php
        for ($i=1; $i <= $pages ; $i++) { ?>
          <a class="page <?= ($noPage == $i)?'active':'' ?>" href="index.php?page=<?= $i ?>"><?= $i ?></a>
      <?php }
      ?>
    </div>

        <body>

</html>