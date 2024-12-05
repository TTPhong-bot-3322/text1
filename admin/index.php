<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$base_url = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER["REQUEST_URI"] . '?') . '/';
if (isset($_GET['action']) && $_GET['action'] != '') {
    $action = $_GET['action'];
    switch ($action) {
        case "listdanhmuc":
            include_once 'controller/danhmuc/index.php';
            break;
        case "adddanhmuc":
            include_once 'controller/danhmuc/add.php';
            break;
        case "editdanhmuc":
            include_once 'controller/danhmuc/edit.php';
            break;
        case "deletedanhmuc":
            include_once 'controller/danhmuc/delete.php';
            break;
        case "listsanpham":
            include_once 'controller/sanpham/index.php';
            break;
        case "addsanpham":
            include_once 'controller/sanpham/add.php';
            break;
        case "editsanpham":
            include_once 'controller/sanpham/edit.php';
            break;
        case "deletesanpham":
            include_once 'controller/sanpham/delete.php';
            break;
        case "listhoadon":
            include_once 'controller/hoadon/index.php';
            break;
        case "listchitiethoahon":
            include_once 'controller/ChiTietHoaDon/index.php';
            break;
        case "listnguoidung":
            include_once 'controller/nguoidung/index.php';
            break;
        case "deletenguoidung":
            include_once 'controller/nguoidung/delete.php';
            break;
        case "listbinhluan":
            include_once 'controller/binhluan/index.php';
            break;
        case "deletebinhluan":
            include_once 'controller/binhluan/delete.php';
            break;
        case "contact":
            include_once 'controller/contact/index.php';
            break;
        case "thongke":
            include_once 'controller/thongke/index.php';
            break;
            case "capnhathoadon":
                include_once 'controller/ChiTietHoaDon/capnhathoadon.php';
                break;
            
    }
} else {
    include_once 'controller/thongke/index.php';
}
