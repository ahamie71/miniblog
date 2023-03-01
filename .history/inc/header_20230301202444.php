<?php

session_start();

?>


<header>
        <div class="logo">
            <h1 class="logo-text"><span>READ</span>BLog</h1>
        </div>
        <ul class="nav">
                 <?php
                    if (!isset($_SESSION['user'])) {
                        ?>

            <li><a href="home.phtml">Home</a></li>
            <li><a href="index.php">Articles</a></li>
          
            <li><a href="inscription.php">S'inscrire</a></li>
            <li><a href="connect.php">Se connecter</a></li>
        <?php
                    }else{
                        ?>
                         <li><a href="home.phtml">Home</a></li>
            <li><a href="index.php">Articles</a></li>
          
                      <li><a href="deconnection.php">Deconnection</a></li>
                      <li>BIENVENUE<?php echo </li>
                    <?php

                    }
                    ?>
    </header>