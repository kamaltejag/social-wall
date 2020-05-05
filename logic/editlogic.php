<?php

    if(isset($_REQUEST['id'])){
        $result = retrieve_id($conn, $id);
    }

    if(isset($_REQUEST['update'])){
        if(isset($_REQUEST['title'])){
            update($conn, $id, $title, "title");
            header("Location:my_posts.php?editsuccess");
            exit();
        }
        elseif(isset($_REQUEST['video'])){
            $video_string = explode("=", $video);
            update($conn, $id, $video_string[1], "video");
            header("Location:my_posts.php?editsuccess");
            exit();
        }
        elseif(isset($_REQUEST['image'])){
            update($conn, $id, $image, "image");
            header("Location:my_posts.php?editsuccess");
            exit();
        }
        elseif(isset($_REQUEST['link'])){
            update($conn, $id, $link, "link");
            header("Location:my_posts.php?editsuccess");
            exit();
        }

    }

?>