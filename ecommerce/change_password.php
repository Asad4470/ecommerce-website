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
    $old_password = trim($_POST['old_password']);
    $new_password = trim($_POST['new_password']);
    $confirm_password = trim($_POST['confirm_password']);

    if (empty($old_password)) {
        $message = "Please enter your current password.";
    } elseif (strlen($new_password) < 5) {
        $message = "New password must be at least 5 characters.";
    } elseif ($new_password != $confirm_password) {
        $message = "Passwords do not match.";
    } else {
        $sql = "SELECT password FROM users WHERE username = ?";
        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $hashed_password);

            if (mysqli_stmt_fetch($stmt)) {
                if (password_verify($old_password, $hashed_password)) {
                    mysqli_stmt_close($stmt);

                    $sql_update = "UPDATE users SET password = ? WHERE username = ?";
                    if ($stmt_update = mysqli_prepare($conn, $sql_update)) {
                        $new_hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt_update, "ss", $new_hashed_password, $username);
                        if (mysqli_stmt_execute($stmt_update)) {
                            $message = "Password changed successfully!";
                            header("location: settings.php?message=" . urlencode($message));
                            exit;
                        } else {
                            $message = "Error updating password.";
                        }
                    }
                } else {
                    $message = "Incorrect current password.";
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/operation.css">
    <title>Change Password</title>
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

    <!-- Change Password Content -->
    <div class="settings-container">
        <h1>Change Password</h1>
        <form method="POST" action="change_password.php">
            <label for="old_password">Current Password</label>
            <input type="password" name="old_password" required>
            <label for="new_password">New Password</label>
            <input type="password" name="new_password" required>
            <label for="confirm_password">Confirm New Password</label>
            <input type="password" name="confirm_password" required>
            <button type="submit" class="btn">Change Password</button>
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
