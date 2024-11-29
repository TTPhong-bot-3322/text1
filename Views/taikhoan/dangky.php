<?php
include_once("./Views/layout/header.php");
?>
            <div class="cart-section mt-150 mb-150">
                <div class="container"  style="display: flex; justify-content: center; align-items: center"3>
                  <div class="row">
                  <form>
                          <h2>Dang Ky</h2>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                          <div class="mb-3">
                            <label for="username" class="form-label">Tên người dùng</label>
                            <input type="text" id="username" class="form-control" placeholder="Nhập tên người dùng">
                          </div>
                          <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" id="password" class="form-control" placeholder="Nhập mật khẩu">
                          </div>
                          <button type="submit" class="btn btn-primary">Dang ky</button>
                          
                        </form>
                      </div>                    
                  </div>
              </div>
<?php 
include_once("./Views/layout/footer.php");
?>
