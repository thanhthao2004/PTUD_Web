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
            <h3 id="h31">BANNER WEBSITE</h3>
        </header>
        <div class="container">
            <div class="content_main">
                <div class="content_left">
                        <center><h4>Menu</h4></center>
                        <p>Trang chu</p>
                        <p>Dang ky</p>
                        <p>Dang nhap</p>
                </div>
                <div class="content_right">
                       <form action="" name= "form" method="post">
                       <center><h3>THONG TIN DANG NHAP</h3></center>
                        Email: <input type="email" name='txtEmail'></br>
                        Password: <input type="text" name='txtPass'> </br>
                        <input  type="submit" value="Dang nhap" name="submitDN">
                       </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        if(isset($_POST["submitDN"])){
            $email = $_POST["txtEmail"];
            $password = $_POST["txtPass"];
            $testEmail = "abc@gmail.com";
            $testPass = "123456";
            if($email == $testEmail & $password == $testPass){
                echo "Chuc mung dang nhap thanh cong!";
            }
            else{
                echo "Dang nhap that bai";
            }
        }
    ?>
</body>
</html>