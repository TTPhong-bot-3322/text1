<?php
include_once('Models/sanpham.php');
if(isset($_SESSION['giohang'])){
$listgiohang = $_SESSION['giohang'];
$tongTien = 0;
foreach($listgiohang as $key => $item) {
    $sanPhamInfo = getSanPhamById($item['id']);
    $listgiohang[$key]['ten_san_pham'] = $sanPhamInfo['ten_san_pham'];
    $listgiohang[$key]['gia'] = $sanPhamInfo['gia'];
    $listgiohang[$key]['hinh_anh'] = $sanPhamInfo['hinh_anh'];
    $tongTien += $sanPhamInfo['gia']*$item['so_luong'];
}
include_once('Views/cart/index.php');
}else {
    $script = "srcipt";
    
}