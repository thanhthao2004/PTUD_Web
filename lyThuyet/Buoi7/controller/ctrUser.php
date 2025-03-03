    <?php
    include("model/mNguoidung.php");
    class ctrUser{
        // public function Registration ($tdn,$mk){
        //     $_SESSION["tdn"] = $tdn;
        //     $_SESSION["mk"] = $mk;
        //     return true;
        // }
        // public function Login ($tdn,$mk){
        //     if($tdn==$_SESSION["tdn"] && $mk==$_SESSION["mk"]){
        //         $_SESSION["login"] = true;
        //         return true;
        //     }else{
        //         return false;
        //     }
        // }
        public function login($tdn,$mk){
            $p = new modelUser();
            $mk = md5($mk);
            $tblUser = $p -> mlogin($tdn,$mk);
            if($tblUser==false){
                echo "<script>alert('Lỗi kết nối!')</script>";
            }elseif($tblUser->num_rows>0){
                echo "<script>alert('Đăng nhập thành công!')</script>";
                $_SESSION["login"] = true;
            }else{
                echo "<script>alert('Sai thông tin đăng nhập!')</script>";
            }
            #header("refresh:0.5; url='index.php'");
        }
    }
?>