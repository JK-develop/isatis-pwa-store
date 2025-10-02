<?php session_start(); ?>
<?php
// /header.php

// Enable error reporting for development (optional)
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// Include the database connection
include 'db_connection.php';

// Initialize counters
$app_cnt = 0;
$cat_cnt = 0;
$app_pending_cnt = 0;

try {
    // Query for total applications count
    $statement = $connect->prepare("SELECT count(*) AS cnt FROM applications");
    $statement->execute();
    $all_result = $statement->fetchAll(PDO::FETCH_ASSOC);
    $app_cnt = $all_result[0]['cnt'];

    // Query for total categories count
    $statement = $connect->prepare("SELECT count(*) AS cnt FROM categories");
    $statement->execute();
    $all_result = $statement->fetchAll(PDO::FETCH_ASSOC);
    $cat_cnt = $all_result[0]['cnt'];

    // Query for pending applications count
    $statement = $connect->prepare("SELECT count(*) AS cnt FROM applications WHERE status = 'pending'");
    $statement->execute();
    $all_result = $statement->fetchAll(PDO::FETCH_ASSOC);
    $app_pending_cnt = $all_result[0]['cnt'];

} catch (PDOException $error) {
    // In a production environment, you should log this error.
    $message = $error->getMessage();
    echo "<div class='alert alert-danger'>Error: $message</div>";
}
?>
<!DOCTYPE html>
<html lang="en" class=" ">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CVETEE12NV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-CVETEE12NV');
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6286343568820845"
     crossorigin="anonymous"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>I s a t i s</title>
    <meta content="Isatis" name="description" />
    <meta content="Javad Karimi" name="author" />

    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.ico?v=2">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="assets/images/icons/android-icon-512x512.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link href="assets/css/preloader.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="modules/materialize/materialize.min.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="modules/fonts/mdi/appicon/appicon.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="modules/fonts/mdi/materialdesignicons.min.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="modules/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="modules/fancybox/jquery.fancybox.min.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen" id="main-style" />
    </head>

<body class=" menu-full header-image html <?php echo isset($body_classes) ? $body_classes : ''; ?>"  data-header="light" data-footer="light"  data-header_align="app"  data-menu_type="left" data-menu="light" data-menu_icons="on" data-footer_type="left" data-site_mode="light" data-footer_menu="show" data-footer_menu_style="light"  >
    <div class="preloader-background">
      <div class="preloader-wrapper">
        <div class="loader">
        </div>
      </div>
    </div>
  
    <nav class="fix_topscroll logo_on_fixed topbar navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="index.php" class="brand-logo"><svg id="Isatis" data-name="Isatis-Logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 380.82 380.82"><defs><style>.cls-1{fill:#ca9e67;}.cls-2{fill:#00a554;}.cls-3{fill:#93c460;}.cls-4{fill:#f1b425;}.cls-5{fill:#fcea10;}.cls-6{fill:#e94976;}.cls-7{fill:#f29abd;}.cls-8{fill:#2da7d5;}.cls-9{fill:#a3d9ea;}</style></defs><polygon class="cls-2" points="285.62 240.78 190.41 190.42 240.77 95.21 335.99 145.57 285.62 240.78 285.62 240.78"/><polygon class="cls-3" points="380.82 291.17 335.99 145.57 190.41 190.42 285.62 240.78 380.82 291.17 380.82 291.17"/><polygon class="cls-4" points="140.04 285.62 190.41 190.42 285.62 240.78 235.25 336 140.04 285.62 140.04 285.62"/><polygon class="cls-5" points="89.67 380.83 235.25 336 190.41 190.42 140.04 285.62 89.67 380.83 89.67 380.83"/><polygon class="cls-6" points="95.2 140.05 190.41 190.42 140.04 285.62 44.83 235.26 95.2 140.05 95.2 140.05"/><polygon class="cls-7" points="0 89.67 44.83 235.26 190.41 190.42 95.2 140.05 0 89.67 0 89.67"/><polygon class="cls-8" points="240.77 95.21 190.41 190.42 95.2 140.05 145.58 44.85 240.77 95.21 240.77 95.21"/><polygon class="cls-9" points="291.16 0 145.58 44.85 190.41 190.42 240.77 95.21 291.16 0 291.16 0"/></svg>Isatis</a>    
            <a href="#" data-target="" class="waves-effect waves-circle navicon back-button htmlmode show-on-large"><i class="mdi mdi-chevron-left" data-page=""></i></a>
            <a href="#" data-target="slide-nav" class="waves-effect waves-circle navicon sidenav-trigger show-on-large"><i class="app-icon-menu61"></i></a>
            <a href="#" data-target="slide-settings" class="waves-effect waves-circle navicon right sidenav-trigger show-on-large"><i class="app-icon-equalizer2"></i></a>
            <a href="#" data-target="" class="waves-effect waves-circle navicon right nav-site-mode show-on-large"><i class="app-icon-brightness-contrast"></i></a>
        </div>
    </nav>
    <ul id="slide-nav" class="sidenav sidemenu">
        <li class="user-wrap">
            <div class="user-view row">
                <div class="col s3 imgarea">
                    <a href="#user" class="status available"><img class="circle" src="assets/images/logo.png" alt="menu user"></a>
                </div>
                <div class="col s9 infoarea">
                    <a href="index.php"><span class="name">Isatis</span></a>
                    <a href="index.php"><span class="email">contact@isatis.vip</span></a>
                </div>
            </div>
            <div class="center">
                <a href="how_to_use.php" class='waves-light btn'>How to use</a>
            </div>
            <div class="connections">
                <a href='/' class="count">
                    <div class="no"><?php echo $app_cnt; ?></div>
                    <div class="tag">PWAs</div>
                </a>
                <a href='categories.php' class="count">
                    <div class="no"><?php echo $cat_cnt; ?></div>
                    <div class="tag">Categories</div>
                </a>
                <a href='#!' class="count">
                    <div class="no"><?php echo $app_pending_cnt; ?></div>
                    <div class="tag">Pendings</div>
                </a>
            </div>
        </li>
        <li class="menulinks">
            <ul class="collapsible">
                <li class="lvl1 ">
                    <div class="waves-effect index">
                        <a href="privacy_policy.php">
                        <i class="mdi mdi-lock"></i>
                        <span class="title">Privacy Policy</span></a>
                    </div>
                </li>
                <li class="lvl1 ">
                    <div class="waves-effect index">
                        <a href="terms_of_use.php">
                        <i class="mdi mdi-file-document"></i>
                        <span class="title">Terms of Use</span></a>
                    </div>
                </li>
                <li class="lvl1 ">
                    <div class="waves-effect index">
                        <a href="about_us.php">
                        <i class="mdi mdi-information"></i>
                        <span class="title">About Us</span></a>
                    </div>
                </li>
                <li class="lvl1 ">
                    <div class="waves-effect index">
                        <a href="contact.php">
                        <i class="mdi mdi-email"></i>
                        <span class="title">Contact Us</span></a>
                    </div>
                </li>
                <li class="lvl1 ">
                    <div class="waves-effect">
                        <a href="#" data-target="slide-settings" class="sidenav-trigger">
                        <i class="mdi mdi-settings-outline"></i>
                        <span class="title">Settings</span></a>
                    </div>
                </li>
            </ul>
        </li>
    </ul>

    <ul id="slide-settings" class="sidenav sidesettings">
        <li class="menulinks">
            <ul class="collapsible">
                <li class="sh-wrap"><div class="subheader">Themes</div></li>
            </ul>
        </li>
    </ul>
    
    <div class="menu-close"><i class="mdi mdi-close"></i></div>

    <div class="content-area">