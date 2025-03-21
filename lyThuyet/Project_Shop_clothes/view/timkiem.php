<link rel="stylesheet" href="view/style/timkiem.css">
<div class="search-container">
    <form action="" method="GET">
        <input type="text" name="keyword" placeholder="Tìm kiếm sản phẩm..." value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
        <button type="submit">Tìm kiếm</button>
    </form>
</div>