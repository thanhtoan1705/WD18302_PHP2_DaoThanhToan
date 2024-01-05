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
?>
