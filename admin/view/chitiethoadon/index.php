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
                    <h3>Chi tiết hóa đơn</h3>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="index.php?action=capnhathoadon">
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên người nhận</label>
                            <input disabled value="<?= $chiTietSanPham['ten_san_pham']; ?>" type="text" class="form-control" name="ten"
                                id="name" aria-describedby="name">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Địa chỉ người nhận</label>
                            <input disabled type="text" class="form-control" name="diachi" value="<?= $hoaDonChiTiet['dia_chi']; ?>"
                                id="diachi" aria-describedby="name">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Số điện thoại</label>
                            <input disabled type="text" value="<?= $hoaDonChiTiet['sdt'] ?>" class="form-control" name="sdt" id="sdt"
                                aria-describedby="name">
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Tổng tiền hàng (VNĐ)</label>
                            <input disabled value="<?= $hoaDonChiTiet['tong_tien']-20000 ?>" type="text" class="form-control" value="<?= 1 ?> VNĐ">
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Tiền ship (VNĐ)</label>
                            <input disabled value="20000 " type="text" class="form-control" value="<?= 1 ?> VNĐ">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Số tiền cần thanh toán (VNĐ)</label>
                            <input disabled value="<?= $hoaDonChiTiet['tong_tien'] ?>" type="text" class="form-control" value="<?= 1 ?> VNĐ">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Hình thức</label>
                            <input disabled type="text" value="<?= $hoaDonChiTiet['hinh_thuc_thanh_toan'] == 0 ? 'Tiền mặt' : 'Online' ?>" class="form-control" name="hinh_thuc_thanh_toan" id="hinh_thuc_thanh_toan" aria-describedby="name">
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Tình trạng thanh toán</label>
                            <select name="trang_thai" class="form-select" aria-label="Default select example">
                                <option <?= $hoaDonChiTiet['trang_thai'] == 0 ? 'selected' : '' ?> value="0">Chưa thanh toán</option>
                                <option <?= $hoaDonChiTiet['trang_thai'] == 1 ? 'selected' : '' ?> value="1">Đã thanh toán</option>
                            </select>
                        </div>

                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Sản phẩm</h3>
                        </div>
                        <table class="table">

                        <thead>
                                <tr>
                                    <th class="col-2">ID</th>
                                    <th class="col-2">Tên Sản Phẩm</th>
                                    <th class="col-2">Số lượng</th>
                                    <th class="col-2">Ảnh sản phẩm</th>
                                    <th class="col-2">Giá</th>
                                    <th class="col-2">Tổng</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <?php foreach ($listChiTietHoaDon as $item) { ?>
                                    <tr>
                                        <td><?= $item['id_sp'] ?></td>
                                        <td><?= $item['ten_sp'] ?></td>
                                        <td><?= $item['so_luong'] ?></td>
                                        <td><img width="80px" src="<?= $base_url . 'upload/' . $item['hinh_anh'] ?>" alt=""></td>
                                        <td><?= number_format($item['gia']) ?> VNĐ</td>
                                        <td><?= number_format($item['gia'] * $item['so_luong']) ?> VNĐ</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <input type="hidden" name="id" value="<?= $hoaDonChiTiet['id'] ?>">
                        <button class="btn btn-primary" name="edit" type="submit">Cập nhật trạng thái</button>
                    </form>
                </div>
            </div>

        </section>
    </div>

    <?php
    include_once("./view/layouts/footer.php");
    ?>