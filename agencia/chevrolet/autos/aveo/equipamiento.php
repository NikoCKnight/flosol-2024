<?php
include '../../../../config.php';
include '../../../../includes/header.php';
$activePage = 'equipamiento';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/equipamiento.css?v=<?php echo time(); ?>">
    <title>Aveo Sedán</title>
</head>
<body>
    <div class="position-relative">
        <img src="imgs/galeria/2024-aveo-sedan-gal-ext-05.avif" class="img-fluid w-100" style="height: 70vh; object-fit: cover; margin-top: 5rem;" alt="Chevrolet Aveo">
        <div class="position-absolute top-50 start-50 translate-middle text-center">
            <h1 class="fw-bold text-white" style="font-size: 2.5rem;">Equipamiento</h1>
        </div>
    </div>
    
    <?php include "nav.php" ?>

    <div class="container mt-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="ls-manual-tab" data-bs-toggle="tab" data-bs-target="#ls-manual" type="button" role="tab" aria-controls="ls-manual" aria-selected="true">LS Manual</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="lt-manual-tab" data-bs-toggle="tab" data-bs-target="#lt-manual" type="button" role="tab" aria-controls="lt-manual" aria-selected="false">LT Manual</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="lt-plus-tab" data-bs-toggle="tab" data-bs-target="#lt-plus" type="button" role="tab" aria-controls="lt-plus" aria-selected="false">LT Plus</button>
            </li>
        </ul>
    </div>
    <?php include "includes/equipo.php" ?>
    <div class="mt-5 text-container" style="margin-bottom: 15vh;">
        <p class="text-justify">
            La información sobre rendimiento de combustible combinado, se refiere al valor que se obtuvo en condiciones controladas de laboratorio, de acuerdo a la metodología de 
            la <b>NOM-163-SEMARNAT-ENER-SCFI-2013</b>; que pueden no ser reproducibles ni obtenerse en condiciones y hábitos de manejo convencional, debido a condiciones 
            climatológicas, combustible, condiciones topográficas, peso de carga y otros factores.
        </p>
        <p class="text-justify">
            Este vehículo contiene los dispositivos de seguridad obligatorios de conformidad con la <b>NOM-194-SE-2021</b>.
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>