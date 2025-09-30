<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include 'db_connection.php';

$app_cnt = 0;
$cat_cnt = 0;
$app_pending_cnt = 0;

try {
  $statement = $connect->prepare("SELECT count(*) AS cnt FROM applications");
  $statement->execute();
  $all_result = $statement->fetchAll(PDO::FETCH_ASSOC);
  $app_cnt = $all_result[0]['cnt']; 

  $statement = $connect->prepare("SELECT count(*) AS cnt FROM categories");
  $statement->execute();
  $all_result = $statement->fetchAll(PDO::FETCH_ASSOC);
  $cat_cnt = $all_result[0]['cnt']; 
  
  $statement = $connect->prepare("SELECT count(*) AS cnt FROM applications WHERE status = 'pending'");
  $statement->execute();
  $all_result = $statement->fetchAll(PDO::FETCH_ASSOC);
  $app_pending_cnt = $all_result[0]['cnt']; 
} catch (PDOException $error) {  
  $message = $error->getMessage();  
  echo "<div class='alert alert-danger'>Error: $message</div>";
}
?>
<!DOCTYPE html>
<html lang="en" class=" ">

<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CVETEE12NV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CVETEE12NV');
</script>
  <!-- 
         * @Package: Isatis 
         * @Author: Javad Karimi
         * @Version: 1.0
        -->
    <!-- GOOGLE ADS -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6286343568820845"
     crossorigin="anonymous"></script>
    <!-- GOOGLE ADS -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Isatis Mobile App: Welcome Screen</title>
  <meta content="Isatis Mobile App" name="description" />
  <meta content="Isatis.vip" name="author" />


  <!-- App Icons -->
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
  <link rel="manifest" href="assets/images/icons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/images/icons/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">






  <!-- CORE CSS FRAMEWORK - START -->
  <link href="assets/css/preloader.css" type="text/css" rel="stylesheet" media="screen" />

  <link href="modules/materialize/materialize.min.css" type="text/css" rel="stylesheet" media="screen" />
  <link href="modules/fonts/mdi/appicon/appicon.css" type="text/css" rel="stylesheet" media="screen" />
  <link href="modules/fonts/mdi/materialdesignicons.min.css" type="text/css" rel="stylesheet" media="screen" />
  <link href="modules/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen" />


  <!-- CORE CSS FRAMEWORK - END -->

  <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

  <!-- CORE CSS TEMPLATE - START -->

  
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen" id="main-style" />
  <!-- CORE CSS TEMPLATE - END -->

  

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->


<body class=" menu-full  isfullscreen  html"  data-header="light" data-footer="light"  data-header_align="app"  data-menu_type="left" data-menu="light" data-menu_icons="on" data-footer_type="left" data-site_mode="light" data-footer_menu="show" data-footer_menu_style="light"  >
    <div class="preloader-background">
      <div class="preloader-wrapper">
        <div class="loader">
        </div>
      </div>
    </div>
  


  <!-- SIDEBAR - START -->

<!-- MAIN MENU - START -->



<!-- MAIN MENU - END -->



<!--  SIDEBAR - END --><!-- SIDEBAR - START -->

<!-- MAIN MENU - START -->



<!-- MAIN MENU - END -->



<!--  SIDEBAR - END -->

<!-- START navigation -->
<nav class="fix_topscroll logo_on_fixed  topbar navigation">
  <div class="nav-wrapper container">
  <a id="logo-container" href="index.php" class=" brand-logo " ><svg id="Isatis" data-name="Isatis-Logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 380.82 380.82"><defs><style>.cls-1{fill:#ca9e67;}.cls-2{fill:#00a554;}.cls-3{fill:#93c460;}.cls-4{fill:#f1b425;}.cls-5{fill:#fcea10;}.cls-6{fill:#e94976;}.cls-7{fill:#f29abd;}.cls-8{fill:#2da7d5;}.cls-9{fill:#a3d9ea;}</style></defs><polygon class="cls-2" points="285.62 240.78 190.41 190.42 240.77 95.21 335.99 145.57 285.62 240.78 285.62 240.78"/><polygon class="cls-3" points="380.82 291.17 335.99 145.57 190.41 190.42 285.62 240.78 380.82 291.17 380.82 291.17"/><polygon class="cls-4" points="140.04 285.62 190.41 190.42 285.62 240.78 235.25 336 140.04 285.62 140.04 285.62"/><polygon class="cls-5" points="89.67 380.83 235.25 336 190.41 190.42 140.04 285.62 89.67 380.83 89.67 380.83"/><polygon class="cls-6" points="95.2 140.05 190.41 190.42 140.04 285.62 44.83 235.26 95.2 140.05 95.2 140.05"/><polygon class="cls-7" points="0 89.67 44.83 235.26 190.41 190.42 95.2 140.05 0 89.67 0 89.67"/><polygon class="cls-8" points="240.77 95.21 190.41 190.42 95.2 140.05 145.58 44.85 240.77 95.21 240.77 95.21"/><polygon class="cls-9" points="291.16 0 145.58 44.85 190.41 190.42 240.77 95.21 291.16 0 291.16 0"/></svg>Isatis</a>      
      
      <a href="#" data-target="" class="waves-effect waves-circle navicon back-button htmlmode show-on-large "><i class="mdi mdi-chevron-left" data-page=""></i></a>
    
    
    <a href="#" data-target="slide-nav" class="waves-effect waves-circle navicon sidenav-trigger show-on-large"><i class="app-icon-menu61"></i></a>

    <a href="#" data-target="slide-settings" class="waves-effect waves-circle navicon right sidenav-trigger show-on-large"><i class="app-icon-equalizer2"></i></a>

    <a href="#" data-target="" class="waves-effect waves-circle navicon right nav-site-mode show-on-large"><i class="app-icon-brightness-contrast"></i></a>
    <!-- <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a> -->
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
                <div class="no"><?php echo $app_cnt  ?></div>
        <div class="tag">PWAs</div>      </a>
              <a href='categories.php' class="count">
                <div class="no"><?php echo $cat_cnt  ?></div>
        <div class="tag">Categories</div>      </a>
              <a href='#!' class="count">
                <div class="no"><?php echo $app_pending_cnt  ?></div>
        <div class="tag">Pendings</div>      </a>
      </div>
        


  </li>


  <li class="menulinks">
    <ul class="collapsible">
    
                        <li class="lvl1 ">
                        <div class=" waves-effect   index " >
                            <a href="privacy_policy.php">
                            <i class="mdi mdi-lock"></i>
                            <span class="title">Privacy Policy</span></a>
                            </div>
                        </li>
                        <li class="lvl1 ">
                        <div class=" waves-effect   index " >
                            <a href="terms_of_use.php">
                            <i class="mdi mdi-file-document"></i>
                            <span class="title">Terms of Use</span></a>
                            </div>
                        </li>
                        <li class="lvl1 ">
                        <div class=" waves-effect   index " >
                            <a href="about_us.php">
                            <i class="mdi mdi-information"></i>
                            <span class="title">About Us</span></a>
                            </div>
                        </li>
                        <li class="lvl1 ">
                        <div class=" waves-effect   index " >
                            <a href="contact.php">
                            <i class="mdi mdi-email"></i>
                            <span class="title">Contact Us</span></a>
                            </div>
                        </li>


                        
                    <li class="lvl1 ">
                    <div class="waves-effect "><a href="#" data-target="slide-settings" class="sidenav-trigger"><i class="mdi mdi-settings-outline"></i><span class="title">Settings</span>  </a>
                        </div></li>    <!-- Menu Data End-->


</ul>
</li>
  </ul>
  <!-- END navigation -->


  <ul id="slide-settings" class="sidenav sidesettings ">
    <li class="menulinks">
      <ul class="collapsible">
      <!-- Menu Settings Start-->
      <li class="sh-wrap"><div class="subheader">Themes</div></li>
                    <li class="lvl1  theme">
                    <div class="waves-effect appsettings " data-type="theme" data-value="red">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-intermediate red-text text-lighten-2"></i>
                        <span class="title">Red</span>  </a>
                        </div></li>
                    <li class="lvl1  theme">
                    <div class="waves-effect appsettings " data-type="theme" data-value="orange">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline deep-orange-text text-lighten-2"></i>
                        <span class="title">Orange</span>  </a>
                        </div></li>
                    <li class="lvl1  theme">
                    <div class="waves-effect appsettings " data-type="theme" data-value="blue">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline blue-text text-lighten-2"></i>
                        <span class="title">Blue</span>  </a>
                        </div></li>
                    <li class="lvl1  theme">
                    <div class="waves-effect appsettings " data-type="theme" data-value="teal">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline teal-text text-lighten-2"></i>
                        <span class="title">Teal</span>  </a>
                        </div></li>
                    <li class="lvl1  theme">
                    <div class="waves-effect appsettings " data-type="theme" data-value="pink">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline pink-text text-lighten-2"></i>
                        <span class="title">Pink</span>  </a>
                        </div></li>
                    <li class="lvl1  theme">
                    <div class="waves-effect appsettings " data-type="theme" data-value="light-green">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline light-green-text text-lighten-2"></i>
                        <span class="title">Light Green</span>  </a>
                        </div></li>
                    <li class="lvl1  theme">
                    <div class="waves-effect appsettings " data-type="theme" data-value="purple">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline purple-text text-lighten-2"></i>
                        <span class="title">Violet</span>  </a>
                        </div></li>
                    <li class="lvl1  theme">
                    <div class="waves-effect appsettings " data-type="theme" data-value="green">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline green-text text-lighten-2"></i>
                        <span class="title">Green</span>  </a>
                        </div></li>
                    <li class="lvl1  theme">
                    <div class="waves-effect appsettings active" data-type="theme" data-value="deep-purple">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline deep-purple-text text-lighten-2"></i>
                        <span class="title">Purple</span>  </a>
                        </div></li>
                    <li class="lvl1  theme">
                    <div class="waves-effect appsettings " data-type="theme" data-value="amber">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline amber-text"></i>
                        <span class="title">Yellow</span>  </a>
                        </div></li>
                    <li class="lvl1  theme">
                    <div class="waves-effect appsettings " data-type="theme" data-value="indigo">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline indigo-text text-lighten-2"></i>
                        <span class="title">Indigo</span>  </a>
                        </div></li>
                    <li class="lvl1  theme">
                    <div class="waves-effect appsettings " data-type="theme" data-value="blue-grey">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline blue-grey-text text-lighten-2"></i>
                        <span class="title">Blue Grey</span>  </a>
                        </div></li>
                    <li class="lvl1  theme">
                    <div class="waves-effect appsettings " data-type="theme" data-value="brown">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline brown-text text-lighten-2"></i>
                        <span class="title">Brown</span>  </a>
                        </div></li>
                    <li class="lvl1  theme">
                    <div class="waves-effect appsettings " data-type="theme" data-value="cyan">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline cyan-text text-lighten-2"></i>
                        <span class="title">Cyan</span>  </a>
                        </div></li>
                    <li class="lvl1  theme">
                    <div class="waves-effect appsettings " data-type="theme" data-value="grey">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline grey-text text-darken-2"></i>
                        <span class="title">Black</span>  </a>
                        </div></li><li class="sep-wrap"><div class="divider"></div></li><li class="sh-wrap"><div class="subheader">Site Mode</div></li>
                    <li class="lvl1  site_mode">
                    <div class="waves-effect appsettings active" data-type="site_mode" data-value="light">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-intermediate"></i>
                        <span class="title">Light Mode</span>  </a>
                        </div></li>
                    <li class="lvl1  site_mode">
                    <div class="waves-effect appsettings " data-type="site_mode" data-value="dark">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline"></i>
                        <span class="title">Dark Mode</span>  </a>
                        </div></li><li class="sep-wrap"><div class="divider"></div></li><li class="sh-wrap"><div class="subheader">Header Style</div></li>
                    <li class="lvl1  header">
                    <div class="waves-effect appsettings active" data-type="header" data-value="light">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-intermediate"></i>
                        <span class="title">Light Header</span>  </a>
                        </div></li>
                    <li class="lvl1  header">
                    <div class="waves-effect appsettings " data-type="header" data-value="dark">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline"></i>
                        <span class="title">Dark Header</span>  </a>
                        </div></li>
                    <li class="lvl1  header">
                    <div class="waves-effect appsettings " data-type="header" data-value="colored">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline"></i>
                        <span class="title">Colored Header</span>  </a>
                        </div></li><li class="sep-wrap"><div class="divider"></div></li><li class="sh-wrap"><div class="subheader">Header Alignment</div></li>
                    <li class="lvl1  header_align">
                    <div class="waves-effect appsettings " data-type="header_align" data-value="left">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-intermediate"></i>
                        <span class="title">Left Align Header</span>  </a>
                        </div></li>
                    <li class="lvl1  header_align">
                    <div class="waves-effect appsettings " data-type="header_align" data-value="center">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline"></i>
                        <span class="title">Center Align Header</span>  </a>
                        </div></li>
                    <li class="lvl1  header_align">
                    <div class="waves-effect appsettings " data-type="header_align" data-value="right">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline"></i>
                        <span class="title">Right Align Header</span>  </a>
                        </div></li>
                    <li class="lvl1  header_align">
                    <div class="waves-effect appsettings active" data-type="header_align" data-value="app">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline"></i>
                        <span class="title">App Based Align Header</span>  </a>
                        </div></li><li class="sep-wrap"><div class="divider"></div></li><li class="sh-wrap"><div class="subheader">Menu Style</div></li>
                    <li class="lvl1  menu">
                    <div class="waves-effect appsettings active" data-type="menu" data-value="light">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-intermediate"></i>
                        <span class="title">Light Menu</span>  </a>
                        </div></li>
                    <li class="lvl1  menu">
                    <div class="waves-effect appsettings " data-type="menu" data-value="dark">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline"></i>
                        <span class="title">Dark Menu</span>  </a>
                        </div></li>
                    <li class="lvl1  menu">
                    <div class="waves-effect appsettings " data-type="menu" data-value="colored">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline"></i>
                        <span class="title">Colored Menu</span>  </a>
                        </div></li><li class="sep-wrap"><div class="divider"></div></li><li class="sh-wrap"><div class="subheader">Menu Icons</div></li>
                    <li class="lvl1  menu_icons">
                    <div class="waves-effect appsettings active" data-type="menu_icons" data-value="on">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-intermediate"></i>
                        <span class="title">Menu Icons Show</span>  </a>
                        </div></li>
                    <li class="lvl1  menu_icons">
                    <div class="waves-effect appsettings " data-type="menu_icons" data-value="off">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline"></i>
                        <span class="title">Menu Icons Hide</span>  </a>
                        </div></li><li class="sep-wrap"><div class="divider"></div></li><li class="sh-wrap"><div class="subheader">Page Footer Style</div></li>
                    <li class="lvl1  footer">
                    <div class="waves-effect appsettings active" data-type="footer" data-value="light">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-intermediate"></i>
                        <span class="title">Light Footer</span>  </a>
                        </div></li>
                    <li class="lvl1  footer">
                    <div class="waves-effect appsettings " data-type="footer" data-value="dark">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline"></i>
                        <span class="title">Dark Footer</span>  </a>
                        </div></li>
                    <li class="lvl1  footer">
                    <div class="waves-effect appsettings " data-type="footer" data-value="colored">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline"></i>
                        <span class="title">Colored Footer</span>  </a>
                        </div></li><li class="sep-wrap"><div class="divider"></div></li><li class="sh-wrap"><div class="subheader">Page Footer Type</div></li>
                    <li class="lvl1  footer_type">
                    <div class="waves-effect appsettings " data-type="footer_type" data-value="minimal">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-intermediate"></i>
                        <span class="title">Minimal Footer</span>  </a>
                        </div></li>
                    <li class="lvl1  footer_type">
                    <div class="waves-effect appsettings active" data-type="footer_type" data-value="left">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline"></i>
                        <span class="title">Left Aligned Footer</span>  </a>
                        </div></li>
                    <li class="lvl1  footer_type">
                    <div class="waves-effect appsettings " data-type="footer_type" data-value="center">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline"></i>
                        <span class="title">Centered Footer</span>  </a>
                        </div></li><li class="sep-wrap"><div class="divider"></div></li><li class="sh-wrap"><div class="subheader">Fixed Footer Menu</div></li>
                    <li class="lvl1  footer_menu">
                    <div class="waves-effect appsettings active" data-type="footer_menu" data-value="show">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-intermediate"></i>
                        <span class="title">Show Fixed Footer Menu</span>  </a>
                        </div></li>
                    <li class="lvl1  footer_menu">
                    <div class="waves-effect appsettings " data-type="footer_menu" data-value="hide">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline"></i>
                        <span class="title">Hide Fixed Footer Menu</span>  </a>
                        </div></li><li class="sep-wrap"><div class="divider"></div></li><li class="sh-wrap"><div class="subheader">Fixed Footer Menu Style</div></li>
                    <li class="lvl1  footer_menu_style">
                    <div class="waves-effect appsettings active" data-type="footer_menu_style" data-value="light">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-intermediate"></i>
                        <span class="title">Light Fixed Menu</span>  </a>
                        </div></li>
                    <li class="lvl1  footer_menu_style">
                    <div class="waves-effect appsettings " data-type="footer_menu_style" data-value="dark">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline"></i>
                        <span class="title">Dark Fixed Menu</span>  </a>
                        </div></li>
                    <li class="lvl1  footer_menu_style">
                    <div class="waves-effect appsettings " data-type="footer_menu_style" data-value="colored">
                        <a href="#!">
                        <i class="mdi mdi-checkbox-blank-outline"></i>
                        <span class="title">Colored Fixed Menu</span>  </a>
                        </div></li>      <!-- Menu Settings End-->
      </ul>
    </li>
  </ul>
<div class="menu-close"><i class="mdi mdi-close"></i></div>

<div class="content-area">


<h1 class="white-text center welcome-logo"><svg id="Isatis" data-name="Isatis-Logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 380.82 380.82"><defs><style>.cls-1{fill:#ca9e67;}.cls-2{fill:#00a554;}.cls-3{fill:#93c460;}.cls-4{fill:#f1b425;}.cls-5{fill:#fcea10;}.cls-6{fill:#e94976;}.cls-7{fill:#f29abd;}.cls-8{fill:#2da7d5;}.cls-9{fill:#a3d9ea;}</style></defs><polygon class="cls-2" points="285.62 240.78 190.41 190.42 240.77 95.21 335.99 145.57 285.62 240.78 285.62 240.78"/><polygon class="cls-3" points="380.82 291.17 335.99 145.57 190.41 190.42 285.62 240.78 380.82 291.17 380.82 291.17"/><polygon class="cls-4" points="140.04 285.62 190.41 190.42 285.62 240.78 235.25 336 140.04 285.62 140.04 285.62"/><polygon class="cls-5" points="89.67 380.83 235.25 336 190.41 190.42 140.04 285.62 89.67 380.83 89.67 380.83"/><polygon class="cls-6" points="95.2 140.05 190.41 190.42 140.04 285.62 44.83 235.26 95.2 140.05 95.2 140.05"/><polygon class="cls-7" points="0 89.67 44.83 235.26 190.41 190.42 95.2 140.05 0 89.67 0 89.67"/><polygon class="cls-8" points="240.77 95.21 190.41 190.42 95.2 140.05 145.58 44.85 240.77 95.21 240.77 95.21"/><polygon class="cls-9" points="291.16 0 145.58 44.85 190.41 190.42 240.77 95.21 291.16 0 291.16 0"/></svg>Privacy Policy</h1>
<div class="section" style="padding: 0px 20px;">
    <div class="row">
        <div class="card gray lighten-5">
            <div class="card-content white-text">
                <p>Last updated: December 26, 2024</p>
                <p>This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.</p>
                <p>We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy. This Privacy Policy has been created with the help of the <a href="https://www.freeprivacypolicy.com/free-privacy-policy-generator/" target="_blank">Free Privacy Policy Generator</a>.</p>
                    <h2>Interpretation and Definitions</h2>
                    <h3>Interpretation</h3>
                <p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
                <h3>Definitions</h3>
                <p>For the purposes of this Privacy Policy:</p>
                <ul style="padding-left: 10px;">
                <li style="list-style-type: circle;">
                <p><strong>Account</strong> means a unique account created for You to access our Service or parts of our Service.</p>
                </li>
                <li style="list-style-type: circle;">
                <p><strong>Affiliate</strong> means an entity that controls, is controlled by or is under common control with a party, where &quot;control&quot; means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.</p>
                </li>
                <li style="list-style-type: circle;">
                <p><strong>Application</strong> refers to Isatis, the software program provided by the Company.</p>
                </li>
                <li style="list-style-type: circle;">
                <p><strong>Company</strong> (referred to as either &quot;the Company&quot;, &quot;We&quot;, &quot;Us&quot; or &quot;Our&quot; in this Agreement) refers to Isatis.</p>
                </li>
                <li style="list-style-type: circle;">
                <p><strong>Cookies</strong> are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.</p>
                </li>
                <li style="list-style-type: circle;">
                <p><strong>Country</strong> refers to: Nordrhein-Westfalen,  Germany</p>
                </li>
                <li style="list-style-type: circle;">
                <p><strong>Device</strong> means any device that can access the Service such as a computer, a cellphone or a digital tablet.</p>
                </li>
                <li style="list-style-type: circle;">
                <p><strong>Personal Data</strong> is any information that relates to an identified or identifiable individual.</p>
                </li>
                <li style="list-style-type: circle;">
                <p><strong>Service</strong> refers to the Application or the Website or both.</p>
                </li>
                <li style="list-style-type: circle;">
                <p><strong>Service Provider</strong> means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used.</p>
                </li>
                <li style="list-style-type: circle;">
                <p><strong>Usage Data</strong> refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</p>
                </li>
                <li style="list-style-type: circle;">
                <p><strong>Website</strong> refers to Isatis, accessible from <a href="https://www.isatis.vip" rel="external nofollow noopener" target="_blank">https://www.isatis.vip</a></p>
                </li>
                <li style="list-style-type: circle;">
                <p><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>
                </li>
                </ul>
                <h2>Collecting and Using Your Personal Data</h2>
                <h3>Types of Data Collected</h3>
                <h4>Personal Data</h4>
                <p>While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:</p>
                <ul style="padding-left: 10px;">
                <li style="list-style-type: circle;">
                <p>Email address</p>
                </li>
                <li style="list-style-type: circle;">
                <p>First name and last name</p>
                </li>
                <li style="list-style-type: circle;">
                <p>Phone number</p>
                </li>
                <li style="list-style-type: circle;">
                <p>Usage Data</p>
                </li>
                </ul>
                <h4>Usage Data</h4>
                <p>Usage Data is collected automatically when using the Service.</p>
                <p>Usage Data may include information such as Your Device's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>
                <p>When You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.</p>
                <p>We may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.</p>
                <h4>Tracking Technologies and Cookies</h4>
                <p>We use Cookies and similar tracking technologies to track the activity on Our Service and store certain information. Tracking technologies used are beacons, tags, and scripts to collect and track information and to improve and analyze Our Service. The technologies We use may include:</p>
                <ul style="padding-left: 10px;">
                <li style="list-style-type: circle;"><strong>Cookies or Browser Cookies.</strong> A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service. Unless you have adjusted Your browser setting so that it will refuse Cookies, our Service may use Cookies.</li>
                <li style="list-style-type: circle;"><strong>Web Beacons.</strong> Certain sections of our Service and our emails may contain small electronic files known as web beacons (also referred to as clear gifs, pixel tags, and single-pixel gifs) that permit the Company, for example, to count users who have visited those pages or opened an email and for other related website statistics (for example, recording the popularity of a certain section and verifying system and server integrity).</li>
                </ul>
                <p>Cookies can be &quot;Persistent&quot; or &quot;Session&quot; Cookies. Persistent Cookies remain on Your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close Your web browser. Learn more about cookies on the <a href="https://www.freeprivacypolicy.com/blog/sample-privacy-policy-template/#Use_Of_Cookies_And_Tracking" target="_blank">Free Privacy Policy website</a> article.</p>
                <p>We use both Session and Persistent Cookies for the purposes set out below:</p>
                <ul style="padding-left: 10px;">
                <li style="list-style-type: circle;">
                <p><strong>Necessary / Essential Cookies</strong></p>
                <p>Type: Session Cookies</p>
                <p>Administered by: Us</p>
                <p>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p>
                </li>
                <li style="list-style-type: circle;">
                <p><strong>Cookies Policy / Notice Acceptance Cookies</strong></p>
                <p>Type: Persistent Cookies</p>
                <p>Administered by: Us</p>
                <p>Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p>
                </li>
                <li style="list-style-type: circle;">
                <p><strong>Functionality Cookies</strong></p>
                <p>Type: Persistent Cookies</p>
                <p>Administered by: Us</p>
                <p>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>
                </li>
                </ul>
                <p>For more information about the cookies we use and your choices regarding cookies, please visit our Cookies Policy or the Cookies section of our Privacy Policy.</p>
                <h3>Use of Your Personal Data</h3>
                <p>The Company may use Personal Data for the following purposes:</p>
                <ul style="padding-left: 10px;">
                <li style="list-style-type: circle;">
                <p><strong>To provide and maintain our Service</strong>, including to monitor the usage of our Service.</p>
                </li>
                <li style="list-style-type: circle;">
                <p><strong>To manage Your Account:</strong> to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.</p>
                </li>
                <li style="list-style-type: circle;">
                <p><strong>For the performance of a contract:</strong> the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.</p>
                </li>
                <li style="list-style-type: circle;">
                <p><strong>To contact You:</strong> To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application's push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.</p>
                </li>
                <li style="list-style-type: circle;">
                <p><strong>To provide You</strong> with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.</p>
                </li>
                <li style="list-style-type: circle;">
                <p><strong>To manage Your requests:</strong> To attend and manage Your requests to Us.</p>
                </li>
                <li style="list-style-type: circle;">
                <p><strong>For business transfers:</strong> We may use Your information to evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of Our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which Personal Data held by Us about our Service users is among the assets transferred.</p>
                </li>
                <li style="list-style-type: circle;">
                <p><strong>For other purposes</strong>: We may use Your information for other purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our Service, products, services, marketing and your experience.</p>
                </li>
                </ul>
                <p>We may share Your personal information in the following situations:</p>
                <ul style="padding-left: 10px;">
                <li style="list-style-type: circle;"><strong>With Service Providers:</strong> We may share Your personal information with Service Providers to monitor and analyze the use of our Service,  to contact You.</li>
                <li style="list-style-type: circle;"><strong>For business transfers:</strong> We may share or transfer Your personal information in connection with, or during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a portion of Our business to another company.</li>
                <li style="list-style-type: circle;"><strong>With Affiliates:</strong> We may share Your information with Our affiliates, in which case we will require those affiliates to honor this Privacy Policy. Affiliates include Our parent company and any other subsidiaries, joint venture partners or other companies that We control or that are under common control with Us.</li>
                <li style="list-style-type: circle;"><strong>With business partners:</strong> We may share Your information with Our business partners to offer You certain products, services or promotions.</li>
                <li style="list-style-type: circle;"><strong>With other users:</strong> when You share personal information or otherwise interact in the public areas with other users, such information may be viewed by all users and may be publicly distributed outside.</li>
                <li style="list-style-type: circle;"><strong>With Your consent</strong>: We may disclose Your personal information for any other purpose with Your consent.</li>
                </ul>
                <h3>Retention of Your Personal Data</h3>
                <p>The Company will retain Your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</p>
                <p>The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, or We are legally obligated to retain this data for longer time periods.</p>
                <h3>Transfer of Your Personal Data</h3>
                <p>Your information, including Personal Data, is processed at the Company's operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.</p>
                <p>Your consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.</p>
                <p>The Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.</p>
                <h3>Delete Your Personal Data</h3>
                <p>You have the right to delete or request that We assist in deleting the Personal Data that We have collected about You.</p>
                <p>Our Service may give You the ability to delete certain information about You from within the Service.</p>
                <p>You may update, amend, or delete Your information at any time by signing in to Your Account, if you have one, and visiting the account settings section that allows you to manage Your personal information. You may also contact Us to request access to, correct, or delete any personal information that You have provided to Us.</p>
                <p>Please note, however, that We may need to retain certain information when we have a legal obligation or lawful basis to do so.</p>
                <h3>Disclosure of Your Personal Data</h3>
                <h4>Business Transactions</h4>
                <p>If the Company is involved in a merger, acquisition or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.</p>
                <h4>Law enforcement</h4>
                <p>Under certain circumstances, the Company may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).</p>
                <h4>Other legal requirements</h4>
                <p>The Company may disclose Your Personal Data in the good faith belief that such action is necessary to:</p>
                <ul style="padding-left: 10px;">
                <li style="list-style-type: circle;">Comply with a legal obligation</li>
                <li style="list-style-type: circle;">Protect and defend the rights or property of the Company</li>
                <li style="list-style-type: circle;">Prevent or investigate possible wrongdoing in connection with the Service</li>
                <li style="list-style-type: circle;">Protect the personal safety of Users of the Service or the public</li>
                <li style="list-style-type: circle;">Protect against legal liability</li>
                </ul>
                <h3>Security of Your Personal Data</h3>
                <p>The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.</p>
                <h2>Children's Privacy</h2>
                <p>Our Service does not address anyone under the age of 13. We do not knowingly collect personally identifiable information from anyone under the age of 13. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.</p>
                <p>If We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent's consent before We collect and use that information.</p>
                <h2>Links to Other Websites</h2>
                <p>Our Service may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party's site. We strongly advise You to review the Privacy Policy of every site You visit.</p>
                <p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>
                <h2>Changes to this Privacy Policy</h2>
                <p>We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.</p>
                <p>We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the &quot;Last updated&quot; date at the top of this Privacy Policy.</p>
                <p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>
                <h2>Contact Us</h2>
                <p>If you have any questions about this Privacy Policy, You can contact us:</p>
                <ul style="padding-left: 10px;">
                <li style="list-style-type: circle;">
                <p>By email: contact@isatis.vip</p>
                </li>
                <li style="list-style-type: circle;">
                <p>By visiting this page on our website: <a href="https://isatis.vip/contact.php" rel="external nofollow noopener" target="_blank">https://isatis.vip/contact.php</a></p>
                </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<footer class="page-footer center social-colored ">
  <div class="container footer-content">
    <div class="row">
      <div class="">
        <h5 class="logo">Isatis</h5>
              </div>
      <div class="link-wrap">

                <ul class="link-ul">
          <li><a class="" href="mailto:contact@isatis.vip"><i class="mdi mdi-email"></i> contact@isatis.vip</a></li>
          <li><a class="" href="https://maps.app.goo.gl/mdVkrpBudHyTAp7A8"><i class="mdi mdi-map-marker"></i> Düsseldorf, Germany</a></li>
        </ul>
                <ul class="social-wrap">
          <li class="social">
            <a class="" href="https://www.facebook.com/javadkarimi.social" target="_blank"><i class="mdi mdi-facebook"></i></a>
            <a class="" href="https://www.instagram.com/javadkarimi.social" target="_blank"><i class="mdi mdi-instagram"></i></a>
            <a class="" href="https://isatis.vip/javadkarimi" target="_blank"><i class="mdi mdi-web"></i></a>
            <a class="" href="https://www.linkedin.com/in/javadkarimi" target="_blank"><i class="mdi mdi-linkedin"></i></a>
          </li>
        </ul>
      </div>
    </div>

    
  </div>


  <div class="footer-copyright">
      <div class="container">
        &copy; Copyright <a class="" href="https://isatis.vip">Isatis.vip</a>. All rights reserved.
      </div>
    </div></footer>


<div class="backtotop">
  <a class="btn-floating btn primary-bg">
    <i class="mdi mdi-chevron-up"></i>
  </a>
</div>
</div><!--.content-area-->


<script src="assets/js/pwa.js"></script>

<!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

<!-- CORE JS FRAMEWORK - START -->
<script src="modules/jquery/jquery-2.2.4.min.js"></script>
<script src="modules/materialize/materialize.js"></script>
<script src="modules/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/variables.js"></script>
<!-- CORE JS FRAMEWORK - END -->


<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="assets/js/common.js"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


<!-- CORE TEMPLATE JS - START -->
<script src="modules/app/init.js"></script>
<script src="modules/app/settings.js"></script>

<script src="modules/app/scripts.js"></script>

<!-- END CORE TEMPLATE JS - END -->


<script src="assets/js/preloader.js"></script>
</body>

</html>