<?php

include "includes/includes.php";

?>

<?php if(isset($_REQUEST['success'])){?>
  <div class="container">
    <h3 class="bg-white p-3 rounded text-success text-center mt-3 mb-4">Successfully created a new post!</h3>
  </div>
<?php }?>

<div class="container mt-3 bg-white rounded p-5">
  <h1 class="text-info">Create a Post Right Now!</h1>

  <?php if(isset($_REQUEST['empty'])){?>
    <h6 class="text-danger mb-3">Please enter data before posting!!!</h6>
  <?php }?>

  <?php if(!empty($_SESSION['username'])){?>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active text-dark text-muted" id="text-tab" data-toggle="tab" href="#text" role="tab" aria-controls="text" aria-selected="true">Text</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark text-muted" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">Video</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark text-muted" id="image-tab" data-toggle="tab" href="#image" role="tab" aria-controls="image" aria-selected="false">Image</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark text-muted" id="link-tab" data-toggle="tab" href="#link" role="tab" aria-controls="link" aria-selected="false">Link</a>
      </li>
    </ul>

    <form method="GET">
      <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="text" role="tabpanel" aria-labelledby="text-tab">
            <textarea rows="5" class="form-control mt-3" name="text" placeholder="Enter the post desscription"></textarea>
            <button name="post-text" class="btn btn-primary mt-3">Post Text</button>
          </div>
          <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
            <input type="text" class="form-control mt-3" name="video" placeholder="Enter the youtube video link">
            <button name="post-video" class="btn btn-primary mt-3">Post Video</button>
          </div>
          <div class="tab-pane fade" id="image" role="tabpanel" aria-labelledby="image-tab">
            <input type="text" class="form-control mt-3"  name="image" placeholder="Enter the image path">
            <h6 class="text-muted d-block mt-3">Please paste the image address here</h6>
            <button name="post-image" class="btn btn-primary mt-3">Post Image</button>
          </div>
          <div class="tab-pane fade" id="link" role="tabpanel" aria-labelledby="link-tab">
            <input type="text" class="form-control mt-3" name="link" placeholder="Enter the link">
            <h6 class="mt-4 text-muted">Custom Description <small>[Optional]</small></h6>
            <textarea type="text" class="form-control" name="link_description" placeholder="Give a custom description for the link" rows="2"></textarea>
            <button name="post-link" class="btn btn-primary mt-3">Post Link</button>
          </div>
      </div>

    </form>
  <?php }else{?>
    <a href="login.php"><button class="btn btn-success"><i class="fas fa-user text-white"></i> Login</button></a>
    <a href="signup.php"><button class="btn btn-primary"><i class="fas fa-sign-in-alt text-white"></i> Register</button></a>
  <?php }?>

</div>


<div class="container mt-5 p-0">

  <?php foreach($result as $r_post){?>

      <div class="bg-white p-5 mb-5 rounded">

        <div class="user_data mb-2 d-flex align-items-center">
          <?php $result_retrieve_profile_image = retrieve_profile_image($conn, $r_post['user_id']);
            foreach($result_retrieve_profile_image as $r_r_p_i){
          ?>
            <img src="<?php echo $r_r_p_i['profile_image'];?>" style="width: 3rem; height: 3rem; border-radius: 5rem; background: #000;">
          <?php }?>
          <h4 class="ml-2 text-muted m-0 d-inline"><?php echo $r_post['username'];?></h4>
        </div>
        <h6 class="text-muted mb-5"><?php echo $r_post['date'];?></h6>

        <div class="container">
        <?php if(!empty($r_post['video'])){?>
          <iframe width="560" height="315" class="embed-responsive text-center" src="https://www.youtube.com/embed/<?php echo $r_post['video'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <?php }elseif(!empty($r_post['link'])){?>
          <?php
            // To get title and descripton of website using given link
            $fp = file_get_contents($r_post['link']);
            

            $res = preg_match("/<title>(.*)<\/title>/siU", $fp, $title_matches);
            
            if(!empty($res)){
              // Clean up title: remove EOL's and excessive whitespace.
              $title = preg_replace('/\s+/', ' ', $title_matches[1]);
              $title = trim($title);
              
              // GEt the tags for the website
              $tags = get_meta_tags($r_post['link']); 




        ?>

            <h3 class="text-warning"><?php echo $title;?></h3>
            <?php if(!empty($r_post['link_description'])){?>
              <p class="text-muted"><?php echo $r_post['link_description'];?></p>
            <?php }elseif(!empty($tags['description'])){?>
              <p class="text-muted"><?php echo $tags['description'];?></p>
            <?php }else{?>
              <p class="text-muted">No description available for this website</p>
            <?php }?>
            <div class="input-group mb-3">
              <input type="text" readonly class="form-control bg-dark text-white" value="<?php echo $r_post['link'];?>" aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                <a href="<?php echo $r_post['link'];?>" target="_blank"><button class="btn btn-outline-secondary text-white bg-dark" type="button" id="button-addon2">Open</button></a>
              </div>
            </div>

          <?php }else{ ?>
            <?php $parsed_url = explode('/', $r_post["link"])?>
              <h3 class="text-warning"><?php echo $parsed_url[2];?></h3>
            <?php if(!empty($tags['description'])){?>  
              <p class="text-muted"><?php echo $tags['description'];?></p>
            <?php }else{?>
                <p class="text-muted">No description available for this website</p>
            <?php }?>
              <div class="input-group mb-3">
                <input type="text" readonly class="form-control bg-dark text-white" value="<?php echo $r_post['link'];?>" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <a href="<?php echo $r_post['link'];?>" target="_blank"><button class="btn btn-outline-secondary text-white bg-dark" type="button" id="button-addon2">Open</button></a>
                </div>
              </div>
          <?php }?>

        <?php }elseif(!empty($r_post['image'])){?>
          <div class="text-center">
            <img src="<?php echo $r_post['image'];?>" class="w-50 text-center">

          </div>
        
        <?php }elseif(!empty($r_post['text'])){?>
          <p class="text-muted"><?php echo $r_post['text'];?></p>
        <?php }?>

      </div>
        </div>
  
  <?php }?>

</div>


<?php

include "html/footer.php";

?>
    
