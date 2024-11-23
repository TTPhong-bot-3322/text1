<?php
include_once './model/sanpham.php';
include_once './model/danhmuc.php';

if (!isset($_POST['edit']) && isset($_GET['id'])) {
    $listDanhMuc = listDanhMuc();
    $id = $_GET['id'];
    $sanPhamInfo = getSanPhamById($id);
    include_once './view/sanpham/edit.php';
} else {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $idDanhMuc = $_POST['danhmuc'];
    $gia = $_POST['gia'];
    $mota = $_POST['mota'];
    $fileName = null;
    if (isset($_FILES['hinh_anh']) && $_FILES['hinh_anh']['name'] != '') {
        $filePath = 'upload/';
        $fileName = date("Y_m_d_H_i_s") . $_FILES['hinh_anh']['name'];
        // Xóa file cũ nếu có. Gợi ý if (file_exist())
        move_uploaded_file($_FILES['hinh_anh']['tmp_name'], $filePath . $fileName);
    }
    editSanPham($id, $name, $idDanhMuc, $gia, $mota, $fileName);
    $script = "<script> 
    alert('Sửa sản phẩm thành công!');
    window.location = 'index.php?action=listsanpham';
    </script>";
    echo $script;
}