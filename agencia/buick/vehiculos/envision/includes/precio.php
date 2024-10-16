<?php
include '../../../../../config.php';
include '../../../../../includes/header.php';
$navLinks = [
    'descripcion' => '../envision-2024.php',
    'galeria' => 'galeria.php',
    'especificaciones' => 'especificaciones.php',
    'accesorios' => 'accesorios.php',
    'precios' => '#'
];

$navTitle = "NUEVA ENVISION 2024";
include '../../nav/nav.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="precios.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../nav/nav.css?v=<?php echo time(); ?>">
    <title></title>
    <style>
        .blf{
            font-size: 1.5rem;
        }
        @media (max-width: 768px) {
            .table-responsive table thead {
                display: none;
            }
            .table-responsive table, .table-responsive tbody, .table-responsive tr, .table-responsive td {
                display: block;
                width: 100%;
            }
            .table-responsive tr {
                margin-bottom: 1rem;
                border-bottom: 1px solid #ddd;
            }
            .table-responsive td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }
            .table-responsive td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 1rem;
                font-weight: bold;
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <div class="position-relative">
        <img src="../imgs-2024/gm-buick-mov-envision-precio-mh-lg.avif" class="img-fluid w-100" style="max-height: 90vh; object-fit: cover;" alt="Portada envista">
    </div>
    <div class="container mt-5">
        <h1 class="fw-normal" style="font-size: 4rem; color: #555555;">NUEVA BUICK ENVISION</h1>
    </div>
    <div class="container my-5">
        <div class="row equal-height-row">
            <div class="col-lg-6 d-flex align-items-start flex-column">
                <img src="../imgs-2024/colores/avenir/truffle.avif" class="img-fluid img-vehicle" alt="Jinx Avenir">
                
                <div class="d-flex justify-content-center mt-3">
                    <a href="#" class="text-decoration-none" style="color: #f47c3c" data-bs-toggle="modal" data-bs-target="#termsModal">+ Consulta Términos y Condiciones</a>
                </div>
            </div>
            <div class="col-lg-6 d-flex flex-column">
                <div class="row">
                    <div class="col-md-6 mb-3 equal-height-col">
                        <div class="price-card">
                            <h6>Contado</h6>
                            <p class="mb-0">¡1 AÑO DE SEGURO GRATIS!<a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#contado"><i class="fa-regular fa-comment-dots" style="color: #FFD43B;"></i></a></p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3 equal-height-col">
                        <div class="price-card">
                            <h6>Financiamiento</h6>
                            <p class="mb-0">18 MESES SIN INTERESES<a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#msi"><i class="fa-regular fa-comment-dots" style="color: #FFD43B;"></i></a></p>
                            <p class="mb-0">¡1 AÑO DE SEGURO GRATIS!<a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#year"><i class="fa-regular fa-comment-dots" style="color: #FFD43B;"></i></a></p>
                        </div>
                        <div class="legal-links">
                            <a href="#" class="text-decoration-none" style="color: #f47c3c" data-bs-toggle="modal" data-bs-target="#legalFinanciamientoModal">+ Legales Financiamiento</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <a href="#" class="btn btn-outline-warning" style="border: 2px solid #FF5F1F; color: #FF5F1F;">Solicita una cotización</a>
                </div>
            </div>
        </div>
        <div class="table-responsive" style="padding-top: 5vh;">
            <table class="table table-bordered">
                <thead class="bg-light">
                    <tr>
                        <th scope="col">PAQUETES</th>
                        <th scope="col">PRECIO DE LISTA *</th>
                        <th scope="col">PRECIO DE CONTADO</th>
                        <th scope="col">PRECIO FINANCIADO *</th>
                        <th scope="col">PRECIO DE LEASING *</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="PAQUETES">Sport Touring</td>
                        <td data-label="PRECIO DE LISTA *">$942,700</td>
                        <td data-label="PRECIO DE CONTADO">$942,700</td>
                        <td data-label="PRECIO FINANCIADO *">$942,700</td>
                        <td data-label="PRECIO DE LEASING *">$942,700</td>
                    </tr>
                    <tr>
                        <td data-label="PAQUETES">Avenir</td>
                        <td data-label="PRECIO DE LISTA *">$1,016,700</td>
                        <td data-label="PRECIO DE CONTADO">$1,016,700</td>
                        <td data-label="PRECIO FINANCIADO *">$1,016,700</td>
                        <td data-label="PRECIO DE LEASING *">$1,016,700</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <?php include("modal-precio.php") ?> 
    <?php include "../../../footer.php" ?>
    <script src="../../nav/nav.js"></script>
</body>
</html>