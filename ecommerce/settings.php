<?php
session_start();
require_once "config.php";

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.html");
    exit;
}

$message = isset($_GET['message']) ? $_GET['message'] : "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['change_password'])) {
        header("location: change_password.php");
        exit;
    } elseif (isset($_POST['delete_account'])) {
        header("location: delete_account.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/operation.css">
    <title>Settings</title>
</head>
<body>
    <!-- Navigation -->
    <div class="navigation">
        <div class="nav-center container d-flex">
            <a href="index.php" class="logo">
                <img src="./images/logo.png" alt="Dans Logo" style="width: 150px; height: auto;">
            </a>
            <ul class="nav-list d-flex">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="product.html" class="nav-link">Shop</a>
                </li>
                <li class="nav-item">
                    <a href="about.html" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="contact.html" class="nav-link">Contact</a>
                </li>
            </ul>
            <div class="icons d-flex">
                <a href="settings.php" class="icon">
                    <i class="bx bx-cog"></i>
                </a>
                <a href="logout.php" class="icon">
                    <i class="bx bx-log-out"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Settings Content -->
    <div class="settings-container">
        <h1>Account Settings</h1>
        <form method="POST" action="settings.php">
            <button type="submit" name="change_password" class="btn">Change Password</button>
            <button type="submit" name="delete_account" class="btn delete-btn">Delete Account</button>
        </form>
    </div>

    <!-- Popup -->
    <?php if (!empty($message)): ?>
    <div class="popup">
        <p><?php echo $message; ?></p>
        <button onclick="closePopup()">OK</button>
    </div>
    <div class="overlay"></div>
    <?php endif; ?>

    <script>
        function closePopup() {
            document.querySelector('.popup').style.display = 'none';
            document.querySelector('.overlay').style.display = 'none';
        }
    </script>
</body>
</html>
