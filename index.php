<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$base_url = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER["REQUEST_URI"] . '?') . '/';
if (isset($_GET['action']) && $_GET['action'] != '') {
    $action = $_GET['action'];
    switch ($action) {
    }
} else {
    include_once 'Controllers/home/index.php';
}