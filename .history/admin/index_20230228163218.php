<?php

require



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

        <title>Section Admin - Gestions des articles</title>
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

            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.html" class="btn btn-big">Ajouter un article</a>
                    <a href="index.html" class="btn btn-big">Gérer des articles</a>
                </div>
                <div class="container">
                    <h2 class="page-title">Manage Posts</h2>
                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                       
                                <tr>
                                    <td>1</td>
                                    <td>Titre</td>
                                    <td>Ronas</td>
                                    <td><a href="" class="edit">edit</a></td>
                                    <td><a href="" class="delete">delete</a></td>  
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Titre</td>
                                    <td>Ronas</td>
                                    <td><a href="" class="edit">edit</a></td>
                                    <td><a href="" class="delete">delete</a></td>  
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Titre</td>
                                    <td>Ronas</td>
                                    <td><a href="" class="edit">edit</a></td>
                                    <td><a href="" class="delete">delete</a></td>  
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    <div class="footer">
        <div class="footer-content">
    
          <div class="footer-section about">
            <h1 class="logo-text"><span>Ron</span>asdev</h1>
            <p>
              Ronasdev est un petit  blog conçu pour un objectif de tutoriel sur Youtube.
              Cependant un autre vrai blog est en cours de réalisation pour mes amis.
               </p>
            <div class="contact">
              <span><i class="fas fa-phone"></i> &nbsp; (+229) 60 93 48 17</span>
              <span><i class="fas fa-envelope"></i> &nbsp; ronasdev@gmail.com</span>
            </div>
            <div class="socials">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
    
          <div class="footer-section links">
            <h2>Liens rapides</h2>
            <br>
            <ul>
              <a href="#">
                <li>Evènements</li>
              </a>
              <a href="#">
                <li>Equipe</li>
              </a>
              <a href="#">
                <li>Mentoring</li>
              </a>
              <a href="#">
                <li>Gallerie</li>
              </a>
              <a href="#">
                <li>Termes et conditions</li>
              </a>
            </ul>
          </div>
    
          <div class="footer-section contact-form">
            <h2>Contacter nous</h2>
            <br>
            <form action="index.html" method="post">
              <input type="email" name="email" class="text-input contact-input" placeholder="Votre addresse e-mail...">
              <textarea rows="4" name="message" class="text-input contact-input" placeholder="Votre message..."></textarea>
              <button type="submit" class="btn btn-big contact-btn">
                <i class="fas fa-envelope"></i>
               Envoyer
              </button>
            </form>
          </div>
    
        </div>
    
        <div class="footer-bottom">
          &copy; ronasdev.com| Conçu par Robert
        </div>
      </div>


    </body>

</html>