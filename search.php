<?php

include "db.php";

if (isset($_POST['query'])) {

    $search = $conn->real_escape_string($_POST['query']);
    $sql = "SELECT name FROM `products` WHERE name LIKE '%$search%' LIMIT 5";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div>" . htmlspecialchars($row['name']) . "</div>";
        }
    } else {
        echo "<div>No results found</div>";
    }
}
?>
