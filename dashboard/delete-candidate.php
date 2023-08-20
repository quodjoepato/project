<?php
require('./includes/database.inc.php');

if (isset($_GET['candidate_id'])) {
    $candidate_id = $_GET['candidate_id'];

    // Delete the candidate from the database
    $delete_query = "DELETE FROM tblcandidate WHERE candidate_id = $candidate_id";
    
    if (mysqli_query($con, $delete_query)) {
        echo '<script>alert("Candidate deleted successfully."); window.location.href = "manage-candidate.php";</script>';
        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }
}







if (isset($_GET['region_id'])) {
    $region_id = $_GET['region_id'];

    // Delete the candidate from the database
    $delete_query = "DELETE FROM tblregion WHERE region_id = $region_id";
    
    if (mysqli_query($con, $delete_query)) {
        echo '<script>alert("Region deleted successfully."); window.location.href = "region.php";</script>';
        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
