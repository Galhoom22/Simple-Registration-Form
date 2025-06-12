<?php include("config/database.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
        <h2>Welcome to my page!</h2>
        <label>Username:</label> <br>
        <input type="text" name="username"><br>
        <label>Password:</label> <br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="register">
    </form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = trim(filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS));
    $password = trim(filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS));

    if(empty($username)){
        echo "Please enter a username <br>";
    }
    elseif(empty($password)){
        echo "Please enter a password <br>";
    }
    else{
        $hash = password_hash($password,PASSWORD_DEFAULT);
        try {
            $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $hash);
            $stmt->execute();
            echo "You are now registered";
        } catch(mysqli_sql_exception $e) {
            echo "This username is already registered";
        }        
    }
}
mysqli_close($conn);
?>