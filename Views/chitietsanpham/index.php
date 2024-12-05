<?php
include_once("./Views/layout/header.php");
?>

<!-- Search Area -->
<div class="search-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="close-btn"><i class="fas fa-window-close"></i></span>
                <div class="search-bar">
                    <div class="search-bar-tablecell">
                        <h3>Tìm kiếm:</h3>
                        <form action="index.php" method="POST">
                            <input type="text" name="keyword" placeholder="Từ khóa" value="<?= isset($_POST['keyword']) ? htmlspecialchars($_POST['keyword']) : '' ?>">
                            <button type="submit" name="search">Tìm kiếm <i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Search Area -->

<!-- Breadcrumb Section -->
<div class="breadcrumb-section breadcrumb-bg7">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Đẳng cấp phong cách</p>
                    <h1>Chi Tiết Sản Phẩm</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Section -->

<!-- Single Product -->
<div class="single-product mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <?php foreach ($listchitietsanpham as $item): ?>
                    <div class="single-product-img">
                        <img width="500px" src="<?= $base_url . 'admin/upload/' . $item['hinh_anh'] ?>" alt="">
                    </div>
            </div>
            <div class="col-md-7">
                <div class="single-product-content">
                    <h3><?= htmlspecialchars($item['ten_san_pham']) ?></h3>
                    <p class="single-product-pricing"><span><?= number_format($item['gia']) ?> VNĐ</span></p>
                    <p><?= nl2br(htmlspecialchars($item['mota'])) ?></p>
                    <div class="single-product-form">
                        <a href="index.php?action=themgiohang&id=<?= $item['id_sp'] ?>" class="cart-btn">
                            <i class="fas fa-shopping-cart"></i> Thêm vào giỏ
                        </a>
                    </div>
                    <h4>Share:</h4>
                    <ul class="product-share">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- End Single Product -->

<!-- More Products -->
<div class="more-products mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h2><span class="orange-text">Sản</span> Phẩm</h2>
                </div>
            </div>
        </div>
        <div class="row product-lists">
            <?php foreach ($listSanPham as $item): ?>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="index.php?action=chitietsanpham&id=<?= $item['id_sp'] ?>">
                                <img src="<?= $base_url . 'admin/upload/' . $item['hinh_anh'] ?>" alt=""/>
                            </a>
                        </div>
                        <h3><?= htmlspecialchars($item['ten_san_pham']) ?></h3>
                        <p class="product-price"><?= number_format($item['gia']) ?> VNĐ</p>
                        <a href="index.php?action=chitietsanpham&id=<?= $item['id_sp'] ?>" class="cart-btn">Chi tiết ></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Comments Section -->
<div class="comments-list-wrap">
    <h3 class="comment-count-title">Bình Luận</h3>
    <?php if (!empty($listBinhLuan)): ?>
        <?php foreach ($listBinhLuan as $item): ?>
            <div class="comment-list">
                <div class="single-comment-body">
                    <div class="comment-user-avater">
                        <img src="assets/img/avaters/avatar1.png" alt="">
                    </div>
                    <div class="comment-text-body">
                        <h4><?= htmlspecialchars($item['ten_nguoi_dung']) ?><span class="comment-date"><?= htmlspecialchars($item['ngay_binh_luan']) ?></span></h4>
                        <p><?= nl2br(htmlspecialchars($item['noi_dung'])) ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Chưa có bình luận nào.</p>
    <?php endif; ?>

    <!-- Comment Form -->
    <div class="comment-template">
        <h4>Bạn muốn viết bình luận</h4>
        <form action="index.php?action=addbinhluan" method="POST">
            <input type="hidden" name="id_sp" value="<?= isset($idSanPham) ? $idSanPham : $item['id_sp'] ?>">
            <p><input type="text" name="ten_nguoi_dung" placeholder="Tên" required></p>
            <p><textarea name="noi_dung" cols="30" rows="10" placeholder="Nội dung" required></textarea></p>
            <p><input type="submit" value="Gửi bình luận"></p>
        </form>
    </div>
</div>
<!-- End Comments Section -->

<!-- Logo Carousel -->
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
<!-- End Logo Carousel -->

<?php
include_once("./Views/layout/footer.php");
?>
