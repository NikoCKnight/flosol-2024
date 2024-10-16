<?php
include '../../../../config.php';
include '../../../../includes/header.php';
include "includes/modal.php";

$navLinks = [
    'descripcion' => '#',
    'galeria' => 'includes/galeria.php',
    'especificaciones' => 'includes/especificaciones.php',
    'accesorios' => 'includes/accesorios.php',
    'precios' => 'includes/precio.php'
];

$navTitle = "ENCORE 2025";
include '../nav/nav.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENCORE 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../nav/nav.css?v=<?php echo time(); ?>">
    <style>
        .modal-dialog {
            max-width: 1200px;
        }
        .modal-backdrop {
            background-color: rgba(0, 0, 0, 0.9) !important;
        }
        .modal-body img {
            max-width: 65%;
            height: auto;
        }
        .modal-title {
            font-weight: 400;
        }
        body {
            position: relative;
            overflow-x: hidden;
            max-width: 100vw;
        }
        img {
            max-width: 100%;
            height: auto;
        }
        @media (max-width: 768px) {
            .modal-body img {
                display: none;
            }
            .modal-body {
                padding: 20px;
            }
            .modal-dialog {
                max-width: 100%;
                margin: 0;
                padding: 0;
            }
            .modal-content {
                width: 100%;
                border-radius: 0;
            }
            .modal-body .features {
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="position-relative">
        <img src="imgs-2025/encore/gm-buick-mov-encore-mh-lg.avif" class="img-fluid w-100" style="height: auto; object-fit: cover;" alt="Portada envista">
    </div>
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fw-normal" style="font-size: 4rem; color: #555555;">BUICK ENCORE</h1>
                </div>
            </div>
            <div class="row mt-3 text-start">
                <div class="col-md-3">
                    <p class="fw-bold mb-0" style="font-size: 1.5rem;">Desde:</p>
                    <p class="fs-4">$713,100</p>
                </div>
                <div class="col-md-3">
                    <p class="fw-bold mb-0" style="font-size: 1.5rem;">Capacidad para</p>
                    <p class="fs-6">5 Pasajeros</p>
                </div>
                <div class="col-md-3">
                    <p class="fw-bold mb-0" style="font-size: 1.5rem;">OnStar 4G LTE</p>
                    <p class="fs-6">con Wi-Fi integrado</p>
                </div>
                <div class="col-md-3">
                    <p class="fw-bold mb-0" style="font-size: 1.5rem;">Motor 1.3L Turbo</p>
                    <p class="fs-6">con Stop/Start</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-center">
        <h2 class="fw-light" style="font-size: 3rem; margin-bottom: 3rem;">CARACTERÍSTICAS DESTACADAS</h2>
        <div class="row justify-content-center justify-content-md-between mt-4">
            <div class="col-12 col-md-3 mx-0 mb-4 mb-md-0 position-relative text-center">
                <p style="font-size: 1.1rem; margin-bottom: 2.5rem;">Pantalla de infoentretenimiento horizontal de 11"</p>
                <div style="width: 30px; height: 2px; background-color: #FF6600; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);"></div>
            </div>
            <div class="col-12 col-md-3 mx-0 mb-4 mb-md-0 position-relative text-center">
                <p style="font-size: 1.1rem; margin-bottom: 2.5rem;">Alertas de seguridad avanzadas</p>
                <div style="width: 30px; height: 2px; background-color: #FF6600; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);"></div>
            </div>
            <div class="col-12 col-md-3 mx-0 position-relative text-center">
                <p style="font-size: 1.1rem; margin-bottom: 2.5rem;">Diseño interior y exterior con acabados premium</p>
                <div style="width: 30px; height: 2px; background-color: #FF6600; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);"></div>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-center">
        <h2 class="fw-light" style="font-size: 3rem; margin-bottom: 3rem;">EXTERIOR</h2>
        <div class="position-relative text-center">
            <div class="mt-5">
                <p style="font-size: 1.1rem; max-width: 1000px; margin: 0 auto; line-height: 1.6; margin-bottom: 3rem;">
                    Buick Encore es un reflejo de nuestra identidad.<br>
                    Con su diseño vanguardista, esta SUV brinda presencia y versatilidad en cada camino.
                </p>
            </div>
        </div>
    </div>
    <div class="position-relative">
        <img src="imgs-2025/encore/gm-buick-mov-encore-caracteristicas-ext-1.avif" class="img-fluid w-100" style="height: auto; object-fit: cover; margin-bottom: 10vh;" alt="Chevrolet Aveo">
    </div>
    <div class="container my-5">
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="imgs-2025/encore/gm-buick-mov-encore-caracteristicas-ext-2.avif" class="img-fluid" alt="Imagen 1">
            </div>
            <div class="col-md-6">
                <p class="text-justify" style="font-size: 1.1rem;">
                <b>Una SUV con carácter</b><br><br>
                Buick Encore muestra su personalidad a través de acabados vanguardistas, entre los que resalta su parrilla con ventilas activas eléctricas.
                </p>
            </div>
        </div>
        <div class="row align-items-center mb-5">
            <div class="col-md-6 order-md-2">
                <img src="imgs-2025/encore/gm-buick-mov-encore-caracteristicas-ext-3.avif" class="img-fluid" alt="Imagen 2">
            </div>
            <div class="col-md-6 order-md-1">
                <p class="text-justify" style="font-size: 1.1rem;">
                <b>Dinamismo con estilo</b><br><br>
                El impresionante diseño deportivo de Buick Encore combina estilo y audacia para mejorar cada experiencia a bordo.
                </p>
            </div>
        </div>
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="imgs-2025/encore/gm-buick-mov-encore-caracteristicas-ext-4.avif" class="img-fluid" alt="Imagen 3">
            </div>
            <div class="col-md-6">
                <p class="text-justify" style="font-size: 1.2rem;">
                <b>Detalles exclusivos</b><br><br>
                La exclusividad se transforma en confort y practicidad gracias a elementos como su cajuela manos libres y faros IntelliBeam®.
                </p>
            </div>
        </div>
    </div>
    <div class="mt-5 text-center">
        <a href="#" data-bs-toggle="modal" data-bs-target="#exteriorModal" style="text-decoration: none; color: #f47c3c; font-weight: normal;">
            VER TODO SOBRE EXTERIOR
        </a>
    </div>
    <?php include "includes/colores.php" ?>
    <div class="container mt-5 text-center">
    <h2 class="fw-light" style="font-size: 3rem; margin-bottom: 0rem;">INTERIOR</h2>
        <div class="position-relative text-center">
            <div class="mt-5">
                <p style="font-size: 1.1rem; max-width: 1000px; margin: 0 auto; line-height: 1.6; margin-bottom: 3rem;">
                    Ingresar a una Buick Encore es transportarte a un mundo de confort con detalles exclusivos.
                </p>
            </div>
        </div>
    </div>
    <div class="position-relative">
        <img src="imgs-2025/encore/gm-buick-mov-encore-caracteristicas-mh-lg.avif" class="img-fluid w-100" style="height: auto; object-fit: cover; margin-bottom: 1vh;" alt="Chevrolet Aveo">
    </div>
    <div class="container-fluid mt-5">
        <div class="row text-center">
            <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                <img src="imgs-2025/encore/gm-buick-mov-encore-caracteristicas-int-1.avif" class="img-fluid" alt="Espacio superior">
                <p class="mt-2" style="font-size: 1.4rem;"><b>Espacio perfecto</b><br><br>
                    La SUV perfecta brinda un espacio de total libertad, con las dimensiones adecuadas para disfrutar cada momento.
                </p>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                <img src="imgs-2025/encore/gm-buick-mov-encore-caracteristicas-int-2.avif" class="img-fluid" alt="Conducción premium">
                <p class="mt-2" style="font-size: 1.4rem;"><b>Versatilidad en movimiento</b><br><br>
                    Buick Encore se mueve contigo brindando una experiencia de manejo cómoda e intuitiva, por medio de cada detalle.
                </p>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                <img src="imgs-2025/encore/gm-buick-mov-encore-caracteristicas-int-3.avif" class="img-fluid" alt="Confort con exclusividad">
                <p class="mt-2" style="font-size: 1.4rem;"><b>Confort con exclusividad</b><br><br>
                    Sus exclusivos acabados en vinipiel y bordados, brindan confort con diseño para cada viaje.
                </p>
            </div>
        </div>
    </div>
    <div class="mt-4 text-center">
        <a href="#" data-bs-toggle="modal" data-bs-target="#interiorModal" style="text-decoration: none; color: #f47c3c; font-weight: normal;">
            VER TODO SOBRE INTERIOR
        </a>
    </div>
    <div class="container mt-5">
        <h2 class="fw-light text-center" style="font-size: 3rem;">TECNOLOGÍA</h2>
        <p class="text-center" style="font-size: 1.1rem; max-width: 1000px; margin: 0 auto; line-height: 1.6;">
            Equipada con la tecnología ideal para amenizar tu experiencia en cada nivel.
        </p>
        <div class="row align-items-center mt-5">
            <div class="col-md-7">
                <img src="imgs-2025/encore/gm-buick-mov-encore-caracteristicas-tec-1.avif" class="img-fluid" style="width: 95%; margin-left: 5%;" alt="Imagen descripción">
            </div>
            <div class="col-md-5">
                <p class="mb-4">Cada espacio de la SUV está equipado para brindar conectividad y practicidad en cada viaje.</p>
                <div class="mb-3">
                    <hr class="border-top border-warning">
                    <p>Pantalla de control de información del conductor 8"</p>
                </div>
                <div class="mb-3">
                    <hr class="border-top border-warning">
                    <p>Acceso con llave inteligente con encendido de motor remoto</p>
                </div>
                <div class="mb-3">
                    <hr class="border-top border-warning">
                    <p>Cargador inalámbrico para smartphone</p>
                </div>
                <div class="mt-4 text-center">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#tecnologiaModal" style="text-decoration: none; color: #f47c3c; font-weight: normal;">
                        VER TODO SOBRE TECNOLOGÍA
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-center">
        <h2 class="fw-light" style="font-size: 3rem; margin-bottom: 3rem;">SEGURIDAD</h2>
    </div>
    <div class="position-relative">
        <img src="imgs-2025/encore/gm-buick-mov-encore-caracteristicas-seg-mh-lg.avif" class="img-fluid w-100" style="height: auto; object-fit: cover; margin-bottom: 0vh;" alt="Chevrolet Aveo">
    </div>
    <div class="container mt-5 text-center">
        <div class="position-relative text-center">
            <div class="mt-5">
                <p style="font-size: 1.1rem; max-width: 1000px; margin: 0 auto; line-height: 1.6; margin-bottom: 3rem;">
                    Buick Encore cuenta con el equipamiento necesario para proteger a cada pasajero.<br><br>
                    Los sistemas de seguridad integrados prevén y protegen de incidentes desde cada ángulo del vehículo.
                </p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
                <p>Control crucero automático electrónico</p>
                <hr class="border-top border-warning">
            </div>
            <div class="col-md-6">
                <p>Cámara de visión trasera HD</p>
                <hr class="border-top border-warning">
            </div>
            <div class="col-md-6">
                <p>Bolsas de aire (2 frontales, 4 laterales y 2 de cortina)</p>
                <hr class="border-top border-warning">
            </div>
            <div class="col-md-6">
                <p>Indicador de distancia</p>
                <hr class="border-top border-warning">
            </div>
            <div class="col-md-6">
                <p>Cámara de visión 360° HD</p>
                <hr class="border-top border-warning">
            </div>
            <div class="col-md-6">
                <p>Alerta de colisión frontal</p>
                <hr class="border-top border-warning">
            </div>
        </div>
    </div>
    <div class="mt-5 text-center">
        <a href="#" data-bs-toggle="modal" data-bs-target="#seguridadModal" style="text-decoration: none; color: #f47c3c; font-weight: normal;">
            VER TODO SOBRE SEGURIDAD
        </a>
    </div>
    <div class="container mt-5 text-center">
        <h2 class="fw-light" style="font-size: 3rem; margin-bottom: 0rem;">DESEMPEÑO</h2>
        <div class="position-relative text-center">
            <div class="mt-5">
                <p style="font-size: 1.1rem; max-width: 1000px; margin: 0 auto; line-height: 1.6; margin-bottom: 3rem;">
                    Una SUV de transmisión automática con el equipamiento perfecto para recorrer cualquier camino gracias a su motor<br>
                    1.3L turbo con sistema Stop/Start.
                </p>
            </div>
        </div>
    </div>
    <div class="position-relative">
        <img src="imgs-2025/encore/gm-buick-mov-encore-caracteristicas-des-mh-lg.avif" class="img-fluid w-100" style="height: auto; object-fit: cover; margin-bottom: 1vh;" alt="Chevrolet Aveo">
    </div>
    <div class="mt-5 text-center">
        <a href="#" data-bs-toggle="modal" data-bs-target="#desempenoModal" style="text-decoration: none; color: #f47c3c; font-weight: normal;">
            VER TODO SOBRE DESEMPEÑO
        </a>
    </div>
    <div class="container mt-5 text-center">
        <h2 class="fw-light" style="font-size: 3rem; margin-bottom: 0rem;">MODELOS DISPONIBLES</h2>
        <p class="text-warning">
            Comparar modelos 
        </p>
    </div>
    <div class="container mt-5 d-flex justify-content-center">
        <div class="row g-4 justify-content-center" style="max-width: 85%;">
            <div class="col-md-6">
                <div class="card h-100">
                    <img src="imgs-2025/colores/sport/jinx.avif" class="card-img-top" alt="Sport Touring">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">SPORT TOURING</h5>
                        <p class="card-text">Precio desde: $713,100</p>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Rines de aluminio en negro 18”.</li>
                            <li>Parrilla con diseño exclusivo y spoiler al color de la carrocería con acabado “High Gloss”.</li>
                            <li>Exclusivo techo bitono negro con acabado “High Gloss” (unicamente en color Jinx Metallic).</li>
                            <li>Interior con diseños exclusivos en vinipiel.</li>
                            <li>Barras de techo en acabado negro.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <img src="imgs-2025/colores/avenir/cosmonaut.avif" class="card-img-top" alt="Avenir">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">AVENIR</h5>
                        <p class="card-text">Precio desde: $780,100</p>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Rines de aluminio 18”.</li>
                            <li>Skid plate plateado en fascia.</li>
                            <li>Interior con diseños exclusivos en piel con grabado distintivo.</li>
                            <li>Quemacocos con apertura y cierre con control eléctrico.</li>
                            <li>Volante calefactable.</li>
                            <li>Indicador de distancia.</li>
                            <li>Cargador inalámbrico.</li>
                            <li>Cámara de visión 360° HD.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-center">
        <h2 class="fw-light" style="font-size: 3rem; margin-bottom: 0rem;">GALERÍA</h2>
        <a href="includes/galeria.php" style="text-decoration: none; color: #f47c3c; font-weight: normal;">
            Ver toda la galería
        </a>
    </div>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-4 p-0">
                <div class="overflow-hidden" style="height: 400px;">
                    <img src="imgs-2025/galeria/galeria-1.avif" class="img-fluid w-100 h-100 object-fit-cover" alt="Imagen 1">
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="overflow-hidden" style="height: 400px;">
                    <img src="imgs-2025/galeria/galeria-2.avif" class="img-fluid w-100 h-100 object-fit-cover" alt="Imagen 2">
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="overflow-hidden" style="height: 400px;">
                    <img src="imgs-2025/galeria/galeria-3.avif" class="img-fluid w-100 h-100 object-fit-cover" alt="Imagen 3">
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-center">
        <h2 class="fw-light" style="font-size: 3rem; margin-bottom: 2rem;">MAS INFORMACIÓN</h2>
        <div class="position-relative text-center">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <img src="imgs-2025/colores/avenir/cosmonaut.avif" class="card-img-top img-fluid" alt="Imagen 1">
                        <div class="card-body">
                            <a href="catalogos/2025/Catalogo-Encore-2025-Desktop-v2.pdf" target="_blank" class="btn btn-custom">Descargar catálogo</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <img src="imgs-2025/colores/avenir/zircon.avif" class="card-img-top img-fluid" alt="Imagen 2">
                        <div class="card-body">
                            <a href="catalogos/2025/2025-hoja-de-rescate-encore.pdf" target="_blank" class="btn btn-custom">Descargar hojas de rescate</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <img src="imgs-2025/colores/avenir/abalone.avif" class="card-img-top img-fluid" alt="Imagen 3">
                        <div class="card-body">
                            <a href="catalogos/2025/25_BUI_Encore_GX_es_MX_U_MX_85602506A_2024MAY08.pdf" target="_blank" class="btn btn-custom">Descargar Manual de propietario</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "../../footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../nav/nav.js"></script>
</body>
</html>

