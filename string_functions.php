<?php
// 1. Hardcoded string
$hardcodedString = "Welcome to PHP learning! Learn and succeed.";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task B2: String Source</title>
    <style>
        body {
            background-color: aqua;
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        h2 {
            color: #333;
        }
        p {
            font-size: 18px;
        }
        input, button {
            padding: 8px;
            margin: 5px 0;
            font-size: 16px;
            width: 300px;
        }
        form {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h2>1. Hardcoded String</h2>
    <p><?php echo $hardcodedString; ?></p>

    <h2>2. User Input Strings</h2>
    <form method="post" action="">
        <label for="username">Enter your name:</label><br>
        <input type="text" name="username" id="username" required><br>

        <label for="email">Enter your email:</label><br>
        <input type="email" name="email" id="email" required><br>

        <label for="password">Enter your password:</label><br>
        <input type="password" name="password" id="password" required><br>

        <label for="phone">Enter your phone number:</label><br>
        <input type="text" name="phoneno" id="phoneno" required><br>

        <label for="native">Enter your native:</label><br>
        <input type="text" name="native" id="native" required><br>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phoneno'];
        $city = $_POST['native'];

        
        echo "<h3>User Input Details:</h3>";
        echo "<p><strong>Name:</strong> $username</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Password:</strong> $password</p>";
        echo "<p><strong>Phoneno:</strong> $phoneno</p>";
        echo "<p><strong>native:</strong> $native</p>";
    }
    ?>
</body>
</html>
<?php
// Task B3: Mandatory String Functions Demo

// Sample string for demonstration
$text = "  Hello World! Welcome to PHP Programming. enjoy in universe  ";
$search = "World";
$replace = "Universe";
$compare1 = "Hello";
$compare2 = "hello";
?>

<!DOCTYPE html>
<html>
<head>
    <title>String Functions</title>
    <style>
        body {
            background-color: aqua;
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        h2 {
            color: #333;
        }
        p {
            font-size: 18px;
            margin: 5px 0;
        }
        hr {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <h2>String Functions</h2>

    <h3>1. Basic String Functions</h3>
    <p><strong>Original String:</strong> "<?php echo $text; ?>"</p>
    <p><strong>Length (strlen):</strong> <?php echo strlen($text); ?></p>
    <p><strong>Word Count (str_word_count):</strong> <?php echo str_word_count($text); ?></p>
    <p><strong>Reverse (strrev):</strong> <?php echo strrev($text); ?></p>

    <hr>
    <h3>2. Case Conversion</h3>
    <p><strong>Uppercase (strtoupper):</strong> <?php echo strtoupper($text); ?></p>
    <p><strong>Lowercase (strtolower):</strong> <?php echo strtolower($text); ?></p>
    <p><strong>First Letter Uppercase (ucfirst):</strong> <?php echo ucfirst(trim($text)); ?></p>
    <p><strong>First Letter of Each Word Uppercase (ucwords):</strong> <?php echo ucwords(trim($text)); ?></p>

    <hr>
    <h3>3. Search & Replace</h3>
    <p><strong>Position of "<?php echo $search; ?>" (strpos):</strong> <?php echo strpos($text, $search); ?></p>
    <p><strong>Replace "<?php echo $search; ?>" with "<?php echo $replace; ?>" (str_replace):</strong> <?php echo str_replace($search, $replace, $text); ?></p>

    <hr>
    <h3>4. Substring & Trimming</h3>
    <p><strong>Substring (substr, first 12 chars):</strong> <?php echo substr($text, 0, 12); ?></p>
    <p><strong>Trim (trim):</strong> "<?php echo trim($text); ?>"</p>
    <p><strong>Left Trim (ltrim):</strong> "<?php echo ltrim($text); ?>"</p>
    <p><strong>Right Trim (rtrim):</strong> "<?php echo rtrim($text); ?>"</p>

    <hr>
    <h3>5. String Comparison</h3>
    <p><strong>Compare (strcmp):</strong> <?php echo strcmp($compare1, $compare2); ?></p>
    <p><strong>Case-insensitive Compare (strcasecmp):</strong> <?php echo strcasecmp($compare1, $compare2); ?></p>

    <hr>
    <h3>6. Special Characters & Security</h3>
    <p><strong>htmlspecialchars:</strong> <?php echo htmlspecialchars("<h1>Hello</h1>"); ?></p>
    <p><strong>addslashes:</strong> <?php echo addslashes("It's a PHP demo."); ?></p>
</body>
</html>


