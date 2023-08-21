<?php
require('./includes/header.php');
require('./includes/user-side-bar.php');
require('./includes/nav-bar.php');




?>


<div class="container-fluid content-inner pb-0" id="page_layout">
<div>
    <h4 class="mb-3">NATIONAL RESULTS</h4>
</div>
    <div class="row">
        <?php
        $query = "SELECT tc.candidate_id, tc.fname, tc.lname, tc.image, SUM(tr.results) AS total_results
                  FROM tblcandidate tc
                  INNER JOIN tblresults tr ON tc.candidate_id = tr.candidate_id
                  GROUP BY tc.candidate_id";

        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-lg-4">
                <div class="card flex-row">
                    <div class="card-header rounded-0 rounded-start bg-soft-secondary p-0">
                        <img src="<?php echo $row['image']; ?>" alt="wishlist-img" loading="lazy">
                    </div>
                    <div class="card-body d-flex justify-content-between p-3"
                        style="background: linear-gradient(-45deg, rgba(9,9,121,1) 0%, rgba(9,9,121,1) 35%, rgba(2,0,36,1 ) 100%);">
                        <div class="header-title">
                            <h1 class="card-title text-white"><?php echo $row['total_results']; ?> Votes</h1>
                            <h6 class="card-title text-white"><?php echo strtoupper($row['fname']) . " " . strtoupper($row['lname']); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php require('./includes/footer.php'); ?>