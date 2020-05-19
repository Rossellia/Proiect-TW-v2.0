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

    if ( isset( $_POST['register'] ) ) {
        $username    = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $errors   = array();

        if ( empty( $username ) ) {
            $errors[] = "Username is required at register";
        
        }
        if ( empty( $password ) ) {
            $errors[] = "Password is required at register";
        }

        if ( empty( $email ) ) {
            $errors[] = "Email is required at register";
        }

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors['email']="Email adress is invalid";
         }

        if ( !empty( $email ) && filter_var($email,FILTER_VALIDATE_EMAIL )) {
            $emailQuery="SELECT * FROM users WHERE email = ? LIMIT 1";
            $stmt=$conn->prepare($emailQuery);
            $stmt->bind_param('s',$email);
            $stmt->execute();
            $result=$stmt->get_result();
            $userCount=$result->num_rows;
            $stmt->close();
            if($userCount>0) {
                $errors['email']="A user with this email already exists";
            }
        }

        

        if ( !empty( $username )) {
            $usernameQuery = "SELECT * FROM users WHERE username = ? LIMIT 1";
            $stmt2=$conn->prepare($usernameQuery);
            $stmt2->bind_param('s',$username);
            $stmt2->execute();
            $result2=$stmt2->get_result();
            $userCount2=$result2->num_rows;
            $stmt2->close();
            if($userCount2>0) {
                $errors['username']="A user with this username already exists";
            }
        }

        

        if(count($errors)===0) {
            $password=password_hash($password,PASSWORD_DEFAULT);
            $token=bin2hex(random_bytes(50));
    
            //if there are no errors we insert the user in the table

            $sql="INSERT INTO users (username,email,password,token) VALUES(?,?,?,?)";
            $stmt=$conn->prepare($sql);
            $stmt->bind_param('ssss',$username,$email,$password,$token);
            
            if($stmt->execute()) {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['email'] = $email;

                // setcookie( 'username', $username, time() + 3600, '/' );
                // setcookie( 'password', $password, time() + 3600, '/' );
                // setcookie( 'email', $email, time() + 3600, '/' );
            }
        }
    }



?>