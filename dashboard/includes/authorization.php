<?php
require('admin-only.php');
// Check if the user is logged in and retrieve the user type from the session
// session_start();

if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'admin') {
    // User is an admin, continue with the page
    // Add your page content here

} else {
    // User is not authorized, show error message and redirect back
    // echo "You are not authorized to load this page.";
    // You can also use JavaScript to show an alert message instead of echoing the error message
    echo '<script>alert("You are not authorized to load this page.");</script>';
    redirectBack();
    exit(); // Make sure to exit after redirecting
}

?>
