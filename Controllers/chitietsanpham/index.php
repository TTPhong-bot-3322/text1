<?php 
include_once('Models/sanpham.php');

// Kiểm tra nếu có ID sản phẩm được truyền vào
if (isset($_GET['id'])) {
    $idSanPham = $_GET['id'];
    // Gọi hàm để lấy thông tin sản phẩm từ database
    $sanPhamInfo = getSanPhamById($idSanPham);

    // Kiểm tra xem sản phẩm có tồn tại không
    if ($sanPhamInfo) {
        $listchitietsanpham[] = $sanPhamInfo;
    } else {
        $listchitietsanpham = [];
    }
} else {
    $listchitietsanpham = [];
}

// Gửi dữ liệu đến view
include_once('Views/chitietsanpham/index.php');
