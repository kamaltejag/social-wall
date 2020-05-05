<?php

    if(isset($_REQUEST['signup'])){
        if(!empty($profile_image) && !empty($username) && !empty($email) && !empty($password)){
            insert_users($conn, uniqid('user', true), $profile_image, $username, $email, $password);
            header("Location:login.php?signupSuccessful");
        }
        else{
            header("Location: signup.php?emptyFields");
            exit();
        }
    }
    

?>