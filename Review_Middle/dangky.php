<link rel="stylesheet" href="style.css">
<h5>Mời bạn đăng ký</h5>
<?php
    session_start();
    ob_end_flush();
?>
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
        $_SESSION['login'][] = [
            'tdn' => $tdn,
            'mk' => $pw,
        ];
        echo "<script>alert('Đăng ký thành công')";
        header("Location: index.php"); // Chuyển hướng
        exit();
    }
    }
?>