
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .card {
        transition: transform 0.2s;
        width: 12rem; /* Set a fixed width for the card */
    }
    .card:hover {
        transform: scale(1.05);
    }
    .carousel-item {
        display: flex;
        justify-content: center;
        height: 250px; /* Set a fixed height for the carousel item */
    }
    .carousel-item img {
        max-height: 150px; /* Limit the height of the image */
        object-fit: cover; /* Ensure the image covers the space */
    }
    </style>
<body>

<div class="container mt-5">
    <div id="productCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner">
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
                        <div class='card' style='width: 18rem;'>
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
        </div>
        <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
