<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Khách Hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
        }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group button {
            background-color: orange;
            color: #fff;
            padding: 10px 15px;
            border: 10px;
            border-radius: 20px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Thông Tin Khách Hàng</h2>
        <form action="process_checkout.php" method="POST">
            <div class="form-group">
                <label for="name">Họ và tên:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <!-- <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input type="tel" id="phone" name="phone" required>
            </div> -->
            <div class="form-group">
                <label for="address">Địa chỉ:</label>
                <textarea id="address" name="address" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="payment_method">Phương thức thanh toán:</label>
                <select id="payment_method" name="payment_method" required>
                    <option value="bank_transfer">Chuyển khoản ngân hàng</option>
                    <option value="cash_on_delivery">Thanh toán khi nhận hàng</option>
                </select>
            </div>
            <div>
            <!-- <?php foreach ($listChiTietHoaDon as $key => $item) { ?>
                                <tr>
                                    
                                    <td><?= $item['so_luong'] * $item['gia'] ?></td>
                                </tr>
            <?php } ?> -->
                            
            </div>
            <div class="form-group">
                <button type="submit">Thanh Toán</button>
            </div>
        </form>
    </div>
</body>
</html>
