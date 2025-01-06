<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <tr>
        <td colspan=2 style="height:30px">
            Header
        </td>
    </tr>
    <tr>
        <td style="height:30px">
            <?php       
                include_once('view/menu.php');
            ?>
        </td>
        <td style="width: 70%">
         <?php
         if(isset($page)){
            echo $page;
         }else{
            $page="none";
         }
         $page = $_REQUEST["page"];
         switch($page){
            case "dky":include("view/dangky.php");break;
            case "dnhap":include("view/dangnhap.php");break;
            case "xldk":include("view/xlydkhy.php");break;
            case "xldn":include("view/xlydnhap.php");break;
            case "dxuat":include("view/dangxuat.php");break;
            default: echo "welcome to my application";
         }
         ?>
        </td>
    </tr>
</body>
</html>