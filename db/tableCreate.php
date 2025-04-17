<?php
    //include dbConnection.php before including this
    $sqlTableCreate = "CREATE TABLE IF NOT EXISTS string_info (
        string_id INTEGER PRIMARY KEY AUTO_INCREMENT,
        message VARCHAR(50) NOT NULL
    )";

    $stmt = $conn->prepare($sqlTableCreate);
    $stmt->execute();
?>