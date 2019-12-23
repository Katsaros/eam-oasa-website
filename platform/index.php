<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}
?>
<h1>Γειά <?php echo $_SESSION["username"] ?>!<h1>
<h1><a href="logout.php">Αποσύνδεση</a><h1>
