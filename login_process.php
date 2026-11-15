<?php
session_start();
include 'db_connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $username;
        echo "Login successful! Welcome " . $username . "<br>";
        echo '<a href="welcome.php">Go to Dashboard</a>';
    } else {
        echo "Invalid password.";
    }
} else {
    echo "Username not found.";
}
$conn->close();
?>