<?php
session_start();
class ctrUser{
    public function NhapThongtin($hoten){
        $_SESSION['hoten'] = $hoten;
        return true;
    }
}
$p = new ctrUser();
$hoten = $_REQUEST["hoten"];
if($p->NhapThongtin($hoten)){
    echo "Xin chào $hoten";
}
?>