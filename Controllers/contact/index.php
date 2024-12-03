<?php 
include_once('Models/contact.php');


if (isset($_POST['nut'])) {
    // Kiểm tra xem $_SESSION['contact'] có tồn tại không
    // if (isset($_SESSION['contact']) && is_array($_SESSION['contact'])) {
    //     $listcontact = $_SESSION['contact'];
    // } else {
    //     $listcontact = [];
    // }

    // Lấy thông tin từ form
    $name = $_POST['ten_ng_nhap']; 
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    addcontact($name, $email, $phone, $message);

    // foreach ($listcontact as $item) {
    //     addcontact($item['ten_ng_nhap'], $item['email'], $item['phone'], $item['message']);
    // }


    // unset($_SESSION['contact']);
    $script = "<script> 
        alert('Bạn đã gửi thành công');
        window.location = 'index.php';
    </script>";
    echo $script;
}
include_once('Views/contact/index.php');
?>