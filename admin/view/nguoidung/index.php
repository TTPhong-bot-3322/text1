
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
                    <h3>Tài Khoản</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tài Khoản</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Danh Sách Tài Khoản
                </div>
             
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th class="col-2">ID</th>
                                <th>Tên người dùng</th>
                                <th class="col-2">Mật khẩu</th>
                                <th class="col-2">Vai trò</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listnguoidung as $key => $value) {
                                ?>
                                <tr>
                                    <td><?= $value['id_nguoi_dung'] ?></td>
                                    <td><?= $value['ten_nguoi_dung'] ?></td>
                                    <td><?= $value['email'] ?></td>
                                    <td><?= $value['mat_khau'] ?></td>
                                    <td><?= ($value['role'] == 1) ? 'admin' : 'người dùng' ?></td>

                                    <td>
                                    <a class="btn btn-secondary" href="index.php?action=deletenguoidung&id_nguoi_dung=<?=$value['id_nguoi_dung']?>" onclick="return confirm('Bạn có chắc muốn xóa tài khoản này?');">Xóa</a>

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

