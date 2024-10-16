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

$navTitle = "ENVISTA 2025";
include '../nav/nav.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envista 2024</title>
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
        <img src="imgs-2025/gm-buick-mov-envista-mh-lg-v2.avif" class="img-fluid w-100" style="height: auto; object-fit: cover;" alt="Portada envista">
    </div>
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fw-normal" style="font-size: 4rem; color: #555555;">BUICK ENVISTA</h1>
                </div>
            </div>
            <div class="row mt-3 text-start">
                <div class="col-md-3">
                    <p class="fw-bold mb-0" style="font-size: 1.5rem;">Desde:</p>
                    <p class="fs-4">$653,100</p>
                </div>
                <div class="col-md-3">
                    <p class="fw-bold mb-0" style="font-size: 1.5rem;">Pantalla</p>
                    <p class="fs-4">11"</p>
                </div>
                <div class="col-md-3">
                    <p class="fw-bold mb-0" style="font-size: 1.5rem;">OnStar 4G LTE</p>
                    <p class="fs-6">con Wi-Fi integrado</p>
                </div>
                <div class="col-md-3">
                    <p class="fw-bold mb-0" style="font-size: 1.5rem;">Motor 1.2 L Turbo</p>
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
                <p style="font-size: 1.1rem; margin-bottom: 2.5rem;">Asistencia de manejo y seguridad avanzadas</p>
                <div style="width: 30px; height: 2px; background-color: #FF6600; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);"></div>
            </div>
            <div class="col-12 col-md-3 mx-0 position-relative text-center">
                <p style="font-size: 1.1rem; margin-bottom: 2.5rem;">Diseño exterior deportivo, interiores premium para mayor comodidad y espacio</p>
                <div style="width: 30px; height: 2px; background-color: #FF6600; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);"></div>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-center">
        <h2 class="fw-light" style="font-size: 3rem; margin-bottom: 3rem;">EXTERIOR</h2>
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
                    Ingresar al interior de Buick Envista es transportarte a un mundo de confort con más espacio del que pensabas.
                </p>
            </div>
        </div>
    </div>
    <div class="position-relative">
        <img src="imgs-2025/gm-buick-mov-envista-caracteristicas-int-mh-lg.avif" class="img-fluid w-100" style="height: auto; object-fit: cover; margin-bottom: 1vh;" alt="Chevrolet Aveo">
    </div>
    <div class="container-fluid mt-5">
        <div class="row text-center">
            <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                <img src="imgs-2025/gm-buick-mov-envista-caracteristicas-int-1.avif" class="img-fluid" alt="Espacio superior">
                <p class="mt-2" style="font-size: 1.4rem;"><b>Espacio superior</b><br><br>
                    Cuenta con el espacio perfecto en el habitáculo para la comodidad de los pasajeros.
                </p>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                <img src="imgs-2025/gm-buick-mov-envista-caracteristicas-int-2.avif" class="img-fluid" alt="Conducción premium">
                <p class="mt-2" style="font-size: 1.4rem;"><b>Conducción premium</b><br><br>
                    Buick Envista cuenta con volante y asientos delanteros calefactables para mayor confort.
                </p>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                <img src="imgs-2025/gm-buick-mov-envista-caracteristicas-int-3.avif" class="img-fluid" alt="Confort con exclusividad">
                <p class="mt-2" style="font-size: 1.4rem;"><b>Confort con exclusividad</b><br><br>
                    Sus exclusivos asientos en vinipiel, brindan confort para cada viaje.
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
            Equipada con la tecnología ideal para mejorar tu experiencia en cada nivel.
        </p>
        <div class="row align-items-center mt-5">
            <div class="col-md-7">
                <img src="imgs-2025/gm-buick-mov-envista-caracteristicas-tec-v2.avif" class="img-fluid" style="width: 95%; margin-left: 5%;" alt="Imagen descripción">
            </div>
            <div class="col-md-5">
                <p class="mb-4">Cada espacio de Buick Envista fue creado para brindar conectividad y practicidad a tus viajes.</p>
                <div class="mb-3">
                    <hr class="border-top border-warning">
                    <p>Pantalla de control de información del conductor 8"</p>
                </div>
                <div class="mb-3">
                    <hr class="border-top border-warning">
                    <p>Pantalla de Infoentretenimiento de 11"</p>
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
        <img src="imgs-2025/gm-buick-mov-envista-caracteristicas-seg-mh-lg-25.avif" class="img-fluid w-100" style="height: auto; object-fit: cover; margin-bottom: 0vh;" alt="Chevrolet Aveo">
    </div>
    <div class="container mt-5 text-center">
        <div class="position-relative text-center">
            <div class="mt-5">
                <p style="font-size: 1.1rem; max-width: 1000px; margin: 0 auto; line-height: 1.6; margin-bottom: 3rem;">
                    Buick Envista cuenta con la tecnología necesaria para brindar completa seguridad a cada pasajero.<br><br>
                    Protección desde cada ángulo del vehículo, para que cada viaje sea una experiencia confortable.
                </p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
                <p>Asistencia por abandono de carril</p>
                <hr class="border-top border-warning">
            </div>
            <div class="col-md-6">
                <p>Cámara de visión trasera HD</p>
                <hr class="border-top border-warning">
            </div>
            <div class="col-md-6">
                <p>6 bolsas de aire</p>
                <hr class="border-top border-warning">
            </div>
            <div class="col-md-6">
                <p>Indicador de distancia</p>
                <hr class="border-top border-warning">
            </div>
            <div class="col-md-6">
                <p>Detección frontal de peatones</p>
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
                    La capacidad necesaria para emprender cualquier camino, gracias a su motor turbo de 3 cilindros de 1.2L<br>
                    con transmisión automática de 6 velocidades y sistema Stop/Start.
                </p>
            </div>
        </div>
    </div>
    <div class="position-relative">
        <img src="imgs-2025/gm-buick-mov-envista-caracteristicas-int-mh-lg.avif" class="img-fluid w-100" style="height: auto; object-fit: cover; margin-bottom: 1vh;" alt="Chevrolet Aveo">
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
                    <img src="imgs-2025/colores/sport-t/summit-white.avif" class="card-img-top" alt="Sport Touring">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">SPORT TOURING</h5>
                        <p class="card-text">Precio desde: $653,100</p>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Rines de aluminio en negro 18”</li>
                            <li>Manijas de puertas al color de la carrocería</li>
                            <li>Cajuela con apertura y cierre eléctrico</li>
                            <li>Faros IntelliBeam®</li>
                            <li>Cámara de visión trasera HD</li>
                            <li>Cluster de información de 8"</li>
                            <li>Pantalla de infoentretenimiento de 11"</li>
                            <li>Sistema de audio con 4 bocinas, 2 tweeters y módulo ANC</li>
                            <li>Wireless Phone Projection</li>
                            <li>Asistencia personalizada OnStar®</li>
                            <li>Sistema Stop/Start</li>
                            <li>Transmisión automática de 6 velocidades</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <img src="imgs-2025/colores/avenir/black-meet.avif" class="card-img-top" alt="Avenir">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">AVENIR</h5>
                        <p class="card-text">Precio desde: $678,600</p>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Rines de aluminio 18”</li>
                            <li>Piel en tonos Jet Black o Jet Black/Gideon</li>
                            <li>Volante calefactable</li>
                            <li>Espejo retrovisor electrocromico sensible a la luz</li>
                            <li>Compartimiento trasero en el descansabrazos</li>
                            <li>Asientos delanteros calefactables</li>
                            <li>Moldura de color de la carrocería</li>
                            <li>Alerta de cruce trasero</li>
                            <li>Alertas en los espejos laterales para los puntos ciegos</li>
                            <li>Control crucero adaptativo automático con Stop/Go</li>
                            <li>Cargador inalámbrico</li>
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
                    <img src="imgs-2025/gm-buick-mov-envista-ext-lg-1.avif" class="img-fluid w-100 h-100 object-fit-cover" alt="Imagen 1">
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="overflow-hidden" style="height: 400px;">
                    <img src="imgs-2025/gm-buick-mov-envista-caracteristicas-ext-1.avif" class="img-fluid w-100 h-100 object-fit-cover" alt="Imagen 2">
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="overflow-hidden" style="height: 400px;">
                    <img src="imgs-2025/gm-buick-mov-envista-ext-lg-3.avif" class="img-fluid w-100 h-100 object-fit-cover" alt="Imagen 3">
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
                        <img src="imgs-2025/colores/sport-t/cosmonaut.avif" class="card-img-top img-fluid" alt="Imagen 1">
                        <div class="card-body">
                            <a href="catalogos/2025/Catalogo-Envista-2025-v2.pdf" target="_blank" class="btn btn-custom">Descargar catálogo</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <img src="imgs-2025/colores/sport-t/jinx.avif" class="card-img-top img-fluid" alt="Imagen 2">
                        <div class="card-body">
                            <a href="catalogos/2025/2025-buick-envista-hoja-de-rescate.pdf" target="_blank" class="btn btn-custom">Descargar hojas de rescate</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <img src="imgs-2025/colores/sport-t/sharkskin.avif" class="card-img-top img-fluid" alt="Imagen 3">
                        <div class="card-body">
                            <a href="catalogos/2025/25-bui-envista-om-es-mx-u-mx-85602528A-2024JUN04.pdf" target="_blank" class="btn btn-custom">Descargar Manual de propietario</a>
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

