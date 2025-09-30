<?php
// /register_pwa_activation.php

// We need to handle the logic before any HTML is outputted.
// Include the database connection script.
require_once __DIR__ . '/db_connection.php';

// Initialize variables
$message = "";
$email = "";
$show_verification_form = false;

// Handle new PWA registration form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $title = htmlspecialchars($_POST['title']);
    $url = htmlspecialchars($_POST['weburl']);
    $email = htmlspecialchars($_POST['email']);
    $categories = isset($_POST['category']) ? $_POST['category'] : [];
    $description = htmlspecialchars($_POST['description']);
    $version = htmlspecialchars($_POST['version']);
    $confirmation_code = rand(100000, 999999);
    $currentTimestamp = date('Y-m-d H:i:s');
    $logoUrl = htmlspecialchars($_POST['logo']);
    $bannerUrl = htmlspecialchars($_POST['banner']);
    
    $user_id = "";
    $pwa_id = "";

    try {
        $stmt = $connect->prepare("SELECT id FROM users WHERE email = :email");
        $stmt->execute([':email' => $email]);
        $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($existingUser) {
            $user_id = $existingUser['id'];
        } else {
            // *** SECURITY IMPROVEMENT: Hash the password before storing it ***
            $hashed_password = password_hash((string)$confirmation_code, PASSWORD_DEFAULT);

            $stmt = $connect->prepare("
                INSERT INTO users (name, email, password, created_at, remember_token)
                VALUES (:name, :email, :password, :createdate, :rememberToken)
            ");
            $stmt->execute([
                ':name' => $email,
                ':email' => $email,
                ':password' => $hashed_password, // Store the hashed password
                ':createdate' => $currentTimestamp,
                ':rememberToken' => $confirmation_code, // Keep this for email verification for now
            ]);
            $user_id = $connect->lastInsertId();
        }
        
        // ... (rest of the logic for inserting app, category, version remains the same) ...
        $stmt = $connect->prepare("SELECT id FROM applications WHERE developer = :email");
        $stmt->execute([':email' => $email]);
        $existingAPP = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($existingAPP) {
            $pwa_id = $existingAPP['id'];
            $delete_stmt = $connect->prepare("DELETE FROM application_category WHERE application_id = :application_id");
            $delete_stmt->execute([':application_id' => $pwa_id]);
        } else {
            $stmt = $connect->prepare("
                INSERT INTO applications (title, buy_url, fk_user, description, created_at, developer, status, image, logo)
                VALUES (:title, :url, :userId, :description, :created, :developer, 'pending', :bannerUrl, :logoUrl)
            ");
            $stmt->execute([
                ':title' => $title,
                ':url' => $url,
                ':userId' => $user_id,
                ':description' => $description,
                ':created' => $currentTimestamp,
                ':developer' => $email,
                ':bannerUrl' => $bannerUrl,
                ':logoUrl' => $logoUrl,
            ]);
            $pwa_id = $connect->lastInsertId();
        }
        
        if (!empty($categories) && is_array($categories)) {
            foreach ($categories as $category_id) {
                $category_stmt = $connect->prepare("INSERT INTO application_category (application_id, category_id) VALUES (:application_id, :category_id)");
                $category_stmt->execute([':application_id' => $pwa_id, ':category_id' => $category_id]);
            }
        }
        
        $stmt = $connect->prepare("INSERT INTO versions (app_id, version, url, created_at, updated_at) VALUES (:appId, :version, :url, :createdAt, :updatedAt)");
        $stmt->execute([':appId' => $pwa_id, ':version' => $version, ':url' => $url, ':createdAt' => $currentTimestamp, ':updatedAt' => $currentTimestamp]);
            
        // Send confirmation email
        $subject = "ISATIS PWA store -> Your PWA Registration Confirmation Code";
        $email_message = "Thank you for registering your PWA.\n\nYour confirmation code is: $confirmation_code";
        $headers = "From: noreply@isatis.vip";

        if (mail($email, $subject, $email_message, $headers)) {
            $message = "A confirmation code has been sent to your email. Please enter it below to activate your PWA.";
        } else {
            $message = "Failed to send confirmation email. Please try again or contact support.";
        }
        $show_verification_form = true;
        
    } catch (PDOException $e) {
        $message = "Error: " . $e->getMessage();
        $show_verification_form = false; // Don't show form if there's a DB error
    }
}

// Handle confirmation code verification
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verify'])) {
    $email = htmlspecialchars($_POST['email']);
    $entered_code = htmlspecialchars($_POST['confirmation_code']);

    try {
        // Find the user by email and check if the remember_token matches the entered code
        $stmt = $connect->prepare("SELECT * FROM users WHERE email = :email AND remember_token = :confirmation_code");
        $stmt->execute([':email' => $email, ':confirmation_code' => $entered_code]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Find the associated pending application
            $stmt_app = $connect->prepare("UPDATE applications SET status = 'active' WHERE fk_user = :user_id AND status = 'pending'");
            $stmt_app->execute([':user_id' => $user['id']]);

            // Clear the remember_token after successful verification
            $stmt_clear = $connect->prepare("UPDATE users SET remember_token = NULL WHERE id = :user_id");
            $stmt_clear->execute([':user_id' => $user['id']]);

            // Redirect to homepage after successful activation
            header("Location: index.php?status=activated");
            exit;
        } else {
            $message = "Invalid confirmation code or email. Please try again.";
            $show_verification_form = true;
        }
    } catch (PDOException $e) {
        $message = "Database Error: " . $e->getMessage();
        $show_verification_form = true;
    }
}

// Include the header to display the page
include 'header.php';
?>

<div class="pagehead-bg primary-bg"></div>
<div class="container has-pagehead is-pagetitle">
    <div class="section">
        <h5 class="pagetitle">Verification</h5>
    </div>
</div>

<div class="container over">
    <div class="section">
        <div class="row" style="padding: 20px 0;">
            <?php if ($show_verification_form): ?>
                <p class="center-align"><?php echo htmlspecialchars($message); ?></p>
                <form id="pwaVerifyForm" method="POST" action="register_pwa_activation.php">
                    <input name="email" value="<?php echo htmlspecialchars($email); ?>" type="hidden">
                    <div class="row">
                        <div class="input-field col s12 m8 offset-m2 l6 offset-l3">
                            <input id="confirmation_code" name="confirmation_code" type="text" class="validate" required autofocus>
                            <label for="confirmation_code">Confirmation Code</label>
                        </div>
                    </div>
                    <div class="row center">
                        <button type="submit" name="verify" id="verify" class="waves-effect waves-light btn-large bg-primary">Verify & Activate</button>
                    </div>
                </form>
            <?php else: ?>
                <p class="center-align"><?php echo htmlspecialchars($message ?: 'Please submit a PWA through the registration form.'); ?></p>
                <div class="row center">
                    <a href="new_app.php" class="waves-effect waves-light btn-large bg-primary">Register a PWA</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>