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
  <title>Odis Mobile App: Timeline</title>
  <meta content="Odis Mobile App" name="description" />
  <meta content="themepassion" name="author" />


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


<body class=" menu-full header-image html"  data-header="light" data-footer="light"  data-header_align="app"  data-menu_type="left" data-menu="light" data-menu_icons="on" data-footer_type="left" data-site_mode="light" data-footer_menu="show" data-footer_menu_style="light"  >
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

  <div class="pagehead-bg   primary-bg" >
    </div> 

  <div class="container has-pagehead is-pagetitle">
    <div class="section">
      <h5 class="pagetitle">How to use</h5>
          </div>
  </div>
  

<div class="container over">
  <div class="section">

    
<div class="timeline">

  <div class="verline"></div>

  
  <div class="event has-date">
         <div class="date">
        <h4 class="mdi mdi-access-point"></h4>
        <div>01</div>
      </div>
        <div class="card-panel primary-bg white-text">

      <div class='msg'>
        <section>
          <h6>Getting Started</h6>
           <p>You can discover all available PWAs directly on the <strong>Home Page</strong>. To find PWAs based on specific categories, navigate to the <strong>Categories Page</strong>. If you'd like to add your own PWA to the platform, visit the <strong>New PWA Page</strong> to register it.</p>
        </section>
      </div>
    </div>
  </div>
  
  
  <div class="event has-date">
         <div class="date">
        <h4 class="mdi mdi-apps"></h4>
        <div>02</div>
      </div>
        <div class="card-panel blue-grey lighten-5">

      <div class='msg'>
          <section>
            <h6>Home Page</h6>
            <p>On the <strong><a href="/">Home Page</a></strong>, you can:</p>
            <ul>
                <li style="list-style-type: circle;">View a banner for every app along with a short description.</li>
                <li style="list-style-type: circle;">See the categories, last update date, and votes for each app.</li>
                <li style="list-style-type: circle;">Click the <strong>Go</strong> button to navigate to the related PWA app.</li>
                <li style="list-style-type: circle;">Scroll through all available apps by scrolling the banners.</li>
                <li style="list-style-type: circle;">Click on a banner to view more details about the app on a separate page.</li>
            </ul>
        </section>
      </div>
    </div>
  </div>
  
  <div class="event has-date">
         <div class="date">
        <h4 class="mdi mdi-file-tree"></h4>
        <div>03</div>
      </div>
        <div class="card-panel accent-bg white-text">

      <div class='msg'>
          <section>
            <h6>Categories</h6>
            <p>On the <strong><a href="categories.php">Categories Page</a></strong>, you can find PWA apps categorized with their title and logo. Clicking on a logo will take you to the selected app's PWA page.</p>
        </section>
      </div>

    </div>
  </div>
  

  
  <div class="event has-date">
         <div class="date">
        <h4 class="mdi mdi-new-box"></h4>
        <div>04</div>
      </div>
        <div class="card-panel blue-grey lighten-5">

      <div class='msg'>
        <section>
          <h6>Registering a PWA</h6>
          <p>To register your PWA:</p>
          <ul>
              <li style="list-style-type: circle;">Go to the <strong><a href="new_app.php">New PWA Page</a></strong>.</li>
              <li style="list-style-type: circle;">Fill in the required details such as the PWA name, URL, category, and description.</li>
              <li style="list-style-type: circle;">Click the <strong>Submit</strong> button to complete the process.</li>
          </ul>
      </section>
      </div>

    </div>
  </div>
  
  
  <div class="event">
       <div class="card-panel blue-grey lighten-5">
      <div class='msg'>Note: Authenticating your PWA app by using the email related to your website domain is necessary.</div>
    </div>
  </div>
  
  
  <div class="event has-date">
         <div class="date">
        <h4 class="mdi mdi-approval"></h4>
        <div>05</div>
      </div>
        <div class="card-panel accent-bg white-text">

      <div class='msg'>
          <section>
            <h6>Using PWAs</h6>
            <p>Click on any PWA link to access its features. On mobile devices, you can add the PWA to your home screen for easy access.</p>
        </section>
      </div>

    </div>
  </div>
  
  <div class="event has-date">
         <div class="date">
        <h4 class="mdi mdi-cellphone-link"></h4>
        <div>06</div>
      </div>
        <div class="card-panel blue-grey lighten-5">

      <div class='msg'>
          <section>
            <h6>Support and Feedback</h6>
            <p>If you encounter any issues or have suggestions, feel free to reach out to our support team at <a href="mailto:contact@isatis.vip">contact@isatis.vip</a>.</p>
        </section>
      </div>

    </div>
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

<div class="footer-menu circular">
  <ul>
      <li >
      <a href="new_app.php" >      <i class="mdi mdi-new-box"></i>
      <span>PWA</span>
      </a>    </li>
        <li >
      <a href="#" >      <i></i>
      <span></span>
      </a>    </li>
        <li>
      <a href="/" >      <i class="mdi mdi-apps"></i>
      <span>Home</span>
      </a>    </li>
        <li >
      <a href="#" >      <i></i>
      <span></span>
      </a>    </li>
        <li >
      <a href="categories.php" >      <i class="mdi mdi-file-tree"></i>
      <span>Categories</span>
      </a>    </li>
      
  </ul>
</div>








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