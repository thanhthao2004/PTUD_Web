<?php 
    include("mKetnoi.php");
    class modelUser{
        public function mlogin ($tdn,$mk) {
            $strLogin = "select * from user where Username = '$tdn' and Password = '$mk'";
            $p = new clsKetnoi();
            $conn = $p -> moketnoi();
            if ($conn){
                return $conn-> query($strLogin);
            }else{
                return false;
            }
            $p -> dongketnoi($conn);
        }
    }
?>