<?php
include_once("./Views/layout/header.php");
?>
<div class="search-area">
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
	<div class="breadcrumb-section breadcrumb-bg6">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
					<h1>Người Dùng</h1>
						
					</div>
				</div>
			</div>
		</div>
	</div>
            <div class="cart-section mt-150 mb-150">
                <div class="container"  style="display: flex; justify-content: center; align-items: center"3>
                  <div class="row">
                  <form method = "POST" action="index.php?action=dangky">
                          <h2>Đăng Ký</h2>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control"  placeholder="Nhập email">
                        </div>
                          <div class="mb-3">
                            <label for="username" class="form-label">Tên người dùng</label>
                            <input type="text" name="ten_nguoi_dung"  class="form-control" placeholder="Nhập tên người dùng">
                          </div>
                          <div class="mb-3">
                            <label for="matkhau" class="form-label">Mật khẩu</label>
                            <input type="password" name="mat_khau"  class="form-control" placeholder="Nhập mật khẩu">
                          </div>
                          <button type="submit" name="dangky" class="btn btn-warning">Đăng Ký</button>
                          
                        </form>
                      </div>                    
                  </div>
              </div>
<?php 
include_once("./Views/layout/footer.php");
?>
