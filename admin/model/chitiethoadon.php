<?php
include_once 'pdo.php';

// function listhoadon() {
//     $sql = 'SELECT * FROM hoa_don';
//     return pdo_query($sql);
// }

function listChiTietHoaDon($id) {
    $sql = "SELECT * FROM chitiet_hoadon where id = '$id'";
    return pdo_query_one($sql);
}



?>