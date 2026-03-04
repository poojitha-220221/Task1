<?php
include "db.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn,
    "SELECT * FROM users WHERE username='$username' AND password='$password'");

    if (mysqli_num_rows($result) == 1) {
        echo "Login successful";
    } else {
        echo "Invalid credentials";
    }
}
?>

<form method="post">
Username: <input type="text" name="username"><br><br>
Password: <input type="password" name="password"><br><br>
<input type="submit" name="login" value="Login">
</form>
