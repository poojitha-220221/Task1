<?php

if (isset($_GET['file'])) {
    $filename = basename($_GET['file']);  
    $filepath = __DIR__ . "/uploads/" . $filename;

    // Check if file exists
    if (file_exists($filepath)) {
        
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));

        
        readfile($filepath);
        exit;
    } else {
        echo "File does not exist!";
    }
} else {
    echo "No file specified!";
}
?>