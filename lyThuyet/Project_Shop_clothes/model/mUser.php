<?php
    include_once('mConnect.php');
    class mUser{
        public function mLogin($tdn, $pw){
            $str_Login = "select * from USER where UserName = '$tdn'and Password = '$pw'";
            $cn = new mConnect();
            $conn = $cn->moketnoi();
            if($conn){
                $user_login = $conn->query($str_Login);
                if($row=$user_login->num_rows>0){
                    return $row;
                }else{
                    return false;
                }
            }else{
                return false;
            }
            $cn->dongketnoi($conn);
        }
        public function mRegis($tdn, $pw){
            $str_Regis = "insert into User(UserName,Password) values('$tdn','$pw')";
            $p = new mConnect();
            $conn = $p->moketnoi();
            if($conn){
                $user_regis = $conn->query($str_Regis);
                if($user_regis){
                    return true;
                }else{
                    return false;
                } 
            }else{
                return false;
            }
            $p->dongKetnoi($conn);
        }
    }
?>