<?php
include_once("./Views/layout/header.php");
?>

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
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
<div class="checkout-section mt-150 mb-150">
<form action="index.php?action=thanhtoan" method="POST">
	<div class="container">
		<div class="row">
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
										
											<p><input type="text" name="ho_ten" placeholder="Tên khách hàng"></p>
											<p><input type="text" name="dia_chi" placeholder="Địa chỉ"></p>
											<p><input type="tel" name="sdt" placeholder="Số điện thoại"></p>
											<p><textarea name="bill" id="bill" cols="30" rows="10" placeholder="Chú thích"></textarea></p>
										
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
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
									<td class="product-quantity"><input type="text" value="<?= $item['so_luong'] ?>"></td>
									
						</tr>
						</tr>
						<?php } ?>
	
						<th>Tổng tiền</th><td class="product-price"><?= number_format($tong_tien) ?></td>
					
							
							</tbody>
						</table>
						<button type="submit" name="thanhtoan" class="site-btn">Đặt hàng</button>
						
					</div>
				</div>
		</div>
	</div>
</div>
</form>
<!-- end check out section -->

<?php
include_once("./Views/layout/footer.php");
?>