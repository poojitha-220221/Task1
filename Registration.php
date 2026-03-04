<?php
if (isset($_POST['register'])) {
 
    $username = trim($_POST['username']);
    $username = htmlspecialchars($username);
    $username = addslashes($username);

    $fullname = trim($_POST['fullname']);
    $fullname = htmlspecialchars($fullname);
    $fullname = ucwords(strtolower($fullname)); 

    $password = trim($_POST['password']);

    if (strlen($username) < 5) {
        die("Error: Username must be at least 5 characters long.");
    }
    if (strlen($password) < 6) {
        die("Error: Password must be at least 6 characters long.");
    }

   
    echo "<p>Registration successful!</p>";
    echo "<p>Username: $username</p>";
    echo "<p>Full Name: $fullname</p>";
}
?>
<form method="post">
    Username: <input type="text" name="username" required><br>
    Full Name: <input type="text" name="fullname" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit" name="register">Register</button>
</form>
