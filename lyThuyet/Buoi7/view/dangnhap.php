<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" name="frmDangKy" method="POST">
        <h5>Dang nhap tai khoan</h5>
        Email: <input type="text" name="txtEmail"> <br>
        Password: <input type="password" name="txtPass"> <br>
        <input type="submit" name="btn_Login" value="login">
        <input type="reset" value="reset">
    </form>
    <?php
    if(isset($_POST['btn_Login'])){
        include_once("controller/ctrUser.php");
        $p = new ctrUser();
        $email = $_POST["txtEmail"];
        $pass = $_POST["txtPass"];
        $p->login($email, $pass);
    }
?> 
</body>
</html>