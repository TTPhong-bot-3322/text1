<?php
include_once 'pdo.php';
function contact() {
    $sql = "SELECT * FROM contact";
    return pdo_query($sql);
}

// handleContactFormSubmission();
function addContactMessage($name, $email, $phone, $message)
{
    // Tạo câu lệnh SQL để thêm dữ liệu vào bảng contact_messages
    $sql = "INSERT INTO contact_messages (name, email, phone, message) 
            VALUES('$name', '$email', '$phone', '$message')";
    
    // Gọi hàm pdo_execute để thực thi câu lệnh SQL
    return pdo_execute($sql); // Nếu không cần lấy ID, chỉ cần thực thi câu lệnh
}
?>