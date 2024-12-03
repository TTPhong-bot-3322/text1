<?php
include_once 'pdo.php';

function addHoaDon($tong_tien, $ten_nguoi_dung, $dia_chi, $sdt, $hinh_thuc_thanh_toan)
{
    $sql = "INSERT INTO hoa_don (  tong_tien, ten_nguoi_dung, dia_chi, sdt, hinh_thuc_thanh_toan) VALUES('$tong_tien', '$ten_nguoi_dung', '$dia_chi', '$sdt','$hinh_thuc_thanh_toan')";
    return pdo_execute_return_id($sql);
}

function addChiTietHoaDon($idHoaDon, $idSanPham, $gia, $soLuong) {
    $sql = "INSERT INTO chitiet_hoadon (id_hoa_don, id_sp, gia, so_luong)
    VALUES('$idHoaDon', '$idSanPham', '$gia', '$soLuong')";
    return pdo_execute($sql);
}
?>