<link rel="stylesheet" href="style.css">
<h5>Vui lòng đăng nhập</h5>

    session_start();
?>
<form action="#" method="POST">
    <input type="text" name="tdn" placeholder="Nhập tên đăng nhập">
    <input type="password" name='pw' placeholder="Nhập mật khẩu">
    <button type="submit" name='btn_sb'>Đăng nhập</button>
</form>
<?php
     var_dump($_SESSION['regis']);
     if(isset($_POST['btn_sb'])){
         $tdn = $_POST['tdn'];
         $pw = $_POST['pw'];
         if($_SESSION['regis'] && password_verify($pw,$_SESSION['regis']['password']) && $_SESSION['regis']['user']===$tdn){
                 $_SESSION['login']=$tdn;
                 var_dump($_SESSION['login']);
                 echo '<script>alert("Đăng nhập thành công");
                     setTimeout(()=>window.location.href="index.php",1000)</script>';
             }else{
                 echo '<script>alert("Sai cú pháp")</script>';
             }
     }else{
         echo 'Không có người dùng';
     }
?>