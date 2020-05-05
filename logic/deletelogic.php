<?php
     if(isset($_REQUEST['delete'])){
         delete($conn, $id);
         header("Location: my_posts.php");
         exit();
     }


?>