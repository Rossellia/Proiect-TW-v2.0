<?php
error_reporting('E_NOTICE');
session_start();
require '../DB/db.php';

$event = '';

 if(isset($_POST["to_tips"]))
{   
    $event = $_POST["event"];

}
else
{
    $event = $_SESSION["event_category"];
}

$age=$_SESSION["age_category"];
$tips = '';


$tipsQuery="SELECT * FROM tips where event_category= '$event'  and  age_category = '$age' ";
$result = $conn->query($tipsQuery);
$row = $result->fetch_assoc();
$tips = $row["data"];


// $event = '';

//  if(isset($_POST["to_tips"]))
// {   
//     $event = $_POST["event"];

// }
// else
// {
//     $event = $_COOKIE["event_category"];
// }

// $age=$_COOKIE["age_category"];
// $tips = '';


// $tipsQuery="SELECT * FROM tips where event_category= '$event'  and  age_category = '$age' ";
// $result = $conn->query($tipsQuery);
// $row = $result->fetch_assoc();
// $tips = $row["data"];


?>