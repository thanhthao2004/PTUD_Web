<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h2>Upload File</h2>
    <form action="upload_multi.php" method="post" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="files[]" id="file" multiple>
        <input type="submit" value="Upload File" name="submit">
    </form>
    <h1>Kết quả sau khi Upload File</h1>
    
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        { 
            foreach ($_FILES["files"]["name"] as $i => $filename)
            {
                echo '<div style="float:left; border:1px solid #c9c9c9; padding:10px; height: 300px; margin: 5px;">'; 
                $name_new = pathinfo($_FILES["files"]["name"][$i], PATHINFO_FILENAME) . "_" . rand(100, 999);
                $ext = pathinfo($_FILES["files"]["name"][$i], PATHINFO_EXTENSION);
                $filename_new = $name_new . "." . $ext;

                echo "Tên file ban đầu: " . $_FILES["files"]["name"][$i];
                echo "<br />Tên file thay đổi: " . $filename_new;
                echo "<br />Kích thước: " . round($_FILES["files"]["size"][$i] / 1024) . " KB";
                echo "<br />Loại file: " . $_FILES["files"]["type"][$i];
                echo "<br />Tên file tạm: " . $_FILES["files"]["tmp_name"][$i];
                echo "<p/>";

                if ($_FILES["files"]["error"][$i] > 0)
                    echo "Lỗi trong quá trình upload";
                else
                    move_uploaded_file($_FILES["files"]["tmp_name"][$i], "upload/" . $filename_new);

                if ($ext == 'png' || $ext == 'jpg' || $ext == 'gif')
                    echo '<img src="upload/' . $filename_new . '" width="200">';
                else
                    echo 'Không phải file ảnh';
                echo '</div>';
            }
        }
    ?>
</body>
</html>