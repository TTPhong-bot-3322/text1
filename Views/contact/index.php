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
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg3">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Hỗ trợ 24/7</p>
						<h1>Liên Hệ</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
    
	<div class="contact-from-section mt-150 mb-150">
        
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Bạn cần chúng tôi giúp đỡ gì không?</h2>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
                    <form action="index.php?action=contact" method="POST" >
                            <p>
                                <input type="text" placeholder="Tên" name="ten_ng_nhap" >
                                <input type="email" placeholder="Email" name="email" >
                            </p>
                            <p>
                                <input type="tel" placeholder="Số điện thoại" name="phone" >
                            </p>
                            <p><textarea name="message" cols="30" rows="10" placeholder="Nội dung" required></textarea></p>
							<button type="submit" value="Submit" name="nut" class="btn btn-danger">Gửi</button>
                        </form>

					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i>Máy Ảnh Nhóm 3</h4>
							<p>Fpoly<br>Hải Phòng <br>Máy ảnh nhóm 3</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Thời Gian</h4>
							<p>24/7</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i>Liên Hệ</h4>
							<p>Số điện thoại: +00 111 222 3333 <br> Email: admintdhc@Fpoly.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    
	<!-- end contact form -->

	<!-- find our location -->
	<div class="find-location blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end find our location -->

	<!-- google map section -->
	<div class="embed-responsive embed-responsive-21by9">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26432.42324808999!2d-118.34398767954286!3d34.09378509738966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf07045279bf%3A0xf67a9a6797bdfae4!2sHollywood%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1576846473265!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
	</div>
	<?php
include_once("./Views/layout/footer.php");
?>