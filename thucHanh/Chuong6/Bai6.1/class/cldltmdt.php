<?php
    class cldltmdt{
        public function connect(){
            $conn = mysqli_connect('localhost','thaothao','23062004','TMDT_DB');
            if ($conn ->connect_error){
                echo "<script>alert('Lỗi kết nối!')</script>";
            }else{
                echo "<script>alert('Kết nối thành công')</script>";
                return $conn;
            }
        }
        public function XuatDulieu($sql){
            $arr = array();
            $link = $this -> connect();
            $result = $link ->query($sql);
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    $arr[]=$row;
                }
            return $arr;
            }
        }
    }
?>
