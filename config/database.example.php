<?php
// Rename this file to database.php and update the credentials below

$db_server = "localhost";
$db_user = "your_username";
$db_pass = "your_password";
$db_name = "your_database_name";
$conn = "";

try {
    $conn = mysqli_connect(
        $db_server,
        $db_user,
        $db_pass,
        $db_name
    );
} catch(mysqli_sql_exception) {
    echo "Connection Failed!";
}
