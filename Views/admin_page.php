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
    <meta name="author" content="Image taken from Freepik">
    <link rel="stylesheet" type="text/css" href="../CSSs/admin_page.css ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin - GoMaR</title>
    <script src="../JSs/login.js"></script>
  </head>
  <body>
    <nav class="topnav" id="myTopnav">
      <b>GoMaR</b>
      <a href="../PHPs/logoutController.php">Log out</a> 
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
            <form id="formSearch" action="../PHPs/adminController.php" method='POST'>
              <input class="searchbar" type="text" placeholder="Search user.." name="search">
              <input class="adminButtons" type="submit" name="searchU" value="Search" formaction="admin_page.php">
              <?php
                require '../DB/db.php';

                // search user
                if(isset($_POST['searchU'])) {
                  if(!empty($_POST['search'])) {
                    $username = $_POST['search'];
                    setcookie('username', $username, time() + 3600, '/' );
                    $userQuery = "SELECT username from users WHERE username=? LIMIT 1";
                    $stmt=$conn->prepare($userQuery);
                    $stmt->bind_param('s',$username);
                    $stmt->execute();
                    $result=$stmt->get_result();
                    $userCount=$result->num_rows;
                    $stmt->close();
                    if($userCount>0)  
                      echo '
                      <p>Modify ' . $username. '\'s info</p>
                      <br>
                      <form action="../PHPs/adminController.php" method=\'POST\'>
                        <p class="textAdd">New password</p>
                        <input class="userModify" type="text" name="userPass">
                        <p class="textAdd">New email adress</p>
                        <input class="userModify" type="text" name="userEmail">
                        <br><br>
                        <input class="adminButtons" type="submit" name="modifyUser" value="Modify" formaction="admin_page.php">
                        <input class="adminButtons" type="submit" name="deleteUser" value="Delete user" formaction="admin_page.php">
                      </form>';     
                    else
                      echo '<p>No user with this username found.</p>';
                  }
                }

                if(isset($_POST['modifyUser'])) {
                  if(!empty($_POST['userPass']) && !empty($_POST['userEmail'])) {
                    $pass=$_POST['userPass'];
                    $email=$_POST['userEmail'];
                    echo $pass;
                    echo $email;
                    $updateQuery = "UPDATE users SET password=?, email=? WHERE username=?";
                    $stmt2=$conn->prepare($updateQuery);
                    $username=$_COOKIE['username'];
                    // echo $username;
                    $stmt2->bind_param('sss',$pass,$email,$username);
                    $stmt2->execute();
                    if($stmt2->error)
                      echo '<p>Password or email could not be modified.</p>';
                    else
                      echo '<p>Password and email modified!</p>';
                    $stmt2->close();
                  }
      
                  else {
                    if(isset($_POST['userEmail']) && !empty($_POST['userEmail']) && empty($_POST['userPass'])) {
                      $email=$_POST['userEmail'];
                      $updateQuery = "UPDATE users SET email=? WHERE username=?";
                      $stmt2=$conn->prepare($updateQuery);
                      $username=$_COOKIE['username'];
                      // echo $username;
                      $stmt2->bind_param('ss',$email,$username);
                      $stmt2->execute();
                      if($stmt2->error)
                        echo '<p>Email could not be modified.</p>';
                      else
                        echo '<p>Email modified!</p>';
                      $stmt2->close();
                    }
                    else if(isset($_POST['userPass']) && !empty($_POST['userPass']) && empty($_POST['userEmail'])) {
                      $pass=$_POST['userPass'];
                      $updateQuery = "UPDATE users SET password=? WHERE username=?";
                      $stmt2=$conn->prepare($updateQuery);
                      $username=$_COOKIE['username'];
                      // echo $username;
                      $stmt2->bind_param('ss',$pass,$username);
                      $stmt2->execute();
                      if($stmt2->error)
                        echo '<p>Password could not be modified.</p>';
                      else
                        echo '<p>Password modified!</p>';
                      $stmt2->close();
                    }
                  }
                }
                if(isset($_POST['deleteUser'])) {
                  $username=$_COOKIE['username'];
                  $sql2 = "DELETE FROM users WHERE username='" . $username . "'";
                  // echo $sql2;
                  if(mysqli_query($conn, $sql2))
                    echo '<p>User ' . $username . ' deleted.</p>';
                }
              ?>
          </div>

          <div id="Format" class="tabcontent">
            <form action="../PHPs/adminController.php" method='POST'>
            <div class="table">
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
                  while( $stmt2->fetch())
                    echo "<tr>
                             <td>" . "<input type=\"checkbox\" name=\"" .  $id . "\" value=\"" . $id . "\"></td>" .
                            "<td>" . $question . "</td>" .
                            "<td>" . $event_category . "</td>" .
                            "<td>" . $test_level . "</td>
                          </tr>";
                  $stmt2->free_result();
                  $stmt2->close();
                ?>
              </table>
              </div>
              <input class="adminButtons" type="submit" name="deleteQ" value="Delete" formaction="admin_page.php">
            </form>
            <form id="formAdd" action="../PHPs/adminController.php" method='POST'>
              <p class="textAdd">Question</p>
              <input class="inputAdd" type="text" name="question">
              <p class="textAdd">Answer 1</p>
              <input class="inputAdd" type="text" name="answer1">
              <p class="textAdd">Answer 2</p>
              <input class="inputAdd" type="text" name="answer2">
              <p class="textAdd">Answer 3</p>
              <input class="inputAdd" type="text" name="answer3">
              <p class="textAdd">Answer 4</p>
              <input class="inputAdd" type="text" name="answer4">
              <p class="textAdd">Correct answer</p>
              <input class="inputAdd" type="number" name="correctAnswer">
              <p class="textAdd">Event category</p>
              <input class="inputAdd" type="text" name="eventCategory">
              <p class="textAdd">Test level</p>
              <input class="inputAdd" type="number" name="testLevel">
              <input class="adminButtons" id="buttonAdd" type="submit" name="addQ" value="Add" formaction="admin_page.php">
            </form>
          </div>
          <h1 class="welcometext">Choose an action from up above.</h1>
        </div>
      </div>
    </main>
  </body>