<?php
include_once("./Views/layout/header.php");
?>

<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Product Image</th>
                                    <th class="product-name">Tên sản phẩm</th>
									<th class="product-price">Gia</th>
									<th class="product-quantity">Số lượng</th>
                                    <th>Tổng</th>
								</tr>
							</thead>
							<tbody>
                            <?php foreach ($listgiohang as $item) { ?>
								<tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="<?= $base_url . 'admin/upload/' . $item['hinh_anh'] ?>" alt=""></td>
                                    <td class="product-name"><?= $item['ten_san_pham'] ?></td>
									<td class="product-price"><?= number_format($item['gia']) ?> VNĐ</td>
									<td class="product-quantity"><input type="text" value="<?= $item['so_luong'] ?>"></td>
                                    <td class="total-data"><?= number_format($item['gia'] * $item['so_luong']) ?> VNĐ</td>
								</tr>
								<?php } ?>
							</tbody>

						</table>
                        
					</div>
				</div>
                <div class="col-lg-4">
            <div class="total-section">
                <div class="cart-buttons">
                    <a href="http://duan/" class="boxed-btn">Đặt thêm</a>
                    <a href="index.php?action=hienthithanhtoan" class="boxed-btn black">Thanh toán</a>
                </div>
            </div>
				</div>
			</div>
		</div>
	</div>
    <?php
include_once("./Views/layout/footer.php");
?>
