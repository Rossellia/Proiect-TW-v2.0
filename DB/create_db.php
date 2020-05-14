<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gomar";


$conn1=new mysqli($servername, $username, $password);
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}
$sql1="CREATE DATABASE teach";
if ($conn1->query($sql1) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn1->error;
}

$conn1->close();


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE tests (
  id_question int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  question varchar(1000) NOT NULL,
  answer_1 varchar(1000) NOT NULL,
  answer_2 varchar(1000) NOT NULL,
  answer_3 varchar(1000) NOT NULL,
  right_answer varchar(1000) NOT NULL,
  event_category varchar(1000) NOT NULL,
  test_level varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";


if ($conn->query($sql) === TRUE) {
    echo "Table tests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
} 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql1 = "CREATE TABLE users (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    password varchar(100) NOT NULL,
    age_category varchar(1000) NOT NULL,
    token varchar(100) NOT NULL
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
  
  
  if ($conn->query($sql1) === TRUE) {
      echo "Table users created successfully";
  } else {
      echo "Error creating table: " . $conn->error;
  }

  $sql2 = "CREATE TABLE answered_questions (
    id_aq int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_user int(11) NOT NULL,
    id_question int(11) NOT NULL
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
  
  
  if ($conn->query($sql2) === TRUE) {
      echo "Table answered_questions created successfully";
  } else {
      echo "Error creating table: " . $conn->error;
  }

  $sql3 = "CREATE TABLE scores (
    id_score int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username int(11) NOT NULL,
    event_category varchar(1000) NOT NULL,
    age_category varchar(1000) NOT NULL,
    score int(11) NOT NULL
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
  
  
  if ($conn->query($sql3) === TRUE) {
      echo "Table scores created successfully";
  } else {
      echo "Error creating table: " . $conn->error;
  }

$conn->close();
?>
