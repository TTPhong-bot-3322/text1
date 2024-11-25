<?php
include_once './model/binhluan.php';
include_once './model/sanpham.php';
include_once './model/nguoidung.php';

if (isset($_GET['id']) && $_GET['id'] > 0) {
    $id = intval($_GET['id']); // Lấy id bình luận từ URL
    $deletebinhluan = deletebinhluan($id); // Gọi hàm xóa bình luận
}
$listBinhLuan = listBinhLuan($id_sp);
$listSanPham = listSanPham(); 
$listnguoidung = listnguoidung();
include_once './view/binhluan/index.php';
?>
