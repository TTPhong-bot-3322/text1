
<?php
include_once './model/sanpham.php';
include_once './model/hoadon.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $listChiTietHoaDon = listChiTietHoaDon($id);
    foreach ($listChiTietHoaDon as $key => $item) {
        $chiTietSanPham = getSanPhamById($item['id_sp']);
        $listChiTietHoaDon[$key]['ten_sp'] = $chiTietSanPham['ten_san_pham'];
        $listChiTietHoaDon[$key]['img'] = $chiTietSanPham['hinh_anh'];
    }
    $chiTietHoaDon = getHoaDonById($id);
}
include_once './view/chitiethoadon/index.php';
?>