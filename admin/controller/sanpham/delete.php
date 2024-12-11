<?php
include_once './model/sanpham.php';

// Kiểm tra action và id từ URL
if (isset($_GET['action']) && $_GET['action'] == 'deleteSanPham' && isset($_GET['id']) && $_GET['id'] > 0) {
    deleteSanPham($_GET['id']);

    // Gọi hàm xóa sản phẩm
 
        // Nếu xóa thành công, chuyển hướng đến danh sách sản phẩm
        echo "<script> 
        alert('Xóa sản phẩm thành công!');
        window.location = 'index.php?action=listsanpham';
        </script>";
    
}
?>