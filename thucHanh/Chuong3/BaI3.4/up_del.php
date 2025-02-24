<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload and Delete File</title>
</head>
<body>
    <h2>Upload File</h2>
    <form action="up_del.php" method="post" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="file" id="file">
        <input type="submit" value="Upload File" name="upload">
    </form>

    <h2>Delete File</h2>
    <form action="up_del.php" method="post">
        <input type="hidden" name="file_path" value="<?php echo isset($_POST['file_path']) ? $_POST['file_path'] : ''; ?>">
        <input type="submit" value="Delete File" name="delete">
    </form>

    <h1>Kết quả sau khi Upload File</h1>
    <?php
        $upload_dir = 'upload/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        if (isset($_POST['upload']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
            $name_new = pathinfo($_FILES["file"]["name"], PATHINFO_FILENAME) . "_" . rand(100, 999);
            $ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
            $filename_new = $name_new . "." . $ext;
            $file_path = $upload_dir . $filename_new;

            if ($_FILES["file"]["error"] > 0) {
                echo "Lỗi trong quá trình upload";
            } else {
                move_uploaded_file($_FILES["file"]["tmp_name"], $file_path);
                echo "Tên file ban đầu: " . $_FILES["file"]["name"] . "<br />";
                echo "Tên file thay đổi: " . $filename_new . "<br />";
                echo "Kích thước: " . round($_FILES["file"]["size"] / 1024) . " KB<br />";
                echo "Loại file: " . $_FILES["file"]["type"] . "<br />";
                echo "Tên file tạm: " . $_FILES["file"]["tmp_name"] . "<br />";
                echo '<img src="' . $file_path . '" width="200"><br />';
                echo '<input type="hidden" name="file_path" value="' . $file_path . '">';
            }
        }

        if (isset($_POST['delete']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
            $file_path = $_POST['file_path'];
            if (file_exists($file_path)) {
                unlink($file_path);
                echo "File đã được xóa: " . $file_path;
            } else {
                echo "File không tồn tại: " . $file_path;
            }
        }
    ?>
</body>
</html>