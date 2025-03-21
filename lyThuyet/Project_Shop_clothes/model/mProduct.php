<?php
    include_once('mConnect.php');
    class mProduct{
        public function mListP(){
            $p = new mConnect();
            $conn = $p->moketnoi();
            $table = "SELECT * FROM SANPHAM ";
            $result = $conn->query($table);
            $data = [];
            if(!$result){
                return false;
            }else{
                while($rows = $result->fetch_assoc()){
                    $data[]=$rows;
                }
            }
            $p->dongketnoi($conn);
            return $data;
        }

        public function mProductbyConpanyID($comp){
            $p = new mConnect();
            $conn = $p->moketnoi();
            if(!$conn){
                echo "Không có kết nối";
                return false;
            }else{
                $query = "SELECT * FROM SANPHAM WHERE MaLoai = '$comp' ";
                $tbl = $conn->query($query);
                $data=[];
                if($tbl&&$tbl->num_rows>0){
                    while($rows = $tbl->fetch_assoc()){
                        $data[] = $rows;
                    }
                }
                $p->dongketnoi($conn);
                return $data;
            }
        }
        public function mSearchbyName($keyword){
            $p = new mConnect();
            $conn = $p->moketnoi();
            if(!$conn){
                echo 'Không có kết nối';
            }else{
                $query = "SELECT * FROM SANPHAM WHERE TenSP LIKE '%$keyword%'";
                $tbl = $conn->query($query);
                if($tbl&&$tbl->num_rows>0){
                    while($rows = $tbl->fetch_assoc())
                        $data[]= $rows;
                }
            }
            $p->dongketnoi($conn);
            return $data;
        }
}
?>