<?php
function get_user($email)
{
    include 'config.php';
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);

    // Thực hiện bind tham số khi gọi execute
    $stmt->execute([':email' => $email]);

    /* Lấy kết quả */
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result !== false) {
        return $result;
    }
    $conn = null;  // Đóng kết nối
    return null;
}
include 'config.php';
function show_products($conn)
{
    try {
        $sql = "SELECT products.*, categories.name as category_name
                FROM products
                LEFT JOIN categories ON products.id_category = categories.id
                ORDER BY products.id DESC";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;
        return $result;
    } catch (PDOException $e) {
        echo "Lỗi truy vấn: " . $e->getMessage();
        return [];
    }
}
?>
