<?php
include '../../../../config.php';
include '../../../../includes/header.php';
//include "includes/modal.php";

$navLinks = [
    'descripcion' => '#',
    'versiones' => 'includes/versiones.php',
    'galeria' => 'includes/galeria.php',
    'caracteristicas' => 'includes/caracteristicas.php',
    'especificaciones' => 'includes/especificaciones.php',
    'accesorios' => 'includes/accesorios.php',
    'precios' => 'includes/precio.php',
    'cotizar' => '#'
];

$navTitle = "GMC TERRRAIN";
include '../nav/nav.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../nav/nav.css?v=<?php echo time(); ?>">
</head>
<body>
<div class="position-relative">
        <img src="imgs/terrain/2024-terrain-mov-mh-lg.avif" class="img-fluid w-100" style="height: auto; object-fit: cover;" alt="Portada GMC">
    </div>
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fw-normal" style="font-size: 4rem; color: #555555;">GMC TERRAIN</h1>
                </div>
            </div>
            <div class="row mt-3 text-start">
                <div class="col-md-3">
                    <p class="fw-bold mb-0" style="font-size: 1.5rem;">Desde:</p>
                    <p class="fs-4">$716,900</p>
                </div>
                <div class="col-md-3">
                    <p class="fw-bold mb-0" style="font-size: 1.5rem;">HEAD-UP</p>
                    <p class="fs-6">DISPLAY</p>
                </div>
                <div class="col-md-3">
                    <p class="fw-bold mb-0" style="font-size: 1.5rem;">OnStar 4G LTE</p>
                    <p class="fs-6">con Wi-Fi integrado</p>
                </div>
                <div class="col-md-3">
                    <p class="fw-bold mb-0" style="font-size: 1.5rem;">Motor turbo con potencia</p>
                    <p class="fs-4">de 170 HP</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center" style="padding-bottom: 10vh;">
        <h1 class="display-4 mt-4 fw-bold text-uppercase" style="font-size: 4vh; padding-bottom: 2vh;">Versatilidad y Tecnología para dominar el camino</h1>
        <hr class="mx-auto mt-2" style="border-top: 4px solid #8B0000; opacity: 1; width: 20%; padding-bottom: 4vh;">
        <p class="lead mt-3" style="font-weight: 500; color: #333;">GMC Terrain lleva el ADN Professional Grade en cada aspecto desde su diseño y equipamiento, hasta su desempeño.</p>
    </div>
    
    <div class="container mt-5 text-center">
        <h2 class="fw-light" style="font-size: 3rem; margin-bottom: 3rem;">CARACTERISTICAS</h2>
        <div class="position-relative text-center">
            <div class="mt-5">
                <p style="font-size: 1.1rem; max-width: 1000px; margin: 0 auto; line-height: 1.6; margin-bottom: 3rem;">
                    Diseño que refleja el futuro de la marca.<br>
                    Deportivo y moderno. Un crossover que en cuanto lo veas, sabrás que te queda.
                </p>
            </div>
        </div>
    </div>
    <div class="position-relative">
        <img src="imgs-2025/gm-buick-mov-envista-caracteristicas-ext-1.avif" class="img-fluid w-100" style="height: auto; object-fit: cover; margin-bottom: 10vh;" alt="Chevrolet Aveo">
    </div>
    <div class="container my-5">
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="imgs-2025/gm-buick-mov-envista-caracteristicas-ext-2-v2.avif" class="img-fluid" alt="Imagen 1">
            </div>
            <div class="col-md-6">
                <p class="text-justify" style="font-size: 1.1rem;">
                <b>Una insignia del diseño automotriz</b><br><br>
                Buick Envista muestra su carácter único a través de un diseño vanguardista con una sofisticada caída coupé y las perfectas dimensiones de un crossover. 
                </p>
            </div>
        </div>
        <div class="row align-items-center mb-5">
            <div class="col-md-6 order-md-2">
                <img src="imgs-2025/gm-buick-mov-envista-caracteristicas-ext-3-v2.avif" class="img-fluid" alt="Imagen 2">
            </div>
            <div class="col-md-6 order-md-1">
                <p class="text-justify" style="font-size: 1.1rem;">
                <b>Visibilidad en cualquier situación</b><br><br>
                Buick Envista cuenta con faros IntelliBeam® que ayudan a tener una mejor visibilidad del camino, activando las luces de los faros automáticamente.
                </p>
            </div>
        </div>
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="imgs-2025/gm-buick-mov-envista-caracteristicas-ext-4-v2.avif" class="img-fluid" alt="Imagen 3">
            </div>
            <div class="col-md-6">
                <p class="text-justify" style="font-size: 1.2rem;">
                <b>Tecnología manos libres</b><br><br>
                Buick Envista integra elementos exclusivos como cajuela manos libres.
                </p>
            </div>
        </div>
    </div>

    <?php include "includes/colores.php" ?>

    <div class="container mt-5 text-center">
        <h2 class="display-4 mt-4 fw-bold text-uppercase text-center" style="font-size: 3rem; margin-bottom: 0rem;">GALERÍA</h2>
        <hr class="mx-auto mt-2" style="border-top: 4px solid #8B0000; opacity: 1; width: 20%; padding-bottom: 4vh;">
        <a href="includes/galeria.php" style="text-decoration: none; color: #f47c3c; font-weight: normal; font-size: 20px;">
            Ver toda la galería
        </a>
    </div>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-4 p-0">
                <div class="overflow-hidden" style="height: 400px;">
                    <img src="imgs/galeria/galeria-1.avif" class="img-fluid w-100 h-100 object-fit-cover" alt="Imagen 1">
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="overflow-hidden" style="height: 400px;">
                    <img src="imgs/galeria/galeria-2.avif" class="img-fluid w-100 h-100 object-fit-cover" alt="Imagen 2">
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="overflow-hidden" style="height: 400px;">
                    <img src="imgs/galeria/galeria-5.avif" class="img-fluid w-100 h-100 object-fit-cover" alt="Imagen 3">
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 text-center">
        <h2 class="display-4 mt-4 fw-bold text-uppercase text-center" style="font-size: 3rem; margin-bottom: 3rem;">VERSIONES</h2>
        <div class="position-relative text-center">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <img src="imgs/terrain/black-ed.avif" class="card-img-top img-fluid" alt="Imagen 1">
                        <div class="card-body">
                            <h2 class="display-4 mt-4 fw-bold text-uppercase text-center" style="font-size: 1.5rem; margin-bottom: 0rem;">GMC TERRAIN BLACK EDITION</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <img src="imgs/terrain/at4.avif" class="card-img-top img-fluid" alt="Imagen 2">
                        <div class="card-body">
                            <h2 class="display-4 mt-4 fw-bold text-uppercase text-center" style="font-size: 1.5rem; margin-bottom: 0rem;">GMC TERRAIN AT4</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <img src="imgs/terrain/denali.avif" class="card-img-top img-fluid" alt="Imagen 3">
                        <div class="card-body">
                            <h2 class="display-4 mt-4 fw-bold text-uppercase text-center" style="font-size: 1.5rem; margin-bottom: 0rem;">GMC TERRAIN DENALI</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="includes/versiones.php" style="text-decoration: none; color: #f47c3c; font-weight: normal; font-size: 20px;">
            CONSULTA TODAS LAS VERSIONES
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../nav/nav.js"></script>
</body>
</html>