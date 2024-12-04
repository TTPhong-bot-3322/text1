<?php
include_once 'pdo.php';

function listnguoidung()
{
    $sql = 'select * from nguoi_dung';
    return pdo_query($sql);
}
function deletenguoidung($id)
{
    // Sử dụng câu SQL với tham số
    $sql = "DELETE FROM nguoi_dung WHERE id_nguoi_dung = ?";
    
    // Gọi hàm `pdo_execute` với tham số đúng định dạng
    pdo_execute($sql, $id);
}
// Trong model nguoidung.php
function countNguoiDung() {
    $sql = "SELECT COUNT(*) AS total FROM nguoi_dung";
    $result = pdo_query_one($sql);
    return $result['total'];  // Trả về tổng số người dùng
}
