<?php

include "includes/includes.php";

?>

<div class="container bg-white mt-5 p-5 rounded">
    <h1 class="mb-4 text-info">Edit the Post</h1>
    <?php require "logic/editlogic.php";?>
    <form method="POST">
        <?php foreach($result as $r_u_d){?>
            <?php if(!empty($r_u_d['text'])){?>
                <textarea name="text" class="form-control" rows="8" stytle="height:100%;"><?php echo $r_u_d['text'];?></textarea>
            <?php }elseif(!empty($r_u_d['video'])){?>

                    <input type="text" name="video" class="form-control" value="https://www.youtube.com/watch?v=<?php echo $r_u_d['video'];?>">
 
            <?php }elseif(!empty($r_u_d['image'])){?>

                    <input type="text" name="image" class="form-control" value="<?php echo $r_u_d['image'];?>">

            <?php }elseif(!empty($r_u_d['link'])){?>

                    <input type="text" name="link" class="form-control" value="<?php echo $r_u_d['link'];?>">

            <?php }?>
        <?php }?>
        <button class="btn btn-primary mt-3" name="update"><i class="fas fa-edit"></i> Update</button>
    </form>

</div>


<?php

include "html/footer.php";

?>
    