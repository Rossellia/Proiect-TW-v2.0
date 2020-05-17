<?php 
 require '../PHPs/testController.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../CSSs/admin_page.css ">
    <title>Admin - GoMaR</title>
    <script src="../JSs/login.js"></script>
  </head>
  <body>
    <nav class="topnav" id="myTopnav">
        <b>GoMaR</b>
        <a href="login.php">Log out</a> 
        <a class="active" href="admin_page.php">Admin</a>  <!--Pagina pe care se afla userul in mod curent-->
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </nav>

      <main>
        <div class="pagebox">
            <div class="pageboxcontent">
                <div class="tab">
                    <button class="tablinks" onclick="openTab(event, 'Upload')">Delete/Modify users</button>
                    <button class="tablinks" onclick="openTab(event, 'Format')">Add/Delete questions</button>
                </div>

                <div id="Upload" class="tabcontent">
                  <input class="searchbar" type="text" placeholder="Search user.." name="search">




                </div>
        
                <div id="Format" class="tabcontent">
                    



                </div>
                <h1 class="welcometext">Choose an action from up above.</h1>

            </div>
        </div>
      </main>
  </body>