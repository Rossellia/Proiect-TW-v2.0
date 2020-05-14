<?php

    // require 'db.php';
    //     // session_start();
    //     // session_unset();
    //     // session_destroy();
    //     // session_write_close();
    //     // setcookie(session_name(),'',0,'/');
    //     // session_regenerate_id(true);
    // // $_SESSION["username"] = 'incercare';
    // //aici pui chestiile din register

    // // echo 'un cacat in ploaie 1';

    // // unset($_COOKIE['username']);
    // // setcookie('username', '', time() - 3600);

    // if ( isset( $_POST['register']) ) {
    //     echo 'un cacat in ploaie da ';
    //     $username    = $_POST['username'];
    //     $password = $_POST['password'];
    //     $email = $_POST['email'];
    //     $age = $_POST['age'];
    //     // $user_id=$conn1->insert_id;
    //     $errors   = array();

    //     if ( empty( $username ) ) {
    //         $errors[] = "Username is required at registration";
    //     }
    //     if ( empty( $password ) ) {
    //         $errors[] = "Password is required at registration";
    //     }
    //     if ( empty( $email ) ) {
    //         $errors[] = "Email is required at registration";
    //     }
    //     if ( empty( $age ) ) {
    //         $errors[] = "Age is required at registration";
    //     }


    //     $emailQuery="SELECT * FROM users WHERE email=? LIMIT 1";
    //     $stmt=$conn->prepare($emailQuery);
    //     $stmt->bind_param('s',$email);
    //     $stmt->execute();
    //     $result=$stmt->get_result();
    //     $userCount=$result->num_rows;
    //     $stmt->close();

    //     if($userCount>0) {
    //         $errors['email']="Email already exists";
    //     }

    //     // if(count($errors)===0) {
    //         $password=password_hash($password,PASSWORD_DEFAULT);
    //         $token=bin2hex(random_bytes(50));
    
    //         //if there are no errors we insert the user in the table

    //         $sql="INSERT INTO users (username,email,password,age,token) VALUES(?,?,?,?)";
    //         $stmt=$conn->prepare($sql);
    //         $stmt->bind_param('ssss',$username,$email,$password,$age,$token);





    //         // if($stmt->execute()) {
    //             setcookie( 'username', $username, time() + 3600, '/' );
    //             setcookie( 'password', $password, time() + 3600, '/' );
    //             setcookie( 'email', $email, time() + 3600, '/' );
    //             setcookie( 'age', $age, time() + 3600, '/' );
    //         // }
    //     // }
        
    // }
    // else {
    //     echo 'un cacat in ploaie nu';
    // }



    var_dump($_POST);
    if ( isset( $_POST['register'] ) ) {


        $username    = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $errors   = array();

        if ( empty( $username ) ) {
            $errors[] = "Username is required at login";
        
        }
        if ( empty( $password ) ) {
            $errors[] = "Password is required at login";
        }

        if ( count( $errors ) == 0 ) {
            // $data = login($username, $password);
    
            // if ( 1 == $data ) {
                setcookie( 'username', $username, time() + 3600, '/' );
                setcookie( 'password', $password, time() + 3600, '/' );
                setcookie( 'email', $email, time() + 3600, '/' );
                setcookie( 'age', $age, time() + 3600, '/' );

            
            // }
        }

    }


?>