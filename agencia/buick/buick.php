<?php
include '../../config.php';
include '../../includes/header.php';
include '../includes/carrusel-index/carousel.php';

$imagenes = [
    "../../imgs/automotriz/buick/carrusel/1.png",
    "../../imgs/automotriz/buick/carrusel/2.avif",
    "../../imgs/automotriz/buick/carrusel/3.avif"
];

$modelos = ["ENVISTA", "ENCORE", "ENVISION", "ENCLAVE"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../includes/carrusel-index/carousel.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/buick.css">
    <title></title>
</head>
<body>
    <?php 
    renderCarrusel($imagenes); 
    ?>
    <div class="text-center my-5">
        <h1 class="main-title">Modelos BUICK</h1>
        <h3 class="sub-title">Grupo Flosol - Confianza que Inspira</h3>
    </div>
    
    <?php include "includes/cars.php" ?>

    <div class="d-flex justify-content-center align-items-center" style="height: auto; padding: 0;">
        <img src="<?php echo BASE_URL; ?>/imgs/automotriz/buick/buick3.png" class="img-fluid" alt="Imagen centrada">
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo BASE_URL; ?>/imgs/automotriz/buick/paso-1-elije.svg" class="img-fluid mb-3 custom-img" alt="Elige tu SUV">
                <h4 class="custom-title">ELIGE TU SUV</h4>
                <p class="text-justify custom-text">Selecciona tu Buick por modelo, versión y rango de precio, también podrás encontrar tu Distribuidor Autorizado Buick con disponibilidad.</p>
            </div>
            <div class="col-md-4">
                <img src="<?php echo BASE_URL; ?>/imgs/automotriz/buick/paso-2-aparta.svg" class="img-fluid mb-3 custom-img" alt="Aparta tu Buick">
                <h4 class="custom-title">APARTA TU BUICK</h4>
                <p class="text-justify custom-text">Además de apartar tu SUV, podrás solicitar una cotización, prueba de manejo y opciones de financiamiento.</p>
            </div>
            <div class="col-md-4">
                <img src="<?php echo BASE_URL; ?>/imgs/automotriz/buick/paso-3-maneja.svg" class="img-fluid mb-3 custom-img" alt="Maneja">
                <h4 class="custom-title">MANEJA</h4>
                <p class="text-justify custom-text">Realiza tu compra en línea, donde un asesor te ayudará con el proceso hasta la entrega de la SUV que seleccionaste.</p>
            </div>
        </div>
    </div>
    <div class="bg-warning w-100" style="height: 10px;"></div>
    <div class="container-fluid bg-black text-white py-5">
        <?php include "../includes/form.php" ?>
    </div>
    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../includes/carrusel-index/carousel.js?v=<?php echo time(); ?>"></script>

</body>
</html>