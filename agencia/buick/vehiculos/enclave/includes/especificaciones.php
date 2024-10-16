<?php
include '../../../../../config.php';
include '../../../../../includes/header.php';
$navLinks = [
    'descripcion' => '../enclave-2024.php',
    'galeria' => 'galeria.php',
    'especificaciones' => '#',
    'accesorios' => 'accesorios.php',
    'precios' => 'precio.php'
];

$navTitle = "ENCLAVE 2024";
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
</head>
<body>
    <div class="position-relative">
        <img src="../imgs-2024/gm-buick-mov-envision-specs-mh-lg.avif" class="img-fluid w-100" style="max-height: 90vh; object-fit: cover;" alt="Portada envista">
    </div>
    <div class="container mt-5">
        <h1 class="fw-normal" style="font-size: 4rem; color: #555555;">BUICK ENCLAVE</h1>
        <h2 class="fw-light" style="font-size: 2.5rem; margin-bottom: 0rem;">ESPECIFICACIONES</h2>
        <p class="text">
            Descubre como cada detalle la vuelve tu SUV ideal.
        </p>
    </div>
    <div class="container mt-5">
        <ul class="nav nav-tabs" id="specTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="destacados-tab" data-bs-toggle="tab" data-bs-target="#destacados" type="button" role="tab" aria-controls="destacados" aria-selected="true">Destacados</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="interior-tab" data-bs-toggle="tab" data-bs-target="#interior" type="button" role="tab" aria-controls="interior" aria-selected="false">Interior</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="exterior-tab" data-bs-toggle="tab" data-bs-target="#exterior" type="button" role="tab" aria-controls="exterior" aria-selected="false">Exterior</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="seguridad-tab" data-bs-toggle="tab" data-bs-target="#seguridad" type="button" role="tab" aria-controls="seguridad" aria-selected="false">Seguridad y Tecnología</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="desempeño-tab" data-bs-toggle="tab" data-bs-target="#desempeño" type="button" role="tab" aria-controls="desempeño" aria-selected="false">Desempeño</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="dimensiones-tab" data-bs-toggle="tab" data-bs-target="#dimensiones" type="button" role="tab" aria-controls="dimensiones" aria-selected="false">Dimensiones</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="rendimiento-tab" data-bs-toggle="tab" data-bs-target="#rendimiento" type="button" role="tab" aria-controls="rendimiento" aria-selected="false">Rendimiento</button>
            </li>
        </ul>
        <div class="tab-content" id="specTabsContent">
            <div class="tab-pane fade show active" id="destacados" role="tabpanel" aria-labelledby="destacados-tab">
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Destacados</th>
                            <th>ST</th>
                            <th>Avenir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>3.6 L, 6 CYL, V6, SIDI, DOHC, ATSS, GEN 1+. Potencia: 310 HP @6,800 rpm y Torque: 259 lb-pie @2,800 rpm</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Aire acondicionado de 3 zonas </td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Alerta de colisión frontal con asistente de frenado a bajas velocidades (menor a 80 k/h)</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Cargador inalámbrico para ciertos dispositivos</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>OnStar® 4G LTE (Wi-Fi) Servicios de asistencia personalizada incluyendo un hotspot de Wi-Fi integrado al vehículo para hasta 
                                7 dispositivos, Amazon Alexa®</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Wireless Phone Projection, proyecta en la pantalla del vehículo ciertas aplicaciones de un smartphone a través de Apple CarPlay™ 
                                o Android Auto™ facilitando la navegación</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Quiettuning</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Full Mirror Display</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema de sonido con 10 bocinas Bose® con amplificador y subwoofer </td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Transmisión AWD</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="interior" role="tabpanel" aria-labelledby="interior-tab">
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Interior</th>
                            <th>ST</th>
                            <th>Avenir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Aire acondicionado automático de tres zonas: delantero con control electrónico de doble zona y trasero con control independiente</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Apertura de cajuela manos libres con proyección del emblema Buick</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asientos de piel con configuración para 7 pasajeros (2-2-3)</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asientos para conductor y pasajero con soporte eléctrico lumbar de 2 vías</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                        </tr>
                        <tr>
                            <td>Asientos para conductor y pasajero con soporte eléctrico lumbar de 4 vías</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asientos frontales calefactables</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asientos traseros calefactables</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Volante calefactable</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Buick Infoentretenimiento con Pantalla táctil de 8''. Incluye conectividad Bluetooth®, Wi-Fi, reconocimiento de voz y mapas 
                                de navegación</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Cargador inalámbrico para ciertos dispositivos </td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>En primera fila incluye una entrada para auxiliar y entrada dual para USB. Incluye entradas USB en la segunda y tercera fila</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Encendido remoto de motor </td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Iluminación interior LED</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>OnStar® 4G LTE (Wi-Fi) Servicios de asistencia personalizada incluyendo un hotspot de Wi-Fi integrado al vehículo para hasta 7 
                                dispositivos</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Palanca de velocidades electrónica</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Panel de instrumentos de 4.2'' reconfigurable a color </td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                        </tr>
                        <tr>
                            <td>Panel de instrumentos de 8'' reconfigurable a color</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Wireless Phone Projection, proyecta en la pantalla del vehículo ciertas aplicaciones de un Smartphone a través de Apple 
                                CarPlay™ o Android Auto™ facilitando la navegación y sin necesidad de cables</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Quiettuning</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Full Mirror Display</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sensor de presión de llantas </td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema de sonido con 10 bocinas BOSE® con amplificador y subwoofer </td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema OnStar®: Respuesta automática de accidente, servicios de emergencia, asistencia de vehículos robados, 
                                navegación paso a paso, diagnósticos, servicios remotos y aplicación móvil</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Toma de corriente de 110 volts localizado en la parte trasera de la consola central </td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Volante forrado en piel con ajuste telescópico manual</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                        </tr>
                        <tr>
                            <td>Volante forrado en piel con ajuste telescópico electrónico</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="exterior" role="tabpanel" aria-labelledby="exterior-tab">
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Exterior</th>
                            <th>ST</th>
                            <th>Avenir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Espejos laterales al color de la carrocería con ajuste manual</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Espejos laterales eléctricos a color de la carrocería, calefactables, sensibles a la luz con indicador de distancia incluido</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Faros frontales LED con encendido y apagado automático</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Faros traseros con luz LED</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Faros delanteros con IntelliBeam® autocontrol que ayuda a regular las luces altas en situaciones de poca luminosidad</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Luces de día con luz LED</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Manijas a color de la carrocería con filo de cromo</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Provisiones de arrastre con capacidad hasta para 5,000 lb o 2,200 kg</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Quemacocos doble, delantero convencional de control eléctrico deslizable de 2 posiciones y trasero de cristal fijo</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Rieles de techo</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Rines de aluminio 18”</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                        </tr>
                        <tr>
                            <td>Rines de aluminio 20”</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="seguridad" role="tabpanel" aria-labelledby="seguridad-tab">
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Seguridad y Tecnología</th>
                            <th>ST</th>
                            <th>Avenir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>7 bolsas de aire: 2 frontales, 2 laterales, 1 frontal torácica y 2 de techo para las 3 filas de asientos</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Alerta de colisión frontal con asistente de frenado a bajas velocidades (menor a 80 k/h)</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Alerta de tráfico cruzado trasero</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asistente de detección de peatones trasera</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asistente de mantenimiento de carril</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Control crucero</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Freno de mano electrónico</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Frenos ABS</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Llanta de refacción de 18”</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Modo de manejo adolescente</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema OnStar®: Respuesta automática de accidente, servicios de emergencia, asistencia de vehículos robados, navegación paso 
                                a paso, diagnósticos, servicios remotos y aplicación móvil. Amazon Alexa®</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asistente semiautomático de estacionado frontal y trasero</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sensor indicador de distancia</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sensores de punto ciego</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Cámara de reversa 360°</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="desempeño" role="tabpanel" aria-labelledby="desempeño-tab">
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Desempeño</th>
                            <th>ST</th>
                            <th>Avenir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>3.6 L, 6 CYL, V6, SIDI, DOHC, ATSS, GEN 1+. Potencia: 310 HP @6,800 rpm y Torque: 259 lb-pie @2,800 rpm</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema de manejo Flex-Ride con función stability control y remolque</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema Stop/Start de motor</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Suspensión McPherson Strut delantera y trasera independiente</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Transmisión automática de 9 velocidades</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Transmisión AWD</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Transmisión FWD</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="dimensiones" role="tabpanel" aria-labelledby="dimensiones-tab">
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Dimensiones y Capacidades</th>
                            <th>ST</th>
                            <th>Avenir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>Exterior</b></td>
                            <td><b>mm</b></td>
                            <td><b>mm</b></td>
                        </tr>
                        <tr>
                            <td>Distancia entre ejes</td>
                            <td>3072</td>
                            <td>3072</td>
                        </tr>
                        <tr>
                            <td>Largo</td>
                            <td>5201</td>
                            <td>5201</td>
                        </tr>
                        <tr>
                            <td>Ancho</td>
                            <td>1999</td>
                            <td>1999</td>
                        </tr>
                        <tr>
                            <td>Alto</td>
                            <td>1775</td>
                            <td>1775</td>
                        </tr>
                        <tr>
                            <td><b>Interior</b></td>
                            <td><b>1ª fila de asientos</b></td>
                            <td><b>1ª fila de asientos</b></td>
                        </tr>
                        <tr>
                            <td>Espacio para cabeza</td>
                            <td>1047</td>
                            <td>1047</td>
                        </tr>
                        <tr>
                            <td>Espacio para hombros</td>
                            <td>1581</td>
                            <td>1581</td>
                        </tr>
                        <tr>
                            <td>Espacio para cadera</td>
                            <td>1500</td>
                            <td>1500</td>
                        </tr>
                        <tr>
                            <td>Espacio para piernas</td>
                            <td>1046</td>
                            <td>1046</td>
                        </tr>
                        <tr>
                            <td><b>Interior</b></td>
                            <td><b>2ª fila de asientos</b></td>
                            <td><b>2ª fila de asientos</b></td>
                        </tr>
                        <tr>
                            <td>Espacio para cabeza</td>
                            <td>1013</td>
                            <td>1013</td>
                        </tr>
                        <tr>
                            <td>Espacio para cadera</td>
                            <td>1465</td>
                            <td>1465</td>
                        </tr>
                        <tr>
                            <td>Espacio para piernas</td>
                            <td>973</td>
                            <td>973</td>
                        </tr>
                        <tr>
                            <td><b>Interior</b></td>
                            <td><b>3ª fila de asientos</b></td>
                            <td><b>3ª fila de asientos</b></td>
                        </tr>
                        <tr>
                            <td>Espacio para cabeza</td>
                            <td>956</td>
                            <td>956</td>
                        </tr>
                        <tr>
                            <td>Espacio para cadera</td>
                            <td>1233</td>
                            <td>1233</td>
                        </tr>
                        <tr>
                            <td>Espacio para piernas</td>
                            <td>851</td>
                            <td>851</td>
                        </tr>
                        <tr>
                            <td><b>Capacidades</b></td>
                            <td><b>L</b></td>
                            <td><b>L</b></td>
                        </tr>
                        <tr>
                            <td>Tanque de gasolina FWD</td>
                            <td>72</td>
                            <td>72</td>
                        </tr>
                        <tr>
                            <td>Tanque de gasolina AWD</td>
                            <td>83</td>
                            <td>83</td>
                        </tr>
                        <tr>
                            <td><b>Cajuela</b></td>
                            <td><b>L</b></td>
                            <td><b>L</b></td>
                        </tr>
                        <tr>
                            <td>Espacio en cajuela con asientos en su lugar ( detrás de la 3era fila de asientos)</td>
                            <td>668,4</td>
                            <td>668,4</td>
                        </tr>
                        <tr>
                            <td>Espacio de la cajuela con la 3era fila de asientos abatidos</td>
                            <td>1634</td>
                            <td>1634</td>
                        </tr>
                        <tr>
                            <td>Espacio en la cajuela con la 2da y 3era fila de asientos batidos</td>
                            <td>2758,4</td>
                            <td>2758,4</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="rendimiento" role="tabpanel" aria-labelledby="rendimiento-tab">
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Rendimiento del combustible</th>
                            <th>ST</th>
                            <th>Avenir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Combinado (km/L)</td>
                            <td>11.7</td>
                            <td>11.7</td>
                        </tr>
                        <tr>
                            <td>Ciudad (km/L)</td>
                            <td>9.6</td>
                            <td>9.6</td>
                        </tr>
                        <tr>
                            <td>Carretera (km/L)</td>
                            <td>16.2</td>
                            <td>16.2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="mt-5 text-container" style="margin: 30px;">
        <p class="text-justify">
            La información sobre rendimiento de combustible combinado, se refiere al valor que se obtuvo en condiciones controladas de laboratorio, de acuerdo a la metodología de 
            la <b>NOM-163-SEMARNAT-ENER-SCFI-2013</b>; que pueden no ser reproducibles ni obtenerse en condiciones y hábitos de manejo convencional, debido a condiciones 
            climatológicas, combustible, condiciones topográficas, peso de carga y otros factores.
        </p>
    </div>
    <?php include "../../../footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../nav/nav.js"></script>
</body>
</html>