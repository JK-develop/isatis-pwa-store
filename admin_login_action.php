<?php
// /admin_login_action.php
session_start();

// Include database connection
require_once __DIR__ . '/db_connection.php';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'], $_POST['password'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Basic validation
    if (empty($email) || empty($password)) {
        header("Location: admin_login.php?error=1");
        exit;
    }

    try {
        // Prepare statement to find an admin user with the given email
        $stmt = $connect->prepare("SELECT * FROM users WHERE email = :email AND role = 'admin' LIMIT 1");
        $stmt->execute([':email' => $email]);
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify user exists and password is correct
        if ($admin && password_verify($password, $admin['password'])) {
            // Password is correct, so regenerate session ID for security
            session_regenerate_id(true);
            
            // Set session variables
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_user_id'] = $admin['id'];
            $_SESSION['admin_user_name'] = $admin['name'];
            
            // Redirect to the admin dashboard
            header("Location: admin_dashboard.php");
            exit;
        } else {
            // Invalid credentials, redirect back to login with an error message
            header("Location: admin_login.php?error=1");
            exit;
        }
    } catch (PDOException $e) {
        // In a real application, you should log the error message
        // error_log("Database error in admin login: " . $e->getMessage());
        header("Location: admin_login.php?error=db");
        exit;
    }
} else {
    // If the form was not submitted directly, redirect to the login page
    header("Location: admin_login.php");
    exit;
}
?>