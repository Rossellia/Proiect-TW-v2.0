<?php 
 require '../PHPs/initial_testController.php';


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="An Online Teacher for Good Manners">
        <meta name="keywords" content="HTML,CSS,manners">
        <meta name="author" content="Bucnaru Raluca, Hlusneac Maria">
        <meta name="author" content="https://wallup.net/forest-camping-starry-night-trees-milky-way-long-exposure-lights-universe-space-nature-landscape/ -form image">
        <meta name="author" content="Clark Young -background image">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="../CSSs/initial_test.css">

        <title>Initial Testing</title>
    </head>
    <body>
        <h1>Here is your first test!</h1>
        <form action="home.php" method="post">
        <div class="row">
        <div class="column">

            <p class="info" ><?php echo($question1);?></p>
            <div class="answer_test">
                <label class="container"><?php echo($answer_11);?>
                    <input type="checkbox" id="a1" name="answer1[]" value="1">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="answer_test">
                <label class="container"><?php echo($answer_21);?>
                    <input type="checkbox" id="a2" name="answer1[]" value="2">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="answer_test">
                <label class="container"><?php echo($answer_31);?>
                    <input type="checkbox" id="a3" name="answer1[]" value="3">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="answer_test">
                <label class="container"><?php echo($answer_41);?>
                    <input type="checkbox" id="a4" name="answer1[]" value="4">
                    <span class="checkmark"></span>
                </label>
            </div>
    </div>

    <div class="column">
        <p class="info" ><?php echo($question2);?></p>
        <div class="answer_test">
            <label class="container"><?php echo($answer_12);?>
                <input type="checkbox" id="a5" name="answer2[]" value="1">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="answer_test">
            <label class="container"><?php echo($answer_22);?>
                <input type="checkbox" id="a6" name="answer2[]" value="2">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="answer_test">
            <label class="container"><?php echo($answer_32);?>
                <input type="checkbox" id="a7" name="answer2[]" value="3">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="answer_test">
            <label class="container"><?php echo($answer_42);?>
                <input type="checkbox" id="a8" name="answer2[]" value="4">
                <span class="checkmark"></span>
            </label>
        </div>
    </div>


    <div class="column">
            <p class="info" ><?php echo($question3);?></p>
            <div class="answer_test">
                <label class="container"><?php echo($answer_13);?>
                    <input type="checkbox" id="a9" name="answer3[]" value="1">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="answer_test">
                <label class="container"><?php echo($answer_23);?>
                    <input type="checkbox" id="a10" name="answer3[]" value="2">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="answer_test">
                <label class="container"><?php echo($answer_33);?>
                    <input type="checkbox" id="a11" name="answer3[]" value="3">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="answer_test">
                <label class="container"><?php echo($answer_43);?>
                    <input type="checkbox" id="a12" name="answer3[]" value="4">
                    <span class="checkmark"></span>
                </label>
            </div>
    </div>

    <div class="column">
        <p class="info" ><?php echo($question4);?></p>
        <div class="answer_test">
            <label class="container"><?php echo($answer_14);?>
                <input type="checkbox" id="a13" name="answer4[]" value="1">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="answer_test">
            <label class="container"><?php echo($answer_24);?>
                <input type="checkbox" id="a14" name="answer4[]" value="2">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="answer_test">
            <label class="container"><?php echo($answer_34);?>
                <input type="checkbox" id="a15" name="answer4[]" value="3">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="answer_test">
            <label class="container"><?php echo($answer_44);?>
                <input type="checkbox" id="a16" name="answer4[]" value="4">
                <span class="checkmark"></span>
            </label>
        </div>
    </div>

    </div>

    <div>
        <input type="submit" value="Submit" name="initial_test_result" class="form-submit-button">
    </div>

    </form>



    </body>



</html>
