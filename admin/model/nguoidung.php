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
