<?php
include_once './model/sanpham.php';
include_once './model/danhmuc.php';

if (!isset($_POST['addsp'])) {
    $listDanhMuc = listDanhMuc();
    include_once './view/sanpham/add.php';
} else {
    $name = $_POST['name'];
    $idDanhMuc = $_POST['danhmuc'];
    $gia = $_POST['gia'];
    $mota = $_POST['mota'];
    $filePath = 'upload/';
    $fileName = date("Y_m_d_H_i_s") . $_FILES['hinh_anh']['name'];
    move_uploaded_file($_FILES['hinh_anh']['tmp_name'],$filePath . $fileName);
    addSanPham($name, $idDanhMuc, $gia, $mota , $fileName);
    $script = "<script> 
    alert('Thêm sản phẩm thành công!');
    window.location = 'index.php?action=listsanpham';
    </script>";
    echo $script;
}