<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../CSSs/login.css">
    <title>Log in - GoMaR</title>
    <?php include '../PHPs/loginController.php';
    if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
      header('Location: home.php');
    };
    if(!isset($_SESSION['age_category']) && isset($_SESSION['username'])) {
      header('Location: initial_category.php');
    }
    // unset all cookies
  //   if (isset($_SERVER['HTTP_COOKIE'])) {
  //     $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
  //     foreach($cookies as $cookie) {
  //         $parts = explode('=', $cookie);
  //         $name = trim($parts[0]);
  //         setcookie($name, '', time()-3600);
  //         setcookie($name, '', time()-3600, '/');
  //     }
  // }
  // else {
  
    
  // }
    ?>

    <script src="../JSs/login.js"></script>
  </head>
  <body>
    <nav class="topnav" id="myTopnav">
        <b>GoMaR</b>
        <a class="active" href="login.php">Log in</a>  <!--Pagina pe care se afla userul in mod curent-->
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </nav>

      <main>
        <h1>Having a fancy dinner? <br> Don't know what to do and what not?</h1>
        <h2>We help! Log in, good manners are on the way.</h2>
        <form action="home.php" method="POST">
          <p>Username*<br>
          <input type="text" name="username" ></p>
          <br>
          <p>Password*<br>
          <input type="password" name="password" ></p>
          <br><br>
          <input  id="button1" type="submit" value="Login" name="login" formaction="home.php">
          <br><br>
        </form>
        <h3>Don't have an account? Register now!</h3>
        <a href ='register.php ' class="registerButton">Register</a>
      </main>
  </body>

  