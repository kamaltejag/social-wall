<?php
    if(!empty($_SESSION['user_id'])){
        $result_user_data = retrieve_user_id($conn, $_SESSION['user_id']);
    }

?>