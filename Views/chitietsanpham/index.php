<?php
include_once("./Views/layout/header.php");
?>
<div class="search-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<span class="close-btn"><i class="fas fa-window-close"></i></span>
				<div class="search-bar">
					<div class="search-bar-tablecell">
						<h3>Search For:</h3>
						<input type="text" placeholder="Keywords">
						<button type="submit">Search <i class="fas fa-search"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end search area -->

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="breadcrumb-text">
					<p>Read the Details</p>
					<h1>Single Article</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end breadcrumb section -->

<!-- single article section -->
<div class="mt-150 mb-150">
	<div class="container">
		<div class="row">
			<!-- Chi tiết sản phẩm -->
			<div class="col-lg-8">
				<div class="single-article-section">
					<div class="single-article-text">
						<div class="single-article-bg"></div>
						<h2>Mô Tả Sản Phẩm</h2>
						<?php foreach ($listchitietsanpham as $item) { ?>
                            <td class="product-image"><img width="300px" src="<?= $base_url . 'admin/upload/' . $item['hinh_anh'] ?>" alt=""></td>
                            <h2>Mô Tả Sản Phẩm</h2>
							<p><?= nl2br($item['mota']) ?></p>
						<?php } ?>
					</div>

					<!-- Danh sách bình luận -->
					<div class="comments-list-wrap">
                        <h3 class="comment-count-title">Bình Luận</h3>
                        <div class="comment-list">
                            <!-- Kiểm tra xem có bình luận nào không -->
                            
                        </div>
                    </div>


					<!-- Form gửi bình luận -->
					<div class="comment-template">
						
						<form action="index.php?action=binhluan" method="POST">
                        <p>
                            <input type="text" name="name" placeholder="Tên" required>
                        </p>
                        <p>
                            <textarea name="comment" cols="30" rows="10" placeholder="Nội dung" required></textarea>
                        </p>
    
                        <p>
                        <input type="submit" value="Submit">
                        </p>
						</form>
					</div>
				</div>
			</div>

			<!-- Sidebar -->
			<div class="col-lg-4">
				<div class="sidebar-section">
					<h3>Tên sản phẩm</h3>
					<?php foreach ($listchitietsanpham as $item) { ?>
						<div class="single-product">
							<h2><strong><?= $item['ten_san_pham'] ?></strong></h2>
							<h3><?= number_format($item['gia']) ?> VNĐ</h3>
						</div>
						<a href="index.php?action=themgiohang&id=<?= $item['id_sp'] ?>" class="cart-btn">
							<i class="fas fa-shopping-cart"></i> Thêm vào giỏ
						</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end single article section -->

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
