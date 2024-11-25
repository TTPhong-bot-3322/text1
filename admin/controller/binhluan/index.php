<?php
include_once './model/binhluan.php';
include_once './model/sanpham.php'; 
include_once './model/nguoidung.php'; 
 // Thêm dòng này

// Nếu cần dữ liệu ở data base thì gọi model
$listBinhLuan = listBinhLuan($id_sp);
$listSanPham = listSanPham();
$listnguoidung = listnguoidung();// Thêm dòng này - tên function tùy theo code bạn đã có

// Ném qua view để hiển thị cho người dùng
include_once './view/binhluan/index.php';
?>