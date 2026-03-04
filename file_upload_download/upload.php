
<!DOCTYPE html>
<html>
<head>
    <title>File Upload & Download</title>

    <style>
        body {
            background-color: aqua;
            margin: 0;
            height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            font-family: Arial;
        }

        .box {
            background-color: white;
            width: 450px;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
        }

        button {
            padding: 10px 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="box">

    <h2>File Upload System</h2>
    <p>
        This form allows you to upload files such as PDF, images, or text files.
        Once uploaded, you can download the same file.✅
    </p>

    <h4>Instructions:</h4>
    <ul style="text-align:left;">
        <li>Select any file from your system</li>
        <li>Click on Upload File</li>
        <li>After upload, click Download File</li>
    </ul>

    <hr>

    <!-- FORM -->
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="myfile" required><br><br>
        <button type="submit" name="upload">Upload File</button>
    </form>

    <br>

    
<?php
if (isset($_POST['upload'])) {

    $file_name = basename($_FILES['myfile']['name']);
    $file_tmp  = $_FILES['myfile']['tmp_name'];

    $upload_folder = __DIR__ . "/uploads/";

    if (!is_dir($upload_folder)) {
        mkdir($upload_folder, 0777, true);
    }

    if (move_uploaded_file($file_tmp, $upload_folder . $file_name)) {
        echo "<p style='color:green;'>File uploaded successfully!✅</p>";
        echo "<a href='download.php?file=$file_name'>Download File</a>";
    } else {
        echo "<p style='color:red;'>File upload failed!❌</p>";
    }
}
?>



</div>

</body>
</html>
