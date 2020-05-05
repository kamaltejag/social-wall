<?php

include "includes/includes.php";

?>

<?php if(isset($_REQUEST['signupSuccessful'])){?>
  <div class="container p-3">
    <?php echo '<h4 class="text-success text-center mt-2 ">Signup Successful! PLease Login</h4>';?>
  </div>
<?php }?>

<div class="container mt-5 mb-5 rounded p-5 bg-white">
    <h2 class="text-info mb-3">Login</h2>
   
    <form method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        <?php if(isset($_REQUEST['noUser'])){echo '<h6 class="text-danger mt-2">No user present please signup!</h6>';}?>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        <?php if(isset($_REQUEST['wrongPassword'])){echo '<h6 class="text-danger mt-2">Wrong Password!</h6>';}?>
      </div>
      <button type="submit" class="btn btn-primary" name="login">Login</button>
    </form>
    <p class="mt-3">Don't have an Account yet ? <a href="signup.php">Sign Up</a></p>
</div>

<?php

include "html/footer.php";

?>
