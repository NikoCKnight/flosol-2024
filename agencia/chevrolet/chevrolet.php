<?php
include '../../config.php';
include '../../includes/header.php';
include '../includes/carrusel-index/carousel.php';

$imagenes = [
    "../../imgs/automotriz/chevrolet/carrusel/1.png",
    "../../imgs/automotriz/chevrolet/carrusel/2.avif",
    "../../imgs/automotriz/chevrolet/carrusel/3.avif"
];
$modelos = ["AVEO HB", "ONIX", "AVEO SEDAN", "CAVALIER", "GROOVE", "TRACKER", "CAPTIVA", "TRAX", "TRAVERSE", "BLAZER", "TAHOE", "SUBURBAN", "S10 MAX", "MONTANA", "SILVERADO", "CHEYENNE", "COLORADO", "TORNADO VAN", "EXPRESS CARGO", "SILVERADO 3500 HD", "BOLT EUV", "EQUINOX EV"];
?>

<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chevrolet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../includes/carrusel-index/carousel.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/chevrolet.css?v=<?php echo time(); ?>">

</head>
<body>
    <?php 
    renderCarrusel($imagenes); 
    ?>
    <div class="text-center my-4">
        <img src="../../imgs/automotriz/chevrolet/modelos-chev.png" alt="Imagen centrada" class="img-fluid">
    </div>
    <?php include("vehiculos.php") ?>
    <div class="container-fluid p-0 swiper-slider">
        <img src="../../imgs/automotriz/chevrolet/footer/chevrolet_flosol.png" alt="Imagen de Pantalla Completa" class="img-fullscreen-horizontal">
    </div>
    <?php include '../includes/card/card.php';?>
    
    <div class="bg-primary w-100" style="height: 10px;"></div>
    
    <div class="container-fluid bg-black text-white py-5">
        <?php include("../includes/form.php") ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="../includes/carrusel-index/carousel.js?v=<?php echo time(); ?>"></script>
    <script src="../js-agencia/catalogo.js?v=<?php echo time(); ?>"></script>
    <script src="js/chevrolet.js?v=<?php echo time(); ?>"></script>
</body>
</html>