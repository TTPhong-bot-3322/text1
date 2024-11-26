<?php
include_once 'pdo.php';

// Lấy danh sách hóa đơn
function listhoadon() {
    $sql = 'SELECT * FROM hoa_don';
    return pdo_query($sql);
}

function listChiTietHoaDon($id) {
    $sql = "SELECT * FROM chitiet_hoadon where id_hoa_don = '$id'";
    return pdo_query($sql);
}

function getHoaDonById($id) {
    $sql = "SELECT * FROM hoa_don WHERE id = '$id'";
    return pdo_query_one($sql);
}
?>