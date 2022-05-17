<?php
// Unset all of the session variables
session_start();
$_SESSION = array();
$_SESSION["loggedin"] = false;
session_destroy();
// Redirect to login page
header("location: ./login.php");
exit;
?>