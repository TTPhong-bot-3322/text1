<?php
include_once('Models/sanpham.php');
if (isset($_SESSION['giohang'])) {
$listgiohang = $_SESSION['giohang'];
$tong_tien = 0;
foreach($listgiohang as $key => $item) {
    $sanPhamInfo = getSanPhamById($item['id']);
    $listgiohang[$key]['ten_san_pham'] = $sanPhamInfo['ten_san_pham'];
    $listgiohang[$key]['gia'] = $sanPhamInfo['gia'];
    $listgiohang[$key]['hinh_anh'] = $sanPhamInfo['hinh_anh'];
    $tong_tien += $sanPhamInfo['gia'] * $item['so_luong'];
}
include_once('Views/cart/index.php');
} else {
    $script = "<script> 
    alert('Bạn chưa có gì trong giỏ hàng vui lòng đặt hàng');
    window.location = 'index.php';
    </script>";
    echo $script;
}