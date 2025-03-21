<?php
    include("cldltmdt.php");
    class khachhang extends cldltmdt{
        public function XemDSSanPham(){
            return $this ->XuatDulieu("SELECT * FROM `SANPHAM` ORDER by gia ASC");
        }
    }
?>