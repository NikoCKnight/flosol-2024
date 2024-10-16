<?php
include '../../../../config.php';
include '../../../../includes/header.php';
$activePage = 'descripcion';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aveo Sedán</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/header.css?v=<?php echo time(); ?>">
    <style>
        #gallery .col-md-4 {
            position: relative;
            overflow: hidden;
        }

        #gallery .img-fluid {
            width: 100%;
            height: auto;
            transition: transform 0.5s ease;
        }

        #gallery .img-fluid:hover {
            transform: scale(1.05);
            transform-origin: center center;
        }
        .btn-custom {
            background-color: #00354D;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 30px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #E3DAC9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="position-relative">
        <img src="imgs/galeria/2023-aveo-gal-ext-04.avif" class="img-fluid w-100" style="max-height: 70vh; object-fit: cover;" alt="Chevrolet Aveo">
        <div class="position-absolute top-50 start-50 translate-middle text-center">
            <h2 class="fw-bold text-white">Chevrolet</h2>
            <h1 class="fw-bold text-white">Aveo Hatchback 2025</h1>
        </div>
    </div>

    <?php include("nav.php") ?>
    
    <?php include("includes/intro.php") ?>
    
    <?php include("includes/galeria.php") ?>

    <?php include("includes/ending.php") ?>

    <div class="container my-5">
    <h2 class="text-center mb-4">Información importante</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-center">
                <img src="imgs/colores/azul-persuacion.avif" class="card-img-top img-fluid" alt="Imagen 1">
                <div class="card-body">
                    <a href="catalogo/2024-aveo-sedan-ficha-tecnica-v6.pdf" target="_blank" class="btn btn-custom">Descargar Ficha Técnica</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-center">
                <img src="imgs/colores/acero-metalico.avif" class="card-img-top img-fluid" alt="Imagen 2">
                <div class="card-body">
                    <a href="catalogo/2024-aveo-sedan-catalogo-v6.pdf" target="_blank" class="btn btn-custom">Descargar Catálogo</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-center">
                <img src="imgs/colores/blanco-polar.avif" class="card-img-top img-fluid" alt="Imagen 3">
                <div class="card-body">
                    <a href="catalogo/2024-aveo-sedan-manual-propietarios.pdf" target="_blank" class="btn btn-custom">Descargar Manual de propietario</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function changeImage(imageUrl, color) {
        document.getElementById('mainImage').src = imageUrl;
        document.getElementById('imageTitle').textContent = color;
    }
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>