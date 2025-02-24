<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin tác giả</title>
</head>
<body>
    <?php
        if(isset($_GET['ten']) && isset($_GET['tuoi'])){
            $ten = $_GET['ten'];
            $tuoi = $_GET['tuoi'];
            echo "<b><p>Thông tin chi tiết tác giả</p></b>";
            echo "Xin chào ".$ten ." - ".$tuoi;
        }
    ?>
</body>
</html>