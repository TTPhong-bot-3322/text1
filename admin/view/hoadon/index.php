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
                    <h1>Hóa Đơn</h1>
                    <p class="text-subtitle text-muted"></p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Hóa Đơn</li>
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
                                <th>Số điện thoại</th>
                                <th>Ngày đặt</th>
                                <th>Tổng tiền</th>
                                <th>Trạng thái</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listhoadon as $key => $value): ?>
                                <tr>
                                    <td><?= $value['id'] ?></td>
                                    <td><?= $value['ten_nguoi_dung'] ?></td>
                                    <td><?= $value['dia_chi'] ?></td>
                                    <td><?= $value['sdt'] ?></td>
                                    <td><?= $value['creat_at'] ?></td>
                                    <td><?= $value['tong_tien'] ?></td>
                                    <td>
                                        <?php
                                            if ($value['trang_thai'] === 0) {
                                                echo 'Chưa thanh toán';
                                            } elseif ($value['trang_thai'] == 1) {
                                                echo 'Đã thanh toán';
                                            } else {
                                                echo 'Đã hủy';
                                            }
                                        ?>
                                    </td>

                                    <td class="text-center">

                                        <a href="index.php?action=listchitiethoahon&id=<?= $value['id'] ?>"
                                            class="btn btn-danger">Xem chi tiết hóa đơn</a>
                                            
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