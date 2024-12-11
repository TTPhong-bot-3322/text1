<?php 
if (isset($_GET['action']) && $_GET['action'] === 'delcart') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        if (isset($_SESSION['giohang'])) {
            foreach ($_SESSION['giohang'] as $key => $item) {
                if ($item['id'] == $id) {
                    // Giảm số lượng sản phẩm khỏi tổng số
                    $_SESSION['tong_san_pham'] -= $item['so_luong'];

                    // Đảm bảo tổng không âm
                    if ($_SESSION['tong_san_pham'] < 0) {
                        $_SESSION['tong_san_pham'] = 0;
                    }

                    // Xóa sản phẩm
                    unset($_SESSION['giohang'][$key]);
                    break;
                }
            }

            // Cập nhật lại chỉ số mảng
            $_SESSION['giohang'] = array_values($_SESSION['giohang']);
        }
    }

    // Chuyển hướng về giỏ hàng
    header("Location: index.php?action=listgiohang");
    exit();
}
