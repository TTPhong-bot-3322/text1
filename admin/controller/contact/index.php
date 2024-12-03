<?php
    include_once './model/contact.php';
    $contact = contact();

    
    // Kiểm tra nếu form được gửi (POST)
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     // Lấy dữ liệu từ form
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $phone = $_POST['phone'];
    //     $message = $_POST['message'];

    //     // Kiểm tra tính hợp lệ của email
    //     if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    //         echo "Invalid email format";
    //         return;
    //     }

    //     // Gọi hàm addContactMessage để lưu dữ liệu vào cơ sở dữ liệu
    //     $result = addContactMessage($name, $email, $phone, $message);

    //     // Kiểm tra kết quả và thông báo cho người dùng
    //     if ($result) {
    //         echo "Đã gửi thành công!";
    //     } else {
    //         echo "Chưa thể gửi lên.";
    //     }
    // }

include_once './view/contact/index.php';
?>