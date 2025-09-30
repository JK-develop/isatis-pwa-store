<?php
// /index.php

// Include the header file
include 'header.php';
?>

<div class="pagehead-bg primary-bg"></div>

<div class="carousel carousel-fullscreen carousel-slider home_carousel">
    <a class="carousel-item" target="_blank" href="/categories.php">
        <div class="bg" style="background-image: url('assets/banner/1.webp')"></div>
        <div class="item-content center-align white-text">
            <div class="spacer"></div>
            <h3>Use the category to find the app</h3>
        </div>
    </a>
    <a class="carousel-item" target="_blank" href="new_app.php">
        <div class="bg" style="background-image: url('assets/banner/2.webp')"></div>
        <div class="item-content center-align white-text">
            <div class="spacer"></div>
            <h3>Publish your app free and easily</h3>
        </div>
    </a>
    <a class="carousel-item" target="_blank" href="#">
        <div class="bg" style="background-image: url('assets/banner/3.webp')"></div>
        <div class="item-content center-align white-text">
            <div class="spacer"></div>
            <h3>Free your phone storage</h3>
        </div>
    </a>
</div>

<div class="row primary-bg">
    <div class="spacer"></div>
    <h5 class="center bot-0 sec-tit white-text pad-15">Free PWA store</h5>
    <p class="center-align white-text pad-30">Isatis is a PWA app store that categorized and orgenize all PWAs worldwide and it has easy to use and install PWA.</p>
    <div class="center">
        <a class="btn-large waves-effect theme-bg-btn" href="how_to_use.php">How to use</a>
    </div>
</div>

<div class="theme-bg">
    <div class="container">
        <div class="section pb0">
            <div class="row ui-mediabox prods prods-boxed medium-left aligned">
                <?php
                try {
                    $statement = $connect->prepare("SELECT * FROM applications WHERE status = 'active' ORDER BY RAND(), id DESC;");
                    $statement->execute();
                    $all_result = $statement->fetchAll();
                    $total_rows = $statement->rowCount();

                    if ($total_rows > 0) {
                        foreach ($all_result as $row) {
                            // The same PHP logic to display each application
                            $app_id = $row["id"];
                            $vote = $row["votes"];
                            $rawDate = $row["updated_at"];
                            $app_banner = $row["image"];
                            $app_title = $row["title"];
                            $app_developer = $row["developer"];
                            $app_description = $row["description"];
                            $version_url = $row['buy_url']; // Assuming buy_url is the direct link

                            // VOTE CALC (same as before)
                            $fullStars = floor($vote);
                            $halfStar = ($vote - $fullStars >= 0.5) ? 1 : 0;
                            $emptyStars = 5 - ($fullStars + $halfStar);
                            $voteResult = '<div class="prod-rating">';
                            for ($i = 0; $i < $fullStars; $i++) { $voteResult .= '<i class="mdi mdi-star colored"></i>'; }
                            if ($halfStar) { $voteResult .= '<i class="mdi mdi-star-half colored"></i>'; }
                            for ($i = 0; $i < $emptyStars; $i++) { $voteResult .= '<i class="mdi mdi-star-outline colored"></i>'; }
                            $voteResult .= '</div>';
                            
                            // DATE CALC
                            $date = new DateTime($rawDate);
                            $formattedDateAlt = $date->format('F j, Y');

                            // GET CATEGORIES
                            $statementListCategories = $connect->prepare("SELECT c.title FROM application_category ac JOIN categories c ON ac.category_id = c.id WHERE ac.application_id = :app_id");
                            $statementListCategories->bindParam(':app_id', $app_id, PDO::PARAM_INT);
                            $statementListCategories->execute();
                            $categories = $statementListCategories->fetchAll(PDO::FETCH_COLUMN);
                            $resultCat = '';
                            foreach ($categories as $category) {
                                $resultCat .= '<div class="chip">' . htmlspecialchars($category) . '</div>';
                            }
                            
                            // Render the application card
                            echo '
                            <div class="col s12">
                                <div class="prod-img-wrap">
                                    <a class="img-wrap" href="' . htmlspecialchars($app_banner) . '" data-fancybox="images" data-caption="' . htmlspecialchars($app_title) . '" style="background-image: url(' . htmlspecialchars($app_banner) . ');">&nbsp;</a>
                                </div>
                                <div class="prod-info boxed">
                                    <a href="app_view.php?id=' . $app_id . '">
                                        <h5 class="title truncate">' . htmlspecialchars($app_title) . '</h5>
                                    </a>
                                    <span class="small brand">© ' . htmlspecialchars($app_developer) . '</span>
                                    <p class="bot-0 text">' . htmlspecialchars($app_description) . '</p>
                                    <div class="spacer-line"></div><hr/>Categories:<br/>
                                    ' . $resultCat . '<hr/>
                                    <div class="spacer-line"></div>
                                    <div class="prod-options courses">
                                        <div class="size"><span>Last update: ' . $formattedDateAlt . '</span></div>
                                    </div>
                                    ' . $voteResult . '
                                    <div class="spacer-line"></div> 
                                    <a class="addtocart btn-small" target="_blank" href="' . htmlspecialchars($version_url) . '">Go</a>
                                    <div class="spacer-line"></div>
                                </div>
                            </div>';
                        }
                    } else {
                        echo '<p>No applications found.</p>';
                    }
                } catch (PDOException $error) {
                    $message = $error->getMessage();
                    echo "<div class='alert alert-danger'>Error: $message</div>";
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php
// Include the footer file
include 'footer.php';
?>