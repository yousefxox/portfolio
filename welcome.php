<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
echo "Welcome, " . $_SESSION['username'] . "!";
?>
<br><br>
<a href="logout.php" class="btn" style="color:black; background:white; padding:5px 10px; text-decoration:none;">Logout</a>
