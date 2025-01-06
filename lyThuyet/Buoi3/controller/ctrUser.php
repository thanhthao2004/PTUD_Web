    <?php
    session_start();
    class ctrUser{
        public function Registration ($tdn,$mk){
            $_SESSION["tdn"] = $tdn;
            $_SESSION["mk"] = $mk;
            return true;
        }
        public function Login ($tdn,$mk){
            if($tdn==$_SESSION["tdn"] && $mk==$_SESSION["mk"]){
                $_SESSION["login"] = true;
                return true;
            }else{
                return false;
            }
        }
    }
?>