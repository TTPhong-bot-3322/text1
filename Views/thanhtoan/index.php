<?php
include_once("./Views/layout/header.php");
?>

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Fresh and Organic</p>
                    <h1>Check Out Product</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- check out section -->
<div class="checkout-section mt-5 mb-5">
    <form action="index.php?action=thanhtoan" method="POST" onsubmit="return validateForm()">
        <div class="container">
            <div class="row">
                <!-- Customer Information -->
                <div class="col-lg-8">
                    <div class="checkout-accordion-wrap">
                        <div class="accordion" id="accordionExample">
                            <div class="card single-accordion">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Nhập thông tin khách hàng
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="billing-address-form">
                                            <!-- Name -->
                                            <div class="form-group">
                                                <input type="text" name="ten_nguoi_dung" class="form-control" placeholder="Tên khách hàng" required>
                                            </div>
                                            
                                            <!-- Address -->
                                            <div class="form-group">
                                                <input type="text" name="dia_chi" class="form-control" placeholder="Địa chỉ" required>
                                            </div>
                                            
                                            <!-- Phone -->
                                            <div class="form-group">
                                                <input type="tel" name="sdt" class="form-control" placeholder="Số điện thoại" pattern="[0-9]{10}" required>
                                            </div>
                                            
                                            <!-- Note -->
                                            <div class="form-group">
                                                <textarea name="bill" id="bill" class="form-control" cols="30" rows="5" placeholder="Chú thích"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Details -->
                <div class="col-lg-4">
                    <div class="order-details-wrap">
                        <table class="order-details">
                            <thead>
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá sản phẩm</th>
                                    <th>Số lượng</th>
                                </tr>
                            </thead>
                            <tbody class="order-details-body">
                                <?php foreach ($listgiohang as $item) { ?>
                                    <tr class="table-body-row">
                                        <td class="product-name"><?= $item['ten_san_pham'] ?></td>
                                        <td class="product-price"><?= number_format($item['gia']) ?> VNĐ</td>
                                        <td class="product-quantity">
                                            <input type="text" value="<?= $item['so_luong'] ?>" readonly>
                                        </td>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td class="product-name">Phí ship <span>20,000 VNĐ</span></td>
                                    <td class="product-price" colspan="2"><?= number_format($tong_tien + 20000) ?> VNĐ</td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Payment Methods -->
                        <div class="checkout__input__checkbox">
                            <label for="tienmat">Tiền mặt</label>
                            <input type="radio" checked name="hinh_thuc_thanh_toan" value="0" id="tienmat" required>
                            <label for="online">Thanh toán online</label>
                            <input type="radio" name="hinh_thuc_thanh_toan" value="1" id="online" required>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" name="thanhtoan" class="btn btn-success mt-4">Đặt hàng</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- end check out section -->

<script>
// Form Validation
function validateForm() {
    let name = document.forms[0]["ten_nguoi_dung"].value;
    let address = document.forms[0]["dia_chi"].value;
    let phone = document.forms[0]["sdt"].value;
    let paymentMethod = document.querySelector('input[name="hinh_thuc_thanh_toan"]:checked');

    if (!name || !address || !phone || !paymentMethod) {
        alert("Vui lòng nhập đầy đủ thông tin!");
        return false;
    }
    return true;
}
</script>

<?php
include_once("./Views/layout/footer.php");
?>
