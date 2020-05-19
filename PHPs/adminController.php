<?php
    require '../DB/db.php';


    // delete questions
    if(isset($_POST['deleteQ'])) {
        $qQuery2 = "SELECT id_question from tests order by id_question desc limit 1";
        $stmt2=$conn->prepare($qQuery2);
        $stmt2->execute();
        $res3 = $stmt2->store_result();
        $stmt2->bind_result($id);
        while( $stmt2->fetch()) {
            $nrMaxQuestions = $id;
        }
        $stmt2->free_result();
        $stmt2->close();

        for ($i = 1; $i <= $nrMaxQuestions; $i++) {
            if(isset($_POST[$i])) {
                $sql = "DELETE FROM tests WHERE id_question=" . $i;
                $conn->query($sql);
            }
        }
    }


    // add question
    if(isset($_POST['addQ'])) {
        $question = $_POST['question'];
        $answer1 = $_POST['answer1'];
        $answer2 = $_POST['answer2'];
        $answer3 = $_POST['answer3'];
        $answer4 = $_POST['answer4'];
        $correctAnswer = $_POST['correctAnswer'];
        $eventCategory = $_POST['eventCategory'];
        $testLevel = $_POST['testLevel'];
        $errors2 = array();

        if (($question!='') and ($answer1!='') and ($answer2!='') and ($answer3!='') and ($answer4!='') and
        ($correctAnswer!='') and ($eventCategory!='') and ($testLevel!='')) {
            echo 'lasa ma naibii';
            $sql="INSERT INTO tests (question,answer_1,answer_2,answer_3,answer_4,right_answer,event_category,
            test_level) VALUES(?,?,?,?,?,?,?,?)";
            $stmt=$conn->prepare($sql);
            $stmt->bind_param('ssssssss',$question,$answer1,$answer2,$answer3,$answer4,
                   $correctAnswer,$eventCategory,$testLevel);
            $stmt->execute();
        }
        else {
            echo 'lasa ma dreq';
        }

        // if($question!='')
        //  if($answer1!='')
        //   if($answer2!='')
        //    if($answer3!='')
        //     if($answer4!='')
        //      if($correctAnswer!='')
        //       if($eventCategory!='')
        //        if($testLevel!='') {
        //         $sql="INSERT INTO tests (question,answer_1,answer_2,answer_3,answer_4,right_answer,event_category,
        //         test_level) VALUES(?,?,?,?,?,?,?,?)";
        //         $stmt=$conn->prepare($sql);
        //         $stmt->bind_param('ssssssss',$question,$answer1,$answer2,$answer3,$answer4,
        //                $correctAnswer,$eventCategory,$testLevel);
        //         $stmt->execute();
        //        }
        //        else {
        //            echo 'nu merge';
        //        }


    }
?>