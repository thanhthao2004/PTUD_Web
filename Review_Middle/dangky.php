<?php
    session_start();
?>
<link rel="stylesheet" href="style.css">
<h5>Mời bạn đăng ký</h5>
<div class="dk_form">
    <form action="#" method="POST">
        <input type="text" name="tdn" placeholder="Nhập tên đăng nhập">
        <input type="password" name="mk" placeholder="Nhập mật khẩu">
        <input type="password" name="rmk" placeholder="Nhập mật khẩu">
        <button type="submit" name="btn_submit"> Đăng ký</button>
        <button type="reset" name="btn_reset">Nhập lại</button>
    </form>
</div>
<?php
    if(isset($_POST['btn_submit'])){
        $tdn = $_POST['tdn'];
        $pw = $_POST['mk'];
        $rpw = $_POST['rmk'];
        if($pw != $rpw){
            echo "<script>alert('Mật khẩu nhập lại không khớp')</script>";
        }
        else{
            $pw = password_hash($pw,PASSWORD_DEFAULT);
            $_SESSION['regis'] = [
                'user' => $tdn,
                'password' => $pw];
            echo "<script>alert('Đăng ký thành công');
                    setTimeout(()=>window.location.href='index.php',1000)</script>";
            exit();
    }
    }
?>