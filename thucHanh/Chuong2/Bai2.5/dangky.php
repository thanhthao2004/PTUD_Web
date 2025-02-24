<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h2>BANNER WEBSITE</h2>
        </header>
        <div class="main">
            <nav>
                <center><p>Menu</p></center>
                <p>Trang Chu</p>
                <p>Dang ky</p>
                <p>Dang Nhap</p>
            </nav>
            <div class="content">
                <form action="" name="form" method ="post">
                    <b><p align = "center">THONG TIN DANG KY</p></b>
                    <p>Thong tin tai khoan</p>
                    Email <input type="text" name = "txtemail"><br>
                    Password <input type="text" name = "txtpassword"><br>
                    Nhap lai Password <input type="text" name = "txtRepassword"><br>
                    <p>Thong tin ca nhan</p>
                    Ho ten <input type="text" name = "txtname"><br>
                    Que Quan <select name="slqq">
                         <option value="">Chon Tinh/Thanh Pho</option>
                            </select><br>
                    Dien Thoai<input type="number" name = "txtphone"><br>
                    Gioi tinh <input type="radio" name="radio" value="Nam">Nam
                                <input type="radio" name="radio" value="Nu">Nu <br>
                    So thich 
                            <input type="checkbox" name="check[]" value="Mau xanh">Mau xanh
                            <input type="checkbox" name="check[]" value="Mau do">Mau do
                            <input type="checkbox" name="check[]" value="Dong que">Dong que
                            <input type="checkbox" name="check[]" value="Cao nguyen">Cao nguyen <br>
                    <div class="btn">
                        <input type="submit" value="Dang Ky" name="sbdangnhap" >
                        <input type="reset" name="huy" value = "Lam lai">
                    </div>
                    
                </form>
            </div>
            
            
        </div>
        <footer><p>Footer webiste</p></footer>
    </div>
    <?php
        if(isset($_POST["sbdangnhap"])){
            $email = $_POST["txtemail"];
            $password = $_POST["txtpassword"];
            $repass = $_POST["txtRepassword"];
            $hoten = $_POST["txtname"];
            $quequan = $_POST["slqq"];
            $phone = $_POST["txtphone"];
            $gender = isset($_POST["radio"]) ? $_POST["radio"] : '';
            $hobby = isset($_POST["check"]) ? $_POST["check"] : [];

            echo "<h2>Thông tin đã đăng ký:</h2>";
            echo "<p>Email: $email</p>";
            echo "<p>Họ tên: $hoten</p>";
            echo "<p>Quê quán: $quequan</p>";
            echo "<p>Điện thoại: $phone</p>";
            echo "<p>Giới tính: $gender</p>";
            echo "<p>Sở thích: ";
            if (is_array($hobby)) {
                echo implode(", ", $hobby);
            } else {
                echo $hobby;
            }
            echo "</p>";
        }
    ?>
</body>
</html>