<?php
include '../config.php';
include '../includes/header.php';
include 'includes/carrusel-index/carousel.php';

$imagenes = [
    "../imgs/automotriz/mg/carrusel/1.jpg",
    "../imgs/automotriz/mg/carrusel/2.jpg",
    "../imgs/automotriz/mg/carrusel/3.jpg"
];

$modelos = ["MG GT", "MG 3", "MG 5", "ZS", "RX5", "RX8", "HS", "MG ONE"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="includes/carrusel-index/carousel.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css-agencia/agencias.css?v=<?php echo time(); ?>">
    <title>MG</title>
</head>
<body>
    <!-- Carrusel -->
    <?php 
    renderCarrusel($imagenes); 
    ?>

    <?php include 'includes/mg/cars.php';?>

    <div class="container-fluid text-center">
        <h1 class="display-4 mt-4 underline-red">En La Carrera De La Vida Tu Pones Las Metas</h1>
    </div>

    <?php include 'includes/card/card.php';?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="video-responsive">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_ixN9SCriXU?si=i0Rq6oZ1cTzVN18_" 
                        title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'includes/mg/div.php';?>

    <div class="bg-danger w-100" style="height: 10px;"></div>
    <div class="container-fluid bg-black text-white py-5">
        <?php include("includes/form.php") ?>
    </div>

    <div class="d-flex justify-content-center align-items-center" style="height: auto; padding: 0;">
        <img src="../imgs/automotriz/mg/mg-gt-showroom-back-version.png" class="img-fluid" style="width: 100%; height: auto; object-fit: contain;" alt="Imagen centrada">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="includes/carrusel-index/carousel.js?v=<?php echo time(); ?>"></script>
    <script src="js-agencia/catalogo.js?v=<?php echo time(); ?>"></script>
</body>
</html>