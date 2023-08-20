<?php
// Include your database connection here
require('./includes/database.inc.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $region_name = mysqli_real_escape_string($con, $_POST['region_name']);
    $language = mysqli_real_escape_string($con, $_POST['language']);
    $population = mysqli_real_escape_string($con, $_POST['population']); // Escape the string

    // Insert data into tblregion
    $insert_query = "INSERT INTO tblregion (region_name, language, population)
                     VALUES ('$region_name', '$language', '$population')";

    if (mysqli_query($con, $insert_query)) {
        // Data inserted successfully
        header("Location: region.php"); // Redirect to success page
        exit();
    } else {
        // Error occurred while inserting data
        echo "Error: " . mysqli_error($con);
    }
}

// Close database connection
mysqli_close($con);
?>