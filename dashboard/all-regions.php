<?php
require('./includes/header.php');
require('./includes/user-side-bar.php');
require('./includes/nav-bar.php');





// Fetch data from tblregion
$select_query = "SELECT * FROM tblregion";
$result = mysqli_query($con, $select_query);
?>


<div class="container-fluid content-inner pb-0" id="page_layout">
    <div>
        <h4 class="mb-0">All Regions</h4>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4 mt-4 ">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="col" data-item="list">
        
            <a href="#">
            <div class="card flex-row">
            <div class="card-body rounded-end bg-primary d-flex align-items-center justify-content-center" style="background: linear-gradient(-45deg, rgba(9,9,121,1) 0%, rgba(9,9,121,1) 35%, rgba(2,0,36,1 ) 100%);">
                    <div class="d-flex justify-content-center mb-2">
                        <h4 class="mb-0 text-white"><?php echo strtoupper($row['region_name']); ?> 
                                            
                    </h4>
                        
                    </div>
                </div>
            </div>
        </a>
        </div> 
        <?php } ?>
    </div>
</div>

<?php require('./includes/footer.php'); ?>