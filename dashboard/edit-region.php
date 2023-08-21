
<?php 
require('./includes/header.php');
require('./includes/side-bar.php');


if (isset($_GET['region_id'])) {
    $region_id = $_GET['region_id'];
    
    // Fetch candidate data based on region_id
    $query = "SELECT * FROM tblregion WHERE region_id = $region_id";
    $result = mysqli_query($con, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        // Candidate data
        $region_name = $row['region_name'];
        $language = $row['language'];
        $population = $row['population'];
        // Other fields...
    } else {
        echo "Candidate not found.";
        exit();
    }
}

if (isset($_POST['submit'])) {
    // Get the form data
    $region_name = mysqli_real_escape_string($con, $_POST['region_name']);
    $language = mysqli_real_escape_string($con, $_POST['language']);
    $population = mysqli_real_escape_string($con, $_POST['population']);
    // Other fields...

    // Update the candidate data in the database
    $update_query = "UPDATE tblregion SET region_name='$region_name', language='$language', population='$population' WHERE region_id = $region_id";
    
    if (mysqli_query($con, $update_query)) {
        echo '<script>alert("Region data updated successfully."); window.location.href = "region.php";</script>';
        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }
}



// Fetch data from tblregion
$sql = "SELECT * FROM tblregion";
$result = mysqli_query($con, $sql);

 ?>
 <main class="main-content">
            <div class="position-relative  iq-banner ">
            <!--Nav Start-->
                <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu left-border">
                   <div class="container-fluid navbar-inner">
                      <a href="index.php" class="navbar-brand">
                         
                         <!--Logo start-->
                         <div class="logo-main">
                             <div class="logo-normal">
                                 <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                                     <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                                     <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                                     <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                                 </svg>
                             </div>
                             <div class="logo-mini">
                                 <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                                     <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                                     <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                                     <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                                 </svg>
                             </div>
                         </div>
                         <!--logo End-->         <h4 class="logo-title d-block d-xl-none" data-setting="app_name">Hope UI</h4>
                      </a>
                      <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                         <i class="icon d-flex">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24">
                               <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                            </svg>
                         </i>
                      </div>
                      <div class="d-flex align-items-center justify-content-between product-offcanvas">
                         <div class="breadcrumb-title border-end me-3 pe-3 d-none d-xl-block">
                            <small class="mb-0 text-capitalize">blank-page</small>
                         </div>
                      </div>
                      <div class="d-flex align-items-center">
                         <button id="navbar-toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                               <span class="navbar-toggler-bar bar1 mt-1"></span>
                               <span class="navbar-toggler-bar bar2"></span>
                               <span class="navbar-toggler-bar bar3"></span>
                            </span>
                         </button>
                      </div>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
                            <li class="nav-item dropdown me-0 me-xl-3">
                               <div class="d-flex align-items-center mr-2 iq-font-style" role="group" aria-label="First group"
                                  data-setting="radio">
                                  <input type="radio" class="btn-check" name="theme_font_size" value="theme-fs-sm" id="font-size-sm">
                                  <label for="font-size-sm" class="btn btn-border border-0 btn-icon btn-sm" data-bs-toggle="tooltip"
                                     title="Font size 14px" data-bs-placement="bottom">
                                     <span class="mb-0 h6" style="color: inherit !important;">A</span>
                                  </label>
                                  <input type="radio" class="btn-check" name="theme_font_size" value="theme-fs-md" id="font-size-md">
                                  <label for="font-size-md" class="btn btn-border border-0 btn-icon" data-bs-toggle="tooltip"
                                     title="Font size 16px" data-bs-placement="bottom">
                                     <span class="mb-0 h4" style="color: inherit !important;">A</span>
                                  </label>
                                  <input type="radio" class="btn-check" name="theme_font_size" value="theme-fs-lg" id="font-size-lg">
                                  <label for="font-size-lg" class="btn btn-border border-0 btn-icon" data-bs-toggle="tooltip"
                                     title="Font size 18px" data-bs-placement="bottom">
                                     <span class="mb-0 h2" style="color: inherit !important;">A</span>
                                  </label>
                               </div>
                            </li>
                            <li class="nav-item dropdown border-end pe-3 d-none d-xl-block">
                               <div class="form-group input-group mb-0 search-input">
                                  <input type="text" class="form-control" placeholder="Search...">
                                  <span class="input-group-text">
                                     <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5"
                                           stroke-linecap="round" stroke-linejoin="round"></circle>
                                        <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                           stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                  </span>
                               </div>
                            </li>
                            <li class="nav-item dropdown iq-responsive-menu border-end d-block d-xl-none">
                               <div class="btn btn-sm bg-body" id="navbarDropdown-search-11" role="button" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></circle>
                                     <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                  </svg>
                               </div>
                               <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown-search-11"
                                  style="width: 25rem;">
                                  <li class="px-3 py-0">
                                     <div class="form-group input-group mb-0">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-text">
                                           <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                              xmlns="http://www.w3.org/2000/svg">
                                              <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5"
                                                 stroke-linecap="round" stroke-linejoin="round"></circle>
                                              <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                                 stroke-linecap="round" stroke-linejoin="round"></path>
                                           </svg>
                                        </span>
                                     </div>
                                  </li>
                               </ul>
                            </li>
                                
                            <?php require('./includes/profile.php'); ?>
                            <li class="nav-item iq-full-screen d-none d-xl-block" id="fullscreen-item">
                               <a href="#" class="nav-link" id="btnFullscreen" data-bs-toggle="dropdown">
                                  <div class="btn btn-primary btn-icon btn-sm rounded-pill">
                                     <span class="btn-inner">
                                        <svg class="normal-screen icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                           xmlns="http://www.w3.org/2000/svg">
                                           <path d="M18.5528 5.99656L13.8595 10.8961" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                           <path d="M14.8016 5.97618L18.5524 5.99629L18.5176 9.96906" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                           <path d="M5.8574 18.896L10.5507 13.9964" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                           <path d="M9.60852 18.9164L5.85775 18.8963L5.89258 14.9235" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <svg class="full-normal-screen d-none icon-24" width="24" height="24" viewBox="0 0 24 24"
                                           fill="none" xmlns="http://www.w3.org/2000/svg">
                                           <path d="M13.7542 10.1932L18.1867 5.79319" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                           <path d="M17.2976 10.212L13.7547 10.1934L13.7871 6.62518" stroke="currentColor"
                                              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                           <path d="M10.4224 13.5726L5.82149 18.1398" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                           <path d="M6.74391 13.5535L10.4209 13.5723L10.3867 17.2755" stroke="currentColor"
                                              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                     </span>
                                  </div>
                               </a>
                            </li>
                         </ul>
                      </div>
                   </div>
                </nav>                
                <?php require('./includes/ekosen.php'); ?>
            <!--Nav End-->
            </div>
            <div class="content-inner container-fluid pb-0" id="page_layout">
            <div>
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Add New Region</h4>
                            </div>
                        </div>
                        <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
    <div class="form-group col-md-12">
        <label class="form-label" for="region_name">Name of Region:</label>
        <input type="text" class="form-control" name="region_name" value="<?php echo $region_name; ?>" >
    </div>
    <div class="form-group col-md-12">
        <label class="form-label" for="language">Language:</label>
        <input type="text" class="form-control" name="language" value="<?php echo $language; ?>" >
    </div>
    <div class="form-group col-md-12">
        <label class="form-label" for="population">Population:</label>
        <input type="text" class="form-control" name="population" value="<?php echo $population; ?>" >
    </div>
    <hr>
    <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
</form>

                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">List of Regions</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <?php
// Display data in the table
echo '<table id="datatable" class="table table-striped" data-toggle="data-table">
        <thead>
            <tr>
                <th><h6>#</h5></th>
                <th><h5>Region</h5></th>
                <th><h5>Language</h5></th>
                <th><h5>Population</h5></th>
            </tr>
        </thead>
        <tbody>';

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>
            <td>' . $row['region_id'] . '</td>
            <td>' . $row['region_name'] . '</td>
            <td>' . $row['language'] . '</td>
            <td>' . $row['population'] . '</td>
            
          </tr>';
}

echo '</tbody>
      <tfoot>
        <tr>
        <th><h6>#</h6></th>
        <th><h6>Region</h6></th>
        <th><h6>Language</h6></th>
        <th><h6>Population</h6></th>
        </tr>
      </tfoot>
    </table>';

// Close database connection
mysqli_close($con);
?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
            </div>
            <!-- Footer Section Start -->
            <footer class="footer">
                <div class="footer-body">
                    <ul class="left-panel list-inline mb-0 p-0">
                        <li class="list-inline-item"><a href="extra/privacy-policy.php">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="extra/terms-of-service.php">Terms of Use</a></li>
                    </ul>
                    <div class="right-panel">
                        ©<script>2022</script> <span data-setting="app_name">Hope UI</span>, Made with
                        <span class="text-gray">
                            <svg class="icon-16" width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.85 2.50065C16.481 2.50065 17.111 2.58965 17.71 2.79065C21.401 3.99065 22.731 8.04065 21.62 11.5806C20.99 13.3896 19.96 15.0406 18.611 16.3896C16.68 18.2596 14.561 19.9196 12.28 21.3496L12.03 21.5006L11.77 21.3396C9.48102 19.9196 7.35002 18.2596 5.40102 16.3796C4.06102 15.0306 3.03002 13.3896 2.39002 11.5806C1.26002 8.04065 2.59002 3.99065 6.32102 2.76965C6.61102 2.66965 6.91002 2.59965 7.21002 2.56065H7.33002C7.61102 2.51965 7.89002 2.50065 8.17002 2.50065H8.28002C8.91002 2.51965 9.52002 2.62965 10.111 2.83065H10.17C10.21 2.84965 10.24 2.87065 10.26 2.88965C10.481 2.96065 10.69 3.04065 10.89 3.15065L11.27 3.32065C11.3618 3.36962 11.4649 3.44445 11.554 3.50912C11.6104 3.55009 11.6612 3.58699 11.7 3.61065C11.7163 3.62028 11.7329 3.62996 11.7496 3.63972C11.8354 3.68977 11.9247 3.74191 12 3.79965C13.111 2.95065 14.46 2.49065 15.85 2.50065ZM18.51 9.70065C18.92 9.68965 19.27 9.36065 19.3 8.93965V8.82065C19.33 7.41965 18.481 6.15065 17.19 5.66065C16.78 5.51965 16.33 5.74065 16.18 6.16065C16.04 6.58065 16.26 7.04065 16.68 7.18965C17.321 7.42965 17.75 8.06065 17.75 8.75965V8.79065C17.731 9.01965 17.8 9.24065 17.94 9.41065C18.08 9.58065 18.29 9.67965 18.51 9.70065Z" fill="currentColor"></path>
                            </svg>
                        </span> by <a href="https://iqonic.design/" target="_blank">IQONIC Design</a>.
                    </div>
                </div>
            </footer>
            <!-- Footer Section End -->
        </main>
        
        <!-- Wrapper End-->
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-body">
                <form action="#" autocomplete="off">
                    <h3 class="text-center">Sign In</h3>
                    <p class="text-center">Sign in to stay connected</p>
                    <div class="form-group">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control mb-0"  placeholder="Enter email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control mb-0" placeholder="Enter password" autocomplete="off">
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-check d-inline-block mt-2 pt-1">
                            <input type="checkbox" class="form-check-input" id="customCheck11">
                            <label class="form-check-label" for="customCheck11">Remember Me</label>
                        </div>
                        <a href="#">Forget password</a>
                    </div>
                    <div class="text-center pb-3">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Sign in</button>
                    </div>
                    <p class="text-center">Or sign in with other accounts?</p>
                    <div class="d-flex justify-content-center">
                        <ul class="list-group list-group-horizontal list-group-flush">
                        <li class="list-group-item border-0 pb-0">
                            <a href="#"><img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/fb.svg" alt="fb" loading="lazy"></a>
                        </li>
                        <li class="list-group-item border-0 pb-0">
                            <a href="#"><img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/gm.svg" alt="gm" loading="lazy"></a>
                        </li>
                        <li class="list-group-item border-0 pb-0">
                            <a href="#"><img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/im.svg" alt="im" loading="lazy"></a>
                        </li>
                        <li class="list-group-item border-0 pb-0">
                            <a href="#"><img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/li.svg" alt="li" loading="lazy"></a>
                        </li>
                        </ul>
                    </div>
                    <p class="text-center">Don't have account?<a href="#"> Click here to sign up.</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-body">
                <form action="#">
                    <h3 class="text-center">Sign Up</h3>
                    <p class="text-center">Create your Hope UI account</p>
                    <div class="d-flex justify-content-between">
                    <div class="form-group me-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control mb-0"  placeholder="Enter First Name" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control mb-0" placeholder="Enter Last Name" autocomplete="off">
                    </div>
                    </div>
                    <div class="d-flex justify-content-between">
                    <div class="form-group me-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control mb-0"  placeholder="Enter Email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Phone No.</label>
                        <input type="tel" class="form-control mb-0" placeholder="Enter Phone Number" autocomplete="off">
                    </div>
                    </div>
                    <div class="d-flex justify-content-between">
                    <div class="form-group me-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control mb-0"  placeholder="Enter Password"  autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control mb-0" placeholder="Enter Confirm Password" autocomplete="off">
                    </div>
                    </div>
                        <div class="text-center pb-3">
                            <input type="checkbox" class="form-check-input" id="customCheck112">
                            <label class="form-check-label" for="customCheck112">I agree with the terms of use</label>
                        </div>
                    <div class="text-center pb-3">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Sign in</button>
                    </div>
                    <p class="text-center">Or sign in with other accounts?</p>
                    <div class="d-flex justify-content-center">
                        <ul class="list-group list-group-horizontal list-group-flush">
                            <li class="list-group-item border-0 pb-0">
                                <a href="#"><img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/fb.svg" alt="fb" loading="lazy"></a>
                            </li>
                            <li class="list-group-item border-0 pb-0">
                                <a href="#"><img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/gm.svg" alt="gm" loading="lazy"></a>
                            </li>
                            <li class="list-group-item border-0 pb-0">
                                <a href="#"><img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/im.svg" alt="im" loading="lazy"></a>
                            </li>
                            <li class="list-group-item border-0 pb-0">
                                <a href="#"><img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/li.svg" alt="li" loading="lazy"></a>
                            </li>
                        </ul>
                    </div>
                    <p class="text-center">Already have an Account<a href="#">Sign in</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Library Bundle Script -->
        <script src="../assets/js/core/libs.min.js"></script>
        <!-- Plugin Scripts -->
        
        
        
        
        <!-- Slider-tab Script -->
        <script src="../assets/js/plugins/slider-tabs.js"></script>
        
        
        
        
        
        
        
        
        
        
        
        
        
        <!-- Lodash Utility -->
        <script src="../assets/vendor/lodash/lodash.min.js"></script>
        <!-- Utilities Functions -->
        <script src="../assets/js/iqonic-script/utility.min.js"></script>
        <!-- Settings Script -->
        <script src="../assets/js/iqonic-script/setting.min.js"></script>
        <!-- Settings Init Script -->
        <script src="../assets/js/setting-init.js"></script>
        <!-- External Library Bundle Script -->
        <script src="../assets/js/core/external.min.js"></script>
        <!-- Widgetchart Script -->
        <script src="../assets/js/charts/widgetchartsd1f1.js?v=2.2.0" defer></script>
        <!-- Dashboard Script -->
        <script src="../assets/js/charts/dashboardd1f1.js?v=2.2.0" defer></script>
        <script src="../assets/js/charts/alternate-dashboardd1f1.js?v=2.2.0" defer></script>
        <!-- Hopeui Script -->
        <script src="../assets/js/hope-uid1f1.js?v=2.2.0" defer></script>
        <script src="../assets/js/hope-uiprod1f1.js?v=2.2.0" defer></script>
        <script src="../assets/js/sidebard1f1.js?v=2.2.0" defer></script>    </body>

<!-- Mirrored from templates.iqonic.design/hope-ui/pro/html/dashboard/blank-page.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jul 2023 04:40:19 GMT -->
</html>
