<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Fruitkha - Slider Version</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="./aset/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="./aset/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="./aset/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="./aset/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="./aset/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="./aset/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="./aset/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="./aset/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="./aset/css/responsive.css">

</head>
<body>
<style>
							.site-logo {
								margin-top: -50px;
								
							}
						</style>
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.php" >
								<img width="700px" src="aset/img/logo3.png" alt="">
							</a>
						</div>

						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li ><a href="index.php">Trang chủ</a></li>
								<li><a href="index.php?action=about">Giới thiệu</a></li>
								<li><a href="index.php?action=sanpham">Sản phẩm</a>	
								<li><a href="index.php?action=contact">Liên hệ</a></li>
							<li>

								<li>
									<div class="header-icons">
									<a class="shopping-cart" href="index.php?action=listgiohang">
										<i class="fas fa-shopping-cart"></i>
										<span class="cart-count"><?= isset($_SESSION['tong_san_pham']) ? $_SESSION['tong_san_pham'] : '0' ?></span>
									</a>
									<?php
									$checkuser = isset($_SESSION['ten_nguoi_dung']);
										?>
										<a class="mobile-hide" href="index.php?action=dangnhap" name="dangnhap">
											<i class="fas fa-user"></i>
										</a>
										<?php if ($checkuser): ?>
											<a class="mobile-hide ">
												<span>Xin chào, <?php echo htmlspecialchars($_SESSION['ten_nguoi_dung']); ?></span>
											</a>
										<?php endif; ?>
								</li>
							</li>
							</ul>
						</nav>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
	<!-- search area -->
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