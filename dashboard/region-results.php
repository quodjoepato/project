<?php
require('./includes/header.php');
require('./includes/user-side-bar.php');
require('./includes/nav-bar.php');

?>


<div class="container-fluid content-inner pb-0" id="page_layout">
<div>
        <h4 class="mb-3"></h4>
    </div>
    <div class="row">
    <?php
   $query = "SELECT tr.*, tc.fname, tc.lname, tc.image, tr.region_id, tr.electoral_officer, tr.results,
   tr.image AS result_image, tc.fname AS candidate_fname, tc.lname AS candidate_lname,
   tr.region_id AS result_region_id, tr.electoral_officer AS result_electoral_officer,
   tr.results AS result_results,
   tr.image AS result_image, r.region_name
FROM tblresults tr
INNER JOIN tblcandidate tc ON tr.candidate_id = tc.candidate_id
INNER JOIN tblregion r ON tr.region_id = r.region_id";

$result = mysqli_query($con, $query);


    while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="col-lg-4">
            <div class="card flex-row">
                <div class="card-header rounded-0 rounded-start bg-soft-secondary p-0">
                    <img src="<?php echo $row['image']; ?>" alt="wishlist-img"
                        loading="lazy">
                </div>
                <div class="card-body d-flex justify-content-between p-3"
                    style="background: linear-gradient(-45deg, rgba(9,9,121,1) 0%, rgba(9,9,121,1) 35%, rgba(2,0,36,1 ) 100%);">
                    <div class="header-title">
                        <h1 class="card-title text-white"><?php echo $row['results']; ?> Votes</h1>
                        <h6 class="card-title text-white"><?php echo strtoupper($row['fname']) . " " . strtoupper($row['lname']); ?></h6>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

</div>

<?php require('./includes/footer.php'); ?>