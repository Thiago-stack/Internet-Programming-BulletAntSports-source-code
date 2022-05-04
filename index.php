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

    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="./javascript/index.js"></script>

    <title>Bullet Ant Sports</title>

  </head>
  <body>
    <header class="header">
      <div class="brand-box" align="right">
        <img class="brand" src="./images/logoOnly.png" width="150px" height="auto"/>
      </div>
  
      <div class="text-box">
        <h1 class="heading-primary">
        <span class="heading-primary-main">Bullet Ant Sports</span>
        <span class="heading-primary-sub">Home of the Fish Strikes</span>
      </h1>
        <a href="./products.php" class="btn btn-white btn-animated">Shop Fishing Gear Now</a>
      </div>
      <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="./aboutUs.php">About Us</a>
        <a href="./help.php">How to Use</a>
        <a href="./loginForm.php">Login</a>
      </div>

      <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776;</button>
      </div>
    </header>

    <div class="box-banner" align="center">
    <img src="./images/3packfishstrike.jpg" width="700" height="550" id="rotatingBanner"/>
    </div>

    <div class="box" style="background-color: #ABB2B9">
        <center>
          <img src="./images/logo1t.png" width="200px" height="auto"/>
          <h1>About Us</h1>
          <p>
            Still on the fence about our product? Go to our about us page and check out who we are and how we got here! 
          </p>

         <button class="button button1" id="1" onclick="redirect(this)">About Us</button>
          
        </center>
    </div>
    <div class="box" style="background-color: #ABB2B9">
        <center>
          
          <h1>How-to-Use</h1>
          <p>
            Need help using our product? Don't worry about it, just follow the three simple set up steps and get to fishing! If you're still unsure how to use it, please don't hesitate to fill out our help form.
            We make it our priority to respond whenever possible.
          </p>

          <button class="button button1" id="2" onclick="redirect(this)">Let Us Help You</button>
          
        </center>
    </div>
    



<script type="text/javascript">
function redirect(button) 
{
  var x = button.id;
  switch (x) 
  {
    case '1':
        window.location.href = "./aboutUs.php";
        break;
    case '2':
        window.location.href = "./help.php";
        break;
    case '3':
        window.location.href = "./loginForm.php";
        break;
    default:
        return false;
  }
}
</script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

