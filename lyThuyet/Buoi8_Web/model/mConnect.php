<?php
    class mConnect{
        public function moketnoi(){
            $host = 'localhost';
            $user = 'thao';
            $password = 'thao123@@';
            $db = 'shop_QA_Thao';
            return mysqli_connect($host,$user,$password,$db);
        }
        public function dongketnoi($conn){
            $conn -> close();
        }
    }
?>