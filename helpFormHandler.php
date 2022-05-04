<?php
  if(!isset($_SESSION))
  {
    session_start();
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- These 3 links are the font for the header-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <!-- This is for the icons in the navbar-->
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <link rel="stylesheet" href="./css/styles.css">

    <title>About Us</title>
  </head>
  <body class="grad">
    
    
    <header class="topLine">
      <div class="brand-box">
        <img class="brand" src="./images/logo1t.png" width="200px" height="auto"/>
      </div>
      <div class="text-box">
        <h1 class="heading-primary">
        <span class="heading-primary-main">Bullet Ant Sports</span>
      </h1>
      </div>
     
    </header>
    <div class="navbar">
        <a href="./index.php"><span class="material-symbols-outlined">home</span>  Home</a>
        <a href="./products.php"><span class="material-symbols-outlined">sailing</span>  Fishing Gear</a>
        <a href="./aboutUs.php"><span class="material-symbols-outlined">group</span>  About Us</a>
        <a class="active" href="./help.php"><span class="material-symbols-outlined">help</span>  How-to-Use</a>
        <?php
          if(!isset($_SESSION['name']))
          echo  "<a href=\"./loginForm.php\"><span class=\"material-symbols-outlined\">login</span>  Login</a>";
          else
          echo  "<a href=\"./loginForm.php\"><span class=\"material-symbols-outlined\">login</span>  Logout</a>";
        ?>
    </div>
    
    <div class="box help">
      <div class="row">
        <div class="col-25">
          <img class="thumbnail imageHelp" src="./images/pic1.png" />
        </div>
        <div class="col-75">
          <p class="para1">
              1) Use the provided zip tie to secure the Fish Strike onto the rod. The zip ties can be removed and then reused at a later time. You can cut the excess zip tie off if 
              you would like to. Open the bail on the reel to allow for the fishing line to be free flowing. 
          </p>
        </div>
      </div>
    </div>

    <div class="box help">
      <div class="row">
        <div class="col-75">
          <p class="para2">
              2) Pass the line through the opening on the Fish Strike. Please ensure the bail of the reel is still open for this step.
          </p>
        </div>
        <div class="row-25">
          <img class="thumbnail2 imageHelp" src="./images/pic2.png" />
        </div>
      </div> 
    </div>

    <div class="box help">
      <div class="row">
        <div class="col-25">
          <img class="thumbnail imageHelp" src="./images/pic3.png" width="200px" height="auto"/>
        </div>
        <div class="col-75">
          <p class="para3">
              3) The knob on the side is adjustable depending on the thickness and sensitivity of the fishing line. The line will automatically
              peel out when the fish strikes and then will close the bail and hook the fish! 
          </p>
        </div>
      </div>    
    </div>
   
    <div class="box help">
        <center>
          <h1>Thank you for submitting your question!</h1>
          <h3>We will respond as soon as possible!</h3>

          
          </center>   
    </div>
    
    <?php
    require_once 'connection.php';

    
    $conn=connectDB();
    if($conn->connect_error)
    {
      die("Connection failed: " . $conn->connect_error);
    }

    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message= $_POST['message'];

    if(!empty($phone))
    {
        $query = "INSERT INTO 'help'('fullName', 'email','phone','message') 
                  VALUES ('$fullName', '$email', '$phone', '$message')";
    }
    else
    {
        $query = "INSERT INTO 'help'('fullName', 'email','phone','message') 
                  VALUES ('$fullName', '$email', 'N/A','$message')";
    }
    $conn->query($query);
    
    ?>
  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

