<?php
include_once 'pdo.php';

function addHoaDon($tong_tien, $ho_ten, $dia_chi, $sdt)
{
    $sql = "INSERT INTO hoa_don (  tong_tien, ho_ten, dia_chi, sdt) VALUES('$tong_tien', '$ho_ten', '$dia_chi', '$sdt')";
    return pdo_execute_return_id($sql);
}

function addChiTietHoaDon($idHoaDon, $idSanPham, $gia, $soLuong) {
    $sql = "INSERT INTO chitiet_hoadon (id_hoa_don, id_sp, gia, so_luong)
    VALUES('$idHoaDon', '$idSanPham', '$gia', '$soLuong')";
    return pdo_execute($sql);
}
?>