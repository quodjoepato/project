<?php

function redirectBack() {
    if (isset($_SERVER['HTTP_REFERER'])) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    } else {
        // If the HTTP_REFERER is not set, use JavaScript to redirect to the previous page.
        echo '<script>window.location="includes/logout.php";</script>';
    }
    exit();
}

?>