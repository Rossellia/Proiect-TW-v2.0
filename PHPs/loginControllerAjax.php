<?php
    error_reporting('E_NOTICE');
    session_start();
    require '../DB/db.php';

    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $ok = true;
    $messages = array();

    if(!isset($username) || empty($username)) {
        $ok = false;
        $messages[] = 'Username cannot be empty!';
    }

    if(!isset($password) || empty($password)) {
        $ok = false;
        $messages[] = 'Password cannot be empty!';
    }

    if($ok) {
        if(!empty($username) && !empty($password)) {
            $usernameQuery = "SELECT * FROM users WHERE username = ? LIMIT 1";
            $stmt2=$conn->prepare($usernameQuery);
            $stmt2->bind_param('s',$username);
            $stmt2->execute();

            $result2=$stmt2->get_result();
            $userCount2=$result2->num_rows;
            if($userCount2==0)
                $messages[]="Incorrect username";
            else {
                $usernameQuery = "SELECT * FROM users WHERE username = ? LIMIT 1";
                $stmt2=$conn->prepare($usernameQuery);
                $stmt2->bind_param('s',$username);
                $stmt2->execute();
                $res3 = $stmt2->store_result();
                $stmt2->bind_result($id, $usrname, $email, $correctPassword, $age_category, $token);
                while( $stmt2->fetch())
                    $verify = password_verify($password, $correctPassword);
                $stmt2->free_result();
                if (password_verify($password, $correctPassword) != 1)
                    $messages[] = "Incorrect password";
                else {
                    $ok=true;
                    $messages[] = 'Login successful';
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
                    $query = "SELECT * FROM users WHERE username = ? LIMIT 1";
                    $stmt3=$conn->prepare($query);
                    $stmt3->bind_param('s',$username);
                    $stmt3->execute();
                    $res4 = $stmt3->store_result();
                    $stmt3->bind_result($id2, $usrname2, $email2, $correctPassword2, $age_category2, $token2);
                    while( $stmt3->fetch()) {
                        if ($age_category == "")
                            header('Location: initial_category.php');
                        else
                            $_SESSION['age_category'] = $age_category;
                    }
                    $stmt3->free_result();
                }
            }
            $stmt2->close();
        }
    }
    echo json_encode(
        array(
            'ok' => $ok,
            'messages' => $messages
        )
    );
?>