<?php
error_reporting('E_NOTICE');
session_start();
require '../DB/db.php';

    // unset all cookies
    // if (isset($_SERVER['HTTP_COOKIE'])) {
    //     $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    //     foreach($cookies as $cookie) {
    //         $parts = explode('=', $cookie);
    //         $name = trim($parts[0]);
    //         setcookie($name, '', time()-3600);
    //         setcookie($name, '', time()-3600, '/');
    //     }
    // }
    
    if ( isset( $_POST['login'] ) ) {
        $username    = $_POST['username'];
        $password = $_POST['password'];
        $errors   = array();
        
        if ( empty($username) || empty($password)) {
            if ( empty( $username ) ) {
                $errors[] = "Username is required at login";
            
            }
            if ( empty( $password ) ) {
                $errors[] = "Password is required at login";
            }
        }
        else if ( !empty( $username ) && !empty($password)) {
            $usernameQuery = "SELECT * FROM users WHERE username = ? LIMIT 1";
            $stmt2=$conn->prepare($usernameQuery);
            $stmt2->bind_param('s',$username);
            $stmt2->execute();

            $result2=$stmt2->get_result();
            $userCount2=$result2->num_rows;
            if($userCount2==0) {
                $errors['username2']="Incorrect username";
            }
            else {
                $usernameQuery = "SELECT * FROM users WHERE username = ? LIMIT 1";
                $stmt2=$conn->prepare($usernameQuery);
                $stmt2->bind_param('s',$username);
                $stmt2->execute();
                $res3 = $stmt2->store_result();
                $stmt2->bind_result($id, $usrname, $email, $correctPassword, $age_category, $token);
                while( $stmt2->fetch()) {
                    $verify = password_verify($password, $correctPassword);
                }
                $stmt2->free_result();
                if (password_verify($password, $correctPassword) != 1) {
                    $errors['password'] = "Incorrect password";
                }
            }
            $stmt2->close();
        }
       

        if ( count( $errors ) == 0 ) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            // setcookie( 'username', $username, time() + 3600, '/' );
            // setcookie( 'password', $password, time() + 3600, '/' );
            $query = "SELECT * FROM users WHERE username = ? LIMIT 1";
            $stmt3=$conn->prepare($query);
            $stmt3->bind_param('s',$username);
            $stmt3->execute();
            $res4 = $stmt3->store_result();
            $stmt3->bind_result($id2, $usrname2, $email2, $correctPassword2, $age_category2, $token2);
            while( $stmt3->fetch()) {
                if ($age_category == "") {
                    header('Location: initial_category.php');
                }
                else {
                    $_SESSION['age_category'] = $age_category;
                    // setcookie( 'age_category', $age_category, time() + 3600, '/' );
                }
            }
            $stmt3->free_result();
        }
        else {
            print_r($errors);
        }
    }
?>