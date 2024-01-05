<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1.4</title>
</head>

<body>

    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">Danh sách sản phẩm điện tử</h5>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Lượt xem</th>
                                <th scope="col">Trạng thái</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Hiển thị dữ liệu
                            $i = 1;
                            foreach ($products as $product) {
                                echo "<tr>";
                                echo "<td>" . $i . "</td>";
                                echo "<td>" . $product["category_name"] . "</td>";
                                echo "<td>" . $product["name"] . "</td>";
                                echo "<td>" . $product["price"] . "</td>";
                                echo "<td>" . $product["quantity"] . "</td>";
                                echo "<td>" . $product["view"] . "</td>";
                                echo "<td>";
                                if ($product["status"] == 0) {
                                    echo "<i class='bi bi-check-circle text-success'></i>";
                                } elseif ($product["status"] == 1) {
                                    echo "<i class='bi bi-x-circle-fill text-danger'></i>";
                                }
                                echo "</td>";
                                echo "<td><i class='bi bi-pencil'></i></td>";
                                echo "</tr>";
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js scripts here if needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
