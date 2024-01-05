<?php
include __DIR__ . '/../Model/model.php';
// Kiểm tra xem biến 'email' có tồn tại trong mảng $_POST hay không
$email = isset($_POST['email']) ? $_POST['email'] : '';
// Gọi hàm get_user từ model.php để lấy thông tin người dùng
$user = get_user($email);

include __DIR__ . '/../Views/view.php';;
