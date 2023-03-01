



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
        <header>
            <div class="logo">
              <h1 class="logo-text"><span>Ron</span>asdev</h1>
            </div>
            <ul class="nav">
              <li><a href="index.html">Accueil</a></li>
              <li><a href="#">A propos</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">S'inscrire</a></li>
              <li><a href="#">Se connecter</a></li> 
            </ul>
          </header>

        <!-- Admin Page Wrapper -->
        <div class="admin-container">

        
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.html" class="btn btn-big">Add Post</a>
                    <a href="index.html" class="btn btn-big">Manage Posts</a>
                </div>


                <div class="container">

                    <h2 class="page-title">Manage Posts</h2>
                    <form action="create.php" enctype="multipart/form-data" method="post">
                        <div>
                            <label>Author</label>
                            <input type="text" name="author"  class="text-input">
                        </div>
                        <div>
                            <label>Title</label>
                            <input type="text" name="title"  class="text-input">
                        </div>
                        <div>
                            <label>Contenu</label>
                            <textarea cols="130", rows="10" name="content" id="body"></textarea>
                        </div>
                        <div>
                            <label>Image</label>
                            <input type="file" name="image"  class="text-input">
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