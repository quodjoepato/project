<?php
require('./includes/header.php');
require('./includes/side-bar.php');

$region_query = "SELECT * FROM tblregion";
$region_result = mysqli_query($con, $region_query);

$sql = "SELECT * FROM tblcandidate";
$group1 = mysqli_query($con, $sql);
$group2 = mysqli_query($con, $sql);
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
                                <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                                <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                                <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                                <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                            </svg>
                        </div>
                        <div class="logo-mini">
                            <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                                <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                                <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                                <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                            </svg>
                        </div>
                    </div>
                    <!--logo End-->
                    <h4 class="logo-title d-block d-xl-none" data-setting="app_name">Hope UI</h4>
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
                    <button id="navbar-toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            <div class="d-flex align-items-center mr-2 iq-font-style" role="group" aria-label="First group" data-setting="radio">
                                <input type="radio" class="btn-check" name="theme_font_size" value="theme-fs-sm" id="font-size-sm">
                                <label for="font-size-sm" class="btn btn-border border-0 btn-icon btn-sm" data-bs-toggle="tooltip" title="Font size 14px" data-bs-placement="bottom">
                                    <span class="mb-0 h6" style="color: inherit !important;">A</span>
                                </label>
                                <input type="radio" class="btn-check" name="theme_font_size" value="theme-fs-md" id="font-size-md">
                                <label for="font-size-md" class="btn btn-border border-0 btn-icon" data-bs-toggle="tooltip" title="Font size 16px" data-bs-placement="bottom">
                                    <span class="mb-0 h4" style="color: inherit !important;">A</span>
                                </label>
                                <input type="radio" class="btn-check" name="theme_font_size" value="theme-fs-lg" id="font-size-lg">
                                <label for="font-size-lg" class="btn btn-border border-0 btn-icon" data-bs-toggle="tooltip" title="Font size 18px" data-bs-placement="bottom">
                                    <span class="mb-0 h2" style="color: inherit !important;">A</span>
                                </label>
                            </div>
                        </li>
                        <li class="nav-item dropdown border-end pe-3 d-none d-xl-block">
                            <div class="form-group input-group mb-0 search-input">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-text">
                                    <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                                        <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </div>
                        </li>
                        <li class="nav-item dropdown iq-responsive-menu border-end d-block d-xl-none">
                            <div class="btn btn-sm bg-body" id="navbarDropdown-search-11" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                                    <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown-search-11" style="width: 25rem;">
                                <li class="px-3 py-0">
                                    <div class="form-group input-group mb-0">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-text">
                                            <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </circle>
                                                <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
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
                                        <svg class="normal-screen icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.5528 5.99656L13.8595 10.8961" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M14.8016 5.97618L18.5524 5.99629L18.5176 9.96906" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                            <path d="M5.8574 18.896L10.5507 13.9964" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M9.60852 18.9164L5.85775 18.8963L5.89258 14.9235" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                        </svg>
                                        <svg class="full-normal-screen d-none icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.7542 10.1932L18.1867 5.79319" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M17.2976 10.212L13.7547 10.1934L13.7871 6.62518" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.4224 13.5726L5.82149 18.1398" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M6.74391 13.5535L10.4209 13.5723L10.3867 17.2755" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
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
    <div class="content-inner pb-0 container-fluid" id="page_layout">
        <div>
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Compare Result</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="form-wizard1" class="mt-3 text-center">
                                <ul id="top-tab-list" class="p-0 row list-inline d-flex  justify-content-between">
                                    <li class="mb-2 col-lg-4 col-md-6 text-start active" id="account">
                                        <a href="javascript:void(0);">
                                            <span class="dark-wizard">Candidate 1</span>
                                        </a>
                                    </li>
                                    <li id="personal" class="mb-2 col-lg-4 col-md-6 text-start">
                                        <a href="javascript:void(0);">
                                            <span class="dark-wizard">Candidate 2</span>
                                        </a>
                                    </li>
                                    <li id="confirm" class="mb-2 col-lg-4 col-md-6 text-start">
                                        <a href="javascript:void(0);">
                                        </a>
                                    </li>
                                </ul>
                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card text-start">
                                        <div class="row">
                                            <div class="bd-example">
                                                <nav>
                                                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-5 mt-4 nav nav-tabs nav-iconly" id="nav-tab" role="tablist">
                                                        <?php while ($row = mysqli_fetch_assoc($group1)) { ?>
                                                            <div class="p-3" data-item="list">
                                                                <button data-cd-id="<?= $row['candidate_id'] ?>" class="nav-link col-12 h-100" id="pro-nav-home-tab" onclick="setId('p1','<?= $row['candidate_id'] ?>','<?= $row['fname'] . ' ' . $row['lname'] ?>','<?= $row['image'] ?>')" data-bs-toggle="tab" data-bs-target="#pro-nav-home" type="button" role="tab" aria-controls="pro-nav-home" aria-selected="true">
                                                                    <img src="<?= $row['image'] ?>" alt="User-Profile" class="theme-color-default-img img-fluid rounded-pill avatar-100" loading="lazy">
                                                                    <?= $row['fname'] . ' ' . $row['lname'] ?>
                                                                </button>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    <button id="next-1" disabled onclick="step1()" type="button" name="next" class="btn btn-primary next action-button float-end" value="Next">Next</button>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card text-start">
                                        <div class="bd-example">
                                            <nav>
                                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-5 mt-4 nav nav-tabs nav-iconly" id="nav-tab" role="tablist">
                                                    <?php while ($row = mysqli_fetch_assoc($group2)) { ?>
                                                        <div class="p-3" data-item="list">
                                                            <button data-cd-id="<?= $row['candidate_id'] ?>" class="nav-link col-12 h-100 group-2" id="pro-nav-home-2-<?= $row['candidate_id'] ?>" onclick="setId('p2','<?= $row['candidate_id'] ?>','<?= $row['fname'] . ' ' . $row['lname'] ?>','<?= $row['image'] ?>')" data-bs-toggle="tab" data-bs-target="#pro-nav-home" type="button" role="tab" aria-controls="pro-nav-home" aria-selected="true">
                                                                <img src="<?= $row['image'] ?>" alt="User-Profile" class="theme-color-default-img img-fluid rounded-pill avatar-100" loading="lazy">
                                                                <?= $row['fname'] . ' ' . $row['lname'] ?>
                                                            </button>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </nav>
                                            </nav>
                                        </div>
                                    </div>
                                    <button onclick="submitAll()" id="next-2" type="button" disabled name="next" class="btn btn-primary next action-button float-end" value="Submit">Submit</button>
                                    <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-end me-1" value="Previous">Previous</button>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row d-flex justify-content-between  px-4">
                                            <div class="col-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <div class="d-flex flex-column text-center align-items-center justify-content-between ">
                                                                <div class="card-profile-progress">
                                                                    <div id="circle-progress-1" class="circle-progress  circle-progress-basic circle-progress-danger" data-min-value="0" data-max-value="100" data-value="100" data-type="percent" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100">
                                                                        <svg version="1.1" width="100" height="100" viewBox="0 0 100 100" class="circle-progress">
                                                                            <circle class="circle-progress-circle" cx="50" cy="50" r="46" fill="none" stroke="#ddd" stroke-width="8"></circle>
                                                                            <path d="M 50 50 m -46, 0 a 46,46 0 1,0 92,0 a 46,46 0 1,0 -92,0" class="circle-progress-value" fill="none" stroke="#00E699" stroke-width="8"></path><text class="circle-progress-text" x="50" y="50" font="16px Arial, sans-serif" text-anchor="middle" fill="#999" dy="0.4em"></text>
                                                                        </svg>
                                                                    </div>
                                                                    <img id="person1-img" src="../assets/images/avatars/01.png" alt="User-Profile" class="theme-color-default-img  rounded-circle card-img" loading="lazy">
                                                                </div>
                                                                <div class="fs-italic">
                                                                    <p id="person1-name"> </p>
                                                                    <!-- <div class="text-muted-50 mb-1">
                                                                        <small>Trainer Expert</small>
                                                                    </div> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-6 d-none d-md-block d-xl-block">
                                                <div class="card" data-aos="fade-up" data-aos-delay="1000">
                                                    <div class="flex-wrap card-header d-flex justify-content-between">
                                                        <div class="header-title">
                                                            <h4 class="card-title">Chart</h4>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div id="compare-chart" class="d-activity"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <div class="d-flex flex-column text-center align-items-center justify-content-between">
                                                                <div class="card-profile-progress" >
                                                                    <div id="circle-progress-1" class="circle-progress  circle-progress-basic circle-progress-primary" data-min-value="0" data-max-value="100" data-value="100" data-type="percent" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100">
                                                                        <svg version="1.1" width="50" height="50" viewBox="0 0 100 100" class="circle-progress">
                                                                            <circle class="circle-progress-circle" cx="50" cy="50" r="46" fill="none" stroke="#ddd" stroke-width="8"></circle>
                                                                            <path d="M 50 50 m -46, 0 a 46,46 0 1,0 92,0 a 46,46 0 1,0 -92,0" class="circle-progress-value" fill="none" stroke="#00E699" stroke-width="8"></path><text class="circle-progress-text" x="50" y="50" font="16px Arial, sans-serif" text-anchor="middle" fill="#999" dy="0.4em"></text>
                                                                        </svg>
                                                                    </div>
                                                                    <img id="person2-img" src="../assets/images/avatars/01.png" alt="User-Profile" class="theme-color-default-img img-fluid rounded-circle card-img col-12" loading="lazy">
                                                                </div>
                                                                <div class="fs-italic">
                                                                    <p id="person2-name"> </p>
                                                                    <!-- <div class="text-muted-50 mb-1">
                                                                        <small>Trainer Expert</small>
                                                                    </div> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col w-100">
                                            <div class="card">
                                                <div class="card-body">
                                                    <ul class="list-inline m-0 p-0" id="compare-area">
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
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
                ©
                <script>
                    2022
                </script> <span data-setting="app_name">Hope UI</span>, Made with
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

<!-- Library Bundle Script -->
<script src="../assets/js/core/libs.min.js"></script>
<!-- Plugin Scripts -->




<!-- Slider-tab Script -->
<script src="../assets/js/plugins/slider-tabs.js"></script>













<!-- Library Bundle Script -->
<script src="../assets/js/core/libs.min.js"></script>
<!-- Plugin Scripts -->
<!-- Slider-tab Script -->
<script src="../assets/js/plugins/slider-tabs.js"></script>
<!-- Form Wizard Script -->
<script src="../assets/js/plugins/form-wizard.js" defer></script>
<!-- Lodash Utility -->
<script src="../assets/vendor/lodash/lodash.min.js"></script>
<!-- Utilities Functions -->
<script src="../assets/js/iqonic-script/utility.min.js"></script>
<!-- Settings Script -->
<script src="../assets/js/iqonic-script/setting.min.js"></script>
<!-- Settings Init Script -->
<script src="../assets/js/setting-init.js?v=1"></script>
<!-- External Library Bundle Script -->
<script src="../assets/js/core/external.min.js"></script>
<!-- Widgetchart Script -->
<script src="../assets/js/new-charts.js" defer></script><!-- Widgetchart Script -->
<script src="../assets/js/charts/widgetchartsd1f1.js?v=2.2.0" defer></script>
<!-- Dashboard Script -->
<script src="../assets/js/charts/dashboardd1f1.js?v=2.2.0" defer></script>
<script src="../assets/js/charts/alternate-dashboardd1f1.js?v=2.2.0" defer></script>
<!-- Hopeui Script -->
<script src="../assets/js/hope-uid1f1.js?v=2.2.0" defer></script>
<script src="../assets/js/hope-uiprod1f1.js?v=2.2.0" defer></script>
<script src="../assets/js/sidebard1f1.js?v=2.2.0" defer></script>
</body>

<!-- Mirrored from templates.iqonic.design/hope-ui/pro/html/dashboard/blank-page.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jul 2023 04:40:19 GMT -->

</html>

<script>
    let person1 = ""
    let person2 = ""
    let person1Name = ""
    let person2Name = ""
    let person1Image = ""
    let person2Image = ""

    const setId = (person, id, name, image) => {
        if (person == "p1") {
            person1 = id
            person1Name = name
            person1Image = image
            document.getElementById("next-1").attributes.removeNamedItem("disabled")
        } else if (person == "p2") {
            person2 = id
            person2Name = name
            person2Image = image
            document.getElementById("next-2").attributes.removeNamedItem("disabled")
        }
    }

    const step1 = () => {
        elements = document.querySelectorAll(".group-2")
        elements.forEach(element => {

            if (element.getAttribute("data-cd-id") == person1) {
                element.classList.add("bg-danger")
                element.classList.add("text-white")
                element.setAttribute("disabled", "true")

            } else if (element.classList.contains("bg-danger")) {
                element.classList.remove("bg-danger")
                element.attributes.removeNamedItem("disabled")
                element.classList.add("bg-light")
                element.classList.remove("text-white")
                console.log(element)
            }
        });
    }

    const submitAll = () => {
        document.getElementById("person1-img").src = person1Image
        document.getElementById("person2-img").src = person2Image
        document.getElementById("person1-name").innerText = person1Name
        document.getElementById("person2-name").innerText = person2Name
        $("#compare-area").slideToggle()
        htmlVal = ""
        $.post(
            "process-compare.php", {
                compareResult: true,
                p1Id: person1,
                p2Id: person2,
            },
            (data) => {
                person1Datas = []
                person2Datas = []
                regionNames = []
                resultData = JSON.parse(data)
                resultData.forEach(result => {
                    person1Datas.push(result.person1Result)
                    person2Datas.push(result.person2Result)
                    regionNames.push(result.region_name)
                    result1Badge = result.greater == 'person1' ? `<div class="img-fluid px-3 py-2 bg-soft-success  rounded-pill">${result.person1Result}</div>` : `<div class="img-fluid px-3 py-2  rounded-pill">${result.person1Result}</div>`;
                    result2Badge = result.greater == 'person2' ? `<div class="img-fluid px-3 py-2 bg-soft-success  rounded-pill">${result.person2Result}</div>` : `<div class="img-fluid px-3 py-2  rounded-pill">${result.person2Result}</div>`;
                    htmlVal += `
                    
                    <li class="d-flex mb-4 align-items-center">
                        ${result1Badge}
                        <div class="ms-3 flex-grow-1">
                            <h6>${result.region_name}</h6>
                        </div>
                        ${result2Badge}
                    </li>
                    `
                });
                if (document.querySelectorAll('#compare-chart').length) {
                    const colors = ["#012E88", "#A51232"];
                    const options = {
                        series: [{
                                name: person2Name,
                                data: person2Datas,
                            },
                            {
                                name: person1Name,
                                data: person1Datas,
                            },
                        ],
                        chart: {
                            type: "bar",
                            height: 230,
                            stacked: true,
                            toolbar: {
                                show: false,
                            },
                        },
                        colors: colors,
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: "42%",
                                endingShape: "rounded",
                                borderRadius: 5,
                            },
                        },
                        legend: {
                            show: false,
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            show: true,
                            width: 2,
                            colors: ["transparent"],
                        },
                        xaxis: {
                            categories: regionNames,
                            labels: {
                                minHeight: 20,
                                maxHeight: 70,
                                style: {
                                    colors: "#8A92A6",
                                },
                            },
                        },
                        yaxis: {
                            title: {
                                text: "No of votes",
                            },
                            labels: {
                                minWidth: 19,
                                maxWidth: 19,
                                style: {
                                    colors: "#8A92A6",
                                },
                            },
                        },
                        fill: {
                            opacity: 1,
                        },
                        tooltip: {
                            y: {
                                formatter: function(val) {
                                    return val + " votes";
                                },
                            },
                        },
                    };
                    const chart = new ApexCharts(document.querySelector("#compare-chart"), options);
                    chart.render();
                    //color customizer
                    document.addEventListener("theme_color", (e) => {
                        const colors = ["#012E88", "#A51232"];

                        const newOpt = {
                            colors: colors,
                            fill: {
                                type: "gradient",
                                gradient: {
                                    shade: "dark",
                                    type: "vertical",
                                    gradientToColors: colors, // optional, if not defined - uses the shades of same color in series
                                    opacityFrom: 1,
                                    opacityTo: 1,
                                    colors: colors,
                                },
                            },
                        };
                        chart.updateOptions(newOpt);
                    });
                    //Font customizer
                    document.addEventListener("body_font_family", (e) => {
                        let prefix =
                            getComputedStyle(document.body).getPropertyValue("--prefix") || "bs-";
                        if (prefix) {
                            prefix = prefix.trim();
                        }
                        const font_1 = getComputedStyle(document.body).getPropertyValue(
                            `--${prefix}body-font-family`
                        );
                        const fonts = [font_1.trim()];
                        const newOpt = {
                            chart: {
                                fontFamily: fonts,
                            },
                        };
                        chart.updateOptions(newOpt);
                    });
                }
                document.getElementById("compare-area").innerHTML = htmlVal
                $("#compare-area").slideToggle()
            }
        )
    }
</script>