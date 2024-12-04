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
							<a href="index.html">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="index.php?axtion=">Trang chủ</a>
									<!-- <ul class="sub-menu">
										<li><a href="index.html">Static Home</a></li>
										<li><a href="index_2.html">Slider Home</a></li>
									</ul> -->
								</li>
								<li><a href="index.php?action=about">About</a></li>
								<li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="404.html">404 page</a></li>
										<li><a href="about.html">About</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Check Out</a></li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="news.html">News</a></li>
										<li><a href="shop.html">Shop</a></li>
									</ul>
								</li>
								<li><a href="news.html">News</a>
									<ul class="sub-menu">
										<li><a href="news.html">News</a></li>
										<li><a href="single-news.html">Single News</a></li>
									</ul>
								</li>
								<li ><a href="index.php?action=dangnhap">Đăng nhập</a></li>
								<li><a href="index.php?action=contact">Contact</a></li>
								<li><a href="index.php?action=sanpham">Shop</a>
								</li>
								<li>
									<div class="header-icons">
									<a class="shopping-cart" href="index.php?action=listgiohang">
									<i class="fas fa-shopping-cart"></i>
									<span class="cart-count">0</span>
									</a>
									<?php
									$checkuser = isset($_SESSION['ten_nguoi_dung']);
										?>
										<a class="mobile-hide search-bar-icon" href="index.php?action=dangnhap" name="dangnhap">
											<i class="fas fa-user"></i>
										</a>

										<?php if ($checkuser): ?>
											<a class="mobile-hide "  name="dangxuat">
												<span>Xin chào, <?php echo htmlspecialchars($_SESSION['ten_nguoi_dung']); ?></span>
											</a>
											
										<?php endif; ?>
									</div>
								</li>

							</ul>
						</nav>
						
								</li>
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