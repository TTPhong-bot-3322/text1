<?php
include_once 'pdo.php';

// Hàm lấy bình luận theo id_sp
function listBinhLuan($id_sp)
{
    $sql = 'SELECT * FROM binh_luan WHERE 1'; 
    if ($id_sp > 0) {
        $sql .= " AND id_sp = " . intval($id_sp);
    }
    $listbl = pdo_query($sql);
    return $listbl;
}

// Lấy id_sp từ URL
$id_sp = isset($_GET['id_sp']) ? intval($_GET['id_sp']) : 0;


function deletebinhluan($id)
{
    // Sử dụng câu SQL với tham số
    $sql = "DELETE FROM binh_luan WHERE id = ?";
    
    // Gọi hàm `pdo_execute` với tham số đúng định dạng
    pdo_execute($sql, $id);
}
function insert_binhluan($id_sp,$id_khach_hang,$noi_dung) {
    $sql = "insert into taikhoan(id_sp,id_khach_hang,noi_dung) values('$id_sp','$id_khach_hang','$noi_dung')";
    pdo_execute($sql);
}
