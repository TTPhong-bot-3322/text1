


<?php
include_once './model/chitiethoadon.php';
include_once './model/hoadon.php';

$listChiTietHoaDon = listChiTietHoaDon($_GET['id']);
$listhoadon = listhoadon();


include_once './view/chitiethoadon/index.php';