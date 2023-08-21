<?php
session_start();
require('database.inc.php');
?>

<!doctype html>
<html lang="en" dir="ltr">
    
<!-- Mirrored from templates.iqonic.design/hope-ui/pro/html/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jul 2023 04:38:35 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title data-setting="app_name" data-rightJoin=" Pro | Responsive Bootstrap 5 Admin Dashboard Template">Hope UI Pro | Responsive Bootstrap 5 Admin Dashboard Template</title>
        <meta name="description" content="Hope UI Pro is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
        <meta name="keywords" content="premium, admin, dashboard, template, bootstrap 5, clean ui, hope ui, admin dashboard,responsive dashboard, optimized dashboard,">
        <meta name="author" content="Iqonic Design">
        <meta name="DC.title" content="Hope UI Pro | Responsive Bootstrap 5 Admin Dashboard Template">

        <!-- Google Font Api KEY-->
        <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">
        <!-- Config Options -->
        <meta name="setting_options" content='{&quot;saveLocal&quot;:&quot;sessionStorage&quot;,&quot;storeKey&quot;:&quot;huisetting-html&quot;,&quot;setting&quot;:{&quot;app_name&quot;:{&quot;target&quot;:&quot;[data-setting=\&quot;app_name\&quot;]&quot;,&quot;type&quot;:&quot;text&quot;,&quot;value&quot;:&quot;Hope UI&quot;},&quot;theme_scheme_direction&quot;:{&quot;target&quot;:&quot;html&quot;,&quot;choices&quot;:[&quot;ltr&quot;,&quot;rtl&quot;],&quot;value&quot;:&quot;ltr&quot;},&quot;theme_scheme&quot;:{&quot;target&quot;:&quot;body&quot;,&quot;choices&quot;:[&quot;light&quot;,&quot;dark&quot;,&quot;auto&quot;],&quot;value&quot;:&quot;light&quot;},&quot;theme_style_appearance&quot;:{&quot;target&quot;:&quot;body&quot;,&quot;choices&quot;:[&quot;theme-default&quot;,&quot;theme-flat&quot;,&quot;theme-bordered&quot;,&quot;theme-sharp&quot;],&quot;value&quot;:[&quot;theme-default&quot;]},&quot;theme_color&quot;:{&quot;target&quot;:&quot;body&quot;,&quot;choices&quot;:[&quot;theme-color-blue&quot;,&quot;theme-color-gray&quot;,&quot;theme-color-red&quot;,&quot;theme-color-yellow&quot;,&quot;theme-color-pink&quot;,&quot;theme-color-default&quot;],&quot;type&quot;:&quot;variable&quot;,&quot;colors&quot;:{&quot;--{{prefix}}primary&quot;:&quot;#3a57e8&quot;,&quot;--{{prefix}}info&quot;:&quot;#08B1BA&quot;},&quot;value&quot;:&quot;theme-color-default&quot;},&quot;theme_transition&quot;:{&quot;target&quot;:&quot;body&quot;,&quot;choices&quot;:[&quot;theme-without-animation&quot;,&quot;theme-with-animation&quot;],&quot;value&quot;:&quot;theme-with-animation&quot;},&quot;theme_font_size&quot;:{&quot;target&quot;:&quot;html&quot;,&quot;choices&quot;:[&quot;theme-fs-sm&quot;,&quot;theme-fs-md&quot;,&quot;theme-fs-lg&quot;],&quot;value&quot;:&quot;theme-fs-md&quot;},&quot;page_layout&quot;:{&quot;target&quot;:&quot;#page_layout&quot;,&quot;choices&quot;:[&quot;container&quot;,&quot;container-fluid&quot;],&quot;value&quot;:&quot;container-fluid&quot;},&quot;header_navbar_show&quot;:{&quot;target&quot;:&quot;.iq-navbar&quot;,&quot;choices&quot;:[&quot;iq-navbar-none&quot;],&quot;value&quot;:[]},&quot;header_navbar&quot;:{&quot;target&quot;:&quot;.iq-navbar&quot;,&quot;choices&quot;:[&quot;default&quot;,&quot;fixed&quot;,&quot;navs-sticky&quot;,&quot;nav-glass&quot;,&quot;navs-transparent&quot;,&quot;boxed&quot;,&quot;hidden&quot;],&quot;value&quot;:&quot;default&quot;},&quot;header_banner&quot;:{&quot;target&quot;:&quot;.iq-banner&quot;,&quot;choices&quot;:[&quot;default&quot;,&quot;navs-bg-color&quot;,&quot;hide&quot;],&quot;value&quot;:&quot;default&quot;},&quot;card_color&quot;:{&quot;target&quot;:&quot;body&quot;,&quot;choices&quot;:[&quot;card-default&quot;,&quot;card-glass&quot;,&quot;card-transparent&quot;],&quot;value&quot;:&quot;card-default&quot;},&quot;sidebar_show&quot;:{&quot;target&quot;:&quot;[data-toggle=\&quot;main-sidebar\&quot;]&quot;,&quot;choices&quot;:[&quot;sidebar-none&quot;],&quot;value&quot;:[]},&quot;sidebar_color&quot;:{&quot;target&quot;:&quot;[data-toggle=\&quot;main-sidebar\&quot;]&quot;,&quot;choices&quot;:[&quot;sidebar-white&quot;,&quot;sidebar-dark&quot;,&quot;sidebar-color&quot;,&quot;sidebar-transparent&quot;,&quot;sidebar-glass&quot;],&quot;value&quot;:&quot;sidebar-white&quot;},&quot;sidebar_type&quot;:{&quot;target&quot;:&quot;[data-toggle=\&quot;main-sidebar\&quot;]&quot;,&quot;choices&quot;:[&quot;sidebar-hover&quot;,&quot;sidebar-mini&quot;,&quot;sidebar-boxed&quot;,&quot;sidebar-soft&quot;],&quot;value&quot;:[&quot;sidebar-mini&quot;]},&quot;sidebar_menu_style&quot;:{&quot;target&quot;:&quot;[data-toggle=\&quot;main-sidebar\&quot;]&quot;,&quot;choices&quot;:[&quot;sidebar-default navs-rounded&quot;,&quot;sidebar-default navs-rounded-all&quot;,&quot;sidebar-default navs-pill&quot;,&quot;sidebar-default navs-pill-all&quot;,&quot;left-bordered&quot;,&quot;sidebar-default navs-full-width&quot;],&quot;value&quot;:&quot;left-bordered&quot;},&quot;footer&quot;:{&quot;target&quot;:&quot;.footer&quot;,&quot;choices&quot;:[&quot;sticky&quot;,&quot;default&quot;,&quot;glass&quot;],&quot;value&quot;:&quot;default&quot;},&quot;body_font_family&quot;:{&quot;target&quot;:&quot;body&quot;,&quot;type&quot;:&quot;variable&quot;,&quot;value&quot;:null},&quot;heading_font_family&quot;:{&quot;target&quot;:&quot;heading&quot;,&quot;type&quot;:&quot;variable&quot;,&quot;value&quot;:null}}}'>        Favicon
        <link rel="shortcut icon" href="https://templates.iqonic.design/hope-ui/pro/html/assets/images/favicon.ico" />
        
        <!-- Library / Plugin Css Build -->
        <link rel="stylesheet" href="../assets/css/core/libs.min.css" />
        
        <!-- Flatpickr css -->
        <link rel="stylesheet" href="../assets/vendor/flatpickr/dist/flatpickr.min.css" />
        
        <link rel="stylesheet" href="../assets/vendor/sheperd/dist/css/sheperd.css">
        
        
        
        
        
        <!-- SwiperSlider css -->
        <link rel="stylesheet" href="../assets/vendor/swiperSlider/swiper-bundle.min.css">
        
        
        
        
        <!-- Hope Ui Design System Css -->
        <link rel="stylesheet" href="../assets/css/hope-ui.mind1f1.css?v=2.2.0" />
        <link rel="stylesheet" href="../assets/css/pro.mind1f1.css?v=2.2.0" />
        
        <!-- Custom Css -->
        <link rel="stylesheet" href="../assets/css/custom.mind1f1.css?v=2.2.0" />
        
        <!-- Dark Css -->
        <link rel="stylesheet" href="../assets/css/dark.mind1f1.css?v=2.2.0" />
        
        <!-- Customizer Css -->
        <link rel="stylesheet" href="../assets/css/customizer.mind1f1.css?v=2.2.0" />
        
        <!-- RTL Css -->
        <link rel="stylesheet" href="../assets/css/rtl.mind1f1.css?v=2.2.0" />
        
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet"href="../assets/css/e-commerce.min.css?v=2.2.0" />
        
    </head>
    <body class="  ">
        <!-- loader Start -->
        <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body">
            <div class="iq-loader-box">
              <div class="iq-loader-13"></div>
            </div>
            </div>
        </div>
        </div>
        <!-- loader END -->