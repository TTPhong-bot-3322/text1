<?php
include_once './model/nguoidung.php';

if (isset($_GET['id_nguoi_dung']) && $_GET['id_nguoi_dung'] > 0) {
    $id = intval($_GET['id_nguoi_dung']); 
    $deletenguoidung = deletenguoidung($id);
}
$listnguoidung = listnguoidung(); 
include_once './view/nguoidung/index.php';
?>
