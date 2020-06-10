<?php
session_start();
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','gomar');
$servername = DB_HOST;
$username = DB_USER;
$password = DB_PASS;
$dbname = DB_NAME;
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
    die('Database error:' . $conn->connect_error);
}

if(isset($_POST["Import"])){
    
    $filename=$_FILES["file"]["tmp_name"];    
     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
          while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
           {
             $sql = "INSERT into scores (id_score,username, event_category, age_category, score) 
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."')";
                   $result = $conn->query($sql);
                   if(!isset($result))
                   {
                     echo "<script type=\"text/javascript\">
                         alert(\"Invalid File:Please Upload CSV File.\");
                         window.location = \"../Views/CSV.php\";
                         </script>";    
                        //  header("Location: ../Views/CSV.php");
                   }
                   else {
                       echo "<script type=\"text/javascript\">
                       alert(\"CSV File has been successfully Imported.\");
                       window.location = \"../Views/CSV.php\";
                     </script>";
                    //  header("Location: ../Views/CSV.php");

                   }
                      }
           
      
           fclose($file);  
     }
    }
 

function get_all_records(){
    global $conn;
    $Sql = "SELECT * FROM scores";
    $result = $conn->query($Sql); 
    if (mysqli_num_rows($result) > 0) {
     echo "<div class='formchoose' style ='background-repeat: inherit;display: block;text-align: center;position: relative;'>
     <table>
             <thead><tr>
                          <th>Id_score</th>
                          <th>Username</th>
                          <th>Event Category</th>
                          <th>Age Category</th>
                          <th>Score</th>
                        </tr></thead><tbody>";
     while($row = mysqli_fetch_assoc($result)) {
         echo "<tr><td>" . $row['id_score']."</td>
                   <td>" . $row['username']."</td>
                   <td>" . $row['event_category']."</td>
                   <td>" . $row['age_category']."</td>
                   <td>" . $row['score']."</td></tr>";        
     }
    
     echo "</tbody></table></div>";
     
} else {
     echo "you have no records";
}
}

if(isset($_POST["Export"])){
    global $conn;
    header('Content-Type: text/csv; charset=utf-8');  
    header('Content-Disposition: attachment; filename=data.csv');  
    $output = fopen("php://output", "w");  
    fputcsv($output, array('ID_Score', 'UserName', 'Event Category', 'Age Category', 'Score'));  
    $query = "SELECT * from scores ORDER BY id_score DESC";  
    $result = $conn->query($query);  
    while($row = mysqli_fetch_assoc($result))  
    {  
         fputcsv($output, $row);  
    }  
    fclose($output); 
    // header("Location: ../Views/CSV.php"); 
}  

?>