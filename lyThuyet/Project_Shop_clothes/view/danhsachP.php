<link rel="stylesheet" href="view/style/danhsach.css">

<?php
    include_once('timkiem.php');
    include_once('controller/cProduct.php');
    $p = new cProduct();

    if(isset($_GET['keyword']) && !empty($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
        $tbP = $p->searchProducts($keyword);
    } elseif(isset($_GET['type'])) {
        $maLoai = intval($_GET['type']); 
        $tbP = $p->getAllProductbyCompany($maLoai);
    } else {
        $tbP = $p->getAllType();
    }

    if ($tbP) {
        echo '<div class="product-container">';
        foreach ($tbP as $row) { 
?>
        <div class="product">
            <img src="view/style/image/<?php echo $row['hinh']; ?>" alt="<?php echo $row['TenSP']; ?>">
            <h2 class="product-title"><?php echo $row['TenSP']; ?></h2>
            <p class="product-price"><?php echo number_format($row['Gia'], 0, ',', '.'); ?> VNĐ</p>
            <button class="buy-button">Mua ngay</button>
        </div>
<?php 
        }
        echo '</div>'; // Đóng product-container
    } else { 
        echo "<p class='no-product'>Không có sản phẩm nào.</p>"; 
    }
?>
