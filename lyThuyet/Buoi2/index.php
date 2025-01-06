<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - MON</title>
</head>
<body>
    <?php
        echo "<h2 style = 'color:red;'Welcome to \"PHP\" class!</h2>";
        echo "<hr>";
    ?>
    <hr>

    <?php
    echo "<hr>";
    $a = 3;
    $b=6;
    echo $a==$b?"a=b":($a>$b?"a>b":"a<b");
    echo "<hr>";
    switch ($a) {
        case $a>$b;
            echo "a>b";break;
        case $a<$b;
            echo "a&ltb";break;
        case $b;
            echo "a=b";break;
        default:
            echo "No matches"; break;
    } 
    echo "<hr>";
    $i = 0;
    while($i<10) {
        echo "i=" .$i."<br>";
        $i++;
    }
    do{
        echo "i=" .$i."<br>";
        $i++;
    } while($i<10);
    echo "<hr>";
    for($j=0;$j<=5;$j++) {
        echo "j=" .$j."<br>";
    }
    ?>
</body>
</html>