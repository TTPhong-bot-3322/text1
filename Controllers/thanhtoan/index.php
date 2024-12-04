<?php
include_once('Models/sanpham.php');
if (isset($_SESSION['giohang']) && $_SESSION['giohang'] != []) {
    $listgiohang = $_SESSION['giohang'];
    $tong_tien = 0;
    foreach ($listgiohang as $key => $item) {
        $sanPhamInfo = getSanPhamById($item['id']);
        $listgiohang[$key]['ten_san_pham'] = $sanPhamInfo['ten_san_pham'];
        $listgiohang[$key]['gia'] = $sanPhamInfo['gia'];
        $listgiohang[$key]['hinh_anh'] = $sanPhamInfo['hinh_anh'];
        $tong_tien += $sanPhamInfo['gia'] * $item['so_luong'];
    }
    $_SESSION['tong_san_pham'] = 0;
    include_once('Views/thanhtoan/index.php');
} else {
    $script = "<script> 
    alert('Giỏ hàng đang trống !!!!!!');
    window.location = 'index.php';
    </script>";
    echo $script;
}