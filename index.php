<?php
require('./dashboard/includes/database.inc.php');

// Check if the form was submitted
if (isset($_POST['login'])) {
    $errr = "";

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = $_POST['password'];

    $query_user = "SELECT * FROM tbluser WHERE username = '{$username}'";
    $result_user = mysqli_query($con, $query_user);

    if (mysqli_num_rows($result_user) > 0) {
        $user = mysqli_fetch_assoc($result_user);

        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['logged_in'] = true;

            if ($user['role'] == 'admin') {
                $_SESSION['user_type'] = "admin";
                header("Location: ./dashboard/index.php");
            } elseif ($user['role'] == 'user') {
                $_SESSION['user_type'] = "user";
                header("Location: ./dashboard/user-index.php");
            }
            exit();
        }
    }

    $errr = "The username or password is incorrect.";
}
?>

<!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from templates.iqonic.design/hope-ui/pro/html/dashboard/auth-pro/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jul 2023 04:39:33 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title data-setting="app_name" data-rightJoin=" Pro | Responsive Bootstrap 5 Admin Dashboard Template">Hope UI</title>
    <meta name="description"
        content="Hope UI Pro is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
    <meta name="keywords"
        content="premium, admin, dashboard, template, bootstrap 5, clean ui, hope ui, admin dashboard,responsive dashboard, optimized dashboard, simple auth">
    <meta name="author" content="Iqonic Design">
    <meta name="DC.title" content="Hope UI Pro Simple | Responsive Bootstrap 5 Admin Dashboard Template">
    <!-- Google Font Api KEY-->
    <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">
    <!-- Config Options -->
    <meta name="setting_options"
        content='{&quot;saveLocal&quot;:&quot;sessionStorage&quot;,&quot;storeKey&quot;:&quot;huisetting-html&quot;,&quot;setting&quot;:{&quot;app_name&quot;:{&quot;value&quot;:&quot;Hope UI&quot;},&quot;theme_scheme_direction&quot;:{&quot;value&quot;:&quot;ltr&quot;},&quot;theme_scheme&quot;:{&quot;value&quot;:&quot;light&quot;},&quot;theme_style_appearance&quot;:{&quot;value&quot;:[&quot;theme-default&quot;]},&quot;theme_color&quot;:{&quot;colors&quot;:{&quot;--{{prefix}}primary&quot;:&quot;#3a57e8&quot;,&quot;--{{prefix}}info&quot;:&quot;#08B1BA&quot;},&quot;value&quot;:&quot;theme-color-default&quot;},&quot;theme_transition&quot;:{&quot;value&quot;:&quot;theme-with-animation&quot;},&quot;theme_font_size&quot;:{&quot;value&quot;:&quot;theme-fs-md&quot;},&quot;page_layout&quot;:{&quot;value&quot;:&quot;container-fluid&quot;},&quot;header_navbar&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;header_banner&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;sidebar_color&quot;:{&quot;value&quot;:&quot;sidebar-white&quot;},&quot;card_color&quot;:{&quot;value&quot;:&quot;card-default&quot;},&quot;sidebar_type&quot;:{&quot;value&quot;:[]},&quot;sidebar_menu_style&quot;:{&quot;value&quot;:&quot;left-bordered&quot;},&quot;footer&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;body_font_family&quot;:{&quot;value&quot;:null},&quot;heading_font_family&quot;:{&quot;value&quot;:null}}}'>
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://templates.iqonic.design/hope-ui/pro/html/assets/images/favicon.ico" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="./assets/css/core/libs.min.css" />












    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="./assets/css/hope-ui.mind1f1.css?v=2.2.0" />
    <link rel="stylesheet" href="./assets/css/pro.mind1f1.css?v=2.2.0" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="./assets/css/custom.mind1f1.css?v=2.2.0" />

    <!-- Dark Css -->
    <link rel="stylesheet" href="./assets/css/dark.mind1f1.css?v=2.2.0" />

    <!-- Customizer Css -->
    <link rel="stylesheet" href="./assets/css/customizer.mind1f1.css?v=2.2.0" />

    <!-- RTL Css -->
    <link rel="stylesheet" href="./assets/css/rtl.mind1f1.css?v=2.2.0" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

</head>

<body class=" ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body">
                <img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/loader.webp" alt="loader"
                    class="light-loader img-fluid w-25" width="200" height="200">
            </div>
        </div>
    </div>
    <!-- loader END -->
    <div class="wrapper">
        <div class="iq-auth-page">

            <nav class="navbar iq-auth-logo">
                <div class="container-fluid">
                    <a href="../index-2.html" class="iq-link d-flex align-items-center">
                        <img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/favicon.ico" alt="logo"
                            loading="lazy" />
                        <h4 data-setting="app_name" class="mb-0">Hope UI</h4>
                    </a>
                </div>
            </nav>
            <div class="iq-banner-logo d-none d-lg-block">
                <img class="auth-image" src="./assets/images/01.png" alt="logo-img" loading="lazy" />
            </div>
            <div class="container-inside">
                <div class="main-circle circle-small"></div>
                <div class="main-circle circle-medium"></div>
                <div class="main-circle circle-large"></div>
                <div class="main-circle circle-xlarge"></div>
                <div class="main-circle circle-xxlarge"></div>
            </div>
            <div class="row d-flex align-items-center iq-auth-container w-100">
                <div class="col-10 col-xl-4 offset-xl-7 offset-1">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Sign In</h3>
                            <p class="text-center">Sign in to stay connected</p>
                            <form method="POST" action="">
                                <div class="form-group">
                                    <label class="form-label" for="username">Username</label>
                                    <input type="text" class="form-control mb-0" id="username" name="username"
                                        placeholder="Enter username">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" class="form-control mb-0" id="password" name="password"
                                        placeholder="Enter password">
                                </div>
                                <div class="text-center pb-3">
                                    <button type="submit" class="btn btn-primary" name="login">Sign in</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    

    <!-- Library Bundle Script -->
    <script src="./assets/js/core/libs.min.js"></script>
    <!-- Plugin Scripts -->




    <!-- Slider-tab Script -->
    <script src="./assets/js/plugins/slider-tabs.js"></script>













    <!-- Lodash Utility -->
    <script src="./assets/vendor/lodash/lodash.min.js"></script>
    <!-- Utilities Functions -->
    <script src="./assets/js/iqonic-script/utility.min.js"></script>
    <!-- Settings Script -->
    <script src="./assets/js/iqonic-script/setting.min.js"></script>
    <!-- Settings Init Script -->
    <script src="./assets/js/setting-init.js"></script>
    <!-- External Library Bundle Script -->
    <script src="./assets/js/core/external.min.js"></script>
    <!-- Widgetchart Script -->
    <script src="./assets/js/charts/widgetchartsd1f1.js?v=2.2.0" defer></script>
    <!-- Dashboard Script -->
    <script src="./assets/js/charts/dashboardd1f1.js?v=2.2.0" defer></script>
    <script src="./assets/js/charts/alternate-dashboardd1f1.js?v=2.2.0" defer></script>
    <!-- Hopeui Script -->
    <script src="./assets/js/hope-uid1f1.js?v=2.2.0" defer></script>
    <script src="./assets/js/hope-uiprod1f1.js?v=2.2.0" defer></script>
    <script src="./assets/js/sidebard1f1.js?v=2.2.0" defer></script>
</body>

<!-- Mirrored from templates.iqonic.design/hope-ui/pro/html/dashboard/auth-pro/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jul 2023 04:39:33 GMT -->

</html>