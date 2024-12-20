<?php
ob_start();
session_start();
if (isset($_SESSION['admin'])){
    $admin = $_SESSION['admin'];
} else {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./asset/css/bootstrap.css">
    <link rel="stylesheet" href="./asset/vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="./asset/vendors/iconly/bold.css">

    <link rel="stylesheet" href="./asset/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="./asset/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="./asset/css/app.css">
    <link rel="shortcut icon" href="./asset/images/favicon.svg" type="image/x-icon">
</head>

<body>
<?php
    // Lấy hành động hiện tại từ URL
    $currentAction = isset($_GET['action']) ? $_GET['action'] : '';
    ?>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                        <div class="logo" >

                            <a href="index.php?action=thongke">Admin</a>

                        </div>
                       
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu" >
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item <?php
if ($currentAction === 'thongke') {
    echo 'active';
} else {
    echo '';
}
?>">
                            <a href="index.php?action=thongke" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Trang chủ</span>
                            </a>
                        </li>

                        <li class="sidebar-item <?php
if ($currentAction === 'listdanhmuc' || $currentAction === 'adddanhmuc' || $currentAction === 'editdanhmuc') {
    echo 'active';
} else {
    echo '';
}
?>">
                            <a href="index.php?action=listdanhmuc" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Danh mục</span>
                            </a>
                        </li>

                        <li class="sidebar-item <?php
if ($currentAction === 'listsanpham' || $currentAction === 'addsanpham' || $currentAction === 'editsanpham') {
    echo 'active';
} else {
    echo '';
}
?>">
                            <a href="index.php?action=listsanpham" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Sản phẩm</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php
if ($currentAction === 'listnguoidung' || $currentAction === 'deletenguoidung' ) {
    echo 'active';
} else {
    echo '';
}
?>">
                            <a href="index.php?action=listnguoidung" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Người dùng</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php
if ($currentAction === 'listhoadon' || $currentAction === 'listchitiethoahon' ) {
    echo 'active';
} else {
    echo '';
}
?>">
                            <a href="index.php?action=listhoadon" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Hóa đơn</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php
if ($currentAction === 'listbinhluan' || $currentAction === 'deletebinhluan' ) {
    echo 'active';
} else {
    echo '';
}
?>">

                            <a href="index.php?action=listbinhluan" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Bình luận</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php
if ($currentAction === 'contact') {
    echo 'active';
} else {
    echo '';
}
?>">

                            <a href="index.php?action=contact" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Liên hệ</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>