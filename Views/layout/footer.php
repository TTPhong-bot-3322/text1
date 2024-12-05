	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="./aset/img/company-logos/a1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="./aset/img/company-logos/a2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="./aset/img/company-logos/a3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="./aset/img/company-logos/a4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="./aset/img/company-logos/a5.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="./aset/img/company-logos/a6.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">Giới thiệu</h2>
						<p>Sản phẩm web bán máy ảnh thuộc về nhóm 3 gồm có 4 thành viên rất đẹp trai và ngầu đét</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Địa chỉ sản xuất</h2>
						<ul>
							<li>126 Mương Cầu Tre, Trường Cao Đẳng FPT </li>
							<li>adminthong@gmail.com</li>
							<li>admindat@gmail.com</li>
							<li>admincuong@gmail.com</li>
							<li>adminhoang@gmail.com</li>
							<li>+84999999999</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<!-- <h2 class="widget-title">Pages</h2> -->
						<ul>
							<li><a href="index.php?action=index">Trang chủ</a></li>
							<li><a href="index.php?action=about">Giới thiệu</a></li>
							<li><a href="index.php?action=sanpham">Sản phẩm</a></li>
							<li><a href="index.php?action=contact">Liên hệ</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Các nhà hỗ trợ và đầu tư</h2>
						<p>Sùng A Khánh</p>
						<p>Nguyễn A Nam</p>
						<p>Nguyễn A Chiến</p>
						<p>Nguyễn A Liêm</p>
						<p>Nguyễn A Tuấn</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Cảm ơn mọi người đã vào xem sản phẩm của nhóm 3
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="./aset/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="./aset/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="./aset/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="./aset/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="./aset/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="./aset/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="./aset/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="./aset/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="./aset/js/sticker.js"></script>
	<!-- main js -->
	<script src="./aset/js/main.js"></script>

</body>
<style>
	.logo-carousel-inner {
    display: flex;
    justify-content: space-between; /* Phân bố đều khoảng cách giữa các logo */
    align-items: center; /* Căn giữa theo chiều dọc */
    gap: 5px; /* Khoảng cách giữa các logo */
}

.single-logo-item {
    flex: 1 1 calc(16.66% - 10px); /* Mỗi logo chiếm khoảng 1/6 chiều rộng (nếu 6 logo trên 1 dòng) */
    max-width: calc(160px); /* Đảm bảo không vượt quá kích thước này */
    text-align: center; /* Căn giữa logo trong khung */
}

.single-logo-item img {
    max-width: 100%; /* Logo co giãn theo kích thước khung */
    height: auto; /* Đảm bảo tỷ lệ logo không bị méo */
    display: inline-block;
}

</style>
</html>