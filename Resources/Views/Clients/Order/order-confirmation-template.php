<!-- order-confirmation-template.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa; /* Màu nền của body */
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px; /* Giới hạn chiều rộng của email */
            margin: auto;
        }

        .header {
            background-color: #007bff; /* Màu nền của tiêu đề */
            padding: 10px;
            text-align: center;
            color: white;
        }

        .table {
            width: 100%;
            margin-bottom: 20px;
            background-color: #ffffff; /* Màu nền của bảng */
        }

        .table th,
        .table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        .table th {
            background-color: #f8f9fa; /* Màu nền của tiêu đề cột */
        }

        .footer {
            margin-top: 20px;
            background-color: #007bff; /* Màu nền của chân trang */
            padding: 10px;
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Thank you for your order!</h2>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dòng này lặp qua các sản phẩm trong đơn hàng và thêm chúng vào bảng -->
                <?php foreach ($message as $item): ?>
                    <tr>
                        <td><?php echo $item['name']; ?></td>
                        <td><?php echo $item['price']; ?></td>
                        <td><?php echo $item['quantity']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="footer">
            <p>Contact us at: toandtpc06598@fpt.edu.vn</p>
        </div>
    </div>
</body>
</html>
