<?php
session_start();
require_once "config.php";

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.html");
    exit;
}

$username = $_SESSION['username'];
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql_delete = "DELETE FROM users WHERE username = ?";
    if ($stmt = mysqli_prepare($conn, $sql_delete)) {
        mysqli_stmt_bind_param($stmt, "s", $username);
        if (mysqli_stmt_execute($stmt)) {
            session_destroy();
            header("location: login.html");
            exit;
        } else {
            $message = "Error deleting account.";
        }
        mysqli_stmt_close($stmt);
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Delete Account</title>
</head>
<body>
    <div class="container">
        <h1>Delete Account</h1>
        <p>Are you sure you want to delete your account? This action cannot be undone.</p>
        <form method="POST" action="delete_account.php">
            <button type="submit">Delete My Account</button>
            <p><?php echo $message; ?></p>
        </form>
    </div>
</body>
</html>
