<?php
// Task C2: Login Module - String Handling, Case Sensitivity, Output, die()

// Dummy credentials for demo purposes
$storedUsername = "Pooji";
$storedPassword = "pooja123";

if (isset($_POST['login'])) {
    // 1️⃣ Clean user input
    $username = trim($_POST['username']);
    $username = htmlspecialchars($username);

    $password = trim($_POST['password']);
    $password = htmlspecialchars($password);

    // 2️⃣ Compare strings properly
    // Username comparison is case-sensitive
    if (strcmp($username, $storedUsername) !== 0) {
        die("Error: Username not found."); // Stop execution if username mismatch
    }

    // Password comparison is case-sensitive
    if (strcmp($password, $storedPassword) !== 0) {
        print("Error: Incorrect password."); // Display message using print
        die(); // Stop further execution
    }

    // 3️⃣ Success message using echo
    echo "<p>Login successful! Welcome, <strong>$username</strong>.</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Module</title>
    <style>
        body {
            background-color: aqua;
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        input, button {
            padding: 8px;
            margin: 5px 0;
            font-size: 16px;
            width: 250px;
        }
        h2 {
            color: #333;
        }
        p {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h2>Login Form</h2>
    <form method="post" action="">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" required><br>

        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>


