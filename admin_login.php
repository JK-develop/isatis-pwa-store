<?php
// /admin_login.php
$body_classes = 'isfullscreen'; // Add specific body classes for this page
include 'header.php'; // Session is started in the header

// Check for login errors from the URL
$error_message = '';
if (isset($_GET['error'])) {
    if ($_GET['error'] == 1) {
        $error_message = 'Invalid email or password.';
    } elseif ($_GET['error'] == 'db') {
        $error_message = 'A database error occurred. Please try again later.';
    }
}
?>

<div class="login-bg access-login"></div>

<div class="container login-area">
    <div class="section">
        <h3 class="bot-20 center white-text">Admin Login</h3>

        <?php if ($error_message): ?>
            <div class="row">
                <div class="col s10 offset-s1 m8 offset-m2 l6 offset-l3">
                    <div class="card-panel red lighten-2 white-text center-align" style="border-radius: 12px; opacity: 0.9;">
                        <?php echo $error_message; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <form action="admin_login_action.php" method="POST">
            <div class="row">
                <div class="input-field col s10 offset-s1 m8 offset-m2 l6 offset-l3">
                    <input id="email" name="email" type="email" class="validate" required>
                    <label for="email">Email</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s10 offset-s1 m8 offset-m2 l6 offset-l3">
                    <input id="password" name="password" type="password" class="validate" required>
                    <label for="password">Password</label>
                </div>
            </div>

            <div class="row center">
                <button type="submit" class="waves-effect waves-light btn-large bg-primary">Login</button>
                <div class="spacer"></div>
            </div>
        </form>
    </div>
</div>

<?php 
// We don't need the standard footer on the login page
// So we include only the script part of the footer
?>
    </div><script src="assets/js/pwa.js"></script>
    <script src="modules/jquery/jquery-2.2.4.min.js"></script>
    <script src="modules/materialize/materialize.js"></script>
    <script src="modules/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/variables.js"></script>
    <script src="assets/js/common.js"></script>
    <script src="modules/app/init.js"></script>
    <script src="modules/app/settings.js"></script>
    <script src="modules/app/scripts.js"></script>
    <script src="assets/js/preloader.js"></script>
</body>
</html>