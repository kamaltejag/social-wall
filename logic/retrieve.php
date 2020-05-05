<?php

    if(isset($_REQUEST['post-text']) || isset($_REQUEST['update'])){
        if(isset($_REQUEST['text'])){
            $text = $_REQUEST['text'];
        }
    }

    if(isset($_REQUEST['post-video']) || isset($_REQUEST['update'])){
        if(isset($_REQUEST['video'])){
            $video = $_REQUEST['video'];
        }
    }

    if(isset($_REQUEST['post-image']) || isset($_REQUEST['update'])){
        if(isset($_REQUEST['image'])){
            $image = $_REQUEST['image'];
        }
    }

    if(isset($_REQUEST['post-link']) || isset($_REQUEST['update'])){
        if(isset($_REQUEST['link'])){
            $link = $_REQUEST['link'];
        }
        if(isset($_REQUEST['link_description'])){
            $link_description = $_REQUEST['link_description'];
        }
    }  


    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
    }
    
    if(isset($_REQUEST['login'])){
        if(isset($_REQUEST['email'])){
            $email = $_REQUEST['email'];
        }
        if(isset($_REQUEST['password'])){
            $password = $_REQUEST['password'];
        }
    }

    if(isset($_REQUEST['signup'])){
        if(isset($_REQUEST['username'])){
            $username = $_REQUEST['username'];
        }
        if(isset($_REQUEST['email'])){
            $email = $_REQUEST['email'];
        }
        if(isset($_REQUEST['password'])){
            $password = $_REQUEST['password'];
        }  
        if(isset($_REQUEST['profile_image'])){
            $profile_image = $_REQUEST['profile_image'];
        }
    }

    if(isset($_REQUEST['logout'])){
        logout();
    }

?>





