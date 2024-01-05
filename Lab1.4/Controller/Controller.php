<?php
include __DIR__ . '/../Model/model.php';

$products = show_products($conn);

include __DIR__ . '/../Views/products.php';
