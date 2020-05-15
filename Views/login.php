<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../CSSs/login.css">
    <title>Log in - GoMaR</title>
    <!-- <?php include '../PHPs/login.php' ?> -->

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="../JSs/login.js"></script>
  </head>
  <body>
    <nav class="topnav" id="myTopnav">
        <b>GoMaR</b>
        <!-- <a href="../Pages/Support.html">Support</a>
        <a href="../Pages/Archiver_page.html">Archiver</a>   -->
        <a class="active" href="HTMLs/login.html">Home</a>  <!--Pagina pe care se afla userul in mod curent-->
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
          <!-- <input id="button2" type="submit" formaction="login_admin.html" value="Admin login"> -->
        </form>
        <h3>Don't have an account? Register now!</h3>
        <a href ='register.php ' class="registerButton">Register</a>
      </main>
  </body>

  