<?php
include '../config.php';
include '../includes/header.php';
include 'includes/carrusel-index/carousel.php';

$imagenes = [
    "../imgs/automotriz/peugeot/carrusel/1.avif",
    "../imgs/automotriz/peugeot/carrusel/2.avif",
    "../imgs/automotriz/peugeot/carrusel/3.avif"
];
$modelos = ["PEUGEOT 2008", "PEUGEOT 3008", "RIFTER", "PARTNER"];
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
    <link rel="stylesheet" href="css-agencia/buick.css">
    <title>Peugeot</title>
    <style>
        .btn-custom {
            background-color: transparent;
            border: 2px solid #fff;
            color: #fff;
            padding: 10px 30px;
            border-radius: 30px;
            font-size: 16px;
            transition: all 0.3s ease;
            letter-spacing: 1px;
        }
        .btn-custom:hover {
            background-color: #fff;
            color: #000;
            border-color: #fff;
        }
    </style>
</head>
<body>
    <?php 
    renderCarrusel($imagenes); 
    ?>
    <?php include("includes/peugeot/cars.php") ?>
    <div class="d-flex justify-content-center align-items-center" style="height: auto; padding: 0;">
        <img src="../imgs/automotriz/peugeot/2023-peugeot-suv2008-interior-mx-dk.avif" class="img-fluid" style="width: 100%; height: auto; object-fit: contain;" alt="Imagen centrada">
    </div>

    <div class="container-fluid bg-black text-white py-5">
        <?php include("includes/form.php") ?>
    </div>

    <div class="d-flex justify-content-center align-items-center" style="height: auto; padding: 0;">
        <img src="../imgs/automotriz/peugeot/noticias-home-desk.avif" class="img-fluid" style="width: 100%; height: auto; object-fit: contain;" alt="Imagen centrada">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="includes/carrusel-index/carousel.js?v=<?php echo time(); ?>"></script>
    <script src="js-agencia/catalogo.js?v=<?php echo time(); ?>"></script>
</body>
</html>