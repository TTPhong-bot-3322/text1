<?php
include_once 'pdo.php';

function listSanPham()
{
    $sql = 'select * from san_pham';
    return pdo_query($sql);
}

function addSanPham($name, $idDanhMuc,$gia, $mota, $fileName)
{
    $sql = "insert into san_pham (ten_san_pham, id_danh_muc, gia, mota, hinh_anh) 
            values ('$name', '$idDanhMuc', '$gia', '$mota', '$fileName')";
    pdo_execute($sql);
}

function getSanPhamById($id)
{
    $sql = "select * from san_pham where id_sp='$id'";
    return pdo_query_one($sql);
}

function editSanPham($id, $name, $idDanhMuc, $gia, $mota, $fileName)
{
    if ($fileName == null) {
        $sql = "update san_pham set ten_san_pham = '$name', id_danh_muc = '$idDanhMuc', 
        gia = '$gia', mota = '$mota' where id_sp='$id'";
    } else {
        $sql = "update san_pham set ten_san_pham = '$name', id_danh_muc = '$idDanhMuc', 
         gia = '$gia', mota = '$mota', hinh_anh = '$fileName' where id_sp='$id'";
    }
    pdo_execute($sql);
}

// function changeStatus($id, $status)
// {
//     $sql = "update danh_muc set status = '$status' where id_danh_muc='$id'";
//     pdo_execute($sql);
// }
function getsanphamganday() {
    $sql = 'select * from san_pham order by create_at DESC limit 6';
    return pdo_query($sql);
}
function loadall_sp($kyw="", $id_danh_muc=0){
    $sql= "select * from san_pham where 1";
    if($kyw!=""){
        $sql=" and ten_san_pham like '%".$kyw."%'";
    }
    if($id_danh_muc>0){
        $sql="and id_danh_muc = '".$id_danh_muc."'";
    }
    $sql = "order by id desc";
    $listSanPham=listSanPham();
    return pdo_query($sql);
}
?>
