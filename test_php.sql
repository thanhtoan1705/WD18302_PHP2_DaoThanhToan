-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th2 23, 2024 lúc 02:42 PM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `test_php`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `code_order` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `note` text COLLATE utf8mb4_general_ci NOT NULL,
  `payment_methods` tinyint NOT NULL DEFAULT '0' COMMENT '0. Thanh toán khi nhận hàng\r\n1. Thanh toán online',
  `total` int NOT NULL,
  `status` tinyint DEFAULT NULL COMMENT '0. Đơn hàng mới\r\n1 Đang xử lý\r\n2. Đang giao hàng\r\n3. Giao hàng thành công',
  `order_date` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `uodate-at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `id_user`, `code_order`, `name`, `address`, `phone`, `email`, `note`, `payment_methods`, `total`, `status`, `order_date`, `create_at`, `uodate-at`) VALUES
(128, 4, 'DH123791', 'toan2', 'Cà Mau', '0123456789', 'toan123@gmail.com', 'thêm chống sốc', 0, 522, 0, '2024-02-22 12:47:45', NULL, NULL),
(129, 5, 'DH335738', 'toan3', 'Cà Mau', '0123456789', 'toandt@gmail.com', 'vfjvff', 0, 220, 0, '2024-02-22 13:08:57', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_details`
--

CREATE TABLE `bill_details` (
  `id` int NOT NULL,
  `id_pro` int NOT NULL,
  `id_bill` int NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_details`
--

INSERT INTO `bill_details` (`id`, `id_pro`, `id_bill`, `price`, `quantity`, `create_at`, `update_at`) VALUES
(43, 137, 128, 119, 3, NULL, NULL),
(44, 138, 128, 55, 3, NULL, NULL),
(45, 138, 129, 55, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` int NOT NULL,
  `id_pro` int NOT NULL,
  `id_user` int NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `total` int NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `id_pro`, `id_user`, `img`, `name`, `price`, `quantity`, `total`, `create_at`, `update_at`) VALUES
(35, 134, 4, 'iphone15.png', 'iPhone 15 Pro Max 256GB ', 239, 3, 717, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `create_at`, `update_at`) VALUES
(1, 'Iphone', 0, NULL, NULL),
(2, 'samsung', 0, '2024-02-22 05:14:43', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `id_category` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `describe` text COLLATE utf8mb4_general_ci,
  `view` int DEFAULT NULL,
  `status` tinyint DEFAULT '0' COMMENT '0. Còn hàng \r\n1. Hết hàng',
  `delete` int DEFAULT NULL COMMENT '0. Hiển thị\r\n1. Xóa ẩn',
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `id_category`, `name`, `image`, `price`, `quantity`, `describe`, `view`, `status`, `delete`, `create_at`, `update_at`) VALUES
(134, 1, 'iPhone 15 Pro Max 256GB ', 'iphone15.png', 239, 8, 'iPhone 15 Pro Max has a new design with durable, lightweight aerospace-grade titanium material, and is equipped with an Action button and standard USB-C charging port to help improve charging speed. The top photography capabilities of the iPhone 15 Pro Max version come from the 48MP main camera, 12MP UltraWide camera and telephoto camera with up to 5x optical zoom. Besides, iPhone 15 ProMax uses the powerful new A17 Pro chip', 20, 0, 0, '2024-01-05 01:43:19', NULL),
(135, 1, 'iPhone 14 Pro Max 128GB', 'iphone14.png', 199, 55, 'iPhone 14 Pro Max has an impressive Dynamic Island screen design with a 6.7-inch OLED screen that supports always-on display and outstanding performance with the A16 Bionic chip. Besides, the device also possesses many camera upgrades with a 48MP rear camera cluster, a 12MP front camera using 6GB RAM for outstanding multitasking.', 10, 1, 0, '2024-01-05 02:49:33', NULL),
(136, 1, 'iPhone 12 128GB', 'iphone12.png', 159, 88, 'iPhone 12 is currently a \"hot\" name because it is one of Apple\'s four newly launched blockbuster products with breakthroughs in both design and configuration. The Apple iPhone 12 128GB version is one of the most sought-after iPhones because of its huge memory capacity, allowing you to comfortably use countless applications.', 26, 0, 0, '2024-01-05 02:49:33', NULL),
(137, 1, 'iPhone 11 128GB', 'iphone11.png', 119, 55, 'How much the iPhone 11 128GB costs is something that many iFans and technology enthusiasts are interested in. From the time of launch until now, the selling price has dropped deeply to about more than 12 million VND, thanks to which customers can easily own', 13, 1, 0, NULL, NULL),
(138, 2, 'Samsung Galaxy S23 Ultra', 'samsungs23.png', 55, 55, 'Enjoy taking professional photos and videos - Camera up to 200MP, improved night mode, smart image processor\r\nExplosive gaming - 8-core Snapdragon 8 Gen 2 chip increases processing speed, 120Hz screen, 5,000mAh battery\r\nEnhance work productivity with the built-in S Pen, easily mark events from photos or videos\r\nDurable, friendly design - Colors inspired by nature, glass material and recycled PET film layer', 10, 0, NULL, '2024-02-22 05:15:59', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0. hiện\r\n1. ẩn',
  `delete` tinyint NOT NULL DEFAULT '0' COMMENT '0 hiện\r\n1 ẩn',
  `role` tinyint NOT NULL DEFAULT '0' COMMENT '0 là admin\r\n1. là người dùng',
  `google_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `address`, `phone`, `status`, `delete`, `role`, `google_id`, `create_at`, `update_at`) VALUES
(1, 'toan1', '$2y$10$Zax0vj2/BrXqXwPfM7yzoOLc45x77xXRpG5JbIOJKVavpK3XlMcU6', 'toan11156@gmail.com', 'Cà Mau', '0123456789', 0, 0, 1, NULL, NULL, NULL),
(4, 'toan2', '$2y$10$2ZdMI.ZfShVlmEhPpKOG9u2Ef3t1153.iXUO/U5OyQBCkj/qTk/MO', 'toan12345@gmail.com', 'NewYork', '0123456756', 0, 0, 1, NULL, NULL, NULL),
(5, 'toan3', '$2y$10$OpLOJLvbZCFKCH74QM0hoeDSlmHbw0KKA2MYIZjz5pWWnI459eo2G', 'toandt@gmail.com', 'NewYork', '0123456890', 0, 0, 1, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pro` (`id_pro`,`id_bill`),
  ADD KEY `id_bill` (`id_bill`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pro` (`id_pro`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_ibfk_1` FOREIGN KEY (`id_bill`) REFERENCES `bills` (`id`),
  ADD CONSTRAINT `bill_details_ibfk_2` FOREIGN KEY (`id_pro`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`id_pro`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
