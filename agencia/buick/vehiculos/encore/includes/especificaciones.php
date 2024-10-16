<?php
include '../../../../../config.php';
include '../../../../../includes/header.php';
$navLinks = [
    'descripcion' => '../encore-2025.php',
    'galeria' => 'galeria.php',
    'especificaciones' => '#',
    'accesorios' => 'accesorios.php',
    'precios' => 'precio.php'
];

$navTitle = "ENCORE 2025";
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
        <img src="../imgs-2025/gm-buick-mov-encore-specs-mh-lg-v2.avif" class="img-fluid w-100" style="max-height: 90vh; object-fit: cover;" alt="Portada envista">
    </div>
    <div class="container mt-5">
        <h1 class="fw-normal" style="font-size: 4rem; color: #555555;">BUICK ENCORE</h1>
        <h2 class="fw-light" style="font-size: 2.5rem; margin-bottom: 0rem;">ESPECIFICACIONES</h2>
        <p class="text">
            Una SUV equipada con todo lo necesario para seguirte el ritmo.
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
                <button class="nav-link" id="seguridad-tab" data-bs-toggle="tab" data-bs-target="#seguridad" type="button" role="tab" aria-controls="seguridad" aria-selected="false">Seguridad</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tecnologia-tab" data-bs-toggle="tab" data-bs-target="#tecnologia" type="button" role="tab" aria-controls="tecnologia" aria-selected="false">Tecnología</button>
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
                            <td>Volante calefactable</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Memoria de asientos de conductor y espejos</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Rin de aluminio de 18”, diseño especial Avenir</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Rin de aluminio de 18”, diseño especial ST</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                        </tr>
                        <tr>
                            <td>Apertura de cajuela manos libres</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Espejos sensibles a la luz, calefactables, eléctricos con ajuste manual</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Parrilla con ventilas activas eléctricas para mejor aerodinámica</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Faros (IntelliBeam®) ayuda a tener una mejor visibilidad del camino, activando luces altas de faros automáticamente</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Barras en techo de aluminio, en color negro para ST y color aluminio para Avenir</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Bolsas de aire: 2 frontales para conductor y pasajero, 4 laterales (2 enfrente y 2 atrás) y 2 de cortina</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asistente de colisión frontal: automáticamente asiste con el sistema de frenado a velocidades por debajo de 80 Km/h aproximadamente</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Alerta de detección de peatón delantera: sensor que detecta si hay un peatón enfrente del vehículo</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Cámara de visión 360° HD</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sensores de reversa</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Alerta de colisión frontal</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Alerta de cruce trasero</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Pantalla de control de información del conductor 8”</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Cargador inalámbrico para Smartphone</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema de audio con 4 bocinas, 2 bocinas tipo tweeters, Bassbox y amplificador Bose®</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema activo de cancelación de sonido que reducen el ruido exterior para crear una cabina más silenciosa</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Wireless Phone Projection: permite conectar tu celular con Apple CarPlay™ o Android Auto™ sin necesidad de cables y de forma inalámbrica</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Hotspot Wi-Fi: servicios de asistencia personalizada, OnStar® Essentials + 12 meses de datos ilimitados</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Motor de 1.3L, turbo, 3 cilindros en linea, DOHC, VVT, ALUM, 155 HP @5,600 rpm, 173 lb-pie de torque @1,500 rpm. FWD, transmisión CVT</td>
                            <td><i class="fas fa-circle text-success"></i></td>
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
                            <td>Filtro de aire anticontaminante y para polvos finos</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Volante calefactable</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asiento piloto con ajuste eléctrico de 8 posiciones</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asiento del copiloto con ajuste manual de 4 posiciones</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                        </tr>
                        <tr>
                            <td>Asiento de copiloto de 8 posiciones</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asientos traseros abatibles 40/60</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asiento de conductor con ajuste lumbar de 2 posiciones</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asiento de pasajero con ajuste lumbar de 2 posiciones</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Memoria de asientos de conductor y espejos</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Espejo retrovisor electrocrómico sensible a la luz</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
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
                            <td>Llantas All season 225/55</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Rines de aluminio 18”, diseño especial Avenir</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Rines de aluminio 18”, diseño especial ST</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                        </tr>
                        <tr>
                            <td>Apertura de cajula manos libres</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Espejos sensibles a la luz, calefactables, eléctricos con ajuste manual</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Parrilla con ventilas activas eléctricas para mejorar aerodinámica</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Faros (IntelliBeam®) ayuda a tener una mejor visibilidad del camino, activando luces altas de faros automáticamente</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Faros con control automático de encendido y apagado</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Barras en techo de aluminio, en color negro para ST y color aluminio para Avenir</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Bolsas de aire: 2 frontales para conductor y pasajero, 4 laterales (2 enfrente y 2 atrás) y 2 de cortina</td>
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
                            <th>Seguridad</th>
                            <th>ST</th>
                            <th>Avenir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Control crucero automático electrónico</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Bolsas de aire: 2 frontales para conductor y pasajero, 4 laterales (2 enfrente y 2 atrás) y 2 de cortina</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Cámara de visión 360° HD</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Cámara de visión trasera HD con despliegue en la pantalla del radio de alta definición</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                        </tr>
                        <tr>
                            <td>Sensores de reversa: alarma acústica, incluye alerta que aparece en el clúster indicando la proximidad del obstáculo trasero</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Alerta de colisión frontal</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Indicador de distancia</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Alerta de cruce trasero</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asistente de colisión frontal</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Alerta de detección de peatón delantera</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="tecnologia" role="tabpanel" aria-labelledby="tecnologia-tab">
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Tecnología y Conectividad</th>
                            <th>ST</th>
                            <th>Avenir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pantalla de control de información del conductor 8”</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Acceso con llave inteligente (sin necesidad de hacerlo mediante la llave física), con encendido de motor remoto</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Cargador inalámbrico para Smartphone</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema de audio con 4 bocinas, 2 bocinas tipo tweeters, Bassbox y amplificador Bose®</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema activo de cancelación de sonido través de 4 micrófonos</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Receptor USB para carga y datos</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Wireless Phone Projection: permite conectar tu celular con Apple CarPlay™ o Android Auto™ sin necesidad de cables y de forma inalámbrica</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>OnStar®, inlcuye 12 meses de internet ilimtado y 12 meses de OnStar® Essentials</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Hotspot Wi-Fi: servicios de asistencia personalizada incluyendo un hotspot de Wi-Fi integrado al vehículo</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Toma de corriente: ubicado en la consola central toma corriente de 110 Volts</td>
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
                            <td>Sistema de diagnóstico del vehículo</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Motor de 1.3L, turbo, 3 cilindros en linea, DOHC, VVT, ALUM, 155 HP @5,600 rpm, 173 lb-pie de torque @1,500 rpm, transmisión CVT, FWD</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema Stop/Start y desahbilitador</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Combustible: gasolina con sistema de carga sin necesidad de retirar tapa interna (capeless fuel fill)</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Dirección eléctrica asistida</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Columna de dirección con ajuste de altura y profundidad</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Suspensión de alto desempeño, delantera McPherson y trasera independiente</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
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
                            <td>2596</td>
                            <td>2596</td>
                        </tr>
                        <tr>
                            <td>Largo</td>
                            <td>4349</td>
                            <td>4349</td>
                        </tr>
                        <tr>
                            <td>Ancho</td>
                            <td>1814</td>
                            <td>1814</td>
                        </tr>
                        <tr>
                            <td>Alto</td>
                            <td>1628</td>
                            <td>1628</td>
                        </tr>
                        <tr>
                            <td>Peso bruto vehicular</td>
                            <td>1,920 kg</td>
                            <td>1,920 kg</td>
                        </tr>
                        <tr>
                            <td><b>Interior</b></td>
                            <td><b>1ra fila de asientos</b></td>
                            <td><b>1ra fila de asientos</b></td>
                        </tr>
                        <tr>
                            <td>Espacio para cabeza</td>
                            <td>1008</td>
                            <td>1008</td>
                        </tr>
                        <tr>
                            <td>Espacio para hombros</td>
                            <td>1407</td>
                            <td>1407</td>
                        </tr>
                        <tr>
                            <td>Espacio para cadera</td>
                            <td>1318</td>
                            <td>1318</td>
                        </tr>
                        <tr>
                            <td>Espacio para piernas</td>
                            <td>1039</td>
                            <td>1039</td>
                        </tr>
                        <tr>
                            <td><b>Interior</b></td>
                            <td><b>2da fila de asientos</b></td>
                            <td><b>2da fila de asientos</b></td>
                        </tr>
                        <tr>
                            <td>Espacio para cabeza</td>
                            <td>968</td>
                            <td>968</td>
                        </tr>
                        <tr>
                            <td>Espacio para hombros</td>
                            <td>1361</td>
                            <td>1361</td>
                        </tr>
                        <tr>
                            <td>Espacio para cadera</td>
                            <td>1206</td>
                            <td>1206</td>
                        </tr>
                        <tr>
                            <td>Espacio para piernas</td>
                            <td>914</td>
                            <td>914</td>
                        </tr>
                        <tr>
                            <td>Capacidades</td>
                            <td>Kg</td>
                            <td>Kg</td>
                        </tr>
                        <tr>
                            <td>Numero de puertas</td>
                            <td>4</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>Numero de pasajeros</td>
                            <td>5</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td><b>Tanque de gasolina en LTS</b></td>
                            <td><b>50</b></td>
                            <td><b>50</b></td>
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
                            <td>18.3</td>
                            <td>18.3</td>
                        </tr>
                        <tr>
                            <td>Ciudad (km/L)</td>
                            <td>16.5</td>
                            <td>16.5</td>
                        </tr>
                        <tr>
                            <td>Carretera (km/L)</td>
                            <td>21.1</td>
                            <td>21.1</td>
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