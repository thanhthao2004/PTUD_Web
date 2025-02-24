<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Clspheptinh{
            public function phepcong($a,$b){
                return $a + $b;
            }
            public function pheptru($a,$b){
                return $a - $b;
            }
            public function phepnhan($a,$b){
                return $a * $b;
            }
            public function phepchia($a,$b){
                if($b!=0){
                    return $a / $b;
                }
                else{
                    return "Khong the chia cho 0";
                }
            }
        }
    ?>
</body>
</html>