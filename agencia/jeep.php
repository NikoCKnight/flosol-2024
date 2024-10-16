<?php
include '../config.php';
include '../includes/header.php';
include 'includes/carrusel-index/carousel.php';

$imagenes = [
    "../imgs/automotriz/jeep/carrusel/1.avif",
    "../imgs/automotriz/jeep/carrusel/2.avif",
    "../imgs/automotriz/jeep/carrusel/3.avif"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="includes/carrusel-index/carousel.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css-agencia/buick.css">
    <title>Grupo Flosol</title>
</head>
<body>
    <?php 
    renderCarrusel($imagenes); 
    ?>
    <div class="container-fluid text-center">
        <h1 class="display-4 mt-4 underline-red">JEEP</h1>
        <h3 class="sub-title">Grupo Flosol - Confianza que Inspira</h3>
    </div>
    <div class="row text-center">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="model-card">
                <img src="../imgs/automotriz/jeep/grand-wagoneer.avif" class="img-fluid" alt="Envista">
                <h4 class="model-title">GRAND WAGONEER L</h4>
                <div class="btn-group">
                    <button class="btn btn-outline-dark">Ver Más</button>
                    <button class="btn btn-outline-dark catalog-btn" data-folder="jeep" data-pdf="catalogo-wagoneer-2023-17abr2023-v7.pdf">CATÁLOGO</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="model-card">
                <img src="../imgs/automotriz/jeep/wagoneer.avif" class="img-fluid" alt="Encore">
                <h4 class="model-title">WAGONEER</h4>
                <div class="btn-group">
                    <button class="btn btn-outline-dark">Ver Más</button>
                    <button class="btn btn-outline-dark catalog-btn" data-folder="jeep" data-pdf="catalogo-wagoneer-2023-17abr2023-v7.pdf">CATÁLOGO</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="model-card">
                <img src="../imgs/automotriz/jeep/renegade.avif" class="img-fluid" alt="Envision">
                <h4 class="model-title">RENEGADE</h4>
                <div class="btn-group">
                    <button class="btn btn-outline-dark">Ver Más</button>
                    <button class="btn btn-outline-dark catalog-btn" data-folder="jeep" data-pdf="CAT_Renegade_2024_27FEB2024_V4.pdf">CATÁLOGO</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="model-card">
                <img src="../imgs/automotriz/jeep/compass.avif" class="img-fluid" alt="Enclave 2024">
                <h4 class="model-title">COMPASS</h4>
                <div class="btn-group">
                    <button class="btn btn-outline-dark">Ver Más</button>
                    <button class="btn btn-outline-dark catalog-btn" data-folder="jeep" data-pdf="CATALOGO_JEEP_COMPASS_2024_16ABR2024_V4.pdf">CATÁLOGO</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="model-card">
                <img src="../imgs/automotriz/jeep/jeep-jt.avif" class="img-fluid" alt="Envista">
                <h4 class="model-title">JEEP JT</h4>
                <div class="btn-group">
                    <button class="btn btn-outline-dark">Ver Más</button>
                    <button class="btn btn-outline-dark catalog-btn" data-folder="jeep" data-pdf="FT JT 2024_16ABR2024_V2.pdf">CATÁLOGO</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="model-card">
                <img src="../imgs/automotriz/jeep/grand-cherokee.avif" class="img-fluid" alt="Encore">
                <h4 class="model-title">GRAND CHEROKEE</h4>
                <div class="btn-group">
                    <button class="btn btn-outline-dark">Ver Más</button>
                    <button class="btn btn-outline-dark catalog-btn" data-folder="jeep" data-pdf="ficha-tecnica-dic23-jeep-gcherokee-altitude-2024_18dic2023_v2.pdf">CATÁLOGO</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="model-card">
                <img src="../imgs/automotriz/jeep/wrangler.avif" class="img-fluid" alt="Envision">
                <h4 class="model-title">WRANGLER</h4>
                <div class="btn-group">
                    <button class="btn btn-outline-dark">Ver Más</button>
                    <button class="btn btn-outline-dark catalog-btn" data-folder="jeep" data-pdf="CAT_WRANGLER_2024_09ABR2024_V1.pdf">CATÁLOGO</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="model-card">
                <img src="../imgs/automotriz/jeep/grand-cherokee-4xe.avif" class="img-fluid" alt="Enclave 2024">
                <h4 class="model-title">GRAND CHEROKEE 4XE</h4>
                <div class="btn-group">
                    <button class="btn btn-outline-dark">Ver Más</button>
                    <button class="btn btn-outline-dark catalog-btn" data-folder="jeep" data-pdf="CAT-JEEP-GCH-4xe_21FEB2024_V1.pdf">CATÁLOGO</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="includes/carrusel-index/carousel.js?v=<?php echo time(); ?>"></script>
    <script src="js-agencia/catalogo.js?v=<?php echo time(); ?>"></script>
</body>
</html>