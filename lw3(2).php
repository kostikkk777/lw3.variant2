<?php
function filterByPriceRange(array $products, float $min, float $max): array {
    $filtered = [];
    foreach ($products as $product) {
        if ($product['price'] >= $min && $product['price'] <= $max) {
            $filtered[] = $product;
        }
    }
    return $filtered;
}


$products = [
    ['title' => 'Ноутбук', 'price' => 60000],
    ['title' => 'Мышь', 'price' => 2500],
    ['title' => 'Клавиатура', 'price' => 4000],
];

echo "Результат (товары от 2000 до 50000):\n";
print_r(filterByPriceRange($products, 2000, 50000));