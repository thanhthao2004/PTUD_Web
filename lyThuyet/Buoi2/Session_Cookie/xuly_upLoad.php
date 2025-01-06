<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // khi add file thi bien phai la FILE khong phai REQUEST, POST hay GET
        $file = $_FILES["ffile"];
        echo $file["name"]."<br>";
        echo $file["size"]."<br>";
        echo $file["type"]."<br>";
        echo $file["tmp_name"]."<br>";
        echo "<hr>";
        if ($file['size']>1*1024*1024){
            echo "Dung luong qua lon";
        }
        $des = "abc/".$file["name"];
        move_uploaded_file($file["tmp_name"],$des)
        //Bai tap tuan 2 là:
        //Co form dang nhap
        //Co form upload
        //doi ten echo $file["name"]."<br>"; trước dấu .jpg
        // gioi hạn size cho file, echo $file["size"]."<br>", DOI BYTE ra KB, MB, moi file cach nhau 1024 don vi
        //Kiem tra type
        //code lai file upload
    ?>
</body>
</html>