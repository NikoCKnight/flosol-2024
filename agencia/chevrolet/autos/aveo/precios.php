<?php
include '../../../../config.php';
include '../../../../includes/header.php';
$activePage = 'precios';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/precios.css?v=<?php echo time(); ?>">
    <title>Aveo Sedán</title>
</head>
<body>
    <div class="position-relative">
        <img src="imgs/galeria/2024-aveo-sedan-gal-ext-06.avif" class="img-fluid w-100" style="height: 70vh; object-fit: cover; margin-top: 5rem;" alt="Chevrolet Aveo">
        <div class="position-absolute top-50 start-50 translate-middle text-center">
            <h1 class="fw-bold text-white">Precios</h1>
        </div>
    </div>
    <?php include("nav.php") ?>
    <div class="container my-5">
        <h2 class="text-center section-header">Precios y Promociones</h2>
        <p style="font-size: 1.2rem">Comienza a tomar el volante del Chevrolet que siempre has querido, traza tus propias rutas para disfrutar de todas las aventuras inigualables que te esperan a bordo de este vehículo.</p>
        <p style="font-size: 1.2rem">Vive la emoción de estrenar un Chevrolet.</p>
        <div class="row equal-height-row">
            <div class="col-lg-6 d-flex align-items-start flex-column">
                <img src="imgs/colores/rojo-metalico.avif" class="img-fluid img-vehicle" alt="Chevrolet Aveo">
                
                <div class="d-flex justify-content-center mt-3">
                    <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#termsModal">+ Consulta Términos y Condiciones</a>
                </div>
            </div>
            <div class="col-lg-6 d-flex flex-column">
                <div class="row">
                    <div class="col-md-6 mb-3 equal-height-col">
                        <div class="price-card">
                            <h6>Contado</h6>
                            <p class="mb-0">Precio desde <strong>$296,900 </strong><a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#contado"><i class="fa-regular fa-comment-dots" style="color: #FFD43B;"></i></a></p>
                        </div>

                        <div class="legal-links">
                            <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#legalContadoModal">+ Legales Contado</a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3 equal-height-col">
                        <div class="price-card">
                            <h6>Financiamiento</h6>
                            <p class="mb-0">Mensualidades desde <strong>$3,399 </strong><a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#mensualidades"><i class="fa-regular fa-comment-dots" style="color: #FFD43B;"></i></a></p>
                            <p class="mb-0"><b><span style="color: #FFD43B;">Ó</span></b> Tasa de <strong>12.30%</strong> hasta 60 meses <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#tasa"><i class="fa-regular fa-comment-dots" style="color: #FFD43B;"></i></a></p>
                            <p class="mb-0"><b><span style="color: #FFD43B;">+</span></b> Año de seguro ¡Gratis! <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#year"><i class="fa-regular fa-comment-dots" style="color: #FFD43B;"></i></a></p>
                            <p class="mb-0"><b><span style="color: #FFD43B;">Y</span></b> Comisión por apertura ¡Gratis! <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#and"><i class="fa-regular fa-comment-dots" style="color: #FFD43B;"></i></a></p>
                        </div>
                        <div class="legal-links">
                            <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#legalFinanciamientoModal">+ Legales Financiamiento</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <a href="#" class="btn btn-quote" style="margin-bottom: 10vh;">Solicita una cotización</a>
                </div>
            </div>
        </div>
    </div>
    <?php include("includes/modal.php") ?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>