<?php
// /app_view.php
include 'header.php';

// Initialize variables for the app details
$app_title = "Not Found";
$app_description = "";
$app_banner = "";
$app_url = "";
$app_status = "";
$app_logo = "";
$app_id = 0;
$app_detail = "";
$error_message = "";

// Get the ID from the URL and fetch app data
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($id > 0) {
    try {
        // Prepare the SQL statement to prevent SQL injection
        $stmt = $connect->prepare("SELECT * FROM applications WHERE id = :id AND status = 'active'");
        $stmt->execute([':id' => $id]);
        $res = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($res) {
            $app_id =  $res['id'];
            $app_title =  $res['title'];
            $app_description =  $res['description'];
            $app_banner =  $res['image'];
            $app_url =  $res['buy_url'];
            $app_status =  $res['status'];
            $app_detail =  $res['details'];
            $app_logo =  $res['logo'];
        } else {
            $error_message = "No application found with this ID or it is not active.";
        }
    } catch (PDOException $e) {
        $error_message = "Database error: " . $e->getMessage();
    }
} else {
    $error_message = "Invalid ID provided.";
}
?>

<div class="pagehead-bg primary-bg"></div>

<div class="container has-pagehead is-pagetitle">
    <div class="section">
        <h5 class="pagetitle"><?php echo htmlspecialchars($app_title); ?></h5>
    </div>
</div>

<div class="container over">
    <div class="section">
        <div class="spacer"></div>
        <?php if (!empty($error_message)) : ?>
            <div class="card-panel red lighten-2 white-text"><?php echo $error_message; ?></div>
        <?php elseif ($app_id > 0) : ?>
            <div class="row ui-mediabox prods">
                <div class="col s12">
                    <div class="prod-img-wrap">
                        <a class="img-wrap" href="<?php echo htmlspecialchars($app_banner); ?>" data-fancybox="images" data-caption="<?php echo htmlspecialchars($app_title); ?>">
                            <img alt="<?php echo htmlspecialchars($app_title); ?>" class="" style="width: 100%;" src="<?php echo htmlspecialchars($app_banner); ?>">
                        </a>
                    </div>
                    <div class="prod-info">
                        <a href="#">
                            <h5 class="title truncate"><?php echo htmlspecialchars($app_title); ?></h5>
                        </a>
                        <span class="small brand"><?php echo htmlspecialchars($app_title); ?></span>
                        <div class="spacer-line"></div>
                        <span class="addtocart btn-small"><a style="color: #ffffff" href="<?php echo htmlspecialchars($app_url); ?>" target="_blank">Install</a></span>
                        <div class="spacer-line"></div>
                        <p class="bot-0 text"><?php echo htmlspecialchars($app_description); ?></p>
                        
                        <?php echo $app_detail; // Assuming details contain safe HTML ?>
                        
                        <div class="spacer"></div>
                        <div class="divider"></div>
                        <div class="spacer"></div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php include 'footer.php'; ?>