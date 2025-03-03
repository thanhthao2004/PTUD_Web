<?php 
    class clsKetnoi{
        public function moketnoi(){
            $host ="localhost";
            $username = "thao1";
            $password = "123";
            $database = "QLBH";
            return mysqli_connect($host,$username,$password,$database);
        }
        public function dongketnoi($conn){
            $conn -> close();
        }
    }
?>