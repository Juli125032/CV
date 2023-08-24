<?php include("header.php"); ?>
<?php
include('connection.php');
$msj = "";
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
  $query->bindParam("username", $username, PDO::PARAM_STR);
  $query->execute();
  $result = $query->fetch(PDO::FETCH_ASSOC);
  if (!$result) {
   $msj = "Username password combination is wrong!";
  } else {
    if ($password == $result['password']) {
      $_SESSION['user_id'] = $result['ID'];
      $msj = "Congratulations, you are logged in";
      header("location:contacts.php");
      exit();
    } else {
     $msj = "Username password combination is wrong!";
    }
  }
}
?>
<section id="contact" class="section section-contact regular-padding">
  <div class="section-contact_title text-center">
    <p class="title title-primary">Login</p>
    <p class="subtitle">Login</p>
  </div>
  <div class="row mt-5 d-flex justify-content-center">
    <div class="col-md-8">
      <form  method="post" action="" name="signin-form" class="form">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-input" id="username" name="username" />
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-input" id="password" name="password" />
            </div>
          </div>
          <div class="col-md-12 text-end">
            <button class="button button-primary" type="submit" name="login" value="login">Login</button>
          </div>
          <div class="col-md-13 text-center">
           <p class="text">
            <?php echo $msj ?>
           </p> 
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<?php include("footer.php"); ?>