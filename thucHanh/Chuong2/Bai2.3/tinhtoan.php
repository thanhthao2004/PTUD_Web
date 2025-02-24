<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" name = "form" method="post">
        a= <input type="number" name="a">
        b= <input type="number" name="b">
        <br>
        <input type="submit" name="pheptinh" value="+">
        <input type="submit" name="pheptinh" value="-">
        <input type="submit" name="pheptinh" value="x">
        <input type="submit" name="pheptinh" value="/">
    </form>
    <?php
        if(isset($_POST['pheptinh'])){
            include 'clspheptinh.php';
            $a = $_POST['a'];
            $b = $_POST['b'];
            $pheptinh = $_POST['pheptinh'];
            $tinh = new Clspheptinh();
                switch($pheptinh){
                    case '+':
                        $ketqua = $tinh -> phepcong($a,$b);
                    case '-':
                        $ketqua = $tinh -> pheptru($a,$b);
                    case 'x':
                        $ketqua = $tinh -> phepnhan($a,$b);
                    case '/':
                            $ketqua = $tinh -> phepchia($a,$b);
                    default:
                        break;
                }
                echo "ket qua".$a.$pheptinh.$b."=".$ketqua;
            }
    ?>
</body>
</html>