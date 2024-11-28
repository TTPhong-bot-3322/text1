<?php
include_once './model/nguoidung.php';
// Nếu cần dữ liệu ở data base thì gọi model
$listnguoidung = listnguoidung();
// Xử lý dữ liệu từ database về

// Ném qua view để hiển thị cho người dùng
include_once './view/nguoidung/index.php';