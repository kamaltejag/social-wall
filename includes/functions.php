<?php

   function retrieve($conn){
        $sql = "SELECT * FROM social_wall_post ORDER BY id DESC";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    // insert the data into database for four different social_wall_post buttons
    function insert($conn, $user_id, $username, $data, $data_name){
        if($data_name == 'text'){
            $text_slashes = addslashes($data);
            $sql = "INSERT INTO social_wall_post(user_id, username, text) VALUES('$user_id', '$username', '$text_slashes')";
        }
        else{
            $sql = "INSERT INTO social_wall_post(user_id, username, $data_name) VALUES('$user_id', '$username', '$data')";
        }
        $query = mysqli_query($conn, $sql);
    }

    function insert_link($conn, $user_id, $username, $link, $link_description){
        if(!empty($link_description)){
            $sql = "INSERT INTO social_wall_post(user_id, username, link, link_description) VALUES('$user_id', '$username', '$link', '$link_description')";
        }
        else{
            $sql = "INSERT INTO social_wall_post(user_id, username, link) VALUES('$user_id', '$username', '$link')";
        }
        $query = mysqli_query($conn, $sql);
    }
    

    function retrieve_user_id($conn, $user_id){
        $sql = "SELECT * FROM social_wall_post WHERE user_id = '$user_id' ORDER BY id DESC";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    function retrieve_id($conn, $id){
        $sql = "SELECT * FROM social_wall_post WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    function update($conn, $id, $element, $element_name){     
        $sql = "UPDATE social_wall_post SET $element_name = '$element' WHERE id=$id";
        $query = mysqli_query($conn, $sql);
    }
    

    function delete($conn, $id){
        $sql = "DELETE FROM social_wall_post WHERE id= $id";
        $query = mysqli_query($conn, $sql);
        
    }

    function retrieve_users($conn, $email){
        $sql = "SELECT * FROM social_wall_users WHERE email= '$email'";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    function retrieve_all_users($conn){
        $sql = "SELECT * FROM social_wall_users";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    function insert_users($conn, $user_id, $profile_image, $username, $email, $password){
        $result_all_users = retrieve_all_users($conn);
        foreach($result_all_users as $r_a_u){
            if($username == $r_a_u['username']){
                header("Location:signup.php?usernameTaken");
                exit();
            }
            elseif($email == $r_a_u['email']){
                header("Location:signup.php?emailPresent");
                exit();
            }
        }
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO social_wall_users(user_id, profile_image, username, email, password) VALUES('$user_id', '$profile_image', '$username', '$email', '$hash_password')";
        $query = mysqli_query($conn, $sql);
    }

    function retrieve_profile_image($conn, $user_id){
        $sql = "SELECT profile_image FROM social_wall_users WHERE user_id = '$user_id'";
        $query = mysqli_query($conn, $sql);
        return $query;
    }


    function logout(){
        unset($_SESSION['username']);
        unset($_SESSION['user_id']);
        header("Location: index.php");
    }


?>




