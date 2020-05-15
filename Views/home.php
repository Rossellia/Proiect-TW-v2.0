<?php 
 require '../PHPs/homeController.php';


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

        <link rel="stylesheet" type="text/css" href="../CSSs/home.css">
        <title>Home</title>
    <body>
        <nav class="topnav" id="myTopnav">
            <b>GoMaR</b>
            <!-- <a href="../Pages/Support.html">Support</a>
            <a href="../Pages/Archiver_page.html">Archiver</a>   -->
            <a class="active" href="login.php">Logout</a>  <!--Pagina pe care se afla User ul in mod curent-->
              <i class="fa fa-bars"></i>
          </nav>
        
          <div class="list">



            <div class="Users">
                
                <p><?php //header('Content-type: application/xml'); Nu pot pune xml deoarece am si parte de html
                echo "<rss version='2.0' xmlns:atom='http://www.w3.org/2005/Atom'>\n";
                echo "<channel>\n";
                echo "<title>RSS Top USERS</title>\n";
                echo "<description>List of Top Users</description>\n";
                echo "<link>GoMaR</link>\n";
                ?></p>
                <ul class="right">
                    <li><?php  echo "<item>\n"; echo  "<title> Religious Gathering </title>"; echo  "<description> Religious Gathering </description>";?>: <?php echo "<link>$max_rg</link>"; echo "</item>\n";?></li>
                    <li><?php  echo "<item>\n"; echo  "<title> Restaurant Meeting </title>"; echo  "<description> Restaurant Meeting </description>";?>: <?php echo "<link>$max_rm</link>"; echo "</item>\n";?></li>
                    <li><?php  echo "<item>\n"; echo  "<title> Office Meeting </title>"; echo  "<description> Office Meeting </description>";?>: <?php echo "<link>$max_om</link>"; echo "</item>\n";?></li>
                    <li><?php  echo "<item>\n"; echo  "<title> Wedding </title>"; echo  "<description> Wedding </description>";?>: <?php echo "<link>$max_w</link>"; echo "</item>\n";?></li>
                    <li><?php  echo "<item>\n"; echo  "<title> Informal Meeting </title>"; echo  "<description> Informal Meeting </description>";?>: <?php echo "<link>$max_im</link>"; echo "</item>\n";?></li>
                    <li><?php  echo "<item>\n"; echo  "<title> Academic Meeting </title>"; echo  "<description> Academic Meeting </description>";?>: <?php echo "<link>$max_am</link>"; echo "</item>\n";?></li> 
                    <li><?php  echo "<item>\n"; echo  "<title> Family Gathering </title>"; echo  "<description> Family Gathering </description>";?>: <?php echo "<link>$max_fg</link>"; echo "</item>\n";?></li> 
                    <li><?php  echo "<item>\n"; echo  "<title> Online Meeting </title>"; echo  "<description> Online Meeting </description>";?>: <?php echo "<link>$max_online</link>"; echo "</item>\n";?></li>
                    <li><?php  echo "<item>\n"; echo  "<title> Video Game Events </title>"; echo  "<description> Video Game Events </description>";?>: <?php echo "<link>$max_vge</link>"; echo "</item>\n";?></li>
                    <li><?php  echo "<item>\n"; echo  "<title> Game Events </title>"; echo  "<description> Game Events </description>";?>: <?php echo "<link>$max_ge</link>"; echo "</item>\n";?></li>
                    <li><?php  echo "<item>\n"; echo  "<title> Sports Events </title>"; echo  "<description> Sports Events </description>";?>: <?php echo "<link>$max_se</link>"; echo "</item>\n";?></li>
                </ul>
                <?php echo "</channel>\n";
                    echo "</rss>\n";
                ?>
            </div>




            <div class="Scores" >
                <p>Your scores</p>
                <ul class="left">
                    <li>Religious Gathering: <?php echo ($user_rg);?></li>
                    <li>Restaurant Meeting: <?php echo ($user_rm);?></li>
                    <li>Office Meeting: <?php echo ($user_om);?></li>
                    <li>Wedding: <?php echo ($user_w);?></li>
                    <li>Informal Meeting: <?php echo ($user_im);?></li>
                    <li>Academic Meeting: <?php echo ($user_am);?></li> 
                    <li>Family Gathering: <?php echo ($user_fg);?></li> 
                    <li>Online Meeting: <?php echo ($user_online);?></li>
                    <li>Video Game Events: <?php echo ($user_vge);?></li>
                    <li>Game Events: <?php echo ($user_ge);?></li>
                    <li>Sports Events: <?php echo ($user_se);?></li>
                </ul>
            </div>



          
        </div>
    
    <div class="formchoose">
    <form action="test.php" method="POST">
        <div>
            <p class="info">Please tell us what kind of events you want to attend to give you a test</p>
            <p class="choose">
            <label class="container">Religious Gathering
            <input type="radio" id="Religious_Gathering" name="event" value="Religious Gathering">
            <span class="radiobtn"></span>
            </label>

            <label class="container">Restaurant Meeting
            <input type="radio" id="Restaurant_Meeting" name="event" value="Restaurant Meeting">
            <span class="radiobtn"></span>
            </label>

            <label class="container">Office Meeting
            <input type="radio" id="Office_Meeting" name="event" value="Office Meeting">
            <span class="radiobtn"></span>
            </label>

            <label class="container">Wedding
            <input type="radio" id="Wedding" name="event" value="Wedding">
            <span class="radiobtn"></span>
            </label>

            <label class="container">Informal Meeting
            <input type="radio" id="Informal_Meeting" name="event" value="Informal Meeting">
            <span class="radiobtn"></span>                    
            </label>
            
            <label class="container">Academic Meeting
            <input type="radio" id="Academic_Meeting" name="event" value="Academic Meeting">
            <span class="radiobtn"></span>
            </label>

            <label class="container">Family Gathering
            <input type="radio" id="Family_Gathering" name="event" value="Family Gathering">
            <span class="radiobtn"></span>
            </label>

            <label class="container">Online Meeting 
            <input type="radio" id="Online_Meeting" name="event" value="Online Meeting">
            <span class="radiobtn"></span>
            </label>

            <label class="container">Video Game Events
            <input type="radio" id="Video_Game_Events" name="event" value="Video Game Events">
            <span class="radiobtn"></span>
            </label>

            <label class="container">Game Events
            <input type="radio" id="Game_Events" name="event" value="Game Events">
            <span class="radiobtn"></span>
            </label>

            <label class="container">Sports Events
            <input type="radio" id="Sports_Events" name="event" value="Sports Events">
            <span class="radiobtn"></span>
            </label>
        </p>
    </div>
    <div>
        <input type="submit" value="Submit"  name="to_test" class="form-submit-button">
    </div>
    </form>
</div>


<div class="formchoose">
    <form action="tips.php" method="POST">
        <div>
            <p class="info">Please tell us what kind of events you want to attend to give you some tips</p>
            <p class="choose">
            <label class="container">Religious Gathering
            <input type="radio" id="Religious_Gathering" name="event" value="Religious Gathering">
            <span class="radiobtn"></span>
            </label>

            <label class="container">Restaurant Meeting
            <input type="radio" id="Restaurant_Meeting" name="event" value="Restaurant Meeting">
            <span class="radiobtn"></span>
            </label>

            <label class="container">Office Meeting
            <input type="radio" id="Office_Meeting" name="event" value="Office Meeting">
            <span class="radiobtn"></span>
            </label>

            <label class="container">Wedding
            <input type="radio" id="Wedding" name="event" value="Wedding">
            <span class="radiobtn"></span>
            </label>

            <label class="container">Informal Meeting
            <input type="radio" id="Informal_Meeting" name="event" value="Informal Meeting">
            <span class="radiobtn"></span>                    
            </label>
            
            <label class="container">Academic Meeting
            <input type="radio" id="Academic_Meeting" name="event" value="Academic Meeting">
            <span class="radiobtn"></span>
            </label>

            <label class="container">Family Gathering
            <input type="radio" id="Family_Gathering" name="event" value="Family Gathering">
            <span class="radiobtn"></span>
            </label>

            <label class="container">Online Meeting 
            <input type="radio" id="Online_Meeting" name="event" value="Online Meeting">
            <span class="radiobtn"></span>
            </label>

            <label class="container">Video Game Events
            <input type="radio" id="Video_Game_Events" name="event" value="Video Game Events">
            <span class="radiobtn"></span>
            </label>

            <label class="container">Game Events
            <input type="radio" id="Game_Events" name="event" value="Game Events">
            <span class="radiobtn"></span>
            </label>

            <label class="container">Sports Events
            <input type="radio" id="Sports_Events" name="event" value="Sports Events">
            <span class="radiobtn"></span>
            </label>
        </p>
    </div>
    <div>
        <input type="submit" value="Submit"  name="to_tips" class="form-submit-button">
    </div>
    </form>
</div>


     


<div class="formchoose">
<?php
    if(isset($_SESSION['c1']))
    {
        echo("<br>");
        echo ("Correct answer 1:");
        echo ($_SESSION['c1']);
        echo("<br>");
       
    }
    if(isset($_SESSION['c2']))
    {
        echo ("Correct answer 2:");
        echo ($_SESSION['c2']); 
        echo("<br>");      
    }
    if(isset($_SESSION['c3']) )
    {
        echo ("Correct answer 3:");
        echo ($_SESSION['c3']);
        echo("<br>");      
    }
    if(isset($_SESSION['c4']))
    {
        echo ("Correct answer 4:");
        echo ($_SESSION['c4']);
        echo("<br>");
        echo("<br>");
    }


?>
</div>





    </body>
</html>