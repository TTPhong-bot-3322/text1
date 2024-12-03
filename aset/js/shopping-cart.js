let cartCount = 0;

function updateCartCount() {
  const cartCountElement = document.querySelector('.shopping-cart .cart-count');
  cartCountElement.textContent = cartCount;
}

function addToCart() {
  cartCount++;
  updateCartCount();
}
function initCartCount() {
  let cartCount = localStorage.getItem('cartCount');
  if (cartCount === null) {
    cartCount = 0;
    localStorage.setItem('cartCount', '0');
  }
  updateCartCount(parseInt(cartCount));
}

// Hàm cập nhật số lượng giỏ hàng
function updateCartCount(count) {
  const cartCountElement = document.querySelector('.cart-count');
  if (cartCountElement) {
    cartCountElement.textContent = count;
  }
  localStorage.setItem('cartCount', count.toString());
}
function addToCart() {
  let currentCount = localStorage.getItem('cartCount');
  currentCount = currentCount ? parseInt(currentCount) + 1 : 1;
  updateCartCount(currentCount);
}

// Gọi hàm khởi tạo khi trang web tải
document.addEventListener('DOMContentLoaded', initCartCount);