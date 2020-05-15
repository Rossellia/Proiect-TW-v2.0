<?php
session_start();
require '../DB/db.php';

$event = '';

 if(isset($_POST["to_tips"]))
{   
    $event = $_POST["event"];

}
else
{
    $event = $_SESSION["event"];
}

$age=$_SESSION["age_category"];
$data = '';



?>