<?php
include '../../config.php';
include '../../includes/header.php';
include '../includes/carrusel-index/carousel.php';

$imagenes = [
    "../../imgs/automotriz/gmc/carrusel/1.png",
    "../../imgs/automotriz/gmc/carrusel/2.avif",
    "../../imgs/automotriz/gmc/carrusel/3.avif"
];
$modelos = ["TERRAIN", "ACADIA", "YUKON", "CANYON", "SIERRA"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../includes/carrusel-index/carousel.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css-agencia/agencias.css?v=<?php echo time(); ?>">
    <title>GMC</title>
</head>
<body>
    <!-- Carrusel -->
    <?php 
    renderCarrusel(imagenes: $imagenes); 
    ?>
    <!-- Contenedor de vehiculos -->
    <?php include "includes/cars.php" ?>

    <div class="d-flex justify-content-center align-items-center" style="height: auto; padding: 0;">
        <img src="<?php echo BASE_URL; ?>/imgs/automotriz/gmc/gmc2.png" class="img-fluid" style="width: 100%; height: auto; object-fit: contain;" alt="Imagen centrada">
    </div>

    <!-- Formulario -->
    <div class="bg-danger w-100" style="height: 10px;"></div>
    <div class="container-fluid bg-black text-white py-5">
        <?php include "../includes/form.php" ?>
    </div>

    <div class="d-flex justify-content-center align-items-center" style="height: auto; padding: 0;">
        <img src="<?php echo BASE_URL; ?>/imgs/automotriz/gmc/gmc1.png" class="img-fluid" style="width: 100%; height: auto; object-fit: contain;" alt="Imagen centrada">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../includes/carrusel-index/carousel.js?v=<?php echo time(); ?>"></script>
</body>
</html>