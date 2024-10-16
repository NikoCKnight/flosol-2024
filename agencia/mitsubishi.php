<?php
include '../config.php';
include '../includes/header.php';
include 'includes/carrusel-index/carousel.php';

$imagenes = [
    "../imgs/automotriz/mitsubishi/carrusel/1.png",
    "../imgs/automotriz/mitsubishi/carrusel/2.webp",
    "../imgs/automotriz/mitsubishi/carrusel/3.webp"
];

$modelos = ["MONTERO", "L200", "MIRAGE G4", "XPANDER", "OUTLANDER PHEV"];
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
    <title>Mitsubishi</title>
</head>
<body>
    <?php 
    renderCarrusel($imagenes); 
    ?>
    <?php include 'includes/mitsubishi/cars.php';?>
    <div class="d-flex justify-content-center align-items-center" style="height: auto; padding: 0;">
        <video controls autoplay muted loop class="img-fluid" style="width: 80%; height: auto; object-fit: contain;">
            <source src="../imgs/automotriz/mitsubishi/mitsubishi_motors.mp4" type="video/mp4">
        </video>
    </div>
    <?php include 'includes/card/card.php';?>

    <div class="bg-danger w-100" style="height: 10px;"></div>
    <div class="container-fluid bg-black text-white py-5">
        <?php include("includes/form.php") ?>
    </div>

    <div class="d-flex justify-content-center align-items-center" style="height: auto; padding: 0;">
        <img src="../imgs/automotriz/mitsubishi/mitsu_footer.WEBP" class="img-fluid" style="width: 100%; height: auto; object-fit: contain;" alt="Imagen centrada">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="includes/carrusel-index/carousel.js?v=<?php echo time(); ?>"></script>
    <script src="js-agencia/catalogo.js?v=<?php echo time(); ?>"></script>
</body>
</html>