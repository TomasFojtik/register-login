<!DOCTYPE html>
<html>
<style>
  .container {
    text-align: center;
  }
  h1 {
    padding-top: 45px;
  }
 
</style> 
<body>
<?php include('../parts/header.php')?>
<?php $message = isset($_GET["message"]) ? $_GET["message"] : "";?>
  <main>  
  <form action="../scripts/login_script.php" method="post">
        <div class="container">
          <h1>LOGIN</h1>
          <hr>
          <p><label for="username"><b>Name</b></label>
          <br><input type="text" placeholder="Zadajte Meno" name="username" id="username" required>
            
          <p><label for="psw"><b>Password</b></label>
          <br><input type="password" placeholder="Zadajte Heslo" name="psw" id="psw" required>
      
          <p><button type="submit" class="btn btn-secondary">Login</button>
          <p class="text-danger"><?php echo $message ?></p>
          <hr>
          <p style="font-weight: bolder;">Do not you have an account? <p><a href="register.php" class="btn btn-info">Register</a></p>
        </div>     
      </form>
  </main>
  <?php include('../parts/footer.php')?>  
</body>
</html>