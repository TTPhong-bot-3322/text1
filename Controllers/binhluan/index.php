<?php 
include_once('Models/binhluan.php');
$listBinhLuan = listBinhLuan($id_sp);
function binhluan(){
    if(isset($_POST["id_khach_hang" ]) && isset($_POST["noi_dung"]) && isset($_POST["id_sp"])){
        $id_sp = $_POST["id_sp"];  
        $id_khach_hang = $_POST["id_khach_hang"];
        $noi_dung = $_POST["noi_dung"];

        insert_binhluan($id_sp,  $id_khach_hang,$noi_dung);   
        echo "<p class='alert alert-success'></p>bình luận đã được gửi
<script>
    document.addEventListener('DOMContentLoaded', () => {
        setTimeout(() => {
            window.location.href='laptrinhweb11/';
        },2000)
        
    })
</script>";   
}}
include_once('Views/chitietsanpham/index.php');
?>



