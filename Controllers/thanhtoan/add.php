<?php
include_once('Models/sanpham.php');
include_once('Models/hoadon.php');
if (isset($_POST['thanhtoan'])) {
    $listgiohang = $_SESSION['giohang'];
    $tong_tien = 0;
    foreach ($listgiohang as $key => $item) {
        $sanPhamInfo = getSanPhamById($item['id']);
        $listgiohang[$key]['ten_san_pham'] = $sanPhamInfo['ten_san_pham'];
        $listgiohang[$key]['gia'] = $sanPhamInfo['gia'];
        $listgiohang[$key]['hinh_anh'] = $sanPhamInfo['hinh_anh'];
        $tong_tien += $sanPhamInfo['gia'] * $item['so_luong'];
    }
    // foreach ($listnguoidung as $item) {
    //     echo "<option value='" . $item['id_nguoi_dung'] . "'>" . $item['ten_nguoi_dung'] . "</option>";
    // }    
    $ten_nguoi_dung = $_POST['ten_nguoi_dung']; 
    $dia_chi = $_POST['dia_chi'];
    $sdt = $_POST['sdt'];
    $hinh_thuc = $_POST['hinh_thuc_thanh_toan'];
    $tong_tien += 20000;
    $id_khach_hang = 0;
    if (!isset($_SESSION['giohang']) || empty($_SESSION['giohang'])) {
        echo "<script>alert('Giỏ hàng của bạn đang trống!'); window.location = 'index.php';</script>";
        exit();
    }    
    $idHoaDon = addHoaDon($tong_tien, $ten_nguoi_dung, $dia_chi, $sdt ,$hinh_thuc_thanh_toan);
    foreach ($listgiohang as $item) {
        addChiTietHoaDon($idHoaDon, $item['id'], $item['gia'], $item['so_luong']);
    }

    unset($_SESSION['giohang']);
    $script = "<script> 
    alert('Bạn đã đặt hàng thành công');
    window.location = 'index.php';
    </script>";
    echo $script;
}