<?php
// Start or resume the session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or another appropriate page
header("Location: admin.php");
exit();
?>