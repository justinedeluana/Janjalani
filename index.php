<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Website ni Justine</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    
    <header>
        <nav>
            <?php include 'nav.php'; ?>
        </nav>
    </header>

    <div id="content-main">
        <div class="container-cst hero-section">
            <div class="main-content">
                <h1>KALABASANG<br>
                    NAGPAPALIWANAG NG BUHAY</h1>
                <img src="pumpkin.gif" alt="pumpkin">
            </div>
        </div>
        <div class="container-cst image-section">
            <div class="second-content">
                <div class="kaliwa1">
                    <h1>Bakit kailangan natin ng kalabasa sa buhay natin?</h1>
                    <p>Ang kalabasa ay mahalaga ito sa buhay natin dahil nagbibigay ito ng masustansyang kalusugan at nagpapalinaw din ito ng ating mata</p>
                    <button>Kahalagahan ng Kalabasa</button>
                </div>
                <div class="img-1">
                    <img id="kalabasa" src="" alt="kalabasapic" class="img-fluid rounded">
                </div>
            </div>
        </div>
        <div class="container-cst third-section">
            <div class="third-content">
                <div class="container-cst mt-5 mb-5">
    
                    <link rel="stylesheet" href="product.css">
                    <div id="productCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
                        <div class="carousel-inner">
                            <?php include 'carousel.php'; ?>
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
                <script src="scripts.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                <script src="script.js"></script>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>

</body>
</html>
<style>