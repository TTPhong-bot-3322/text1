<?php
// Bao gồm các model
include_once './model/sanpham.php';
include_once './model/hoadon.php';
include_once './model/nguoidung.php';

// Gọi các hàm từ model và lấy dữ liệu
$counthoadon = countHoaDon();  // Gọi hàm countHoaDon để lấy tổng số hóa đơn
$countnguoidung = countNguoiDung();  // Gọi hàm countNguoiDung để lấy tổng số người dùng
$countSanPham = countSanPham();  // Gọi hàm countSanPham để lấy tổng số sản phẩm
$totalIncome = totalIncome();  // Gọi hàm totalIncome để lấy tổng doanh thu

// Truyền dữ liệu vào view
include_once './view/thongke/index.php';
?>
