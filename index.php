<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$base_url = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER["REQUEST_URI"] . '?') . '/';
if (isset($_GET['action']) && $_GET['action'] != '') {
    $action = $_GET['action'];
    switch ($action) {
        case 'themgiohang':
            include_once 'Controllers/cart/add.php';
            break;
        case 'listgiohang':
            include_once 'Controllers/cart/index.php';
            break;
        case 'taikhoan':
            include_once 'Controllers/taikhoan/index.php';
            break;
        case 'dangky':
            include_once 'Controllers/taikhoan/dangky.php';
            break;
        case 'quenmk':
            include_once 'Controllers/taikhoan/quenmk.php';
            break;
        case 'hienthithanhtoan':
            include_once 'Controllers/thanhtoan/index.php';
            break;    
        case 'thanhtoan':
            include_once 'Controllers/thanhtoan/add.php';
            break;
        case 'contact':
            include_once 'Controllers/contact/index.php';
            break;
        // case 'guicontact':
        //     include_once 'Controllers/contact/add.php';
        //     break;
        }
} else {
    include_once 'Controllers/home/index.php';
}