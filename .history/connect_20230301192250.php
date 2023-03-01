  <?php 
  require_once 'refactoring.php';?>

  <?php 



  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  <title>login form</title>
</head>

<body>
<?php include './inc/header.php'; ?>
  <form action="index.php" method="POST">
    <section class="vh-100" style="background-color:white;">
      <div class="container py-4 h-100">
        <div class="row d-flex justify-content-center align-items-center h-80">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">
                <h3 class="mb-5">Sign in</h3>
                <div class="form-outline mb-4">
                  <input type="name" required="required" id="name" class="form-control form-control-lg" name="name"
                    placeholder="enter your name" />
                  <label class="form-label" for="typeEmailX-2"></label>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="password"
                    placeholder="enter your password" />
                  <label class="form-label" for="typePasswordX-2"></label>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="valider">Login</button>
              </div>
            </div>
          </div>
        </div>
      </div>
  </form>
</body>

</html>