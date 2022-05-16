<!DOCTYPE html>
<html>
<style>
  .container {
      text-align: center;
  }
  h1 {
    padding-top: 40px;
  } 
</style>
<title>Register</title>


  <body>
  <?php include('../parts/header.php');?>
  <?php $message = isset($_GET["message"]) ? $_GET["message"] : "";?>
    <main>
      <form action="../scripts/register_script.php" method="post">

        <div class="container">
          <h1>Register</h1>
          <hr>
          <p><label for="username"><b>Name</b></label>
            <br><input type="text" placeholder="Zadajte Meno" name="username" id="username" required>

          <p><label for="surname"><b>Surname</b></label>
            <br><input type="text" placeholder="Zadajte Priezvisko" name="surname" id="surname" required>

          <p><label for="email"><b>Email</b></label>
            <br><input type="text" placeholder="Zadajte Email" name="email" id="email" required>

          <p><label for="psw"><b>Password</b></label>
            <br><input type="password" placeholder="Zadajte Heslo" name="psw" id="psw" required>

          <p><label for="psw-repeat"><b>Password again</b></label>
            <br><input type="password" placeholder="Znovu Zadajte heslo" name="psw-repeat" id="psw-repeat" required>

          <p><button type="submit" class="btn btn-secondary">Register</button>
            <hr>
          <p>
          <p style="font-weight: bolder;">Do you already have an account?
          <p><a href="login.php" class="btn btn-info">Login</a></p>
          <p class="text-danger"><?php echo $message ?></p>
        </div>

      </form>
    </main>
  </body>
  <?php include('../parts/footer.php')?>
</html>