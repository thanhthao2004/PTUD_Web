<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cars = array("Volvo","BMW","Toyota");
    $arrlength = count($cars);
    for($x=0;$x<$arrlength;$x++){
    }
    $a = "TRUONG DHCN TP.HOCHIMINH";
    echo substr($a,3,8);
    echo "<hr>";
    echo substr($a,3,-8);
    echo "<hr>";
    echo substr($a,-13,8);
    echo "<hr>";
    echo substr($a,-13,-8);
    echo "<hr>";
    $website = 'huuquang.com';
    $domain = strstr($website,'.');
    echo $domain;
    echo "<hr>";
    //Ham co 2 loại: ham co ket qua tra ve và ham khong co ket qua tra ve
    function _ntong($a,$b,&$tong){
        return $tong = $a +$b;
    }
    $a = 5; $b = 10;
    echo $tong = _ntong($a,$b,$tong);
    echo "<hr>";
    function doublevalue ($var = 5)
    {
        global $temp; // biến global có thể dùng được bất cứ chỗ nào, không bị giới hạn
        $temp = $var * 2;
    }
    $temp = 5;
    doublevalue();
    echo "\$temp is: $temp";
    echo "<hr>";
    ?>
</body>
</html>
