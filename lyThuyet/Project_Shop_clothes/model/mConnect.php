<?php
    class mConnect{
        public function moketnoi(){
            $host = 'localhost';
            $user = 'thao';
            $password = 'thao123';
            $db = 'shop_QA_Thao';
            $conn =  mysqli_connect($host,$user,$password,$db);
            return $conn;
        }
        public function dongketnoi($conn){
            $conn->close();
        }
    }
?>