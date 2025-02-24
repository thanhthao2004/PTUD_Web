<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h2>Upload File</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data" name = "sbupload">
        Select file to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
    <h1>Kết quả sau khi Upload File</h1>
    
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "File Name: " . $_FILES["fileToUpload"]["name"] . "<br>";
            echo "Full Path: " . $_FILES["fileToUpload"]["full_path"] . "<br>";
            echo "File Type: " . $_FILES["fileToUpload"]["type"] . "<br>";
            echo "Temporary Name: " . $_FILES["fileToUpload"]["tmp_name"] . "<br>";
            echo "Error Code: " . $_FILES["fileToUpload"]["error"] . "<br>";
            echo "File Size: " . $_FILES["fileToUpload"]["size"] . "<br>";
        }
    ?>
</body>
</html>
