<?php
include_once './model/hoadon.php';
if (isset($_POST['trang_thai']) && isset($_POST['id'])) {
    $trang_thai = $_POST['trang_thai'];
    $id = $_POST['id'];
    changeStatus($id, $trang_thai);
    echo '<script> alert("Cập nhật đơn hàng thành công"); </script>';
    echo '<script> window.location.replace("http://laptrinhweb11/admin/index.php?action=listhoadon"); </script>';
}
include_once './view/chitiethoadon/index.php';
?>