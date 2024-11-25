<?php
include_once './model/hoadon.php';
if(isset($_GET['id'])&&($_GET['id']>0)){
    $id = $_GET['id'];  // Chỉ cần thêm dòng này
    xoaHD($id);
}
$listhoadon = listhoadon();
include_once './view/hoadon/index.php';