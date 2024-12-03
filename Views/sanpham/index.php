<?php
include_once("./Views/layout/header.php");
?>
	<div class="breadcrumb-section breadcrumb-bg2">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Các Máy Ảnh Chụp Đẹp Nhất Trên Thị Trường</p>
						<h1>Sản Phẩm</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
				<h2><span class="orange-text">Hãng</span> Sản Phẩm</h2>
                    <div class="product-filters">
						
                    <ul>
                        <?php foreach ($listDanhMuc as $item): ?>
                            <li class="<?= isset($_GET['id_danh_muc']) && $_GET['id_danh_muc'] == $item['id'] ? 'active' : '' ?>">
                                <a href="index.php?action=sanpham&id_danh_muc=<?= $item['id'] ?>">
                                    <?= $item['ten_danh_muc'] ?>
                                </a>
                            </li>   
                        <?php endforeach; ?>
                    </ul>
                    </div>
                </div>
            </div>
			<h2><span class="orange-text">Sản</span> Phẩm</h2>
			<div class="row product-lists">
				
    <?php foreach ($listSanPham as $item): ?>
        <div class="col-lg-4 col-md-6 text-center strawberry">
            <div class="single-product-item">
                <div class="product-image">
                    <a href="index.php?action=chitietsanpham">
                        <img src="<?= $base_url . 'admin/upload/' . $item['hinh_anh'] ?>" alt="">
                    </a>
                </div>
                <h3><?= $item['ten_san_pham'] ?></h3>
                <p class="product-price"><?= number_format($item['gia']) ?> VNĐ</p>
				<a href="index.php?action=themgiohang&id=<?=$item['id_sp']?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ</a>
				<a href="index.php?action=chitietsanpham&id=<?=$item['id_sp']?>" class="cart-btn"> Chi tiết ></a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</div>
	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
include_once("./Views/layout/footer.php");
?>
