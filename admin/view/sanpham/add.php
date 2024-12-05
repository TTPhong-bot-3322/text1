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
                    <h3>Thêm sản phẩm</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thêm sản phẩm</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <form action="index.php?action=addsanpham" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="danhmuc" class="form-label">Tên danh mục</label>
                            <select required class="form-select" name="danhmuc" aria-label="Default select example">
                            <?php
                            foreach ($listDanhMuc as $item) {
                                // Chỉ hiển thị danh mục nếu status = 1 (hiển thị)
                                if ($item['status'] == 1) {
                                    ?>
                                    <option value="<?= $item['id'] ?>"><?= $item['ten_danh_muc'] ?></option>
                                    <?php
                                }
                            }
                            ?>

                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Tên sản phẩm</label>
                            <input required type="text" class="form-control" name="name" id="name">
                        </div>

                        <div class="mb-3">
                            <label for="gia" class="form-label">Giá sản phẩm</label>
                            <input required type="number" class="form-control" name="gia" id="gia">
                        </div>

                        <div class="mb-3">
                            <label for="mota" class="form-label">Mô tả sản phẩm</label>
                            <input required type="text" class="form-control" name="mota" id="mota">
                        </div>

                        <div class="mb-3">
                            <label for="hinhanh" class="form-label">Ảnh sản phẩm</label>
                            <input required type="file" class="form-control" name="hinh_anh" id="hinhanh">
                        </div>

                        <button type="submit" name="addsp" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>
        </section>
    </div>

<?php
include_once("./view/layouts/footer.php");
?>
