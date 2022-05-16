<?php 
require_once('../scripts/connection.php');
include('../parts/header.php'); 
?>
<style>
  .container {
    text-align: center;
  }
  h1 {
    padding-top: 45px;
  }
 
</style> 
<?php $message = isset($_GET["message"]) ? $_GET["message"] : "";?>
<main>
<form action="../scripts/password_change_script.php" method="post">
        <div class="container">
          <h1>PASSWORD CHANGE</h1>
          <hr>
            
          <p><label for="psw"><b>Old Password</b></label>
          <br><input type="password" placeholder="Zadajte Stare Heslo" name="psw" id="psw" required>

          <p><label for="new-psw"><b>New Password</b></label>
          <br><input type="text" placeholder="Zadajte Nove Heslo" name="new-psw" id="new-psw" required>

          <p><button type="submit" class="btn btn-secondary">CHANGE</button>
          <p class="text-danger"><?php echo $message ?></p>
          <hr>
        </div>     
      </form>
</main>
<?php include('../parts/footer.php'); ?>