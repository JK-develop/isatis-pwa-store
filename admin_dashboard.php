<?php
// /admin_dashboard.php

// First, check if the user is authenticated as an admin
require_once 'admin_auth_check.php';

// Then, include the standard header. Session is already started by the auth check.
include 'header.php';
?>

<div class="pagehead-bg primary-bg"></div>
<div class="container has-pagehead is-pagetitle">
    <div class="section">
        <h5 class="pagetitle">Admin Dashboard</h5>
    </div>
</div>

<div class="container over">
    <div class="section">
        <div class="row" style="padding: 20px 0;">
            <div class="col s12">
                <div class="card-panel" style="border-radius: 12px;">
                    <h5 class="center-align">Welcome, <?php echo htmlspecialchars($_SESSION['admin_user_name']); ?>!</h5>
                    <p class="center-align">This is your admin dashboard. From here, you will be able to manage applications, users, and categories.</p>
                    <div class="center-align" style="margin-top: 20px;">
                        <a href="admin_logout.php" class="waves-effect waves-light btn red">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>