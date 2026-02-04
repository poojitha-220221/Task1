<?php
// Task A2: PHP Datatypes Demonstration

// 1. String
$name = "Poojitha";

// 2. Integer
$age = 19;

// 3. Float
$height = 5.6;

// 4. Boolean
$isStudent = true;

// 5. Array
$subjects = ["JAVA", "DS", "C", "PHP", "HTML"];

// Task A3: Variable Scope

// 1. Local Scope
function localScopeExample() {
    $localVar = "Hey! This is a local variable.";
    echo "<p><strong>Local Scope:</strong> $localVar</p>";
}

// 2. Global Scope
$globalVar = "PHP personal home page";
function globalScopeExample() {
    global $globalVar; // Access global variable inside function
    echo "<p><strong>Global Scope:</strong> $globalVar</p>";
}

// 3. Static Scope
function staticScopeExample() {
    static $count = 0; // Static variable retains value across calls
    $count++;
    echo "<p><strong>Static Scope count:</strong> $count</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Datatypes & Variable Scope</title>
    <style>
        body {
            background-color: aqua;  
            font-family: Arial, sans-serif;
            text-align: left;
            padding: 30px;
        }
        h2 {
            margin-top: 20px;
            color: #333;
        }
        p, li {
            font-size: 18px;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h2>PHP Datatypes</h2>
    <p><strong>String:</strong> Hello! My name is <?php echo $name; ?>.</p>
    <p><strong>Integer:</strong> I am <?php echo $age; ?> years old.</p>
    <p><strong>Float:</strong> My height is <?php echo $height; ?> feet.</p>
    <p><strong>Boolean:</strong> Am I a student? <?php echo ($isStudent ? "Yes" : "No"); ?></p>
    <p><strong>Array:</strong> I have some knowledge:</p>
    <ul>
        <?php 
        foreach ($subjects as $subject) {
            echo "<li>$subject</li>";
        }
        ?>
    </ul>

    <h2>PHP Variable Scope </h2>
    <?php
    
    localScopeExample();
    globalScopeExample();

    // Call Static Scope function multiple times
    staticScopeExample();
    staticScopeExample();
    staticScopeExample();
    ?>
</body>
</html>
