<!DOCTYPE html>
<html>
<head>
    <title>Máy tính đơn giản</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div name='operator' class="calculator">
        a = <input type="text" name="num1" placeholder="Nhập số a">
        b = <input type="text" name="num2" placeholder="Nhập số b">
        <input type="submit" name='+'value="+">
        <input type="submit" name='-'value="-">
        <input type="submit" name='*'value="*">
        <input type="submit" name='/'value="/">
    </div>
    <?php
    include_once('ctrl_xuly.php');
    ?>
</body>
</html>