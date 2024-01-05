<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1.3</title>
</head>

<body>

    <div class="container mt-5 d-flex justify-content-center">
        <div class="card col-6">
            <div class="card-body">
                <?php
                // Kiểm tra xem $user có giá trị hay không
                if ($user !== null && is_array($user)) {
                    // Nếu có, hiển thị thông tin người dùng
                    echo "<h4 class='card-title'>Thông tin người dùng</h4>";
                    echo "<p class='card-text'>Người dùng là: " . $user['firstname'] . " " . $user['lastname'] . "</p>";
                } else {
                    // Xử lý trường hợp $user không có giá trị hoặc không phải là mảng
                    // (ví dụ: người dùng không tồn tại)
                    echo "<p class='card-text'>Người dùng không tồn tại</p>";
                }
                ?>
                <form method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js scripts here if needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
