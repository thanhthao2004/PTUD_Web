<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    session_start();
    error_reporting(0);
?>
<body>
    <h3>
        <?php 
            if($_SESSION["Thongtin"]){
                echo "Gia tri bien session la:
                ".$_SESSION["Thongtin"]."<a href=''></a>";
            }else{
                header("Location: session.php");
            }
        ?>
    </h3>
</body>
</html>
<!-- a) Cu phap o day thieu session_start, chua duoc khai bao
b) ket qua thuc thi loi vi thieu khai bao
c) ta can them:
    session_start();
    error_reporting(0); -->