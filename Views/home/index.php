<?php
include_once("./Views/layout/header.php");
?>

<!-- home page slider -->
<div class="homepage-slider">
	<!-- single home slider -->
	<div class="single-homepage-slider homepage-bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Trải nghiệm với</p>
							<h1>Camera</h1>
							<div class="hero-btns">
								<a href="index.php?action=sanpham" class="boxed-btn">Khám phá ngay</a>
								<a href="index.php?action=contact" class="bordered-btn">Liên hệ với chúng tôi</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- single home slider -->
	<div class="single-homepage-slider homepage-bg-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Trải nghiệm với nhiều hình ảnh chất lượng với Camera</p>
							<h1>100% chính hãng</h1>
							<div class="hero-btns">
							<a href="index.php?action=sanpham" class="boxed-btn">Khám phá ngay</a>
							<a href="index.php?action=contact" class="bordered-btn">Liên hệ với chúng tôi</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- single home slider -->
	<div class="single-homepage-slider homepage-bg-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-right">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Đang có nhiều chương trình khuyến mãi lớn</p>
							<h1>Nhận mã ưu đãi tháng 12</h1>
							<div class="hero-btns">
							<a href="index.php?action=sanpham" class="boxed-btn">Khám phá ngay</a>
							<a href="index.php?action=contact" class="bordered-btn">Liên hệ với chúng tôi</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end home page slider -->

<!-- features list section -->
<div class="list-section pt-80 pb-80">
	<div class="container">

		<div class="row">
			<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-shipping-fast"></i>
					</div>
					<div class="content">
						<h3>Miễn phí ship toàn quốc</h3>
						<p>Khi mua hàng</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-phone-volume"></i>
					</div>
					<div class="content">
						<h3>Hỗ trợ 24/7</h3>
						<p>NHân viên hỗ trợ các ngày </p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="list-box d-flex justify-content-start align-items-center">
					<div class="list-icon">
						<i class="fas fa-sync"></i>
					</div>
					<div class="content">
						<h3>Hoàn tiền</h3>
						<p>Hoàn tiền sau 3 ngày</p>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- end features list section -->

<!-- product section -->
<div class="product-section mt-150 mb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="section-title">
					<h3><span class="orange-text">Sản</span> Phẩm</h3>
					<div class="row">
		</div>
					
				</div>
			</div>
		</div>

		<div class="row">
			<?php foreach ($listsanphamganday as $item) { ?>
			<div class="col-lg-4 col-md-6 text-center">
				<div class="single-product-item">
					<div class="product-image">
						<a href="single-product.html"><img src="<?= $base_url . 'admin/upload/' . $item['hinh_anh'] ?>" alt=""></a>
					</div>
					<h3><?= $item['ten_san_pham'] ?></h3>
					<p class="product-price"><span><?= number_format($item['gia']) ?>VNĐ</span></p>
					<a href="index.php?action=themgiohang&id=<?=$item['id_sp']?>" class="cart-btn"><i class="fas fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<div class="testimonail-section mt-150 mb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 text-center">
				<div class="testimonial-sliders">
					<div class="single-testimonial-slider">
						<div class="client-avater">
							<img src="assets/img/avaters/avatar1.png" alt="">
						</div>
						<div class="client-meta">
							<h3>Nguyễn Cường đã nói</h3>
							<p class="testimonial-body">
							"  Máy ảnh hay máy chụp hình là một dụng cụ dùng để thu ảnh thành một ảnh tĩnh hay thành một loạt các ảnh
							chuyển động (gọi là phim hay video). Tên camera có gốc từ tiếng La tinh camera obscura nghĩa là "phòng tối",
							từ lý do máy ảnh đầu tiên là một cái phòng tối với vài người làm việc trong đó. Chức năng của máy ảnh giống
							với mắt người. Máy ảnh có thể làm việc ở phổ ánh sáng nhìn thấy hoặc ở các vùng khác trong phổ bức xạ điện từ."
							</p>
							<div class="last-icon">
								<i class="fas fa-quote-right"></i>
							</div>
						</div>
					</div>
					<div class="single-testimonial-slider">
						<div class="client-avater">
							<img src="assets/img/avaters/avatar2.png" alt="">
						</div>
						<div class="client-meta">
							<h3>Phạm Thông</h3>
							<p class="testimonial-body">
							"  Máy ảnh hay máy chụp hình là một dụng cụ dùng để thu ảnh thành một ảnh tĩnh hay thành một loạt các ảnh chuyển động 
						    (gọi là phim hay video). Tên camera có gốc từ tiếng La tinh camera obscura nghĩa là "phòng tối", từ lý do máy ảnh đầu 
							tiên là một cái phòng tối với vài người làm việc trong đó. Chức năng của máy ảnh giống với mắt người. Máy ảnh có thể 
							làm việc ở phổ ánh sáng nhìn thấy hoặc ở các vùng khác trong phổ bức xạ điện từ. "
							</p>
							<div class="last-icon">
								<i class="fas fa-quote-right"></i>
							</div>
						</div>
					</div>
					<div class="single-testimonial-slider">
						<div class="client-avater">
							<img src="assets/img/avaters/avatar3.png" alt="">
						</div>
						<div class="client-meta">
							<h3>Vũ Đạt cho rằng</h3>
							<p class="testimonial-body">
								" Do tính chất của ống kính máy ảnh, chỉ có những vật nằm trong một khoảng cách nào đó mới được thấy rõ. 
								Quá trình điều chỉnh khoảng cách đó gọi là lấy nét trên máy ảnh. Có vài cách để lấy nét. Máy ảnh đơn giản 
								nhất dùng cách lấy nét cố định với một lỗ ống kính nhỏ và ống kính góc rộng sao cho mọi thứ trong khoảng 
								cách nào đó từ ống kính (thường là từ 3 mét tới vô cực) đều tương đối rõ nét.  "
							</p>
							<div class="last-icon">
								<i class="fas fa-quote-right"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end testimonail-section -->

<!-- advertisement section -->
<div class="abt-section mb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="abt-bg">
					<a href="https://www.youtube.com/watch?v=QIEgdyQdx-8" class="video-play-btn popup-youtube"><i
							class="fas fa-play"></i></a>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="abt-text">
					<p class="top-sub">Since Year 1999</p>
					<h2>Chúng tôi đã nghiên cứu  <span class="orange-text">Camera</span></h2>
					<p>Máy ảnh hay máy chụp hình là một dụng cụ dùng để thu ảnh thành một ảnh tĩnh hay thành một loạt các ảnh 
					   chuyển động (gọi là phim hay video). Tên camera có gốc từ tiếng La tinh camera obscura nghĩa là "phòng tối", 
					   từ lý do máy ảnh đầu tiên là một cái phòng tối với vài người làm việc trong đó</p>
					<a href="index.php?action=about" class="boxed-btn mt-4">Xem thêm</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end advertisement section -->

<!-- shop banner -->
<section class="shop-banner">
	<div class="container">
		<h3>Nhận ưu đãi<br> cực lớn <span class="orange-text"> tháng 12 </span></h3>
		<div class="sale-percent"><span> Giảm  <br> đến</span>50% <span></span></div>
		<a href="index.php?action=sanpham" class="cart-btn btn-lg">Ghé shop</a>
	</div>
</section>
<!-- end shop banner -->

<!-- latest news -->
<div class="latest-news pt-150 pb-150">
	<div class="container">

		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="section-title">
					<h3><span class="orange-text">Sản phẩm</span> mới nhất</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<?php foreach ($listsanphamganday as $item) { ?>
			<div class="col-lg-4 col-md-6 text-center">
				<div class="single-product-item">
					<div class="product-image">
						<a href="single-product.html"><img src="<?= $base_url . 'admin/upload/' . $item['hinh_anh'] ?>" alt=""></a>
					</div>
					<h3><?= $item['ten_san_pham'] ?></h3>
					<a href="index.php?action=chitietsanpham&id=<?=$item['id_sp']?>" class="cart-btn"><i class="fas fa-shopping-cart"></i>Xem chi tiết sản phẩm</a>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- end latest news -->
<?php
include_once("./Views/layout/footer.php");
?>