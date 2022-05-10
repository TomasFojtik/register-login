<?php
require_once('../scripts/connection.php');
$id = isset($_GET["id"]) ? $GET["id"] : "";
$sql = "DELETE FROM users WHERE id ='$id'";
if($conn->query($sql) === true){
    header('Location: ../pages/index.php');
}
else {
    echo"error $sql. " . $conn->error;

}
$conn->close();
?>