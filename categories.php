<?php
// /categories.php
include 'header.php';
?>

<div class="pagehead-bg primary-bg"></div>

<div class="container has-pagehead is-pagetitle">
    <div class="section">
        <h5 class="pagetitle">PWA apps based on category</h5>
    </div>
</div>

<div class="container over">
    <div class="section">
        <div class="row">
            <div class="col s12 pad-0">
                <h5 class="bot-20 sec-tit">Categories</h5>
                <ul class="collapsible">
                    <?php
                    try {
                        $statement = $connect->prepare("SELECT * FROM categories ORDER BY sort ASC");
                        $statement->execute();
                        $all_categories = $statement->fetchAll();
                        $total_rows = $statement->rowCount();

                        if ($total_rows > 0) {
                            foreach ($all_categories as $row) {
                                $cat_id = $row["id"];
                                $cat_title = $row["title"];
                                $cat_icon = $row["image"];

                                // GET APPLICATIONS for the category
                                $statementListApps = $connect->prepare(
                                    "SELECT a.title, a.license, a.logo, a.buy_url
                                     FROM application_category ac 
                                     JOIN applications a ON ac.application_id = a.id 
                                     WHERE a.status = 'active' AND ac.category_id = :cat_id"
                                );
                                $statementListApps->bindParam(':cat_id', $cat_id, PDO::PARAM_INT);
                                $statementListApps->execute();
                                $apps = $statementListApps->fetchAll(PDO::FETCH_ASSOC);
                                
                                $resultApp = '<div class="row">';
                                if ($apps) {
                                    foreach ($apps as $app) {
                                        $resultApp .= '
                                        <div class="col s12 m6 l4">
                                            <div class="icon-block block-small circle">
                                                <div class="icon primary-text">
                                                    <img src="'.htmlspecialchars($app["logo"]).'" alt="Icon" style="width: 50px; height: 50px;border-radius: 50%; object-fit: cover;">
                                                </div>
                                                <div class="title"><a href="'. htmlspecialchars($app["buy_url"]) .'" target="_blank">' . htmlspecialchars($app["title"]) . '</a></div>
                                                <div class="tagline">' . htmlspecialchars($app["license"]) . '</div>
                                            </div>
                                        </div>';
                                    }
                                } else {
                                    $resultApp .= '<div class="col s12"><p>No applications found in this category.</p></div>';
                                }
                                $resultApp .= '</div>';

                                echo '
                                <li>
                                    <div class="collapsible-header"><i class="mdi '.htmlspecialchars($cat_icon).'"></i>'.htmlspecialchars($cat_title).'</div>
                                    <div class="collapsible-body"><span>'.$resultApp.'</span></div>
                                </li>';
                            }
                        } else {
                            echo '<li class="collection-item">No categories defined.</li>';
                        }
                    } catch(PDOException $error) {
                        $message = $error->getMessage();
                        echo "<div class='alert alert-danger'>Error: $message</div>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>