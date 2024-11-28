<?php 
include_once('admin/model/danhmuc.php');
include_once('admin/model/sanpham.php');
$listDanhMuc = listDanhMuc();
$listSanPham = listSanPham();
$listSanPhamGanDay = getSanPhamGanDay();
$listSanPhamReview = getSanPhamReview();
include_once('Views/home/index.php');
?>