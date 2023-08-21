<?php
include "includes/database.inc.php";

if (isset($_POST['compareResult'])) {
    $p1Id = $_POST['p1Id'];
    $p2Id = $_POST['p2Id'];
    $region_result = mysqli_query($con, "SELECT * FROM tblregion");

    $dataArray = array();

    while ($region = mysqli_fetch_assoc($region_result)) {
        $region_id = $region['region_id'];
        $region_name = $region['region_name'];
        $person1Result = 0;
        $person2Result = 0;

        $person1_query = mysqli_query($con, "SELECT * FROM tblresults WHERE region_id = '$region_id' AND candidate_id = '$p1Id'");
        $person2_query = mysqli_query($con, "SELECT * FROM tblresults WHERE region_id = '$region_id' AND candidate_id = '$p2Id'");

        if (mysqli_num_rows($person1_query) > 0) {
            $person1 = mysqli_fetch_assoc($person1_query);
            $person1Result = $person1['results'];
        }

        if (mysqli_num_rows($person2_query) > 0) {
            $person2 = mysqli_fetch_assoc($person2_query);
            $person2Result = $person2['results'];
        }

        $greater = '';
        if ($person1Result > $person2Result) {
            $greater = "person1";
        } elseif ($person1Result < $person2Result) {
            $greater = "person2";
        }

        $region_array = array(
            "region_name" => $region_name,
            "region_id" => $region_id,
            "person1Result" => $person1Result,
            "person2Result" => $person2Result,
            "greater" => $greater
        );
        array_push($dataArray, $region_array);
    }
    echo json_encode($dataArray);
}

if (isset($_POST['regionChart'])) {
    $region_id = $_POST['regionId'];
    $candidates_result = mysqli_query($con, "SELECT * FROM tblcandidate");

    $dataArray = array();
    $names_array = array();
    $results_array = array();
    while ($candidate = mysqli_fetch_assoc($candidates_result)) {
        $candidate_id = $candidate['candidate_id'];
        $candidate_name = $candidate['fname'];
        array_push($names_array,$candidate_name);

        $candidate_result = 0;

        $candidate_result_query = mysqli_query($con, "SELECT * FROM tblresults WHERE region_id = '$region_id' AND candidate_id = '$candidate_id'");
        if (mysqli_num_rows($candidate_result_query) > 0) {
            $person = mysqli_fetch_assoc($candidate_result_query);
            $candidate_result = $person['results'];
        }
        array_push($results_array,$candidate_result);
    }

    $dataArray = array(
        "names"=>$names_array,
        "results"=>$results_array
    );

    echo json_encode($dataArray);
}
