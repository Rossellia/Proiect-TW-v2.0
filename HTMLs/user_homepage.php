<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../CSSs/login.css">
    <title>Log in - GoMaR</title>
    <?php include '../PHPs/login.php';
    echo var_dump($_COOKIE); ?>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="../JSs/login.js"></script>
  </head>
  <body>
      <p>Hello, 
        <?php echo $_COOKIE['username'] . ' !';?>
      </p>
  </body>
</html>