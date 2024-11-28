<?php
include_once('Models/sanpham.php');
$listgiohang = $_SESSION['giohang'];
foreach($listgiohang as $key => $item) {
    $sanPhamInfo = getSanPhamById($item['id']);
    $listgiohang[$key]['ten_san_pham'] = $sanPhamInfo['ten_san_pham'];
    $listgiohang[$key]['gia'] = $sanPhamInfo['gia'];
    $listgiohang[$key]['hinh_anh'] = $sanPhamInfo['hinh_anh'];
}
include_once('Views/cart/index.php');