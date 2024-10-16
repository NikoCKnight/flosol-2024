<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .icon-container {
            margin-top: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        .icon-container img {
            width: 120px;
            height: 120px;
        }
        .icon-container p {
            font-weight: bold;
            margin-top: 10px;
            text-align: center;
        }
        .containere {
            max-width: 100%;
            padding: 0 15px;
        }
        @media (max-width: 768px) {
            .icon-container {
                margin-top: 20px;
                margin-bottom: 20px;
            }
            .icon-container img {
                width: 80px;
                height: 80px;
            }
        }
    </style>
</head>
<body>
    <div class="container containere">
        <div class="row text-center justify-content-around">
            <div class="col-lg-2 col-md-3 col-6 icon-container">
                <img src="<?php echo BASE_URL; ?>/agencia/includes/card/icon-build-your-own-red.svg" alt="Solicita Cotización">
                <p>Solicita Cotización</p>
            </div>
            <div class="col-lg-2 col-md-3 col-6 icon-container">
                <img src="<?php echo BASE_URL; ?>/agencia/includes/card/icon-mph-red.svg" alt="Prueba de Manejo">
                <p>Prueba de Manejo</p>
            </div>
            <div class="col-lg-2 col-md-3 col-6 icon-container">
                <img src="<?php echo BASE_URL; ?>/agencia/includes/card/icon-find-a-dealer-red.svg" alt="Distribuidor Grupo Flosol">
                <p>Distribuidor Grupo Flosol</p>
            </div>
            <div class="col-lg-2 col-md-3 col-6 icon-container">
                <img src="<?php echo BASE_URL; ?>/agencia/includes/card/icono-click-shop.avif" alt="Elige, Aparta, Maneja">
                <p>Elige, Aparta, Maneja</p>
            </div>
        </div>
    </div>
</body>
</html>
