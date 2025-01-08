<?php
// Nhận dữ liệu từ form
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['submit']; // Nhận phép toán từ form
if(isset($operator)){
    // Thực hiện phép tính
    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 == 0) {
                $result = "Không thể chia cho 0";
            } else {
                $result = $num1 / $num2;
            }
            break;
        default:
            $result = "Phép toán không hợp lệ";
    }
}
// Trả về kết quả
echo "Kết quả: " . $result;
?>