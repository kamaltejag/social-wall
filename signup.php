<?php

include "includes/includes.php";

?>


<div class="container mt-5 mb-5 p-5 rounded bg-white">
    <h2 class="text-info mb-3">Sign Up</h2>
    <?php if(isset($_REQUEST['emptyFields']))
      echo '<h6 class="text-danger mt-2 mb-2">Please fill in all the fields</h6>';
    ?>
    <form method="post">
  <div class="form-group">

    <div class="container bg-secondary text-white mb-3 pt-3 pb-3 pl-5 pr-5 rounded ">
      <label for="exampleInputEmail1">Profile Image</label>
      <input type="text" class="form-control" placeholder="Enter the image url" name="profile_image">
    </div>

    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" name="username">
    <?php if(isset($_REQUEST['usernameTaken']))
      echo '<h6 class="text-danger mt-2">Username already taken</h6>';
    ?>
      
    <label for="exampleInputEmail1" class="mt-3">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>

  <button type="submit" class="btn btn-primary" name="signup">Sign Up</button>
</form>
    <p class="mt-3">Already have an Account ? <a href="login.php">Login</a></p>
</div>


<?php

include "html/footer.php";

?>