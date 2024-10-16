<?php
include '../../../../../config.php';
include '../../../../../includes/header.php';
$navLinks = [
    'descripcion' => '../enclave-2024.php',
    'galeria' => 'galeria.php',
    'especificaciones' => 'especificaciones.php',
    'accesorios' => '#',
    'precios' => 'precio.php'
];

$navTitle = "ENCLAVE 2024";
include '../../nav/nav.php';
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
    <link rel="stylesheet" href="../../nav/nav.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="position-relative">
        <img src="../imgs-2024/accesorios/2024-buick-enclave-acc-mh-lg.avif" class="img-fluid w-100"
            style="max-height: 90vh; object-fit: cover;" alt="Portada envista">
    </div>
    <div class="container mt-5">
        <h1 class="fw-normal" style="font-size: 3rem; color: #555555; text-align: left;">COMPLEMENTOS PERFECTOS, PARA LA SUV PERFECTA</h1>
    </div>
    <div class="container mt-5">
        <p class="fw-light">
            Accesorios que harán de tu viaje una experiencia aún más práctica y cómoda.
        </p>
        <div class="d-flex justify-content-center mt-4">
            <a href="../catalogo/2024/catalogo-enclave-24-accesorios-220124.pdf" target="_blank">
                <button class="btn btn-outline-dark">Catalogo de accesorios</button>
            </a>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="card border-0">
                    <img src="../imgs-2024/accesorios/2024-buick-enclave-acc-01.avif" class="card-img-top" alt="Accesorio 1">
                    <div class="card-body text-center">
                        <p class="card-text">ESTRIBOS MOLDEADOS GRIS OSCURO</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0">
                    <img src="../imgs-2024/accesorios/2024-buick-enclave-acc-02.avif" class="card-img-top" alt="Accesorio 2">
                    <div class="card-body text-center">
                        <p class="card-text">TAPETES DE VINIL DE PRIMERA FILA CON LOGO BUICK</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0">
                    <img src="../imgs-2024/accesorios/2024-buick-enclave-acc-03.avif" class="card-img-top" alt="Accesorio 3">
                    <div class="card-body text-center">
                        <p class="card-text">RED DE CARGA VERTICAL CON BOLSA DE ALMACENAJE Y LOGO BUICK</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0">
                    <img src="../imgs-2024/accesorios/2024-buick-enclave-acc-04.avif" class="card-img-top" alt="Accesorio 4">
                    <div class="card-body text-center">
                        <p class="card-text">BARRAS TRANSVERSALES DE TECHO</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0">
                    <img src="../imgs-2024/accesorios/2024-buick-enclave-acc-05.avif" class="card-img-top" alt="Accesorio 5">
                    <div class="card-body text-center">
                        <p class="card-text">RIN DE ALUMINIO DE 20” PLATEADO</p>
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