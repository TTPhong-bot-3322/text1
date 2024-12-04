<?php
include_once ('Models/nguoidung.php');


function dangnhap() {
    if (!empty($_POST["ten_nguoi_dung"]) && !empty($_POST["mat_khau"])) {
        $ten_nguoi_dung = $_POST['ten_nguoi_dung'];
        $mat_khau = $_POST['mat_khau'];
        $checkuser = checkuser($ten_nguoi_dung, $mat_khau);
        if ($checkuser) {
            // Lưu thông tin người dùng vào session
            $_SESSION['ten_nguoi_dung'] = $ten_nguoi_dung; // Giả sử tên người dùng được lưu vào session
            
            echo "<p class='alert alert-success'>Đăng nhập thành công! Đợi một chút...</p>
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    setTimeout(() => {
                        window.location.href='/index.php';
                    }, 2000);
                });
            </script>"; 
        } else {
            echo "<p class='alert alert-danger'>Tên người dùng hoặc mật khẩu không đúng. Vui lòng thử lại!</p>";
        }
    } else {
        echo "<p class='alert alert-warning'>Vui lòng điền đầy đủ thông tin!</p>";
    }
}

dangnhap();
include_once('Views/taikhoan/index.php');
