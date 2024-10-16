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

$navTitle = "NUEVA ENVISION 2024";
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
        <img src="imgs-2024/envision/gm-buick-mov-envision-mh-lg-v2.avif" class="img-fluid w-100" style="height: auto; object-fit: cover;" alt="Portada envista">
    </div>
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fw-normal" style="font-size: 4rem; color: #555555;">NUEVA BUICK ENVISION</h1>
                </div>
            </div>
            <div class="row mt-3 text-start">
                <div class="col-md-3">
                    <p class="fw-bold mb-0" style="font-size: 1.5rem;">Desde:</p>
                    <p class="fs-4">$942,700</p>
                </div>
                <div class="col-md-3">
                    <p class="fw-bold mb-0" style="font-size: 1.5rem;">Cámaras de</p>
                    <p class="fs-6">visión 360°</p>
                </div>
                <div class="col-md-3">
                    <p class="fw-bold mb-0" style="font-size: 1.5rem;">OnStar 4G LTE</p>
                    <p class="fs-6">con Wi-Fi integrado</p>
                </div>
                <div class="col-md-3">
                    <p class="fw-bold mb-0" style="font-size: 1.5rem;">Motor 2.0L Turbo y</p>
                    <p class="fs-6">9 velocidades</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-center">
        <h2 class="fw-light" style="font-size: 3rem; margin-bottom: 3rem;">CARACTERÍSTICAS DESTACADAS</h2>
        <div class="row justify-content-center justify-content-md-between mt-4">
            <div class="col-12 col-md-3 mx-0 mb-4 mb-md-0 position-relative text-center">
                <p style="font-size: 1.1rem; margin-bottom: 2.5rem;">Pantalla de infoentretenimiento 30" con Google Integrado</p>
                <div style="width: 30px; height: 2px; background-color: #FF6600; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);"></div>
            </div>
            <div class="col-12 col-md-3 mx-0 mb-4 mb-md-0 position-relative text-center">
                <p style="font-size: 1.1rem; margin-bottom: 2.5rem;">Asistencia de manejo y seguridad avanzada</p>
                <div style="width: 30px; height: 2px; background-color: #FF6600; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);"></div>
            </div>
            <div class="col-12 col-md-3 mx-0 position-relative text-center">
                <p style="font-size: 1.1rem; margin-bottom: 2.5rem;">Diseño exterior sofisticado e interiores premium para máxima comodidad</p>
                <div style="width: 30px; height: 2px; background-color: #FF6600; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);"></div>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-center">
        <h2 class="fw-light" style="font-size: 3rem; margin-bottom: 3rem;">EXTERIOR</h2>
        <div class="position-relative text-center">
            <div class="mt-5">
                <p style="font-size: 1.1rem; max-width: 1000px; margin: 0 auto; line-height: 1.6; margin-bottom: 3rem;">
                    Inspirada en el futuro, refleja estilo y modernidad por donde la veas.
                </p>
            </div>
        </div>
    </div>
    <div class="position-relative">
        <img src="imgs-2024/envision/gm-buick-mov-envision-caracteristicas-ext-1.avif" class="img-fluid w-100" style="height: auto; object-fit: cover; margin-bottom: 10vh;" alt="Chevrolet Aveo">
    </div>
    <div class="container my-5">
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="imgs-2024/envision/gm-buick-mov-envision-caracteristicas-des-mh-lg.avif" class="img-fluid" alt="Imagen 1">
            </div>
            <div class="col-md-6">
                <p class="text-justify" style="font-size: 1.1rem;">
                <b> Mereces un diseño como este</b><br><br>
                La nueva Buick Envision con sus amplias dimensiones, te permite compartir con los que más quieres, con detalles excepcionales para cada uno de 
                ellos.
                </p>
            </div>
        </div>
        <div class="row align-items-center mb-5">
            <div class="col-md-6 order-md-2">
                <img src="imgs-2024/envision/gm-buick-mov-envision-caracteristicas-ext-3.avif" class="img-fluid" alt="Imagen 2">
            </div>
            <div class="col-md-6 order-md-1">
                <p class="text-justify" style="font-size: 1.1rem;">
                <b>Presencia deslumbrante</b><br><br>
                Parrilla con un diseño impresionante y ventilas activas eléctricas para mejorar aerodinámica.
                </p>
            </div>
        </div>
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="imgs-2024/envision/gm-buick-mov-envision-caracteristicas-ext-4.avif" class="img-fluid" alt="Imagen 3">
            </div>
            <div class="col-md-6">
                <p class="text-justify" style="font-size: 1.2rem;">
                <b>Detalles exclusivos</b><br><br>
                Rines de aluminio de 20 pulgadas con exclusivo diseño que combina a la perfección con el resto del exterior.
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
                    Dentro de la nueva Buick Envision estás en un mundo de espacio y confort que no sabías que necesitabas.
                </p>
            </div>
        </div>
    </div>
    <div class="position-relative">
        <img src="imgs-2024/envision/gm-buick-mov-envision-caracteristicas-mh-lg.avif" class="img-fluid w-100" style="height: auto; object-fit: cover; margin-bottom: 1vh;" alt="Chevrolet Aveo">
    </div>
    <div class="container-fluid mt-5">
        <div class="row text-center">
            <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                <img src="imgs-2024/envision/gm-buick-mov-envision-caracteristicas-int-1.avif" class="img-fluid" alt="Espacio superior">
                <p class="mt-2" style="font-size: 1.4rem;"><b>Tu lugar seguro</b><br><br>
                    La nueva Buick Envision cuenta con el espacio perfecto para compartir y disfrutar. 
                </p>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                <img src="imgs-2024/envision/gm-buick-mov-envision-caracteristicas-int-2.avif" class="img-fluid" alt="Conducción premium">
                <p class="mt-2" style="font-size: 1.4rem;"><b>Una experiencia premium, todos los días</b><br><br>
                    La nueva Buick Envision cuenta con cabina QuietTuning reduciendo el sonido exterior.
                </p>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                <img src="imgs-2024/envision/gm-buick-mov-envision-caracteristicas-int-3.avif" class="img-fluid" alt="Confort con exclusividad">
                <p class="mt-2" style="font-size: 1.4rem;"><b>Es tu momento de disfrutar el mayor confort</b><br><br>
                Sus exclusivos asientos hápticos de piel cuentan con calefacción en las primeras 2 filas y masaje en la parte delantera para hacer de cada 
                viaje, un momento de disfrute.
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
            Es tu momento de tener la mejor experiencia en tecnología.
        </p>
        <div class="row align-items-center mt-5">
            <div class="col-md-7">
                <img src="imgs-2024/envision/gm-buick-mov-envision-caracteristicas-tec-1.avif" class="img-fluid" style="width: 95%; margin-left: 5%;" alt="Imagen descripción">
            </div>
            <div class="col-md-5">
                <p class="mb-4">Cada espacio de la nueva Buick Envision está equipado con la mejor tecnología</p>
                <div class="mb-3">
                    <hr class="border-top border-warning">
                    <p>Pantalla de visualización frontal reflejado en el parabrisas de 15"</p>
                </div>
                <div class="mb-3">
                    <hr class="border-top border-warning">
                    <p>Pantalla de infoentretenimiento de 30” con Google integrado</p>
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
        <img src="imgs-2024/envision/gm-buick-mov-envision-caracteristicas-seg-mh-lg.avif" class="img-fluid w-100" style="height: auto; object-fit: cover; margin-bottom: 0vh;" alt="Chevrolet Aveo">
    </div>
    <div class="container mt-5 text-center">
        <div class="position-relative text-center">
            <div class="mt-5">
                <p style="font-size: 1.1rem; max-width: 1000px; margin: 0 auto; line-height: 1.6; margin-bottom: 3rem;">
                    Es tu momento de viajar protegido.<br><br>
                </p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
                <p>Asistencia por abandono de carril</p>
                <hr class="border-top border-warning">
            </div>
            <div class="col-md-6">
                <p>Cámara de visión 360°</p>
                <hr class="border-top border-warning">
            </div>
            <div class="col-md-6">
                <p>Alerta de colisión frontal</p>
                <hr class="border-top border-warning">
            </div>
            <div class="col-md-6">
                <p>Indicador de distancia</p>
                <hr class="border-top border-warning">
            </div>
            <div class="col-md-6">
                <p>Alerta de peatón/ciclista en puertas laterales</p>
                <hr class="border-top border-warning">
            </div>
            <div class="col-md-6">
                <p>Detección de peatones</p>
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
                Es tu momento de seguir adelante, a tu ritmo, con un motor turbo 2.0L con transmisión automática de 9 velocidades.
                </p>
            </div>
        </div>
    </div>
    <div class="position-relative">
        <img src="imgs-2024/envision/gm-buick-mov-envision-caracteristicas-ext-2.avif" class="img-fluid w-100" style="height: auto; object-fit: cover; margin-bottom: 1vh;" alt="envision-2024">
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
                    <img src="imgs-2024/colores/sport/jinx.avif" class="card-img-top" alt="Sport Touring">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">SPORT TOURING</h5>
                        <p class="card-text">Precio desde: $942,700</p>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Rines de aluminio 20”.</li>
                            <li>Asientos delanteros calefactables</li>
                            <li>Volante calefactable</li>
                            <li>Molduras interiores cuero/vinilo</li>
                            <li>Faros IntelliBeam®</li>
                            <li>Control crucero automático electrónico</li>
                            <li>Pantalla de infoentretenimiento de 30”</li>
                            <li>Quiet Tuning</li>
                            <li>Cargador inalámbrico</li>
                            <li>Asistencia personalizada OnStar®</li>
                            <li>Transmisión automática de 9 velocidades</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <img src="imgs-2024/colores/avenir/truffle.avif" class="card-img-top" alt="Avenir">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">AVENIR</h5>
                        <p class="card-text">Precio desde: $1,016,700</p>
                        <hr>
                        <ul class="list-unstyled">
                            <p>Elementos de Sport Touring y/o:</p>

                            <li>Piel en tonos Jet Black o Phantom Blue/Sheer Gray</li>
                            <li>Asiento del conductor de 8 posiciones eléctrico</li>
                            <li>Espejo retrovisor electrocrómico con proyector de una segunda cámara</li>
                            <li>Molduras interiores piel</li>
                            <li>Compartimiento trasero en el descansabrazos</li>
                            <li>Asientos delanteros y traseros calefactables</li>
                            <li>Asientos ventilados, fila delantera y trasera</li>
                            <li>Audio amplificador envolvente</li>
                            <li>Amortiguación variable en tiempo real</li>
                            <li>Control crucero adaptativo automático con Stop/Go</li>
                            <li>Cargador inalámbrico</li>
                            <li>Toma corriente de 110V</li>
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
                        <img src="imgs-2024/colores/avenir/sharkskin.avif" class="card-img-top img-fluid" alt="Imagen 1">
                        <div class="card-body">
                            <a href="catalogos/2024/2024-Envision-Catalogo.pdf" target="_blank" class="btn btn-custom">Descargar catálogo</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <img src="imgs-2024/colores/avenir/truffle.avif" class="card-img-top img-fluid" alt="Imagen 2">
                        <div class="card-body">
                            <a href="catalogos/2024/Buick_Envision__SUV_2024_5d_GD_MX_LRB-23101.pdf" target="_blank" class="btn btn-custom">Descargar hojas de rescate</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <img src="imgs-2024/colores/avenir/abalone.avif" class="card-img-top img-fluid" alt="Imagen 3">
                        <div class="card-body">
                            <a href="catalogos/2024/24_BUI_Envision_OM_es_MX_U_MX_85525485A_2024MAY21.pdf" target="_blank" class="btn btn-custom">Descargar Manual de propietario</a>
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

