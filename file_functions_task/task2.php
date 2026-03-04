
<!DOCTYPE html>
<html>
<head>
    <title>File Upload & Download</title>

    <style>
        body {
            background-color: aqua;
            margin: 0;
            height: 100vh
        }
            </style>
</head>
<body>
    </html>
    <?php
// FILE PATH (string)
$filepath = "files/poojitha.txt";

/* 
   fopen, fwrite, fclose (WRITE)
*/
$file = fopen($filepath, "a");
fwrite($file, "\n web technologies is a effective one to look beauty()");
fclose($file);
echo "File written successfully<br><br>";

  // fopen, fread, fclose (READ)
$file = fopen($filepath, "r");
$content = fread($file, filesize($filepath));
fclose($file);

echo "<b>First we have a knowledge in JAVASCRIPT, CSS AND HTML:</b><br>";
echo nl2br($content) . "<br><br>";


 //  file_get_contents

$data = file_get_contents($filepath);
echo "<b>Lets get the content from DUCKETT, JENNIFER, MARIJN HAVERBEKE:</b><br>";
echo nl2br($data) . "<br><br>";


  // file_put_contents

file_put_contents($filepath, "\nAdded using file_put_contents()", FILE_APPEND);
echo "To control the appearance and presentation of a web page in browser <br><br>";


  // file() — array of lines

$lines = file($filepath);
echo "<b>Arrays is not meant as Arey....!:</b><br>";
foreach ($lines as $line) {
    echo $line . "<br>";
}
echo "<br>";


 //  FILE INFORMATION (10)

echo "<h3>File Information</h3>";

echo "File Exists: " . (file_exists($filepath) ? "Yes" : "No") . "<br>";
echo "File Size: " . filesize($filepath) . " bytes<br>";
echo "File Type: " . filetype($filepath) . "<br>";
echo "Last Access Time: " . date("d-m-Y H:i:s", fileatime($filepath)) . "<br>";
echo "Last Modified Time: " . date("d-m-Y H:i:s", filemtime($filepath)) . "<br>";
echo "File Change Time: " . date("d-m-Y H:i:s", filectime($filepath)) . "<br>";
echo "File Permissions: " . substr(sprintf('%o', fileperms($filepath)), -4) . "<br>";
echo "File Owner ID: " . fileowner($filepath) . "<br>";
echo "File Group ID: " . filegroup($filepath) . "<br>";
echo "File Inode: " . fileinode($filepath) . "<br>";


echo "<h3>File & Folder Management</h3>";

// copy
copy($filepath, "files/poojitha_copy.txt");
echo "File copied successfully.<br>";

// rename
rename("files/poojitha_copy.txt", "files/poojitha_renamed.txt");
echo "File renamed successfully.<br>";

// is_file
echo "Is poojitha.txt a file? ";
echo is_file($filepath) ? "Yes<br>" : "No<br>";

// is_dir
echo "Is files folder a directory? ";
echo is_dir("files") ? "Yes<br>" : "No<br>";

// mkdir
if (!is_dir("test_folder")) {
    mkdir("test_folder");
    echo "Folder created (test_folder).<br>";
}

// unlink
if (file_exists("files/poojitha_renamed.txt")) {
    unlink("files/poojitha_renamed.txt");
    echo "File deleted using unlink().<br>";
}

// rmdir
if (is_dir("test_folder")) {
    rmdir("test_folder");
    echo "Folder removed using rmdir().<br>";
}


echo "<h3>Directory Handling</h3>";

// getcwd
echo "Current Working Directory: " . getcwd() . "<br><br>";

// scandir
echo "<b>Files using scandir():</b><br>";
$files = scandir("files");
foreach ($files as $f) {
    if ($f != "." && $f != "..") {
        echo $f . "<br>";
    }
}
echo "<br>";

// opendir, readdir
echo "<b>Files using opendir() & readdir():</b><br>";
$dir = opendir("files");
while (($fname = readdir($dir)) !== false) {
    if ($fname != "." && $fname != "..") {
        echo $fname . "<br>";
    }
}
closedir($dir);
echo "Directory closed successfully.<br><br>";

// chdir
chdir("files");
echo "Changed Directory to: " . getcwd() . "<br>";

// dirname
echo "Parent Directory: " . dirname(getcwd()) . "<br>";

// go back
chdir("..");


  // FILE LOCKING

echo "<h3>File Locking</h3>";

$fp = fopen($filepath, "r+");
if (flock($fp, LOCK_EX)) {
    echo "File locked successfully for writing.<br>";
    fwrite($fp, "\nThis line was added using file locking.");
    fflush($fp);
    flock($fp, LOCK_UN);
    echo "File unlocked successfully.<br>";
} else {
    echo "Unable to lock the file.<br>";
}
fclose($fp);
?>


