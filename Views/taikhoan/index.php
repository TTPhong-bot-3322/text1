<?php
include_once("./Views/layout/header.php");
?>
            <div class="cart-section mt-150 mb-150">
                <div class="container"  style="display: flex; justify-content: center; align-items: center"3>
                  <div class="row">
                  <form>
                          <h2>Đăng nhập</h2>
                          <div class="mb-3">
                            <label for="username" class="form-label">Tên người dùng</label>
                            <input type="text" id="username" class="form-control" placeholder="Nhập tên người dùng">
                          </div>
                          <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" id="password" class="form-control" placeholder="Nhập mật khẩu">
                          </div>
                          <button type="submit" class="btn btn-primary">Đăng nhập</button>
                          <li><a href="index.php?action=dangky">Dang ky</a></li>
                          <li><a href="index.php?action=quenmk">Quen mat khau</a></li>
                          
                        </form>
                      </div>                    
                  </div>
              </div>
<?php 
include_once("./Views/layout/footer.php");
?>
