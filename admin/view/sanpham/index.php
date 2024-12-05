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
                    <h3>Sản Phẩm</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sản Phẩm</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Danh sách sản phẩm
                </div>
                <a class="btn btn-primary" href="index.php?action=addsanpham">Thêm sản phẩm</a>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th class="col-1">ID</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>Hình ảnh</th>
                                <th>Mô tả</th>
                                <th>Tên danh mục</th>
                                <th class="col-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listSanPham as $key => $value) {
                                ?>
                                <tr>
                                    <td><?= $value['id_sp'] ?></td>
                                    <td><?= $value['ten_san_pham'] ?></td>
                                    <td><?= $value['gia'] ?></td>
                                    <td><img src="<?= $base_url . 'upload/' . $value['hinh_anh'] ?>" width="150px" alt="<?= $value['ten_san_pham'] ?>"></td>
                                    <td><?= $value['mota'] ?></td>
                                    <td>
                                    <?php
                                        foreach ($listDanhMuc as $dm) {
                                            if ($dm['id'] == $value['id_danh_muc']) {
                                                // Kiểm tra trạng thái của danh mục
                                                $disabled = ($dm['status'] == 0) ? 'text-muted' : '';
                                                $hiddenText = ($dm['status'] == 0) ? ' (Đã ẩn)' : '';
                                                
                                                // In tên danh mục với trạng thái phù hợp
                                                echo '<span class="' . $disabled . '">' . $dm['ten_danh_muc'] . $hiddenText . '</span>';
                                                
                                                break; // Thoát khỏi vòng lặp sau khi tìm thấy danh mục
                                            }
                                        }
                                        ?>
                                    <td>
                                    <div class="d-flex">
                                            <a class="btn btn-secondary me-2" href="index.php?action=editsanpham&id=<?=$value['id_sp']?>">Sửa</a>
                                            
                                            <?php if ($value['status'] == 1): ?>
                                                <a class="btn btn-danger" href="index.php?action=deletesanpham&id=<?=$value['id_sp']?>&status=0">Ẩn</a>
                                            <?php else: ?>
                                                <a class="btn btn-danger" href="index.php?action=deletesanpham&id=<?=$value['id_sp']?>&status=1">Hiện</a>
                                            <?php endif; ?>
                                        </div>
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

    <?php
    include_once("./view/layouts/footer.php");
    ?>