<?php
require_once 'refactoring.php';

if (isset($_POST['register'])) {


if (isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2'])) {
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $role = "user";
    if ($password === $password2 && strlen($password) >= 6 && preg_match("/[a-z][0-9]/", $password)) {
        $pass = password_hash($_POST['password'], PASSWORD_ARGON2ID);
        register($prenom, $pass, $email, $role);
       
        exit();
    }
} 
    
 

}




?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form action="inscription" method="POST">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="text" required="required" name="name"
                        placeholder="enter a username"></div>
                <div class="form-group">
                    <input class="form-control" type="email" required="required" name="email"
                        placeholder="enter your email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" required="required" name="password" id="pass"
                        placeholder="Password">
                    <div class="image">
                        <img src="images/red.png" style="width:30px" id="eye" onClick="changer()" />
                    </div>
                </div>
                <div class="form-group"><input class="form-control" type="password" required="required" name="password2"
                        placeholder="Confirmer votre mot de passe"></div>

                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="register">Sign
                        Up</button></div><a href="" class="already">You already have an account?
                    Login here.</a>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<style>
    .register-photo {
        background: white;
        padding: 80px 0;
    }

    .register-photo .image-holder {
        display: table-cell;
        width: auto;
        background-image: url("./../images/gettyimages-1264170591-612x612.jpeg");

    }

    .register-photo .form-container {
        display: table;
        max-width: 900px;
        width: 120;
        margin: 0 auto;
        box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
    }

    .register-photo form {
        display: table-cell;
        width: 400px;
        background-color: #ffffff;
        padding: 40px 60px;
        color: #505e6c;
    }

    @media (max-width:991px) {
        .register-photo form {
            padding: 40px;
        }
    }

    .register-photo form h2 {
        font-size: 24px;
        line-height: 1.5;
        margin-bottom: 30px;
    }

    .register-photo form .form-control {
        background: #f7f9fc;
        border: none;
        border-bottom: 1px solid #dfe7f1;
        border-radius: 0;
        box-shadow: none;
        outline: none;
        color: inherit;
        text-indent: 6px;
        height: 40px;
    }

    .register-photo form .form-check {
        font-size: 13px;
        line-height: 20px;
    }

    .register-photo form .btn-primary {
        background: #f4476b;
        border: none;
        border-radius: 4px;
        padding: 11px;
        box-shadow: none;
        margin-top: 35px;
        text-shadow: none;
        outline: none !important;
    }

    .register-photo form .btn-primary:hover,
    .register-photo form .btn-primary:active {
        background: #eb3b60;
    }

    .register-photo form .btn-primary:active {
        transform: translateY(1px);
    }

    .register-photo form .already {
        display: block;
        text-align: center;
        font-size: 12px;
        color: #6f7a85;
        opacity: 0.9;
        text-decoration: none;
    }

    .image {
        float: right;

    }
</style>