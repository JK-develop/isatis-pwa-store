<?php
// /register_pwa_activation.php

// NOTE: We need to include db_connection.php directly here because the header might not be shown if we redirect.
require 'db_connection.php'; 

// Initialize variables
$message = "";
$email = ""; // Keep email for the verification form
$show_verification_form = false;

// Handle new PWA registration
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    // ... (All the PHP logic for registration from your original file) ...
    // ... This includes inserting user, app, categories, version, and sending the email ...
    
    $email = htmlspecialchars($_POST['email']);
    $show_verification_form = true; // Set flag to show verification form
    $message = "A confirmation code has been sent to your email. Please verify it below.";
}

// Handle confirmation code verification
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verify'])) {
    // ... (All the PHP logic for verification from your original file) ...
    $email = htmlspecialchars($_POST['email']);
    $entered_code = htmlspecialchars($_POST['confirmation_code']);
    
    // On successful verification:
    // header("Location: index.php");
    // exit;

    // On failure:
    $message = "Invalid confirmation code or email.";
    $show_verification_form = true;
}

// Now include the header, as we've determined whether to show a page or not
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
        <div class="row">
            <?php if ($show_verification_form): ?>
                <p class="center-align"><?php echo $message; ?></p>
                <form id="pwaVerifyForm" method="POST" action="register_pwa_activation.php">
                    <input name="email" value="<?php echo htmlspecialchars($email); ?>" type="hidden">
                    <div class="row">
                        <div class="input-field col s10 offset-s1">
                            <input id="confirmation_code" name="confirmation_code" type="text" class="validate" required>
                            <label for="confirmation_code">Confirmation Code</label>
                        </div>
                    </div>
                    <div class="row center">
                        <button type="submit" name="verify" id="verify" class="waves-effect waves-light btn-large bg-primary">Verify</button>
                    </div>
                </form>
            <?php else: ?>
                <p class="center-align"><?php echo $message ?: 'No action specified.'; ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>