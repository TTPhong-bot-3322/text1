<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $so_luong = 1;

    if (!isset($_SESSION['giohang'])) {
        $_SESSION['giohang'] = [];
        $_SESSION['giohang'][] = [
            'id' => $id,
            'so_luong' => $so_luong
        ];
    } else {
        $tontaitronggiohang = false;
        foreach ($_SESSION['giohang'] as $key => $item) {
            if ($id == $item['id']) {
                $tontaitronggiohang = true;
                $_SESSION['giohang'][$key]['so_luong'] += 1;
                break;
            }
        }
        if ($tontaitronggiohang == false) {
            $_SESSION['giohang'][] = [
                'id' => $id,
                'so_luong' => $so_luong
            ];
        }
    }

    // Tính tổng số lượng sản phẩm
    $tongSanPham = 0;
    foreach ($_SESSION['giohang'] as $item) {
        $tongSanPham += $item['so_luong'];
    }
    $_SESSION['tong_san_pham'] = $tongSanPham;
    // Redirect về danh sách giỏ hàng
    $script = "<script> 
    window.location = 'index.php?action=listgiohang';
    </script>";
    echo $script;
}
