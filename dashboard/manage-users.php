
<?php 
require('./includes/header.php');
require('./includes/side-bar.php');
require('./includes/authorization.php');



// Assuming you have established a database connection ($con)
if (isset($_POST['submit'])) {
    $full_name = mysqli_real_escape_string($con, $_POST['fname']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $role = mysqli_real_escape_string($con, $_POST['role']);
    
    // Check if a file is uploaded
    if (isset($_FILES['user_image']) && $_FILES['user_image']['error'] === UPLOAD_ERR_OK) {
        $image_name = $_FILES['user_image']['name'];
        $image_tmp = $_FILES['user_image']['tmp_name'];
        
        // Move uploaded image to a desired location
        $image_path = '../assets/images/table/' . $image_name;
        move_uploaded_file($image_tmp, $image_path);
    } else {
        // Default image if no image is uploaded
        $image_path = '../assets/images/table/1.png';
    }
    
    // Insert the data into tbluser
    $sql = "INSERT INTO tbluser (full_name, user_image, username, role, password)
            VALUES ('$full_name', '$image_path', '$username', '$role', '$password')";

    $result = mysqli_query($con, $sql);

     if ($result) {
        echo '<script>alert("User added successfully."); window.location.href = "manage-users.php";</script>';
        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

$sql = "SELECT * FROM tbluser";
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
                                <h4 class="card-title">Add New User</h4>
                            </div>
                        </div>
                        <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <div class="profile-img-edit position-relative">
            <style>
                /* Add your custom CSS styles here */
                .avatar-xl {
                    width: 100px;
                    height: 100px;
                    object-fit: cover;
                    object-position: top center;
                }
            </style>
            <div style="position: relative; display: inline-block;">
                <img class="img-thumbnail  avatar-xl" alt="Preview Image"
                    src="../assets/images/avatars/01.png" id="previewImg"
                    style="max-width: 100px; max-height: 100px;">
                <div id="imagePreview" style="display: none;"></div>
            </div>
        </div>
        <div class="img-extension mt-3">
            <div class="d-inline-block align-items-center">
                <span>Only</span>
                <a href="javascript:void(0);">.jpg</a>
                <a href="javascript:void(0);">.png</a>
                <a href="javascript:void(0);">.jpeg</a>
                <span>allowed</span>
            </div>
        </div>
    </div>

    <div class="form-group col-md-12">
        <label class="form-label" for="fname">Full Name:</label>
        <input type="text" class="form-control" id="fname" placeholder="Full Name" name="fname" required="">
    </div>
    <div class="form-group col-md-12">
        <label for="validationCustomUsername" class="form-label">Username</label>
        <div class="form-group input-group">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" id="validationCustomUsername"
                aria-label="Username" aria-describedby="basic-addon1" name="username" required="">
        </div>
    </div>
    <div class="form-group col-md-12">
        <label for="password" class="form-label">Password</label>
        <div class="form-group input-group">
            <span class="input-group-text" id="basic-addon1">#</span>
            <input type="password" class="form-control" id="validationCustomPassword"
                aria-label="Username" aria-describedby="basic-addon1" name="password" required="">
        </div>
    </div>
    <div class="form-group col-md-12">
        <label class="form-label" for="role">Role</label>
        <select class="form-select" id="role" name="role" required="">
            <option selected="" disabled="" value="">Choose...</option>
            <option value="admin">Administrator</option>
            <option value="user">User</option>
        </select>
    </div>
    <div class="form-group col-md-12">
        <label for="exampleFormControlInputPic" class="form-label">Profile Picture</label>
        <input type="file" class="form-control" id="exampleFormControlInputPic"
            name="user_image" onchange="previewImage(event)">
    </div>
    <hr>
    <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
</form>

<script>
    function previewImage(event) {
        var preview = document.getElementById('previewImg');
        var imagePreviewDiv = document.getElementById('imagePreview');

        // Check if a file is selected
        if (event.target.files && event.target.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                // Show the preview image
                preview.src = e.target.result;
                imagePreviewDiv.style.display = 'block';
            }

            reader.readAsDataURL(event.target.files[0]);
        } else {
            // If no file is selected, hide the preview image
            preview.src = '#';
            imagePreviewDiv.style.display = 'none';
        }
    }
</script>

                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">All Candidates</h5>
                        </div>
                        <div class="card-body px-0">
                            <div class="table-left-bordered table-responsive mt-3">
                                <table class="table mb-0" id="datatable" data-toggle="data-table">
                                    <thead>
                                        <tr class="bg-white">
                                            <th scope="col">Profiles</th>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">User Name</th>
                                            <th scope="col">User Role</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td>
                                            <div class="d-flex align-items-center">
                                            <img class="rounded img-fluid me-3" width="60" src="<?php echo $row['user_image']; ?>" alt="Profile Image" loading="lazy">
                                            </div>
                                            </td>
                                            <td class="text-dark"><h5 class="iq-sub-label"><?php echo $row['full_name']; ?></h5></td>
                                            <td class="text-dark"><?php echo $row['username']; ?></td>
                                            <td class="text-dark"><?php echo $row['role']; ?></td>
                                            
                                            <td>
                                                <div class="d-flex justify-content-evenly">
                                                    <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#"
                                                        role="button">
                                                        <span class="btn-inner">
                                                            <svg class="icon-32" width="32" viewbox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4"
                                                                    d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z"
                                                                    fill="currentColor"></path>
                                                                <path
                                                                    d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z"
                                                                    fill="currentColor"></path>
                                                                <path opacity="0.4"
                                                                    d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-primary btn-icon btn-sm rounded-pill ms-2"
                                                        href="#" role="button">
                                                        <span class="btn-inner">
                                                            <svg class="icon-32" width="32" viewbox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4"
                                                                    d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z"
                                                                    fill="currentColor"></path>
                                                                <path
                                                                    d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z"
                                                                    fill="currentColor"></path>
                                                                <path opacity="0.4"
                                                                    d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-primary btn-icon btn-sm rounded-pill ms-2"
                                                        href="#" role="button">
                                                        <span class="btn-inner">
                                                            <svg class="icon-32" width="32" viewbox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4"
                                                                    d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                                    fill="currentColor"></path>
                                                                <path
                                                                    d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
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
