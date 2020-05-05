<?php

include "includes/includes.php";

?>

<div class="container mt-4">
    <?php if(isset($_REQUEST['editsuccess'])){?>
        <div class="text-center bg-info p-2 rounded mb-4">
            <h3 class="text-white">Successfully edited a post!</h3>
        </div>
    <?php }?>
    <div class="row">
        <?php if(!empty($result_user_data)){foreach($result_user_data as $r_u_d){?>
            <div class="col-md-6 mb-5">
                <div class="bg-white p-4 rounded" style="min-height:417px;">
                    <a href="edit.php?id=<?php echo $r_u_d['id']?>"><h4 class="d-inline"><i class="fas fa-edit text-info mb-4 mr-3"></i></h4></a>
                    <a href="delete.php?id=<?php echo $r_u_d['id']?>"><h4 class="d-inline"><i class="fas fa-trash-alt text-danger mb-4"></i></h4></a>
                    <?php if(!empty( $r_u_d['image'])){?>
                        <img src="<?php echo $r_u_d['image']?>" class="img-fluid rounded d-block" style="max-height:315px">
                    <?php }elseif(!empty( $r_u_d['text'])){?> 
                        <p class="text-muted"><?php echo $r_u_d['text'];?></p>

                    <?php }elseif(!empty( $r_u_d['video'])){?> 
                        <iframe width="560" height="315" class="embed-responsive text-center" src="https://www.youtube.com/embed/<?php echo $r_u_d['video'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 

                    <?php }elseif(!empty( $r_u_d['link'])){?>
                        <?php
                            // To get title and descripton of website using given link
                            $fp = file_get_contents($r_u_d['link']);
                            if (!$fp) 
                                return null;

                            $res = preg_match("/<title>(.*)<\/title>/siU", $fp, $title_matches);
                            if (!$res) 
                                return null; 

                            // Clean up title: remove EOL's and excessive whitespace.
                            $title = preg_replace('/\s+/', ' ', $title_matches[1]);
                            $title = trim($title);

                            $tags = get_meta_tags($r_u_d['link']);  
                            
                        ?>

                        <h3 class="text-warning"><?php echo $title;?></h3>
                        <?php if(!empty($r_u_d['link_description'])){?>
                            <p class="text-muted"><?php echo $r_u_d['link_description'];?></p>
                        <?php }elseif(!empty($tags['description'])){?>
                            <p class="text-muted"><?php echo $tags['description'];?></p>
                        <?php }else{?>
                            <p class="text-muted">No description available for this website</p>
                        <?php }?>
                        <div class="input-group mb-3">
                            <input type="text" readonly class="form-control bg-dark text-white" value="<?php echo $r_u_d['link'];?>" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                            <a href="<?php echo $r_u_d['link'];?>" target="_blank"><button class="btn btn-outline-secondary text-white bg-dark" type="button" id="button-addon2">Open</button></a>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        <?php }}else{?>
            <div class="container bg-white text-center rounded p-5">
                <h3>Please create some posts!</h3>
            </div>
        <?php }?>
    </div>
</div>


<?php

include "html/footer.php";

?>
    
