<?php

header('Content-Type: application/json');

include 'db_connection.php';

try {
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query to fetch categories
    $statement = $connect->prepare(
        "SELECT id, title FROM categories WHERE navbar = 1 ORDER BY sort ASC"
    );
    $statement->execute();

    $categories = $statement->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($categories)) {
        echo json_encode($categories);
    } else {
        echo json_encode(["error" => "No categories found."]);
    }
} catch (PDOException $error) {
    $message = $error->getMessage();
    echo json_encode(["error" => "Database error: $message"]);
}

?>
