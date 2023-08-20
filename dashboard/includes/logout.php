<?php
// Start the session
session_start();

// Destroy the session
session_destroy();

// Redirect the user to the login page after logging out
echo '
      <script>window.location ="../../index.php"</script>    
    ';
exit(); // Make sure to exit after redirection
?>
