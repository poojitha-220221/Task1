<?php
include "db.php";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    mysqli_query($conn,
    "INSERT INTO users (username,email,password)
     VALUES ('$username','$email','$password')");
    echo "Registration successful";
}
?>

<form method="post">
Username: <input type="text" name="username"><br><br>
Email: <input type="email" name="email"><br><br>
Password: <input type="password" name="password"><br><br>
<input type="submit" name="register" value="Register">
</form>
