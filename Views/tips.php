<?php 
    require '../PHPs/tipsController.php';
    if(isset($_POST["to_tips"]))   
        if (!isset($_POST["event"]))
            header("Location: home.php");
        elseif(!isset($_SESSION["event_category"]))
            header("Location: home.php");
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="An Online Teacher for Good Manners">
        <meta name="keywords" content="HTML,CSS,manners">
        <meta name="author" content="Bucnaru Raluca, Hlusneac Maria">
        <meta name="author" content="Image taken From FreePik">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../CSSs/tips.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="../JSs/login.js"></script>
        <title>Tips - GoMaR</title>

    <body>
        <nav class="topnav" id="myTopnav">  
            <b>GoMaR</b>
            <a href="../PHPs/logoutController.php">Log out</a>
            <a href="home.php">Home</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </nav>
        <div class="formchoose">
            <p> <?php  echo $tips;  ?> </p>
        </div>
    </body>

</html>