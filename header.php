<?php
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="nav.js"></script>
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <title>The Banana Tree</title>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </head>
  <body>
  <!--Beginning of NavBar-->
 <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">The Banana Tree</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shop.php">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="member.php">Membership</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="recipe.php">Recipes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="order.php">Ordering</a>
        </li>
    </div>
  </div>
  <?php
    if (isset($_SESSION['userId'])) {
      echo '<form action="includes/logout.inc.php" method="post">
      <button tpye="submit" name="logout-submit">Logout</button>
      </form>';
    }
    else {
      echo '<form action="includes/login.inc.php" method="post">
      <input type="text" name="mailuid" placeholder="E-mail/Username">
      <input type="password" name="pwd" placeholder="Password">
      <button tpye="submit" name="login-submit">Login</button>
      </form>
      <a href="signup.php">SignUp</a>';  
    }
  ?>

</nav>
<!--End of Nav Bar-->