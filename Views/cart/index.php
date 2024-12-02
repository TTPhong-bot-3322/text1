<?php
include_once("./Views/layout/header.php");
?><div class="search-area">
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<span class="close-btn"><i class="fas fa-window-close"></i></span>
			<div class="search-bar">
				<div class="search-bar-tablecell">
					<h3>Search For:</h3>
					<input type="text" placeholder="Keywords">
					<button type="submit">Search <i class="fas fa-search"></i></button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- end search arewa -->

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
<div class="container">
	<div class="row">
		<div class="col-lg-8 offset-lg-2 text-center">
			<div class="breadcrumb-text">
				<p>Fresh and Organic</p>
				<h1>Cart</h1>
			</div>
		</div>
	</div>
</div>
</div>
<!-- end breadcrumb section -->

<!-- cart -->
<div class="cart-section mt-150 mb-150">
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-12">
			<div class="cart-table-wrap">
				<table class="cart-table">
					<thead class="cart-table-head">
					<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Hình ảnh</th>
                                    <th class="product-name">Tên sản phẩm</th>
									<th class="product-price">Giá</th>
									<th class="product-quantity">Số lượng</th>
                                    <th>Tổng</th>
								</tr>
					</thead>
					<tbody>
					<?php foreach ($listgiohang as $item) { ?>
					<tr class="table-body-row">
									<td class="product-remove">
										<a href="index.php?action=delcart&id_sp='.$i.'"><i class="far fa-window-close"></i></a>
									</td>
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
				<table class="total-table">
					<thead class="total-table-head">
					<tr class="table-total-row">
						<th>Tổng tiền</th>
					</tr>
					</thead>
				<tbody>
					<tr class="total-data">
					<td><?= number_format($tong_tien) ?></td>
					</tr>
					</tbody>
				</table>
				<div class="cart-buttons">
				<a href="http://laptrinhweb11/" class="boxed-btn">Đặt thêm</a>
				<a href="checkout.html" class="boxed-btn black">Mua</a>
				</div>
			</div>
		</div>
	</div>		
</div>
    <?php
include_once("./Views/layout/footer.php");
?>
