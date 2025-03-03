<?php 
    session_start();
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
        if(isset($_POST['sbgan'])){
            $_SESSION["Thongtin"] = $_POST["txtthongtin"];
        }
    ?>
<body>
    <form action="" method = "post">
        <table>
            <tr>
                <td>Gan gia tri cho bien session: </td>
                <td><input type="text" name='txtthongtin'></td>
                <td> <input type="submit" value = "Gan" name = "sbgan"></td>
            </tr>
        </table>
    </form>
    <h3>
        <?php
            if($_SESSION["Thongtin"]){
                echo "Gia tri bien session la:
                ".$_SESSION["Thongtin"].".<a href= 'dangxuat.php'>Dangxuat</a>";
            }else{
                echo "Gia tri bien session chua duoc gan";
            }
        ?>
    </h3>
</body>
</html>
<!-- b)ket qua thuc thi thanh cong vi co khai bao -->