
<?php
include_once './model/sanpham.php';
include_once './model/hoadon.php';
include_once './model/nguoidung.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hoaDonChiTiet = getHoaDonById($id);
    $listChiTietHoaDon = listChiTietHoaDon($id);
    foreach ($listChiTietHoaDon as $key => $item) {
        $chiTietSanPham = getSanPhamById($item['id_sp']);
        $listChiTietHoaDon[$key]['ten_sp'] = $chiTietSanPham['ten_san_pham'];
        $listChiTietHoaDon[$key]['hinh_anh'] = $chiTietSanPham['hinh_anh'];
    }
    $listnguoidung = listnguoidung();
}
include_once './view/chitiethoadon/index.php';
?>