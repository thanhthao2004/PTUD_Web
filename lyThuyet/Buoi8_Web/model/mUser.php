<?php
    include_once('mConnect.php');
    class modelUser{
        public function mLogin($tdn, $pw){
            $str_Login = "select * from USER where UserName = '$tdn'and Password = '$pw'";
            $p = new mConnect();
        }
    }
?>