<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'KHANG' && $password == '106391302') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
} else {
    echo "Invalid login. <a href='login.php'>Try again</a>";
}
?>