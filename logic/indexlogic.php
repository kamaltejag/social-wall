<?php
  

    $result = retrieve($conn); 
    $result_retrieve_all_users = retrieve_all_users($conn);

    if(isset($_REQUEST['post-text']) || isset($_REQUEST['post-video']) || isset($_REQUEST['post-image']) || isset($_REQUEST['post-link'])){
        if(!empty($_SESSION['username'])){
            if(isset($_REQUEST['post-text'])){
                if(!empty($_REQUEST['text'])){
                    insert($conn, $_SESSION['user_id'], $_SESSION['username'], $text, 'text');
                    header("Location: index.php?success");
                }
                else{
                    header("Location: index.php?empty");
                    exit();
                }
            }
            if(isset($_REQUEST['post-video'])){
                if(!empty($_REQUEST['video'])){
                    $video_string = explode("=", $video);
                    insert($conn, $_SESSION['user_id'], $_SESSION['username'],  $video_string[1], 'video');
                    header("Location: index.php?success");
                }
                else{
                    header("Location: index.php?empty");
                    exit();
                }
            }
            if(isset($_REQUEST['post-image'])){
                if(!empty($_REQUEST['image'])){
                    insert($conn, $_SESSION['user_id'], $_SESSION['username'], $image, 'image');
                    header("Location: index.php?success");
                }
                else{
                    header("Location: index.php?empty");
                    exit();
                }
    
            }
            if(isset($_REQUEST['post-link'])){
                if(!empty($_REQUEST['link'])){
                    insert_link($conn, $_SESSION['user_id'], $_SESSION['username'],  $link, $link_description);
                    header("Location: index.php?success");
                }
                else{
                    header("Location: index.php?empty");
                    exit();
                }
    
            }
     

        }
        else{
            header("Location: login.php");
        }

        // $video_string = explode("=", $video);
        // insert_text($conn, $_SESSION['user_id'], $_SESSION['user_id'] ,$text, end($video_string), $image, $link);
        // header("Location: index.php");


    }

?>