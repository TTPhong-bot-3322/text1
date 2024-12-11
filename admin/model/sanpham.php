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
function deleteSanPham($id_sp)
{
    // Sử dụng placeholder và truyền tham số
    $sql = "DELETE FROM san_pham WHERE id_sp = ?";
    
    // Truyền giá trị $id_sp vào hàm
    return pdo_execute($sql, $id_sp);
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

function changeStatussp($id, $status)
{
    $sql = "update san_pham set status = '$status' where id_sp='$id'";
    pdo_execute($sql);
}
// Trong model sanpham.php
function countSanPham() {
    $sql = "SELECT COUNT(*) AS total FROM san_pham";
    $result = pdo_query_one($sql);
    return $result['total'];  // Trả về tổng số sản phẩm
}

