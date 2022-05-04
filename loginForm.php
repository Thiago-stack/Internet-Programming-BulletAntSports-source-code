<?php 
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">

    <title>Login</title>
  </head>
  <body>

    <div class="container">
          <form class="form" action="./loginHandler.php" id="login" method="POST">
             <h1 class="form__title">Login</h1>
             <div class="form__message form__message--error"></div>
             <div class="form__input-group">
               <input type="text" id="loginEmail" name="loginEmail" class="form__input" autofocus placeholder="Email">
             </div>
             <div class="form__input-group">
               <input type="password" id="loginPassword" name="loginPassword" class="form__input" autofocus placeholder="Password">
             </div>
             <button class="form__button" type="submit">Continue</button>
             <p class="form__text">
                <a href="#" class="form__link">Forgot your password?</a>
             </p>
             <p class="form__text">
                <a id="linkCreateAccount" class="form__link">Don't have an account? Create one now!</a>
             </p>
          </form>
          <form class="form form--hidden" action="./signUpHandler.php" id="createAccount" method="POST">
             <h1 class="form__title">Create Account</h1>
             <div class="form__message form__message--error"></div>
             <div class="form__input-group">
               <input type="text" id="signUpName" name="signUpName" class="form__input" autofocus placeholder="Name">
             </div>
             <div class="form__input-group">
               <input type="text" id="signUpEmail" name="signUpEmail" class="form__input" autofocus placeholder="Email">
             </div>
             <div class="form__input-group">
               <input type="password" id="signUpPassword" name="signUpPassword" class="form__input" autofocus placeholder="Password">
             </div>
             <button class="form__button" type="submit">Continue</button>
             <p class="form__text">
                <a class="form__link" id="linkLogin">Already have an account? Sign in.</a>
             </p>
          </form>
    </div>


    <script src="./javascript/login.js"></script> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>