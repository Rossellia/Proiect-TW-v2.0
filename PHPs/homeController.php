<?php
    error_reporting('E_NOTICE');
    session_start();
    require '../DB/db.php';
    // require '../PHPs/initial_testController.php';

    $age_category = '';
    $event_category='';
    $username='';
    $a1i=0;
    $a2i=0;
    $a3i=0;
    $a4i=0;
    $count1=0;
    $count2=0;
    $count3=0;
    $count4=0;
    $initial_score=0;
    $score=0;
    $haveScore=0;

    $user_rg = 0;
    $username = $_SESSION["username"];
    $userquery="SELECT score FROM scores where username='$username' and event_category='Religious Gathering'";
    $result = $conn->query($userquery);
    $num_rows = $result->num_rows;
    if($num_rows >0) {
        $row = $result->fetch_assoc();
        $user_rg = $row["score"];
    }
    $user_rm = 0;
    $userquery = "SELECT score FROM scores where username='$username' and event_category='Restaurant Meeting'";
    $result = $conn->query($userquery);
    $num_rows = $result->num_rows;
    if($num_rows >0){
        $row = $result->fetch_assoc();
        $user_rm = $row["score"];
    }
    $user_om = 0;
    $userquery="SELECT score FROM scores where username='$username' and event_category='Office Meeting'";
    $result = $conn->query($userquery);
    $num_rows = $result->num_rows;
    if($num_rows >0) {
        $row = $result->fetch_assoc();
        $user_om = $row["score"];
    }
    $user_w = 0;
    $userquery="SELECT score FROM scores where username='$username' and event_category='Wedding'";
    $result = $conn->query($userquery);
    $num_rows = $result->num_rows;
    if($num_rows >0) {
        $row = $result->fetch_assoc();
        $user_w = $row["score"];
    }
    $user_im = 0;
    $userquery="SELECT score FROM scores where username='$username' and event_category='Informal Meeting'";
    $result = $conn->query($userquery);
    $num_rows = $result->num_rows;
    if($num_rows >0) {
        $row = $result->fetch_assoc();
        $user_im = $row["score"];
    }
    $user_am = 0;
    $userquery="SELECT score FROM scores where username='$username' and event_category='Academic Meeting'";
    $result = $conn->query($userquery);
    $num_rows = $result->num_rows;
    if($num_rows >0) {
        $row = $result->fetch_assoc();
        $user_am = $row["score"];
    }
    $user_fg = 0;
    $userquery="SELECT score FROM scores where username='$username' and event_category='Family Gathering'";
    $result = $conn->query($userquery);
    $num_rows = $result->num_rows;
    if($num_rows >0) {
        $row = $result->fetch_assoc();
        $user_fg = $row["score"];
    }
    $user_online = 0;
    $userquery="SELECT score FROM scores where username='$username' and event_category='Online Meeting'";
    $result = $conn->query($userquery);
    $num_rows = $result->num_rows;
    if($num_rows >0) {
        $row = $result->fetch_assoc();
        $user_online = $row["score"];
    }
    $user_vge = 0;
    $userquery="SELECT score FROM scores where username='$username' and event_category='Video Game Events'";
    $result = $conn->query($userquery);
    $num_rows = $result->num_rows;
    if($num_rows >0) {
        $row = $result->fetch_assoc();
        $user_vge = $row["score"];
    }
    $user_ge = 0;
    $userquery="SELECT score FROM scores where username='$username' and event_category='Game Events'";
    $result = $conn->query($userquery);
    $num_rows = $result->num_rows;
    if($num_rows >0) {
        $row = $result->fetch_assoc();
        $user_ge = $row["score"];
    }
    $user_se = 0;
    $userquery="SELECT score FROM scores where username='$username' and event_category='Sports Events'";
    $result = $conn->query($userquery);
    $num_rows = $result->num_rows;
    if($num_rows >0) {
        $row = $result->fetch_assoc();
        $user_se = $row["score"];
    }


    $max_rg = 0;
    $age_category = $_SESSION["age_category"];
    $maxquery="SELECT username FROM scores where age_category = '$age_category' and event_category='Religious Gathering' order by score desc";
    $resultmax = $conn->query($maxquery);
    $num_rows = $resultmax->num_rows;

    if($num_rows > 0) {
        $row = $result->fetch_assoc();
         $max_rg = $row["username"];
    }
    else
        $max_rg = $username;


    $max_rm = 0;
    $age_category = $_SESSION["age_category"];
    $userquery="SELECT username  FROM scores where age_category = '$age_category' and event_category='Restaurant Meeting' order by score desc";
    $result = $conn->query($userquery);
    $num_rows = $result->num_rows;
    if($num_rows >0) {
        $row = $result->fetch_assoc();
        $max_rm = $row["username"];
    }
    else
        $max_rm = $username;

    $max_om = 0;
    $age_category = $_SESSION["age_category"];
    $userquery="SELECT username FROM scores where age_category = '$age_category' and event_category='Office Meeting' order by score desc";
    $result = $conn->query($userquery);
    $num_rows = $result->num_rows;
    if($num_rows >0) {
        $row = $result->fetch_assoc();
        $max_om = $row["username"];
    }
    else
        $max_om = $username;

    $max_w = 0;
    $age_category = $_SESSION["age_category"];
    $userquery="SELECT username FROM scores where age_category = '$age_category' and event_category='Wedding' order by score desc";
    $result = $conn->query($userquery);
    $num_rows = $result->num_rows;
    if($num_rows >0) {
        $row = $result->fetch_assoc();
        $max_w = $row["username"];
    }
    else
        $max_w = $username;

    $max_im = 0;
    $age_category = $_SESSION["age_category"];
    $userquery="SELECT username FROM scores where age_category = '$age_category' and event_category='Informal Meeting' order by score desc";
    $result = $conn->query($userquery);
    $num_rows = $result->num_rows;
    if($num_rows >0) {
        $row = $result->fetch_assoc();
        $max_im = $row["username"];
    }
    else
        $max_im = $username;

    $max_am = 0;
    $age_category = $_SESSION["age_category"];
    $userquery="SELECT username FROM scores where age_category = '$age_category' and event_category='Academic Meeting' order by score desc";
    $result = $conn->query($userquery);
    $num_rows = $result->num_rows;
    if($num_rows >0) {
        $row = $result->fetch_assoc();
        $max_am = $row["username"];
    }
    else
        $max_am = $username;


    $max_fg = 0;
    $age_category = $_SESSION["age_category"];
    $userquery="SELECT username FROM scores where age_category = '$age_category' and event_category='Family Gathering' order by score desc";
    $result = $conn->query($userquery);
    $num_rows = $result->num_rows;
    if($num_rows >0) {
        $row = $result->fetch_assoc();
        $max_fg = $row["username"];
    }
    else
        $max_fg = $username;


    $max_online = 0;
    $age_category = $_SESSION["age_category"];
    $userquery="SELECT username FROM scores where age_category = '$age_category' and event_category='Online Meeting' order by score desc";
    $result = $conn->query($userquery);
    $num_rows = $result->num_rows;
    if($num_rows >0) {
        $row = $result->fetch_assoc();
        $max_online = $row["username"];
    }
    else
        $max_online = $username;


    $max_vge = 0;
    $age_category = $_SESSION["age_category"];
    $userquery="SELECT username FROM scores where age_category = '$age_category' and event_category='Video Game Events' order by score desc";
    $result = $conn->query($userquery);
    $num_rows = $result->num_rows;
    if($num_rows >0) {
        $row = $result->fetch_assoc();
        $max_vge = $row["username"];
    }
    else
        $max_vge = $username;

    $max_ge = 0;
    $age_category = $_SESSION["age_category"];
    $userquery="SELECT username FROM scores where age_category = '$age_category' and event_category='Game Events' order by score desc";
    $result = $conn->query($userquery);
    $num_rows = $result->num_rows;
    if($num_rows >0) {
        $row = $result->fetch_assoc();
        $max_ge = $row["username"];
    }
    else
        $max_ge = $username;


    $max_se = 0;
    $age_category = $_SESSION["age_category"];
    $userquery="SELECT username FROM scores where age_category = '$age_category' and event_category='Sports Events' group by age_category, event_category, id_score";
    $result = $conn->query($userquery);
    $num_rows = $result->num_rows;
    if($num_rows >0) {
        $row = $result->fetch_assoc();
        $max_se = $row["username"];
    }
    else
        $max_se = $username;


    //tocmai am facut testul initial
    if(isset($_POST["initial_test_result"])) {
        if(isset($_SESSION["age_category"]))
            $age_category = $_SESSION["age_category"];
        if(isset($_SESSION["event_category"]))
            $event_category = $_SESSION["event_category"];
        if(isset($_SESSION['initial_score']))
            $initial_score = $_SESSION['initial_score'];
        if(isset($_SESSION["username"]))
            $username = $_SESSION["username"];
    
        if(!empty($_POST["answer1"]))
            foreach($_POST["answer1"] as $selected) {
                $count1 = $count1 +1;
                $a1i=(int)$selected;
            }
        if(!empty($_POST["answer2"]))
            foreach($_POST["answer2"] as $selected) {
                $count2 = $count2 +1;
                $a2i=(int)$selected;
            }
        
        if(!empty($_POST["answer3"]))
            foreach($_POST["answer3"] as $selected) {
                $count3 = $count3 +1;
                $a3i=(int)$selected;
            }
        
        if(!empty($_POST["answer4"]))
            foreach($_POST["answer4"] as $selected) {
                $count4 = $count4+1;
                $a4i=(int)$selected;
            }
        
        if(isset($_SESSION['c1']) && $count1 == 1)
            if($_SESSION['c1'] == $a1i)
                $initial_score = $initial_score + 2;
        
        if(isset($_SESSION['c2']) && $count2 == 1)
            if($_SESSION['c2'] == $a2i)
                $initial_score = $initial_score + 2;

        if(isset($_SESSION['c3']) && $count3 == 1)
            if($_SESSION['c3'] == $a3i)
                $initial_score = $initial_score + 2;
    
        if(isset($_SESSION['c4']) && $count4 == 1)
            if($_SESSION['c4'] == $a4i)
                $initial_score = $initial_score + 2;

        $scores="INSERT INTO scores (username,event_category, age_category, score) VALUES(?,?,?,?)";
        $stmt=$conn->prepare($scores);
        $stmt->bind_param('ssss',$username,$event_category,$age_category,$initial_score); 
        $stmt->execute();  
    }

    if(isset($_POST["test_result"]))
    {
        if(isset($_SESSION["age_category"]))
            $age_category = $_SESSION["age_category"];
        if(isset($_SESSION["event_category"]))
            $event_category = $_SESSION["event_category"];
        if(isset($_SESSION['score'])) {
            $score = $_SESSION['score'];
            $haveScore = 1;
        }
        if(isset($_SESSION["username"]))
            $username = $_SESSION["username"];
    
        if(!empty($_POST["answer1"]))
            foreach($_POST["answer1"] as $selected) {
                $count1 = $count1 +1;
                $a1i=(int)$selected;
            }

        if(!empty($_POST["answer2"]))
            foreach($_POST["answer2"] as $selected) {
                $count2 = $count2 +1;
                $a2i=(int)$selected;
            }
        
        if(!empty($_POST["answer3"]))
            foreach($_POST["answer3"] as $selected) {
                $count3 = $count3 +1;
                $a3i=(int)$selected;
            }
        if(!empty($_POST["answer4"]))
            foreach($_POST["answer4"] as $selected) {
                $count4 = $count4+1;
                $a4i=(int)$selected;
            }
        if(isset($_SESSION['c1']) && $count1 == 1)
            if($_SESSION['c1'] == $a1i)
                $score = $score + 2;
        if(isset($_SESSION['c2']) && $count2 == 1)
            if($_SESSION['c2'] == $a2i)
                $score = $score + 2;
        if(isset($_SESSION['c3']) && $count3 == 1)
            if($_SESSION['c3'] == $a3i)
                $score = $score + 2;
        if(isset($_SESSION['c4']) && $count4 == 1)
            if($_SESSION['c4'] == $a4i)
                $score = $score + 2;

        if($haveScore == 0) {
            $scores="INSERT INTO scores (username,event_category, age_category, score) VALUES(?,?,?,?)";
            $stmt=$conn->prepare($scores);
            $stmt->bind_param('ssss',$username,$event_category,$age_category,$score); 
            $stmt->execute();
        }
        else {
            $updateagequery = "UPDATE scores SET score = '$score' WHERE username = '$username'; ";
            $stmt=$conn->prepare($updateagequery);
            $stmt->execute();   
        }  
    }
?>