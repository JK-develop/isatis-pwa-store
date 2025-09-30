<?php
// /admin_login.php
$body_classes = 'isfullscreen'; // Add specific body classes for this page
include 'header.php';
?>

<div class="login-bg access-login"></div>

<div class="container login-area">
    <div class="section">
        <h3 class="bot-20 center white-text">Login</h3>

        <div class="row">
            <div class="input-field col s10 offset-s1">
                <input id="email311" type="email" class="validate">
                <label for="email311">Email</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s10 offset-s1">
                <input id="pass311" type="password" class="validate">
                <label for="pass311">Password</label>
            </div>
        </div>

        <div class="row center">
            <a class="waves-effect waves-light btn-large bg-primary">Login</a>
            <div class="spacer"></div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>