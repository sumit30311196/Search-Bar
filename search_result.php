<?php
include "db.php";

if (isset($_POST['query'])) {

    $search = $conn->real_escape_string($_POST['query']);

    $sql = "SELECT * FROM `products` WHERE `name` = '$search'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        while ($row = $result->fetch_assoc()) {
            echo "<div>" . htmlspecialchars($row['name']) . "</div>";
        }
        
    } else {
        echo "<div class='alert alert-info'>No products found for '<strong>" . htmlspecialchars($search) . "</strong>'</div>";
    }
}
?>
