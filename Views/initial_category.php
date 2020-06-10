<?php 
 require '../PHPs/categoryController.php';
 require '../PHPs/initial_testController.php';
 if(count($errors)!=0) {
    $ok=0;
    header('Location: register.php');
 }

 if (isset($_SESSION['age_category'])) {
    header('Location: home.php');
}
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

        <link rel="stylesheet" type="text/css" href="../CSSs/initial_category.css">

        <title>First focus</title>
    </head> 

    <body>
    <nav class="topnav" id="myTopnav">
            <b>Pick what's suitable for you - GoMaR</b>
            <a class="active" href="../PHPs/logoutController.php">Log out</a>  <!--Pagina pe care se afla User ul in mod curent-->
              <i class="fa fa-bars"></i>
          </nav>
          
          <div class="list">
        <h1>Choose your category</h1>
        <form  action="initial_test.php" method="post">
        <div>
            <p class="info">Please tell us your age category</p>
            <p class="choose">

                <label class="container">Child
                <input type="radio" id="child" name="age" value="child">
                <span class="radiobtn"></span>
                </label>
                

                <label class="container">Teen
                <input type="radio" id="teen" name="age" value="teen">
                <span class="radiobtn"></span>
                </label>
  

                <label class="container">Young Adult
                <input type="radio" id="young_adult" name="age" value="young adult">
                <span class="radiobtn"></span>
                </label>


                <label class="container">Adult
                <input type="radio" id="adult" name="age" value="adult">
                <span class="radiobtn"></span>
                </label>


                <label class="container">Senior
                <input type="radio" id="senior" name="age" value="senior">
                <span class="radiobtn"></span>
                </label>


            </p>

        </div>
        <div>
            <p class="info">Please tell us what kind of events you want to attend</p>
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
            <p class="info" id="ss1">Please tell us what social status describes you best.</p>
            <p class="info" id="ss2"> You can choose more than one.</p>
            <p class="choose">

                <label class="container">Leadership
                <input type="checkbox" id="Leaderhip" name="social[]" value="Leadership">
                <span class="checkmark"></span>
                </label>

                <label class="container">Wealth
                <input type="checkbox" id="Wealth" name="social[]" value="Wealth">
                <span class="checkmark"></span>
                </label>

                <label class="container">Fame
                <input type="checkbox" id="Fame" name="social[]" value="Fame">
                <span class="checkmark"></span>
                </label>

                <label class="container">Intelligence
                <input type="checkbox" id="Intelligence" name="social[]" value="Intelligence">
                <span class="checkmark"></span>
                </label>

                <label class="container">Social Skills
                <input type="checkbox" id="Social_Skills" name="social[]" value="Social Skills">
                <span class="checkmark"></span>
                </label>

                <label class="container">Coolness
                <input type="checkbox" id="Coolness" name="social[]" value="Coolness">
                <span class="checkmark"></span>
                </label>

                <label class="container">Altruism
                <input type="checkbox" id="Altruism" name="social[]" value="Altruism">
                <span class="checkmark"></span>
                </label>

            </p>
        </div>
        <div>
            <input type="submit" value="Submit" name="Result" class="form-submit-button">
        </div>
        </form>
    </body>
</html>
