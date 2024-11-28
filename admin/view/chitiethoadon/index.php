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
                    <h3>CHi tiết hóa đơn</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Hóa đơn</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Chi tiết hóa đơn</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <h5 class="card-header">
                    Thông tin người mua
                </h5>
                <div class="mb-3">
                    <label for="danhmuc" class="form-label">Tên người mua</label>
                    <input disabled value="<?= $chiTietHoaDon['ten_khach_hang'] ?>" type="text" class="form-control" name="name" id="danhmuc">
                </div>
                <div class="card-body">
                    <h5>Danh sách sản phẩm mua</h5>
                    <table class="table table-striped" id="">
                        <thead class="table-primary">
                            <tr>
                                <th>Id</th>
                                <th>Id sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listChiTietHoaDon as $key => $item) {
                            ?>
                                <tr>
                                    <td><?= $item['id'] ?></td>
                                    <td><?= $item['id_sp'] ?></td>
                                    <td><?= $item['ten_sp'] ?></td>
                                    <td><img src="<?= $base_url . 'upload/' . $item['img'] ?>" width="150px""></td>
                                    <td><?= $item['so_luong'] ?></td>
                                    <td><?= $item['gia'] ?></td>
                                    <td><?= $item['so_luong'] * $item['gia'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>

    <?php
    include_once("./view/layouts/footer.php");
    ?>
