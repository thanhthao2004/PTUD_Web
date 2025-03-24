<link rel="stylesheet" href="view/style/dangky.css">
<?php
    session_start();
?>
    <div class="regis-form">
        <form action="#" method="POST" name = 'frmDangky'>
            <div class="input-from">
                <label> Tên đăng ký</label>
                <input type="text" name="tendn">
            </div>
            <div class="input-from">
                <label> Nhập mật khẩu</label>
                <input type="password" name="pw">
            </div>
            <div class="input-from">
                <label> Nhập lại mật khẩu</label>
                <input type="password" name="resetpw">
            </div>
            <div class="btn_regis">
                <button type="submit" name="btn_submit" >
                    Đăng ký
                </button>
                <button type="reset"name="btn_reset">
                    Nhập lại
                </button>
            </div>
        </form>
    </div>
    <?php
        include_once('controller/cUser.php');
        if(isset($_POST['btn_submit'])){
            $tdn = $_POST['tendn'];
            $pw = $_POST['pw'];
            $p = new cUser();
            $result = $p->cRegis($tdn,$pw);
            if($result){
                $_SESSION['regis']=$tdn;
                echo "<script>alert('Đăng ký thành công!');
                setTimeout(()=>window.location.href='index.php',1000)</script>";
            }else{
                echo "<script>alert('Sai thông tin đăng ký!');</script>";
            }
        }
    ?>