<?php
include '../../../../../config.php';
include '../../../../../includes/header.php';
$navLinks = [
    'descripcion' => '../envision-2024.php',
    'galeria' => '#',
    'especificaciones' => 'especificaciones.php',
    'accesorios' => 'accesorios.php',
    'precios' => 'precio.php'
];

$navTitle = "NUEVA ENVISION 2024";
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
    <style>
        .modal {
            z-index: 1060 !important;
            overflow-x: hidden;
        }
        .modal-body img {
            height: 80vh;
            object-fit: cover;
            margin: 0 auto;
        }
        header {
            z-index: 1010 !important;
        }
        nav {
            z-index: 1000 !important;
        }
        .thumbnail-wrapper {
            display: flex;
            justify-content: center;
            gap: 10px;
            padding-bottom: 10px;
            flex-wrap: nowrap;
        }
        .thumbnail-wrapper img {
            width: 100px;
            height: auto;
            cursor: pointer;
        }
        .carousel-control-prev, .carousel-control-next {
            z-index: 1050;
            top: 50%;
            transform: translateY(-50%);
        }
        .image-counter {
            display: none;
        }
        @media (max-width: 768px) {
            .thumbnail-wrapper {
                display: none !important;
            }
            .image-counter {
                display: block;
                position: absolute;
                bottom: 10px;
                width: 100%;
                text-align: center;
                color: lightgray;
                font-size: 1rem;
            }
            .modal-body {
                background-color: rgba(0, 0, 0, 0.9);
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                overflow-x: hidden;
                padding: 0;
            }
            .modal-body img {
                width: 100%;
                height: auto;
                object-fit: contain;
            }
            .modal-content {
                background-color: black;
                box-shadow: none;
                max-width: 100%;
                margin: 0;
            }
            .modal-header h5, 
            .modal-header .btn-close {
                color: white !important;
                filter: brightness(0) invert(1);
            }
        }
        @media (min-width: 769px) {
            .thumbnail-wrapper {
                display: flex !important;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5 text-center">
        <div class="mt-5">
            <h2 class="fw-light" style="font-size: 3rem; margin-bottom: 3rem;">GALERÍA</h2>
        </div>
        <div class="row" id="gallery">
            <?php for($i = 1; $i <= 8; $i++): ?>
            <div class="col-md-4 mb-4">
                <img src="../imgs-2024/galeria/galeria-<?php echo $i; ?>.avif" class="img-fluid rounded shadow" data-bs-toggle="modal" data-bs-target="#fullScreenGallery" data-bs-slide-to="<?php echo $i - 1; ?>" alt="Imagen <?php echo $i; ?>">
            </div>
            <?php endfor; ?>
            <div class="col-md-4 mb-4">
                <button class="btn btn-dark w-100 h-100" style="height: auto; font-size: 30px;" data-bs-toggle="modal" data-bs-target="#fullScreenGallery">Galería</button>
            </div>
        </div>
        <div class="modal fade" id="fullScreenGallery" tabindex="-1" aria-labelledby="fullScreenGalleryLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="fullScreenGalleryLabel">Galería</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselFullGallery" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php for($i = 1; $i <= 14; $i++): ?>
                                <div class="carousel-item <?php echo $i === 1 ? 'active' : ''; ?>">
                                    <img src="../imgs-2024/galeria/galeria-<?php echo $i; ?>.avif" class="d-block w-100" alt="Imagen <?php echo $i; ?>">
                                </div>
                                <?php endfor; ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselFullGallery" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselFullGallery" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </button>
                        </div>
                        <!-- Contador de imagen -->
                        <div class="image-counter">
                            <span id="currentSlide">1</span> / 14
                        </div>
                        <!-- Miniaturas -->
                        <div class="row mt-3">
                            <div class="col-12 d-flex justify-content-center thumbnail-wrapper">
                                <?php for($i = 1; $i <= 14; $i++): ?>
                                <img src="../imgs-2024/galeria/galeria-<?php echo $i; ?>.avif" data-bs-target="#carouselFullGallery" data-bs-slide-to="<?php echo $i - 1; ?>" class="img-fluid img-thumbnail mx-2" alt="Imagen <?php echo $i; ?>">
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "../../../footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../nav/nav.js"></script>
    <script>
        const carousel = document.querySelector('#carouselFullGallery');
        const currentSlide = document.querySelector('#currentSlide');

        carousel.addEventListener('slid.bs.carousel', function (event) {
            let activeIndex = event.to + 1; // Suma 1 porque los índices empiezan desde 0
            currentSlide.textContent = activeIndex;
        });
    </script>
</body>
</html>