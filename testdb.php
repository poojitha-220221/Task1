<?php
$conn = mysqli_connect("localhost", "root", "", "userdb");

if ($conn) {
    echo "Database connected successfully";
} else {
    echo "Database connection failed";
}
?>
