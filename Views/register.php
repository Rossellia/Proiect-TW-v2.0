<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../CSSs/register.css ">
    <title>Register - GoMaR</title>
    <?php 
    include '../PHPs/categoryController.php';
    ?>
    <script src="../JSs/login.js"></script>
  </head>
  <body>
    <nav class="topnav" id="myTopnav">
        <b>GoMaR</b>
        <a class="active" href="register.php">Register</a>
      </nav>

      <main>
        <h1>Having a fancy dinner? <br> Don't know what to do and what not?</h1>
        <h2>Let's get you started!</h2>
        <form action="initial_category.php" method="POST">
            <p>Choose a username:<br>
            <input type="text" name="username"></p>
            <br>
            <p>Choose a password:<br>
            <input type="password" name="password"></p>
            <p>Email adress:<br>
            <input type="text" name="email"></p>
            <input  id="button1" type="submit" value="Register" name="register" formaction="initial_category.php">
            <br><br>
        </form>
      </main>
  </body>