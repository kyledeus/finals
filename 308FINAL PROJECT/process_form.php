<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $topic = $_POST["topic"];
    $category = $_POST["category"];
    $content = $_POST["content"];
    $date = $_POST["date"];

    $username = "";
    $email = "";
    $errors = array();

    // Connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'project');

    // Check for a successful connection
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "INSERT INTO listing (topic, category, content, date) VALUES ('$topic', '$category', '$content', '$date')";

    if (mysqli_query($db, $query)) {
        header("Location: diary_listing.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($db);
    }

    // Close the database connection
    mysqli_close($db);
}
?>
