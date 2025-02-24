<!DOCTYPE html>
<?php error_reporting(1)?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $host = 'localhost';
        $user = 'Admin';
        $pass = '123456';
        $db = 'qlTintuc';
        $conn = mysqli_connect($host, $user, $pass, $db);
        if ($conn->connect_error){
            echo'khong ket noi duoc';
        }else{
            echo'ket noi thanh cong'."<br>";
            selectionLoaitin($conn);
            insertLoaitin($conn);
            updateLoaitin($conn);
            deleteLoaitin($conn);
        }
        function selectionLoaitin($conn){
            $SelectLoaitin = 'select ID_Loaitin , ten_Loaitin, hienThi from loaiTin';
            $tblLoaitin = $conn -> query($SelectLoaitin);
            if($tblLoaitin->num_rows>0){
                while($row = $tblLoaitin -> fetch_assoc()){
                    echo $row['ten_Loaitin']."---".$row['hienThi']."<br>";
                }
            }else{
                echo '0 có dong nào để hiển thị';
            }
        }
        function insertLoaitin ($conn){
            $insertLoaitin = "insert into loaiTin(ten_Loaitin, hienThi) values('Tin Thoi su','5')";
            $tblLoaitin = $conn -> query($insertLoaitin);
            if ($tblLoaitin){
                echo ' insert du lieu thanh cong';
            }
            else{
                echo ' insert du lieu khong thanh cong';
            }
        }
        function updateLoaitin ($conn){
            $updateLoaitin = "update loaiTin set  hienThi = 3 where hienThi = 5  ";
            $tblLoaitin = $conn -> query($updateLoaitin);
            if($tblLoaitin){
                echo ' update du lieu thanh cong';
            }else{
                echo ' update du lieu khong thanh cong';
            }
        }
        function deleteLoaitin ($conn){
            $deleteLoaitin = "delete from loaiTin where hienthi = 3  ";
            $tblLoaitin = $conn -> query($deleteLoaitin);
            if($tblLoaitin){
                echo ' delete du lieu thanh cong';
            }else{
                echo ' delete du lieu khong thanh cong';
            }
        }
        $conn -> close();
    ?>
</body>
</html>