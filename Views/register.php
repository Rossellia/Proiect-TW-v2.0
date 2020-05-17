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
    //  unset($_COOKIE['username']);
    //  setcookie('username', '', time() - 3600);?>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="../JSs/login.js"></script>
  </head>
  <body>
    <nav class="topnav" id="myTopnav">
        <b>Register - GoMaR</b>
        <a class="active" href="register.php">Register</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </nav>

      <main>
        <h1>Having a fancy dinner? <br> Don't know what to do and what not?</h1>
        <h2>Let's get you started!</h2>
        <!-- <h3> <?php 
                if($ok===0) {
                  print_r($errors);
                }
                ?> </h3> -->
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