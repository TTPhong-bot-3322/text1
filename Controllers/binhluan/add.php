<?php
include_once('Models/sanpham.php');
include_once('Models/binhluan.php');
if (isset($_POST["ten_nguoi_dung"]) && isset($_POST["noi_dung"]) && isset($_POST["id_sp"])) {
    $id_sp = $_POST["id_sp"];
    $ten_nguoi_dung = $_POST["ten_nguoi_dung"];
    $noi_dung = $_POST["noi_dung"];

    // Gọi hàm insert vào cơ sở dữ liệu
    insert_binhluan($id_sp, $ten_nguoi_dung, $noi_dung);

    // Thông báo thành công
    $script = "<script> 
        alert('Bạn đã gửi bình luận thành công');
        window.location = 'index.php?action=chitietsanpham&id=" . $id_sp . "';
    </script>";
    echo $script;
}
?>