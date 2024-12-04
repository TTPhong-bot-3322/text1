<?php
session_start();
include_once '../admin/model/nguoidung.php';
if (isset($_POST['ten_nguoi_dung']) && isset($_POST['mat_khau'])) {
    $ten_nguoi_dung = $_POST['ten_nguoi_dung'];
    $mat_khau = $_POST['mat_khau'];
    $checkUser = userLogin($ten_nguoi_dung,$mat_khau);

    if ($checkUser && $checkUser['role'] == 0) {
        $_SESSION['admin']['ten_nguoi_dung'] = $ten_nguoi_dung;
        header('location: index.php');
        exit();
    } else {
        $_SESSION['error'] = 'Bạn không có quyền truy cập hoặc thông tin đăng nhập chưa đúng!';
        header('location: login.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="asset/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="asset/css/app.css">
    <link rel="stylesheet" href="asset/css/pages/auth.css">
</head>

<body>
<div id="auth">
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <h1 class="auth-title">Quản Lý.</h1>
                <?php if (isset($_SESSION['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_SESSION['error']; ?>
                    </div>
                <?php } unset($_SESSION['error']); ?>
                <form action="" method="post">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" placeholder="Name" name="ten_nguoi_dung" required>
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" placeholder="Password" name="mat_khau" required>
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                   
                    <button type="submit" class="btn btn-info ">Đăng Nhập</button>
                </form>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">
<<<<<<< HEAD

=======
                    <img src="./admin/asset/images/logo/cl.webp" alt="">
>>>>>>> dddcb17 (hoang lam taikhoan)
            </div>
        </div>
    </div>
</div>
</body>
</html>