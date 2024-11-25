<?php
include_once './model/hoadon.php';

// Kiểm tra nếu form được gửi
if (isset($_POST['them']) && $_POST['them']) {
    $tenloai = $_POST['tenloai'];
    addhoadon($tenloai);
    $thongbao = "Thêm hóa đơn thành công!";
}

// Ném qua view để hiển thị form cho người dùng
include_once './view/hoadon/add.php';
?>