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
        <h3>Thống kê</h3>
    </div>

    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <!-- Doanh thu -->
                    <div class="col-6 col-lg-3 col-md-6 mb-3">
                        <div class="card shadow-lg border-0 rounded">
                            <div class="card-body px-3 py-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon bg-gradient-primary text-white rounded-circle">
                                            <i class="iconly-boldShow fs-2"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted">Doanh thu ngày</h6>
                                        <h4 class="font-extrabold text-primary"><?= number_format($totalIncome) ?> VNĐ</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tổng số sản phẩm -->
                    <div class="col-6 col-lg-3 col-md-6 mb-3">
                        <div class="card shadow-lg border-0 rounded">
                            <div class="card-body px-3 py-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon bg-gradient-info text-white rounded-circle">
                                            <i class="iconly-boldProfile fs-2"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted">Tổng số sản phẩm</h6>
                                        <h4 class="font-extrabold text-info"><?= $countSanPham ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tổng số người dùng -->
                    <div class="col-6 col-lg-3 col-md-6 mb-3">
                        <div class="card shadow-lg border-0 rounded">
                            <div class="card-body px-3 py-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon bg-gradient-success text-white rounded-circle">
                                            <i class="iconly-boldAdd-User fs-2"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted">Tổng số người dùng</h6>
                                        <h4 class="font-extrabold text-success"><?= $countnguoidung ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tổng số hóa đơn -->
                    <div class="col-6 col-lg-3 col-md-6 mb-3">
                        <div class="card shadow-lg border-0 rounded">
                            <div class="card-body px-3 py-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon bg-gradient-danger text-white rounded-circle">
                                            <i class="iconly-boldBookmark fs-2"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted">Tổng số hóa đơn</h6>
                                        <h4 class="font-extrabold text-danger"><?= $counthoadon ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="row mt-4">
            <div class="col-12">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-header bg-gradient-dark text-white">
                        <h4>Biểu đồ doanh thu</h4>
                    </div>
                    <div class="card-body">
                        <!-- Placeholder for Chart -->
                        <div id="chart-profile-visit" style="height: 400px;"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php
include_once("./view/layouts/footer.php");
?>
