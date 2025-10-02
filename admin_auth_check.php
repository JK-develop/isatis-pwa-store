<?php
// /admin_auth_check.php
// This should be at the very top of every admin-only page.

// If a session is not already started, start one.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the admin is not logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // If not logged in, redirect to the login page and stop script execution
    header("Location: admin_login.php");
    exit;
}
?>