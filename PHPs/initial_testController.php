<?php
error_reporting('E_NOTICE');
session_start();
require '../DB/db.php';

$initial_score = 0; 


if(isset($_POST["age"]))
 {
  $age_category = $_POST["age"];
  $_SESSION["age_category"] = $_POST["age"];
 } 
 if(isset($_POST["event"]))
 {
    $_SESSION["event_category"] = $_POST["event"];
 }
 
 if(!empty($_POST["social"]))
 {
    foreach($_POST["social"] as $selected)
    {
        $initial_score = $initial_score +1;
    }
 }



if (isset($_POST['age']) && isset($_SESSION['username']))
{
$username = $_SESSION["username"];
$updateagequery = "UPDATE users SET age_category = '$age_category' WHERE username = '$username'; ";
$stmt=$conn->prepare($updateagequery);
$stmt->execute();   
}


if($initial_score>0)
{
    $_SESSION['initial_score'] = $initial_score;
}

$eventlevel='';
$event_category='';
$username='';



 $answer_11='';
 $answer_21='';
 $answer_31='';
 $answer_41='';
 $question1='';

 $answer_12='';
 $answer_22='';
 $answer_32='';
 $answer_42='';
 $question2='';

 $answer_13='';
 $answer_23='';
 $answer_33='';
 $answer_43='';
 $question3='';

 $answer_14='';
 $answer_24='';
 $answer_34='';
 $answer_44='';
 $question4='';


 $correct1='';
 $correct2='';
 $correct3='';
 $correct4='';


 $answer1='';
 $answer2='';
 $answer3='';
 $answer4='';


 $countright=0;

 $radioVal1 = "";
 $radioVal2 = "";
 $radioVal3 = "";
 $radioVal4 = "";



 if(isset($_SESSION["event_category"]))
 {
    $event_category=$_SESSION["event_category"];    
 }


$questionQuery="SELECT * FROM tests where event_category= '$event_category'  and  test_level = '0' ";
$result = $conn->query($questionQuery);
$count=$result->num_rows;


$chosen=array();
$index=0;
while($index<$count)
{
  array_push($chosen,0);
  $index=$index+1;
}


if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
if($chosen[0]===0)
{
$question1=$row['question'];
$answer_11=$row['answer_1'];
$answer_21=$row['answer_2'];
$answer_31=$row['answer_3'];
$answer_41=$row['answer_4'];
$correct1=$row['right_answer'];
$_SESSION['c1'] = $correct1;
$chosen[0]=1;
}
elseif($chosen[1]===0)
{
$question2=$row['question'];
$answer_12=$row['answer_1'];
$answer_22=$row['answer_2'];
$answer_32=$row['answer_3'];
$answer_42=$row['answer_4'];
$correct2=$row['right_answer'];
$_SESSION['c2'] = $correct2;
$chosen[1]=1;
}
elseif($chosen[2]===0)
{
$question3=$row['question'];
$answer_13=$row['answer_1'];
$answer_23=$row['answer_2'];
$answer_33=$row['answer_3'];
$answer_43=$row['answer_4'];
$correct3=$row['right_answer'];
$_SESSION['c3'] = $correct3;
$chosen[2]=1;
}
elseif($chosen[3]===0)
{
$question4=$row['question'];
$answer_14=$row['answer_1'];
$answer_24=$row['answer_2'];
$answer_34=$row['answer_3'];
$answer_44=$row['answer_4'];
$correct4=$row['right_answer'];
$_SESSION['c4'] = $correct4;
$chosen[3]=1;
}

}
}


// $initial_score = 0; 


// if(isset($_POST["age"]))
//  {
//   $age_category = $_POST["age"];
//   setcookie( 'age_category', $age_category, time() + 3600, '/' );
// //   $_COOKIE["age_category"] = $_POST["age"];
//  } 
//  if(isset($_POST["event"]))
//  {
//   $event_category = $_POST["event"];
//    setcookie( 'event_category', $event_category, time() + 3600, '/' );
//  }
 
//  if(!empty($_POST["social"]))
//  {
//     foreach($_POST["social"] as $selected)
//     {
//         $initial_score = $initial_score +1;
//     }
//  }



// if (isset($_POST['age']) && isset($_COOKIE['username']))
// {
// $username = $_COOKIE["username"];
// $updateagequery = "UPDATE users SET age_category = '$age_category' WHERE username = '$username'; ";
// $stmt=$conn->prepare($updateagequery);
// $stmt->execute();   
// }


// if($initial_score>0)
// {
//    setcookie( 'initial_score', $initial_score, time() + 3600, '/' );
//    // $_COOKIE['initial_score'] = $initial_score;
// }

// $eventlevel='';
// $event_category='';
// $username='';



//  $answer_11='';
//  $answer_21='';
//  $answer_31='';
//  $answer_41='';
//  $question1='';

//  $answer_12='';
//  $answer_22='';
//  $answer_32='';
//  $answer_42='';
//  $question2='';

//  $answer_13='';
//  $answer_23='';
//  $answer_33='';
//  $answer_43='';
//  $question3='';

//  $answer_14='';
//  $answer_24='';
//  $answer_34='';
//  $answer_44='';
//  $question4='';


//  $correct1='';
//  $correct2='';
//  $correct3='';
//  $correct4='';


//  $answer1='';
//  $answer2='';
//  $answer3='';
//  $answer4='';


//  $countright=0;

//  $radioVal1 = "";
//  $radioVal2 = "";
//  $radioVal3 = "";
//  $radioVal4 = "";



//  if(isset($_COOKIE["event_category"]))
//  {
//    $event_category=$_COOKIE["event_category"];    
//  }


// $questionQuery="SELECT * FROM tests where event_category= '$event_category'  and  test_level = '0' ";
// $result = $conn->query($questionQuery);
// $count=$result->num_rows;


// $chosen=array();
// $index=0;
// while($index<$count)
// {
//   array_push($chosen,0);
//   $index=$index+1;
// }


// if ($result->num_rows > 0) {
// while($row = $result->fetch_assoc()) {
// if($chosen[0]===0)
// {
// $question1=$row['question'];
// $answer_11=$row['answer_1'];
// $answer_21=$row['answer_2'];
// $answer_31=$row['answer_3'];
// $answer_41=$row['answer_4'];
// $correct1=$row['right_answer'];
// setcookie( 'c1', $correct1, time() + 3600, '/' );
// // $_COOKIE['c1'] = $correct1;
// $chosen[0]=1;
// }
// elseif($chosen[1]===0)
// {
// $question2=$row['question'];
// $answer_12=$row['answer_1'];
// $answer_22=$row['answer_2'];
// $answer_32=$row['answer_3'];
// $answer_42=$row['answer_4'];
// $correct2=$row['right_answer'];
// setcookie( 'c2', $correct2, time() + 3600, '/' );
// // $_COOKIE['c2'] = $correct2;
// $chosen[1]=1;
// }
// elseif($chosen[2]===0)
// {
// $question3=$row['question'];
// $answer_13=$row['answer_1'];
// $answer_23=$row['answer_2'];
// $answer_33=$row['answer_3'];
// $answer_43=$row['answer_4'];
// $correct3=$row['right_answer'];
// setcookie( 'c3', $correct3, time() + 3600, '/' );
// // $_COOKIE['c3'] = $correct3;
// $chosen[2]=1;
// }
// elseif($chosen[3]===0)
// {
// $question4=$row['question'];
// $answer_14=$row['answer_1'];
// $answer_24=$row['answer_2'];
// $answer_34=$row['answer_3'];
// $answer_44=$row['answer_4'];
// $correct4=$row['right_answer'];
// setcookie( 'c4', $correct4, time() + 3600, '/' );
// // $_COOKIE['c4'] = $correct4;
// $chosen[3]=1;
// }

// }
// }



?>


 