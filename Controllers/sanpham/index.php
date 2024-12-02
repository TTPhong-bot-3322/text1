<?php 
include_once('Models/sanpham.php');
include_once('Models/danhmuc.php');
sanpham();
function sanpham($base_url = '') {
    $id_danh_muc = isset($_GET['id_danh_muc']) ? $_GET['id_danh_muc'] : null;

    // Lấy danh sách danh mục
    $listDanhMuc = listDanhMuc();
    
    if ($id_danh_muc) {
        // Lấy tên danh mục
        $ten_danh_muc = getCategoryNameById($id_danh_muc);
        // Lấy sản phẩm theo danh mục
        $listSanPham = getProductsByCategoryId($id_danh_muc);
    } else {
        $ten_danh_muc = "Tất cả sản phẩm";
        $listSanPham = listSanPham();
    }

    include ('./Views/sanpham/index.php');
}
?>