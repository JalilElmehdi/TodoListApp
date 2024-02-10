<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    include 'database.php';

    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {

        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['iduser']; 
        header("location: home.php"); -(j());
        exit();
    } else {
        $_SESSION['signin_error'] = "Invalid email or password. Please try again.";
        header("location: login.php");
        exit();
    }
}
?>