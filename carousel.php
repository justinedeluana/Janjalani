<?php
$products = [
    ["name" => "Product 1", "price" => "$10", "img" => "https://via.placeholder.com/150"],
    ["name" => "Product 2", "price" => "$20", "img" => "https://via.placeholder.com/150"],
    ["name" => "Product 3", "price" => "$30", "img" => "https://via.placeholder.com/150"],
    ["name" => "Product 4", "price" => "$40", "img" => "https://via.placeholder.com/150"],
    ["name" => "Product 5", "price" => "$50", "img" => "https://via.placeholder.com/150"],
];

foreach ($products as $index => $product) {
    $activeClass = $index === 0 ? 'active' : '';
    echo "<div class='carousel-item $activeClass'>
            <div class='card'>
                <img src='{$product['img']}' class='card-img-top' alt='{$product['name']}'>
                <div class='card-body'>
                    <h5 class='card-title'>{$product['name']}</h5>
                    <p class='card-text'>{$product['price']}</p>
                    <a href='#' class='btn btn-primary'>Buy Now</a>
                </div>
            </div>
        </div>";
}
?>
