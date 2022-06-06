<?php
require_once('../scripts/connection.php');
include('../parts/header.php');

?>
<style>
  .container {
    text-align: center;
  }
  h1 {
    padding-top: 60px;
  }

</style>
<?php $message = isset($_GET["message"]) ? $_GET["message"] : "";?>
<main class>
  <form action="../scripts/avatar_change_script.php" method="post">
    <div class="container">
      <h1>AVATAR CHANGE</h1>
      <hr>
      <img src="../images/<?php  echo $avatar;?>"  style="width: 150px">
      <p><select name="avatar"style="margin-top: 25px;" class="form-select form-select-lg form-select-border-width-2" aria-label=".form-select-lg example">
          <option disabled selected>select avatar</option>
          <option value="1.jpg">1</option>
          <option value="2.jpg">2</option>
          <option value="3.jpg">3</option>
        </select>
      <p><button type="submit" class="btn btn-outline-secondary">CHANGE</button>
      <p class="text-danger"><?php echo $message ?></p>
    </div>
  </form>
</main>