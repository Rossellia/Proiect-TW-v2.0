<?php 
 require '../PHPs/testController.php';
 require '../PHPs/adminController.php';
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
            <!-- <button class="tablinks">Delete/Modify users</button>
            <button class="tablinks">Add/Delete questions</button> -->
          </div>

          <div id="Upload" class="tabcontent">
            <input class="searchbar" type="text" placeholder="Search user.." name="search">




          </div>

          <div id="Format" class="tabcontent2">
            <form action="../PHPs/adminController.php" method='POST'>
              <table>
                <tr>
                  <th>Delete</th>
                  <th>Question</th>
                  <th>Event</th>
                  <th>Test level</th>
                </tr>
                  <?php 
                    require '../DB/db.php'; 
                    $qQuery = "SELECT id_question, question, answer_1, answer_2, answer_3, answer_4, 
                    right_answer, event_category, test_level from tests";

                    $stmt2=$conn->prepare($qQuery);
                    $stmt2->execute();
                    $res3 = $stmt2->store_result();
                    $stmt2->bind_result($id, $question,
                        $answer_1, $answer_2, $answer_3, $answer_4,
                        $right_answer, $event_category, $test_level);
                      while( $stmt2->fetch()) {
                        echo "<tr>
                                <td>" . "<input type=\"checkbox\" name=\"" .  $id . "\" value=\"" . $id . "\"></td>" .
                                "<td>" . $question . "</td>" .
                                "<td>" . $event_category . "</td>" .
                                "<td>" . $test_level . "</td>
                            </tr>";
                      }
                      $stmt2->free_result();
                      $stmt2->close();
                      // $conn->close();
                  ?>
              </table>
              <input type="submit" name="intrebari" value="Submit" formaction="admin_page2.php">
            </form>
          </div>
          <!-- <h1 class="welcometext">Choose an action from up above.</h1> -->
        </div>
      </div>
    </main>
  </body>