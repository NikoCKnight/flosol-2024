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

$navTitle = "ENCLAVE 2024";
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
        <img src="imgs-2024/enclave/2024-buick-enclave-mov-mh-lg.avif" class="img-fluid w-100" style="height: auto; object-fit: cover;" alt="Portada envista">
    </div>
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fw-normal" style="font-size: 4rem; color: #555555;">BUICK ENCLAVE</h1>
                </div>
            </div>
            <div class="row mt-3 text-start">
                <div class="col-md-3">
                    <p class="fw-bold mb-0" style="font-size: 1.5rem;">Desde:</p>
                    <p class="fs-4">$1,255,900</p>
                </div>
                <div class="col-md-3">
                    <p class="fw-bold mb-0" style="font-size: 1.5rem;">Capacidad para</p>
                    <p class="fs-6">7 Pasajeros</p>
                </div>
                <div class="col-md-3">
                    <p class="fw-bold mb-0" style="font-size: 1.5rem;">OnStar 4G LTE</p>
                    <p class="fs-6">con Wi-Fi integrado</p>
                </div>
                <div class="col-md-3">
                    <p class="fw-bold mb-0" style="font-size: 1.5rem;">Full Mirror</p>
                    <p class="fs-6">Display</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-center">
        <h2 class="fw-light" style="font-size: 3rem; margin-bottom: 3rem;">CARACTERÍSTICAS DESTACADAS</h2>
        <div class="row justify-content-center justify-content-md-between mt-4">
            <div class="col-12 col-md-3 mx-0 mb-4 mb-md-0 position-relative text-center">
                <p style="font-size: 1.1rem; margin-bottom: 2.5rem;">La elegancia destaca en esta SUV gracias a su diseño moderno y versátil, reinventándose a través de los pequeños detalles que la componen.</p>
                <div style="width: 30px; height: 2px; background-color: #FF6600; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);"></div>
            </div>
            <div class="col-12 col-md-3 mx-0 mb-4 mb-md-0 position-relative text-center">
                <p style="font-size: 1.1rem; margin-bottom: 2.5rem;">La integración de OnStar®, un hotspot de Wi-Fi para hasta 7 dispositivos, Amazon Alexa Integration y Wireless Phone Projection, otorgan a cada pasajero tecnología y conectividad constante.</p>
                <div style="width: 30px; height: 2px; background-color: #FF6600; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);"></div>
            </div>
            <div class="col-12 col-md-3 mx-0 position-relative text-center">
                <p style="font-size: 1.1rem; margin-bottom: 2.5rem;">Con capacidad para 7 pasajeros, el confort resalta a través de sus asientos calefactables, soporte eléctrico de lumbar y un diseño pensado para brindar experiencias de primer nivel.</p>
                <div style="width: 30px; height: 2px; background-color: #FF6600; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);"></div>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-center">
        <h2 class="fw-light" style="font-size: 3rem; margin-bottom: 3rem;">EXTERIOR</h2>
        <div class="position-relative text-center">
            <div class="mt-5">
                <p style="font-size: 1.1rem; max-width: 1000px; margin: 0 auto; line-height: 1.6; margin-bottom: 3rem;">
                Un diseño elegante y sofisticado que refleja el mundo premium de Buick. Sus dimensiones perfectamente pensadas para viajar en compañía la 
                hacen destacar en cualquier lugar.
                </p>
            </div>
        </div>
    </div>
    <div class="position-relative">
        <img src="imgs-2024/enclave/2024-buick-enclave-pay-mh-lg.avif" class="img-fluid w-100" style="height: auto; object-fit: cover; margin-bottom: 10vh;" alt="Chevrolet Aveo">
    </div>
    <div class="container my-5">
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="imgs-2024/enclave/2024-buick-enclave-feat-ext-01.avif" class="img-fluid" alt="Imagen 1">
            </div>
            <div class="col-md-6">
                <p class="text-justify" style="font-size: 1.1rem;">
                <b>DISEÑO DE PARRILLA</b><br><br>
                Parrilla con ventilas activas rediseñadas que mejoran la aerodinámica y el rendimiento del combustible.
                </p>
            </div>
        </div>
        <div class="row align-items-center mb-5">
            <div class="col-md-6 order-md-2">
                <img src="imgs-2024/enclave/2024-buick-enclave-feat-ext-02.avif" class="img-fluid" alt="Imagen 2">
            </div>
            <div class="col-md-6 order-md-1">
                <p class="text-justify" style="font-size: 1.1rem;">
                <b>FAROS DELANTEROS CON INTELLIBEAM®</b><br><br>
                Sus sofisticados faros delanteros se adaptan automáticamente a las condiciones de tráfico e iluminación.
                </p>
            </div>
        </div>
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="imgs-2024/enclave/2024-buick-enclave-feat-ext-03.avif" class="img-fluid" alt="Imagen 3">
            </div>
            <div class="col-md-6">
                <p class="text-justify" style="font-size: 1.2rem;">
                <b>RINES DE 20”</b><br><br>
                Cada detalle está pensado para lucir bien. Sus destacables rines de 20” en color plateado no son la excepción.
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
                    Un amplio espacio interior pensado para permitirle a cada pasajero disfrutar al máximo de viajes en compañía.
                </p>
            </div>
        </div>
    </div>
    <div class="position-relative">
        <img src="imgs-2024/enclave/2024-buick-enclave-ft-interior-mh-lg.avif" class="img-fluid w-100" style="height: auto; object-fit: cover; margin-bottom: 1vh;" alt="Chevrolet Aveo">
    </div>
    <div class="container-fluid mt-5">
        <div class="row text-center">
            <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                <img src="imgs-2024/enclave/2024-buick-enclave-feat-int-01.avif" class="img-fluid" alt="Espacio superior">
                <p class="mt-2" style="font-size: 1.4rem;"><b>ASIENTOS EN PIEL</b><br><br>
                Asientos forrados en piel, con configuración para 7 pasajeros. Cuentan 
                con soporte eléctrico lumbar y son calefactables en ambas versiones.
                </p>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                <img src="imgs-2024/enclave/2024-buick-enclave-feat-int-02.avif" class="img-fluid" alt="Conducción premium">
                <p class="mt-2" style="font-size: 1.4rem;"><b>PANTALLA TÁCTIL DE INFOENTRETENIMIENTO</b><br><br>
                Su pantalla de 8” te permitirá disfrutar de conectividad Bluetooth®, Wi-Fi, reconocimiento de voz y mapas de navegación.
                </p>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                <img src="imgs-2024/enclave/2024-buick-enclave-feat-int-03.avif" class="img-fluid" alt="Confort con exclusividad">
                <p class="mt-2" style="font-size: 1.4rem;"><b>AIRE ACONDICIONADO DE 3 ZONAS</b><br><br>
                Sistema automático con controles electrónicos de doble zona en el área frontal y con control independiente para la zona trasera de la SUV.
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
            Buick Enclave 2024 está equipada con la tecnología necesaria para mantenerte conectado en todo trayecto.
        </p>
        <div class="row align-items-center mt-5">
            <div class="col-md-7">
                <img src="imgs-2024/enclave/2024-buick-enclave-ft-connec-1.avif" class="img-fluid" style="width: 95%; margin-left: 5%;" alt="Imagen descripción">
            </div>
            <div class="col-md-5">
                <p class="mb-4">Vuelve tu viaje más seguro, entretenido y práctico vinculando diferentes dispositivos para disfrutar cada una de sus funciones.</p>
                <div class="mb-3">
                    <hr class="border-top border-warning">
                    <p>Alexa® te acompaña a bordo de Buick Enclave</p>
                </div>
                <div class="mb-3">
                    <hr class="border-top border-warning">
                    <p>Wireless phone projection</p>
                </div>
                <div class="mb-3">
                    <hr class="border-top border-warning">
                    <p>ONSTAR® 4G LTE con conectividad WI-FI</p>
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
        <img src="imgs-2024/enclave/2024-buick-enclave-price-mh-lg.avif" class="img-fluid w-100" style="height: auto; object-fit: cover; margin-bottom: 0vh;" alt="Chevrolet Aveo">
    </div>
    <div class="container mt-5 text-center">
        <div class="position-relative text-center">
            <div class="mt-5">
                <p style="font-size: 1.1rem; max-width: 1000px; margin: 0 auto; line-height: 1.6; margin-bottom: 3rem;">
                    Para viajar sin preocupaciones es necesario viajar seguro. Buick Enclave está equipada con una amplia variedad de funciones para tu seguridad.<br><br>
                </p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
                <p>Full mirror display</p>
                <hr class="border-top border-warning">
            </div>
            <div class="col-md-6">
                <p>Head-Up Display</p>
                <hr class="border-top border-warning">
            </div>
            <div class="col-md-6">
                <p>Cámara 360º HD</p>
                <hr class="border-top border-warning">
            </div>
            <div class="col-md-6">
                <p>Asistente de frenado de emergencia</p>
                <hr class="border-top border-warning">
            </div>
            <div class="col-md-6">
                <p>Alerta de detección de peatones delantera y trasera</p>
                <hr class="border-top border-warning">
            </div>
            <div class="col-md-6">
                <p>Alerta de punto ciego</p>
                <hr class="border-top border-warning">
            </div>
        </div>
    </div>
    <div class="container mt-5 text-center">
        <h2 class="fw-light" style="font-size: 3rem; margin-bottom: 0rem;">DESEMPEÑO</h2>
        <div class="position-relative text-center">
            <div class="mt-5">
                <p style="font-size: 1.1rem; max-width: 1000px; margin: 0 auto; line-height: 1.6; margin-bottom: 3rem;">
                    Un nivel de desempeño premium que sobrepasará tus expectativas.
                </p>
            </div>
        </div>
    </div>
    <div class="position-relative">
        <img src="imgs-2024/enclave/2024-buick-enclave-ft-performance-mh-lg.avif" class="img-fluid w-100" style="height: auto; object-fit: cover; margin-bottom: 1vh;" alt="envision-2024">
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
                    <img src="imgs-2024/2024-buick-enclave-trims-essence.avif" class="card-img-top" alt="Sport Touring">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">ESSENCE</h5>
                        <p class="card-text">Precio desde: $1,255,900</p>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Motor 3.6L con 310 HP</li>
                            <li>Amazon Alexa Integration</li>
                            <li>Full Mirror Display</li>
                            <li>Cámara 360º</li>
                            <li>Quiettuning</li>
                            <li>Asientos frontales y volante calefactable</li>
                            <li>Alerta de cruce trasero</li>
                            <li>Asistencia de mantenimiento de carril</li>
                            <li>Asistente de detección de peatones</li>
                            <li>Asistente semiautomático de estacionado frontal y trasero</li>
                            <li>Alerta de colisión frontal con asistente de frenado a bajas velocidades</li>
                            <li>Rines de aluminio de 18”</li>
                            <li>Wireless Phone Projection</li>
                            <li>10 bocinas Bose® con amplificador y subwoofer</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <img src="imgs-2024/2024-buick-enclave-trims-avenir.avif" class="card-img-top" alt="Avenir">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">AVENIR</h5>
                        <p class="card-text">Precio desde: $1,377,400</p>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Motor 3.6L con 310 HP</li>
                            <li>Amazon Alexa Integration</li>
                            <li>Full Mirror Display</li>
                            <li>Cámara 360º</li>
                            <li>Quiettuning</li>
                            <li>Volante calefactable</li>
                            <li>Alerta de cruce trasero</li>
                            <li>Asistencia de mantenimiento de carril</li>
                            <li>Asistente de detección de peatones</li>
                            <li>Asistente semiautomático de estacionado frontal y trasero</li>
                            <li>Alerta de colisión frontal con asistente de frenado a bajas velocidades</li>
                            <li>Wireless Phone Projection</li>
                            <li>10 bocinas Bose® con amplificador y subwoofer</li>
                            <li>Rines de aluminio de 20”</li>
                            <li>Volante forrado en piel con ajuste telescópico electrónico</li>
                            <li>Asientos para conductor y pasajero con soporte eléctrico lumbar de 4 vías</li>
                            <li>Asientos frontales y traseros calefactables</li>
                            <li>Panel de instrumentos de 8” reconfigurable a color</li>
                            <li>Espejos laterales al color de la carrocería</li>
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
                    <img src="imgs-2024/galeria/galeria-1.avif" class="img-fluid w-100 h-100 object-fit-cover" alt="Imagen 1">
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="overflow-hidden" style="height: 400px;">
                    <img src="imgs-2024/galeria/galeria-2.avif" class="img-fluid w-100 h-100 object-fit-cover" alt="Imagen 2">
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="overflow-hidden" style="height: 400px;">
                    <img src="imgs-2024/galeria/galeria-3.avif" class="img-fluid w-100 h-100 object-fit-cover" alt="Imagen 3">
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
                        <img src="imgs-2024/colores/rowan.avif" class="card-img-top img-fluid" alt="Imagen 1">
                        <div class="card-body">
                            <a href="catalogo/2024/catalogo-desktop-enclave-2024070823.pdf" target="_blank" class="btn btn-custom">Descargar catálogo</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <img src="imgs-2024/colores/red-tint.avif" class="card-img-top img-fluid" alt="Imagen 2">
                        <div class="card-body">
                            <a href="catalogo/2024/rescue.pdf" target="_blank" class="btn btn-custom">Descargar hojas de rescate</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <img src="imgs-2024/colores/twilight.avif" class="card-img-top img-fluid" alt="Imagen 3">
                        <div class="card-body">
                            <a href="catalogo/2024/24-bui-enclave-om-es-mx-u-mx-85158971a-2023may16.pdf" target="_blank" class="btn btn-custom">Descargar Manual de propietario</a>
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