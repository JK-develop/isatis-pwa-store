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


<h1 class="white-text center welcome-logo"><svg id="Isatis" data-name="Isatis-Logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 380.82 380.82"><defs><style>.cls-1{fill:#ca9e67;}.cls-2{fill:#00a554;}.cls-3{fill:#93c460;}.cls-4{fill:#f1b425;}.cls-5{fill:#fcea10;}.cls-6{fill:#e94976;}.cls-7{fill:#f29abd;}.cls-8{fill:#2da7d5;}.cls-9{fill:#a3d9ea;}</style></defs><polygon class="cls-2" points="285.62 240.78 190.41 190.42 240.77 95.21 335.99 145.57 285.62 240.78 285.62 240.78"/><polygon class="cls-3" points="380.82 291.17 335.99 145.57 190.41 190.42 285.62 240.78 380.82 291.17 380.82 291.17"/><polygon class="cls-4" points="140.04 285.62 190.41 190.42 285.62 240.78 235.25 336 140.04 285.62 140.04 285.62"/><polygon class="cls-5" points="89.67 380.83 235.25 336 190.41 190.42 140.04 285.62 89.67 380.83 89.67 380.83"/><polygon class="cls-6" points="95.2 140.05 190.41 190.42 140.04 285.62 44.83 235.26 95.2 140.05 95.2 140.05"/><polygon class="cls-7" points="0 89.67 44.83 235.26 190.41 190.42 95.2 140.05 0 89.67 0 89.67"/><polygon class="cls-8" points="240.77 95.21 190.41 190.42 95.2 140.05 145.58 44.85 240.77 95.21 240.77 95.21"/><polygon class="cls-9" points="291.16 0 145.58 44.85 190.41 190.42 240.77 95.21 291.16 0 291.16 0"/></svg>Terms and Conditions</h1>
<div class="section" style="padding: 0px 20px;">
    <div class="row">
        <div class="card gray lighten-5">
            <div class="card-content white-text">
            <p>Last updated: December 26, 2024</p>
            <p>Please read these terms and conditions carefully before using Our Service.</p>
            <h2>Interpretation and Definitions</h2>
            <h3>Interpretation</h3>
            <p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
            <h3>Definitions</h3>
            <p>For the purposes of these Terms and Conditions:</p>
            <ul style="padding-left: 10px;">
            <li style="list-style-type: circle;">
            <p><strong>Affiliate</strong> means an entity that controls, is controlled by or is under common control with a party, where &quot;control&quot; means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.</p>
            </li>
            <li style="list-style-type: circle;">
            <p><strong>Country</strong> refers to: Nordrhein-Westfalen,  Germany</p>
            </li>
            <li style="list-style-type: circle;">
            <p><strong>Company</strong> (referred to as either &quot;the Company&quot;, &quot;We&quot;, &quot;Us&quot; or &quot;Our&quot; in this Agreement) refers to Isatis.</p>
            </li>
            <li style="list-style-type: circle;">
            <p><strong>Device</strong> means any device that can access the Service such as a computer, a cellphone or a digital tablet.</p>
            </li>
            <li style="list-style-type: circle;">
            <p><strong>Service</strong> refers to the Website.</p>
            </li>
            <li style="list-style-type: circle;">
            <p><strong>Terms and Conditions</strong> (also referred as &quot;Terms&quot;) mean these Terms and Conditions that form the entire agreement between You and the Company regarding the use of the Service. This Terms and Conditions agreement has been created with the help of the <a href="https://www.freeprivacypolicy.com/free-terms-and-conditions-generator/" target="_blank">Free Terms and Conditions Generator</a>.</p>
            </li>
            <li style="list-style-type: circle;">
            <p><strong>Third-party Social Media Service</strong> means any services or content (including data, information, products or services) provided by a third-party that may be displayed, included or made available by the Service.</p>
            </li>
            <li style="list-style-type: circle;">
            <p><strong>Website</strong> refers to Isatis, accessible from <a href="https://www.isatis.vip" rel="external nofollow noopener" target="_blank">https://www.isatis.vip</a></p>
            </li>
            <li style="list-style-type: circle;">
            <p><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>
            </li>
            </ul>
            <h2>Acknowledgment</h2>
            <p>These are the Terms and Conditions governing the use of this Service and the agreement that operates between You and the Company. These Terms and Conditions set out the rights and obligations of all users regarding the use of the Service.</p>
            <p>Your access to and use of the Service is conditioned on Your acceptance of and compliance with these Terms and Conditions. These Terms and Conditions apply to all visitors, users and others who access or use the Service.</p>
            <p>By accessing or using the Service You agree to be bound by these Terms and Conditions. If You disagree with any part of these Terms and Conditions then You may not access the Service.</p>
            <p>You represent that you are over the age of 18. The Company does not permit those under 18 to use the Service.</p>
            <p>Your access to and use of the Service is also conditioned on Your acceptance of and compliance with the Privacy Policy of the Company. Our Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your personal information when You use the Application or the Website and tells You about Your privacy rights and how the law protects You. Please read Our Privacy Policy carefully before using Our Service.</p>
            <h2>Links to Other Websites</h2>
            <p>Our Service may contain links to third-party web sites or services that are not owned or controlled by the Company.</p>
            <p>The Company has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that the Company shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with the use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>
            <p>We strongly advise You to read the terms and conditions and privacy policies of any third-party web sites or services that You visit.</p>
            <h2>Termination</h2>
            <p>We may terminate or suspend Your access immediately, without prior notice or liability, for any reason whatsoever, including without limitation if You breach these Terms and Conditions.</p>
            <p>Upon termination, Your right to use the Service will cease immediately.</p>
            <h2>Limitation of Liability</h2>
            <p>Notwithstanding any damages that You might incur, the entire liability of the Company and any of its suppliers under any provision of this Terms and Your exclusive remedy for all of the foregoing shall be limited to the amount actually paid by You through the Service or 100 USD if You haven't purchased anything through the Service.</p>
            <p>To the maximum extent permitted by applicable law, in no event shall the Company or its suppliers be liable for any special, incidental, indirect, or consequential damages whatsoever (including, but not limited to, damages for loss of profits, loss of data or other information, for business interruption, for personal injury, loss of privacy arising out of or in any way related to the use of or inability to use the Service, third-party software and/or third-party hardware used with the Service, or otherwise in connection with any provision of this Terms), even if the Company or any supplier has been advised of the possibility of such damages and even if the remedy fails of its essential purpose.</p>
            <p>Some states do not allow the exclusion of implied warranties or limitation of liability for incidental or consequential damages, which means that some of the above limitations may not apply. In these states, each party's liability will be limited to the greatest extent permitted by law.</p>
            <h2>&quot;AS IS&quot; and &quot;AS AVAILABLE&quot; Disclaimer</h2>
            <p>The Service is provided to You &quot;AS IS&quot; and &quot;AS AVAILABLE&quot; and with all faults and defects without warranty of any kind. To the maximum extent permitted under applicable law, the Company, on its own behalf and on behalf of its Affiliates and its and their respective licensors and service providers, expressly disclaims all warranties, whether express, implied, statutory or otherwise, with respect to the Service, including all implied warranties of merchantability, fitness for a particular purpose, title and non-infringement, and warranties that may arise out of course of dealing, course of performance, usage or trade practice. Without limitation to the foregoing, the Company provides no warranty or undertaking, and makes no representation of any kind that the Service will meet Your requirements, achieve any intended results, be compatible or work with any other software, applications, systems or services, operate without interruption, meet any performance or reliability standards or be error free or that any errors or defects can or will be corrected.</p>
            <p>Without limiting the foregoing, neither the Company nor any of the company's provider makes any representation or warranty of any kind, express or implied: (i) as to the operation or availability of the Service, or the information, content, and materials or products included thereon; (ii) that the Service will be uninterrupted or error-free; (iii) as to the accuracy, reliability, or currency of any information or content provided through the Service; or (iv) that the Service, its servers, the content, or e-mails sent from or on behalf of the Company are free of viruses, scripts, trojan horses, worms, malware, timebombs or other harmful components.</p>
            <p>Some jurisdictions do not allow the exclusion of certain types of warranties or limitations on applicable statutory rights of a consumer, so some or all of the above exclusions and limitations may not apply to You. But in such a case the exclusions and limitations set forth in this section shall be applied to the greatest extent enforceable under applicable law.</p>
            <h2>Governing Law</h2>
            <p>The laws of the Country, excluding its conflicts of law rules, shall govern this Terms and Your use of the Service. Your use of the Application may also be subject to other local, state, national, or international laws.</p>
            <h2>Disputes Resolution</h2>
            <p>If You have any concern or dispute about the Service, You agree to first try to resolve the dispute informally by contacting the Company.</p>
            <h2>For European Union (EU) Users</h2>
            <p>If You are a European Union consumer, you will benefit from any mandatory provisions of the law of the country in which You are resident.</p>
            <h2>United States Legal Compliance</h2>
            <p>You represent and warrant that (i) You are not located in a country that is subject to the United States government embargo, or that has been designated by the United States government as a &quot;terrorist supporting&quot; country, and (ii) You are not listed on any United States government list of prohibited or restricted parties.</p>
            <h2>Severability and Waiver</h2>
            <h3>Severability</h3>
            <p>If any provision of these Terms is held to be unenforceable or invalid, such provision will be changed and interpreted to accomplish the objectives of such provision to the greatest extent possible under applicable law and the remaining provisions will continue in full force and effect.</p>
            <h3>Waiver</h3>
            <p>Except as provided herein, the failure to exercise a right or to require performance of an obligation under these Terms shall not affect a party's ability to exercise such right or require such performance at any time thereafter nor shall the waiver of a breach constitute a waiver of any subsequent breach.</p>
            <h2>Translation Interpretation</h2>
            <p>These Terms and Conditions may have been translated if We have made them available to You on our Service.
            You agree that the original English text shall prevail in the case of a dispute.</p>
            <h2>Changes to These Terms and Conditions</h2>
            <p>We reserve the right, at Our sole discretion, to modify or replace these Terms at any time. If a revision is material We will make reasonable efforts to provide at least 30 days' notice prior to any new terms taking effect. What constitutes a material change will be determined at Our sole discretion.</p>
            <p>By continuing to access or use Our Service after those revisions become effective, You agree to be bound by the revised terms. If You do not agree to the new terms, in whole or in part, please stop using the website and the Service.</p>
            <h2>Contact Us</h2>
            <p>If you have any questions about these Terms and Conditions, You can contact us:</p>
            <ul style="padding-left: 10px;">
            <li style="list-style-type: circle;">
            <p>By email: contact@isatis.vip</p>
            </li>
            <li style="list-style-type: circle;">
            <p>By visiting this page on our website: <a href="https://www.isatis.vip/contact.php" rel="external nofollow noopener" target="_blank">https://www.isatis.vip/contact.php</a></p>
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