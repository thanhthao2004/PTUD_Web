<?php
    include_once('model/mProduct.php');
    class cProduct{
        public function getAllType(){
            $p = new mProduct();
            $tbp = $p->mListP();
            if($tbp){
                return $tbp;
            }else{
                return 'Không có sản phẩm';
            }
        }
        
        public function getAllProductbyCompany($comp){
            $p = new mProduct();
            $tbp = $p->mProductbyConpanyID($comp);
            if($tbp){
                return $tbp;
            }else{
                return false;
            }
        }
        public function searchProducts($keyword) {
            $p = new mProduct();
            return $p->mSearchbyName($keyword);
        }
    }
?>