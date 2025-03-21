<?php
    include_once('model/mUser.php');
    class cUser{
        public function cLogin($tdn, $pw){
            $p = new mUser();
            $pwd = md5($pw);
            $tbl = $p->mLogin($tdn, $pwd);
            if($tbl){
                return true;
            }else{
                return false;
            }
        }
        public function cRegis($tdn,$pw){
            $p = new mUser();
            $pwd = md5($pw);
            $tbl = $p->mRegis($tdn,$pwd);
            if($tbl){
                return true;
            }else{
                return false;
            }
        }
    }
?>