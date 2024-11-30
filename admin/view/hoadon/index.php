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
                    <p class="text-subtitle text-muted">For user to check they list</p>
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
                    Danh Sách Hóa Đơn
                </div>

                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên khách hàng</th>
                                <th>Địa chỉ</th>
                                <th>SDT</th>
                                <th>Ngày đặt</th>
                                <th>Tổng tiền</th>
                                <th>Trạng thái</th>

                            </tr>
                        </thead>
                        <tbody>
                                <?php foreach ($listhoadon as $key => $value): ?>
                                    <tr>
                                        <td><?= $value['id'] ?></td>
                                        <td>
                                            <!-- Hiển thị tên người dùng phù hợp -->
                                            <?php 
                                            foreach ($listnguoidung as $item) {
                                                if ($item['id_nguoi_dung'] == $value['id_nguoi_dung']) { // Giả sử 'user_id' là khóa ngoại trong bảng hóa đơn
                                                    echo $item['ten_nguoi_dung'];
                                                    break;
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?= $value['dia_chi'] ?></td>
                                        <td><?= $value['sdt'] ?></td>
                                        <td><?= $value['creat_at'] ?></td>
                                        <td><?= $value['tong_tien'] ?></td>
                                        <td><?= $value['trang_thai'] == 1 ? 'Đã thanh toán' : 'Chưa thanh toán' ?></td>  
                                        <td class="text-center">
                                            <a href="index.php?action=listchitiethoahon&id=<?= $value['id'] ?>" class="btn btn-danger">Xem chi tiết hóa đơn</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>

    <?php
    include_once("./view/layouts/footer.php");
    ?>