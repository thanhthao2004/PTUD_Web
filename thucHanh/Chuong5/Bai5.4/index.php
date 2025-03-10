<?php
function moketnoi(){
    $host = 'localhost';
    $user = 'thaothao';
    $password = '23062004';
    $db = 'TMDT_DB';
    $conn= mysqli_connect($host,$user,$password,$db);
    if ($conn->connect_errno){
        echo 'Không kết nối được';
    }else{
        selection_CT($conn);
    }
}
function selection_CT($conn){
    echo '<html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
            }
            table {
                width: 60%;
                margin: 20px auto;
                border-collapse: collapse;
                background: white;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            th, td {
                padding: 10px;
                border: 1px solid #ddd;
                text-align: center;
            }
            th {
                background-color: #007bff;
                color: white;
            }
            tr:nth-child(even) {
                background-color: #f9f9f9;
            }
            tr:hover {
                background-color: #f1f1f1;
            }
        </style>
    </head>
    <body>
    <table>
        <tr>
            <th>ID Công Ty</th>
            <th>Tên Công Ty</th>
            <th>Địa Chỉ</th>
            <th>Điện Thoại</th>
            <th>Fax</th>
        </tr>';
    
    $selectionCTy = 'SELECT * FROM CONGTY';
    $tblCty = $conn -> query($selectionCTy);
    if($tblCty -> num_rows > 0){
        while($row = $tblCty -> fetch_assoc()){
            echo '<tr>';
            echo '<td>'.$row['idcty'].'</td>';
            echo '<td>'.$row['tencty'].'</td>';
            echo '<td>'.$row['diachi'].'</td>';
            echo '<td>'.$row['dienthoai'].'</td>';
            echo '<td>'.$row['fax'].'</td>';
            echo '</tr>';
        }
    }else{
        echo '<tr><td colspan="5">Không có dòng nào để hiển thị</td></tr>';
    }

    echo '</table></body></html>';
}
moketnoi();
?>
