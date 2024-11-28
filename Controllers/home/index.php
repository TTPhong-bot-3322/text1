<?php 
include_once('Models/sanpham.php');
$listSanPham = listSanPham();
$listsanphamganday = getsanphamganday();

include_once('Views/home/index.php');
?>