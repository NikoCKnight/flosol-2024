<?php
include '../../../../../config.php';
include '../../../../../includes/header.php';
$navLinks = [
    'descripcion' => '../encore-2025.php',
    'galeria' => 'galeria.php',
    'especificaciones' => 'especificaciones.php',
    'accesorios' => '#',
    'precios' => 'precio.php'
];

$navTitle = "ENCORE 2025";
include '../../nav/nav.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buick Envista - Accesorios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../nav/nav.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="position-relative">
        <img src="../imgs-2025/accesorios/gm-buick-accesorios-encore-mh-lg.avif" class="img-fluid w-100"
            style="max-height: 90vh; object-fit: cover;" alt="Portada envista">
    </div>
    <div class="container mt-5">
        <h1 class="fw-normal" style="font-size: 4rem; color: #555555; text-align: left;">BUICK ENVISTA</h1>
    </div>
    <div class="container mt-5">
        <h2 class="fw-light" style="font-size: 2.5rem; margin-bottom: 0rem;">ACCESORIOS</h2>
        <p class="fw-light">
            <br> Agrega a tu crossover todo lo que te queda al conducir.<br> Conoce los accesorios disponibles y disfruta
            de Buick Envista con tu propio estilo.
        </p>
        <div class="d-flex justify-content-center mt-4">
            <a href="../catalogos/2025/Catalogo-Encore-2025 -Accesorios (1).pdf" target="_blank">
                <button class="btn btn-outline-dark">Catalogo de accesorios</button>
            </a>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="card border-0">
                    <img src="../imgs-2025/accesorios/gm-buick-accesorios-encore-1.avif" class="card-img-top" alt="Accesorio 1">
                    <div class="card-body text-center">
                        <p class="card-text">TAPETE DE VINIL DE COBERTURA EXTENDIDA PARA CAJUELA CON LOGO BUICK</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0">
                    <img src="../imgs-2025/accesorios/gm-buick-accesorios-encore-2.avif" class="card-img-top" alt="Accesorio 2">
                    <div class="card-body text-center">
                        <p class="card-text">MOLDURAS LATERALES EN CROMO</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0">
                    <img src="../imgs-2025/accesorios/gm-buick-accesorios-encore-3.avif" class="card-img-top" alt="Accesorio 3">
                    <div class="card-body text-center">
                        <p class="card-text">ORGANIZADOR DE CAJUELA COLAPSABLE CON LOGO BUICK</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0">
                    <img src="../imgs-2025/accesorios/gm-buick-accesorios-encore-4.avif" class="card-img-top" alt="Accesorio 4">
                    <div class="card-body text-center">
                        <p class="card-text">RED DE CAJUELA VERTICAL</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0">
                    <img src="../imgs-2025/accesorios/gm-buick-accesorios-encore-5.avif" class="card-img-top" alt="Accesorio 5">
                    <div class="card-body text-center">
                        <p class="card-text">TAPETES DE VINIL RÍGIDO 1RA Y 2DA FILA</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0">
                    <img src="../imgs-2025/accesorios/gm-buick-accesorios-encore-6.avif" class="card-img-top" alt="Accesorio 6">
                    <div class="card-body text-center">
                        <p class="card-text">CUBIERTA DEPORTIVA PARA PEDAL</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "../../../footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../nav/nav.js"></script>
</body>
</html>