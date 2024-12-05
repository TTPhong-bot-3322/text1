<?php 
include_once('Models/sanpham.php');

// Kiểm tra nếu có ID sản phẩm được truyền vào
if (isset($_GET['id'])) {
    $idSanPham = $_GET['id'];
    // Gọi hàm để lấy thông tin sản phẩm từ database
    $sanPhamInfo = getSanPhamById($idSanPham);
    $listSanPham = listSanPham();
    // Kiểm tra xem sản phẩm có tồn tại không
    if ($sanPhamInfo) {
        $listchitietsanpham[] = $sanPhamInfo;
    } else {
        $listchitietsanpham = [];
    }
} else {
    $listchitietsanpham = [];
}
include_once('Models/binhluan.php');

// Lấy danh sách bình luận theo sản phẩm
$listBinhLuan = listBinhLuan($id_sp);

include_once('Views/chitietsanpham/index.php');
?>