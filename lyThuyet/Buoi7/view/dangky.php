<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" name="frmDangKy" method="POST">
        <h3>Dang ky tai khoan</h3>
        Email: <input type="text" name="txtEmail"> <br>
        Password: <input type="password" name="txtPass"> <br>
        <input type="submit" name="btn_Regis" value="Regis">
        <input type="reset" value="reset">
    </form>
    <?php
    session_start();
    include_once("controller/ctrUser.php");
    if (isset($_POST['btn_Regis'])){
        $p = new ctrUser();
        $email = $_POST["txtEmail"];
        $pass = $_POST["txtPass"];
        if($p->Registration($email,$pass)){
            echo "<script>alert('Dang ky thanh cong')</script>";
        }
        #header("Refresh:0.5;url=index.php");
    }
?>
</body>
</html>