<?php
include_once './model/hoadon.php';
include_once './model/nguoidung.php';
// Nếu cần dữ liệu ở data base thì gọi model
$listhoadon = listhoadon();
$listnguoidung = listnguoidung();

// Xử lý dữ liệu từ database về

include_once './view/hoadon/index.php';
?>