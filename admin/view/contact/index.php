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
                    <h3>Liên Hệ</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Liên Hệ</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Danh sách liên hệ
                </div>
                <!-- <a href="index.php?action=adddm" class="btn btn-primary">Thêm danh mục</a> -->

                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($contact as $item){ ?>
                                <tr>
                                    <td><?= $item['id_ng_nhap'] ?></td>
                                    <td><?= $item['ten_ng_nhap'] ?></td>
                                    <td><?= $item['email'] ?></td>
                                    <td><?= $item['phone'] ?></td>
                                    <td><?= $item['message']?></td>
                                    <td class="text-center">

                                            
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>

    <?php
    include_once("./view/layouts/footer.php");
    ?>