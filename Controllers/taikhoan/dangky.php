<?php 
include_once('Models/nguoidung.php');

function dangky() {
    if (isset($_POST["email"]) && isset($_POST["ten_nguoi_dung"]) && isset($_POST["mat_khau"])) {
        $email = trim($_POST["email"]);  
        $ten_nguoi_dung = trim($_POST["ten_nguoi_dung"]);
        $mat_khau = trim($_POST["mat_khau"]);

        // Kiểm tra dữ liệu đầu vào
        if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($ten_nguoi_dung) && !empty($mat_khau)) {
            try {
                insert_nguoidung($email, $ten_nguoi_dung, $mat_khau);
                echo "<p class='alert alert-success'>Đăng ký thành công! Đợi một chút...</p>
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        setTimeout(() => {

                            window.location.href='/index.php?action=dangnhap';

                        }, 2000);
                    });
                </script>"; 
            } catch (Exception $e) {
                echo "<p class='alert alert-danger'>Có lỗi xảy ra: " . htmlspecialchars($e->getMessage()) . "</p>";
            }
        } else {
            echo "<p class='alert alert-danger'>Dữ liệu không hợp lệ. Vui lòng kiểm tra lại!</p>";
        }
    } else {
        echo "<p class='alert alert-warning'>Vui lòng điền đầy đủ thông tin!</p>";
    }
}

dangky();
include_once('Views/taikhoan/dangky.php');
?>
