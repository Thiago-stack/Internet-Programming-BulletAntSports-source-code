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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- These 3 links are the font for the header-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <!-- This is for the icons in the navbar-->
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" type="text/css" href="./css/product.css">
    

    <title>Our Gear</title>
  </head>
  <body class="grad">
    
    
    <header class="topLine">
      <div class="brand-box">
        <img class="brand" src="./images/logo1t.png" width="200px" height="auto"/>
      </div>
      <div class="text-box">
        <h1 class="heading-primary">
        <span class="heading-primary-main">BULLET ANT SPORTS</span>
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
        <?php
        if(!isset($_SESSION['name']))
          echo "<a href=\"./loginForm.php\"><span class=\"material-symbols-outlined\">login</span>Login</a>";
        else
          echo "<a href=\"./logout.php\"><span class=\"material-symbols-outlined\">login</span>Logout</a>";
        ?>
    </div>
    
    <div class="container">
      
      <h3 class="title"> Our Fishing Gear</h3>

      <div class="product-container">

        <div class="product" data-name="p-1">
          <img src="./images/3packfishstrike.jpg" height="220" width="250">
          <h3>Fish Strikes</h3>
          <div class="price">$24.99</div>
        </div>

        <div class="product" data-name="p-2">
          <img src="./images/fishingLine.jpg">
          <h3>Premium Line</h3>
          <div class="price">$9.99</div>
        </div>

        <div class="product" data-name="p-3">
          <img src="./images/fishingBait.jpg">
          <h3>Pack of Bait</h3>
          <div class="price">$14.99</div>
        </div>
      
      </div>
    

    </div>


    <div class="product-preview">

      <div class="preview" data-target="p-1">
        <i class="fas fa-times"></i>
        <img src="./images/3packfishstrike.jpg" height="220" width="250">
        <h3>Fish Strikes</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fa-regular fa-star"></i>
          <span>( 26 )</span>
        </div>
        <p>The innovation behind Fish Strike allows you to release line tension during a strike to keep the fish on longer. The fish will not feel like it's hooked because there is no resistance on the line. The reduction in line tension also prevents rods from being pulled into the water by a fish during a strike!</p>
        <div class="price">$24.99</div>
        <div class="buttons">
          <a href="https://www.amazon.com/Bullet-Sports-Strike-Indicator-Fishing/dp/B08B1F2BJC/ref=sr_1_3?keywords=Bullet+Ant+Sports&qid=1651625456&sr=8-3" target="_blank">Buy Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-2">
        <i class="fas fa-times"></i>
        <img src="./images/fishingLine.jpg">
        <h3>Premium Line</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 537 )</span>
        </div>
        <p>Our premium line is an excellent all-purpose line that combines incredible handling with exceptional strength for trouble-free fishing. This line is rated from 4 to 30 lbs!</p>
        <div class="price">$9.99</div>
        <div class="buttons">
          <a href="https://www.amazon.com/Calamus-Bastion-Monofilament-Fishing-Line/dp/B094FSKH9M/ref=sr_1_88?crid=3K9WXTGZXNKKQ&keywords=fishing%2Bline&qid=1651626234&rnid=2569813011&s=hunting-fishing&sprefix=fishin%2Caps%2C123&sr=1-88&th=1" target="_blank">Buy Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-3">
        <i class="fas fa-times"></i>
        <img src="./images/fishingBait.jpg">
        <h3>Pack of Bait</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fa-regular fa-star"></i>
          <span>( 73 )</span>
        </div>
        <p>These fishing lures have different proven fish catching colors, gloss shine scale pattern and 3D eyes make the fishing lures more lifelike. Comes in a pack of 10 and some of the target species consist of: Bass, Trout, Perch, and Northern Pike</p>
        <div class="price">$14.99</div>
        <div class="buttons">
          <a href="https://www.amazon.com/Fishing-Lures-Crankbait-Set-Artificial/dp/B07Y326XNX?th=1" target="_blank">Buy Now</a>
        </div>
      </div>

    </div>


    <script src="./javascript/product.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
