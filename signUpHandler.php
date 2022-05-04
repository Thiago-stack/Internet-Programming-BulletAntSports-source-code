<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <title>SignUp</title>
  </head>
  <body>
    <header class="topLine">
      <div class="brand-box">
        <img class="brand" src="./images/logo1t.png" width="200px" height="auto"/>
      </div>
      <div class="text-box">
        <h1 class="heading-primary">
        <span class="heading-primary-main">Bullet Ant Sports</span>
      </h1>
      </div>
      <!--
      <div class="login-box">
        <a href="./loginForm.php">Login</a>
      </div>
    -->
    </header>
    <div class="navbar">
        <a href="./index.php"><span class="material-symbols-outlined">home</span>Home</a>
        <a class="active" href="./products.php"><span class="material-symbols-outlined">sailing</span>Fishing Gear</a>
        <a href="./aboutUs.php"><span class="material-symbols-outlined">group</span>About Us</a>
        <a href="./help.php"><span class="material-symbols-outlined">help</span>How-to-Use</a>
        <a href="./loginForm.php"><span class="material-symbols-outlined">login</span>Login</a>
    </div>
    <?php
    $email = $_POST["signUpEmail"];
    $pwd = $_POST["signUpPassword"];
    $name = $_POST["signUpName"];
    
    require_once 'connection.php';
    $conn= connect_db();

    $query= "INSERT INTO users(UserID, Name, Password, Email) VALUES (DEFAULT,\"$name\",SHA1(\"$pwd\"), \"$email\")";
    $result= $conn->query($query);
    if(!$result) die("Fatal error on query");

    if($result)
    {
      echo "Thanks for creating an account! You will be redirected to login page.";
    }
    else
    {
      echo "Account creation failed. Try Again";
    }
   header('refresh:3; url=loginForm.php');

    $conn->close();
    ?> 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>
  </body>
</html>