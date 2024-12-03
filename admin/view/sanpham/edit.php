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
                    <h3>Sửa sản phẩm</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sửa sản phẩm</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <form action="index.php?action=editsanpham" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="danhmuc" class="form-label">Tên danh mục</label>
                            <select required class="form-select" name="danhmuc" aria-label="Default select example">
                                <?php
                                foreach ($listDanhMuc as $item) {
                                    ?>
                                    <option <?= $sanPhamInfo['id_danh_muc'] == $item['id'] ? 'selected' : '' ?>
                                        value="<?= $item['id'] ?>"><?= $item['ten_danh_muc'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="danhmuc" class="form-label">Tên sản phẩm</label>
                            <input value="<?= $sanPhamInfo['ten_san_pham'] ?>" required type="text" class="form-control"
                                name="name" id="danhmuc">
                        </div>
                        <div class="mb-3">
                            <label for="danhmuc" class="form-label">Gía sản phẩm</label>
                            <input value="<?= $sanPhamInfo['gia'] ?>" required type="number" class="form-control"
                                name="gia" id="danhmuc">
                        </div>
                        <div class="mb-3">
                            <label for="danhmuc" class="form-label">Mô tả</label>
                            <input value="<?= $sanPhamInfo['mota'] ?>" required type="text" class="form-control"
                                name="mota" id="danhmuc">
                        </div>
                        <div class="mb-3">
                            <label for="danhmuc" class="form-label">Ảnh sản phẩm</label>
                            <input type="file" class="form-control" name="hinh_anh" id="danhmuc">
                        </div>
                        <input type="hidden" name="id" value="<?= $sanPhamInfo['id_sp'] ?>">
                        <button type="submit" name="edit" class="btn btn-primary">Sửa</button>
                    </form>
                </div>
            </div>

        </section>
    </div>
    <?php
    include_once("./view/layouts/footer.php");
    ?>