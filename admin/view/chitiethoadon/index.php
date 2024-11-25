<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Chi tiết hóa đơn</title>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <!-- <h1 class="col-12 col-md-6 order-md-1 order-last">Chi tiết hóa đơn</h1> -->
            <a href="index.php?action=listhoadon" class="btn btn-primary">Danh sách</a>
        </div>

    <h2>Chi tiết Hoá đơn</h2>
    <table class="table">
        
        <tbody>
        <table class="table table-bordered table-hover">
            <thead class="table-primary">
                <tr>
                    <th>Id</th>
                    <th>Id hóa đơn</th>
                    <th>Id sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Trạng thái</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $listChiTietHoaDon['id'] ?></td>
                    <td><?= $listChiTietHoaDon['id_hoa_don'] ?></td>
                    <td><?= $listChiTietHoaDon['id_sp'] ?></td>
                    <td><?= $listChiTietHoaDon['so_luong'] ?></td>
                    <td><?= $listChiTietHoaDon['gia'] ?></td>
                    <td><?= $listChiTietHoaDon['status'] == 1 ? 'Đã duyệt' : 'Đang chờ'?></td>  

                </tr>
            </tbody>
        </table>


    </div>

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>