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
function insert_nguoidung($email,$ten_nguoi_dung,$mat_khau) {
    $sql = "INSERT INTO nguoi_dung(email,ten_nguoi_dung,mat_khau) values('$email','$ten_nguoi_dung','$mat_khau')";
    pdo_execute($sql);
}
// File: Models/nguoidung.php
function checkuser($ten_nguoi_dung, $mat_khau) {
    // Sử dụng prepared statement để chống SQL Injection
    $sql = "SELECT * FROM nguoi_dung WHERE ten_nguoi_dung = ? AND mat_khau = ?";
    
    // Giả sử bạn có hàm pdo_query_one với prepared statement
    return pdo_query_one($sql, $ten_nguoi_dung, $mat_khau);
}

