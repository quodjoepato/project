<?php
require('./includes/header.php');
require('./includes/side-bar.php');
require('./includes/nav-bar.php');





// Fetch data from tblcandidate
$select_query = "SELECT * FROM tblcandidate";
$result = mysqli_query($con, $select_query);
?>


<div class="container-fluid content-inner pb-0" id="page_layout">
    <div>
        <h4 class="mb-0">All Candidates</h4>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2 mt-4 ">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="col" data-item="list">
        
            <div class="card flex-row">
                <div class="card-header rounded-0 rounded-start bg-soft-secondary p-0">
                    <img src="<?php echo $row['image']; ?>" class="" alt="wishlist-img" loading="lazy">
                </div>
                <div class="card-body rounded-end d-flex align-items-center"style="background: linear-gradient(-45deg, rgba(9,9,121,1) 0%, rgba(9,9,121,1) 35%, rgba(2,0,36,1 ) 100%);" >
    <div class="d-flex justify-content-between mb-2">
        <h3 class="mb-0 text-white"><?php echo strtoupper($row['fname']); ?> <?php echo strtoupper($row['lname']); ?></h3>
    </div>
</div>
            </div>
        </div> 
        <?php } ?>
    </div>
</div>

<?php require('./includes/footer.php'); ?>