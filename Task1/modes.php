
<!DOCTYPE html>
<html>
<head>
    <title>File Modes</title>

    <style>
        body {
            background-color:pink;
            margin: 0;
            height: 100vh
        }
            </style>
</head>
<body>
    </html><?php
echo "<h2>PHP fopen() File Modes</h2>";
echo "<hr>";

// create files folder if not exists
if (!is_dir("files")) {
    mkdir("files");
}

// r (Read only)
file_put_contents("files/r.txt", "This is r mode file");
$fp = fopen("files/r.txt", "r");
echo "<b>r mode:</b><br>";
echo fread($fp, filesize("files/r.txt")) . "<br><br>";
fclose($fp);
// w (Write only) 
$fp = fopen("files/w.txt", "w");
fwrite($fp, "Written using w mode");
fclose($fp);
echo "<b>w mode:</b> Old data erased, new data written<br><br>";
// a (Append only) 
$fp = fopen("files/a.txt", "a");
fwrite($fp, "Appended using a mode\n");
fclose($fp);
echo "<b>a mode:</b> Data appended at end<br><br>";

//x (Create new file) 
echo "<b>x mode:</b><br>";
$fp = @fopen("files/x.txt", "x");
if ($fp) {
    fwrite($fp, "File created using x mode");
    fclose($fp);
    echo "New file created<br><br>";
} else {
    echo "File already exists (x mode failed)<br><br>";
}
//-r+ (Read & Write) 
file_put_contents("files/rplus.txt", "Initial content");
$fp = fopen("files/rplus.txt", "r+");
fwrite($fp, "Updated ");
rewind($fp);
echo "<b>r+ mode:</b><br>";
echo fread($fp, filesize("files/rplus.txt")) . "<br><br>";
fclose($fp);
// (Read & Write, erase) 
$fp = fopen("files/wplus.txt", "w+");
fwrite($fp, "Written using w+ mode");
rewind($fp);
echo "<b>w+ mode:</b><br>";
echo fread($fp, filesize("files/wplus.txt")) . "<br><br>";
fclose($fp);

//a+ (Read & Append) 
$fp = fopen("files/aplus.txt", "a+");
fwrite($fp, "Appended using a+ mode\n");
rewind($fp);
echo "<b>a+ mode:</b><br>";
echo nl2br(fread($fp, filesize("files/aplus.txt"))) . "<br><br>";
fclose($fp);

// (Create new Read & Write)
echo "<b>x+ mode:</b><br>";
$fp = @fopen("files/xplus.txt", "x+");
if ($fp) {
    fwrite($fp, "Created using x+ mode");
    rewind($fp);
    echo fread($fp, filesize("files/xplus.txt")) . "<br>";
    fclose($fp);
} else {
    echo "File already exists (x+ mode failed)<br>";
}

echo "<hr><b>All fopen() modes demonstrated successfully</b>";
?>
