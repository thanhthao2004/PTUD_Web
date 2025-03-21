<link rel="stylesheet" href="view/style/dangnhap.css">
<?php
    session_start();
?>
    <div class="login-form">
        <h3>Vui lòng đăng nhập</h3>
        <form action="#" name="frmDangnhap" method="POST">
            <div class="input-group">
                <label>Tên đăng nhập</label>
                <input type="text" name="tdn"><br>
            </div>
            <div class="input-group">
                <label>Mật khẩu</label>
                <input type="password" name="mk">
            </div>
            <div class="input-group">
                <label>Nhập lại mật khẩu</label>
                <input type="password" name='nlmk'>
            </div>
            <div class="btn-group">
                <input type="submit" name="btn_dn" value="Đăng nhập">
                <input type="reset" name="btn_reset"value ="Nhập lại">
            </div>
        </form>
    </div>
<?php 
    include_once('controller/cUser.php');
    if(isset($_POST['btn_dn'])){
        $ID = $_POST['tdn'];
        $PW = $_POST['mk'];
        $p = new cUser();
        $result=$p->cLogin($ID,$PW);
        if($result){
            $_SESSION['login'] = $ID;
            echo "<script>alert('Đăng nhập thành công!');
            setTimeout(()=>window.location.href='index.php',1000)</script>";
        }else{
            echo "<script>alert('Sai thông tin đăng nhập!');</script>";
        }
    }
?>