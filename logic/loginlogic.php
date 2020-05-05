<?php

    if(isset($_REQUEST['login'])){
        $result_users = retrieve_users($conn, $email);
        $result_users_rows = mysqli_num_rows($result_users);
        if($result_users_rows > 0){
            foreach($result_users as $r_users){
                $hashed_password = $r_users['password'];
                if(password_verify($password, $hashed_password)){
                    $_SESSION['username'] = $r_users['username'];
                    $_SESSION['user_id'] = $r_users['user_id'];
                    
                    header("Location: index.php");
                    
                }
                else{
                    header("Location: login.php?wrongPassword");
                }
            
    
            }
        }    
        else{
            header("Location: login.php?noUser");
            exit();
        }
    }
    



?>