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
// Trong model hoadon.php
function countHoaDon() {
    $sql = "SELECT COUNT(*) AS total FROM hoa_don";
    $result = pdo_query_one($sql);  // Hàm pdo_query_one sẽ trả về một mảng kết hợp
    return $result['total'];  // Trả về tổng số hóa đơn
}
// Trong model hoadon.php
function totalIncome() {
    $sql = "SELECT SUM(tong_tien) AS total_income FROM hoa_don WHERE trang_thai = 'Đã thanh toán'";
    $result = pdo_query_one($sql);
    return $result['total_income'] ?: 0;  // Trả về tổng doanh thu hoặc 0 nếu không có hóa đơn nào đã thanh toán
}
function changeStatus($id, $trang_thai)
{
    $sql = "update hoa_don set trang_thai = '$trang_thai' where id ='$id'";
    pdo_execute($sql);
}

