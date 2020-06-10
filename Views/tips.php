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
        <meta name="author" content="Image taken From PngFuel">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../CSSs/tips.css">
        <title>Tips - GoMaR</title>

    <body>
        <nav class="topnav" id="myTopnav">  
            <b>GoMaR</b>
            <a href="../PHPs/logoutController.php">Log out</a>
            <a href="home.php">Home</a>
            <i class="fa fa-bars"></i>
        </nav>
        <div class="formchoose">
            <p> <?php  echo $tips;  ?> </p>
        </div>
    </body>

</html>