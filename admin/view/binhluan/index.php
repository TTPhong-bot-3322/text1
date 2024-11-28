<?php
include_once("./view/layouts/header.php");
?>

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>DataTable</h3>
                    <p class="text-subtitle text-muted">For user to check their list</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Danh sách bình luận
                </div>

                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th class="col-2">ID</th>
                                <th>Sản phẩm</th>
                                <th class="col-2">Tên khách hàng</th>
                                <th class="col-2">Nội dung</th>
                                <th class="col-2">Ngày bình luận</th>
                                <th class="col-2">Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listBinhLuan as $key => $value) {
                                ?>
                                <tr>
                                    <td><?= $value['id'] ?></td>
                                    <td>
                                        <?php 
                                        foreach ($listSanPham as $sp) {
                                            if ($sp['id_sp'] == $value['id_sp']) { // Sửa so sánh
                                                echo $sp['ten_san_pham'];
                                                break; // Ngừng lặp nếu tìm thấy
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                        foreach ($listnguoidung as $ng) {
                                            if ($ng['id_nguoi_dung'] == $value['id_nguoi_dung']) { // Sửa so sánh
                                                echo $ng['ten_nguoi_dung'];
                                                break; // Ngừng lặp nếu tìm thấy
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td><?= $value['noi_dung'] ?></td>
                                    <td><?= $value['ngay_binh_luan'] ?></td>
                                    <td>
                                        <a class="btn btn-secondary" href="index.php?action=deletebinhluan&id=<?= $value['id'] ?>" 
                                           onclick="return confirm('Bạn có chắc muốn xóa bình luận này?');">Xóa</a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>

<?php
include_once("./view/layouts/footer.php");
?>
