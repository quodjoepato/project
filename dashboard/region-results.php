<?php
require('./includes/header.php');
require('./includes/user-side-bar.php');
require('./includes/nav-bar.php');





// Fetch data from tblcandidate
$select_query = "SELECT * FROM tblcandidate";
$result = mysqli_query($con, $select_query);
?>


<div class="container-fluid content-inner pb-0" id="page_layout">
<div>
        <h4 class="mb-3">ASHANTI REGION</h4>
    </div>
<div class="row">
  <div class="col-lg-4 ">
    <div class="card flex-row ">
    <div class="card-header rounded-0 rounded-start bg-soft-secondary p-0">
                    <img src="../assets/images/avatars/ken.png" class="" alt="wishlist-img" loading="lazy">
                </div>
      <div class="card-body d-flex justify-content-between p-3" style="background: linear-gradient(-45deg, rgba(9,9,121,1) 0%, rgba(9,9,121,1) 35%, rgba(2,0,36,1 ) 100%);">
        <div class="header-title">
          <h1 class="card-title text-white">500 Votes</h1>
          <h6 class="card-title text-white" >MR. KEN OHENE AGYAPONG</h6>
        </div>
        
      </div>
    </div>
  </div>
  <div class="col-lg-4 ">
    <div class="card flex-row ">
    <div class="card-header rounded-0 rounded-start bg-soft-secondary p-0">
                    <img src="../assets/images/avatars/allan.png" class="" alt="wishlist-img" loading="lazy">
                </div>
      <div class="card-body d-flex justify-content-between p-3" style="background: linear-gradient(-45deg, rgba(9,9,121,1) 0%, rgba(9,9,121,1) 35%, rgba(2,0,36,1 ) 100%);">
        <div class="header-title">
          <h1 class="card-title text-white">341 Votes</h1>
          <h6 class="card-title text-white" >MR. ALAN JOHN KWADWO KYEREMATEN</h6>
        </div>
        
      </div>
    </div>
  </div>
  <div class="col-lg-4 ">
    <div class="card flex-row ">
    <div class="card-header rounded-0 rounded-start bg-soft-secondary p-0">
                    <img src="../assets/images/avatars/jeo.png" class="" alt="wishlist-img" loading="lazy">
                </div>
      <div class="card-body d-flex justify-content-between p-3" style="background: linear-gradient(-45deg, rgba(9,9,121,1) 0%, rgba(9,9,121,1) 35%, rgba(2,0,36,1 ) 100%);">
        <div class="header-title">
          <h1 class="card-title text-white">107 Votes</h1>
          <h6 class="card-title text-white" >MR. JOE GHARTEY</h6>
        </div>
        
      </div>
    </div>
  </div>
</div>
</div>

<?php require('./includes/footer.php'); ?>