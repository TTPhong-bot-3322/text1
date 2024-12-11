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
	/* General Styles */
body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
}

/* Header Styles */

.top-header-area .site-logo img {
    max-height: 80px; /* Giới hạn chiều cao logo */
}

.main-menu-wrap {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.main-menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 50px;
}

.main-menu ul li {
    position: relative;
}

.main-menu ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: 500;
    padding: 10px 15px;
    transition: all 0.3s ease;
}


/* Header Icons */
.header-icons {
    display: flex;
    align-items: center;
    gap: 15px;
}

.header-icons .shopping-cart {
    position: relative;
    color: #fff;
    font-size: 18px;
    text-decoration: none;
}

.header-icons .cart-count {
    position: absolute;
    top: -8px;
    right: -8px;
    background-color: #e53935;
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    border-radius: 50%;
    padding: 2px 6px;
}

/* User Greeting */
.header-icons .mobile-hide {
    color: #fff;
    font-size: 14px;
}

/* Search Area */
.search-area {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.search-area .search-bar {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    width: 80%;
    max-width: 600px;
    text-align: center;
}

.search-area .search-bar h3 {
    margin-bottom: 15px;
    font-size: 18px;
    color: #333;
}

.search-area .search-bar input {
    width: 80%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 15px;
    font-size: 16px;
}

.search-area .search-bar button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.search-area .search-bar button:hover {
    background-color: #388e3c;
}

.search-area .close-btn {
    position: absolute;
    top: 20px;
    right: 20px;
    color: #fff;
    font-size: 24px;
    cursor: pointer;
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
	<div class="top-header-area"   id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.php" >
								<img width="100px" src="aset/img/gg2-removebg-preview.png" alt="">
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