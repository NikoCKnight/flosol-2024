<?php
include '../../../../../config.php';
include '../../../../../includes/header.php';
$navLinks = [
    'descripcion' => '../envista-2025.php',
    'galeria' => 'galeria.php',
    'especificaciones' => '#',
    'accesorios' => 'accesorios.php',
    'precios' => 'precio.php'
];

$navTitle = "ENVISTA 2025";
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
        <img src="../imgs-2025/gm-buick-mov-envista-specs-mh-lg.avif" class="img-fluid w-100" style="max-height: 90vh; object-fit: cover;" alt="Portada envista">
    </div>
    <div class="container mt-5">
        <h1 class="fw-normal" style="font-size: 4rem; color: #555555;">BUICK ENVISTA</h1>
        <h2 class="fw-light" style="font-size: 2.5rem; margin-bottom: 0rem;">ESPECIFICACIONES</h2>
        <p class="text">
            Equipada con todo lo necesario para cualquier trayecto. Descubre por qué la nueva Buick Envista es el crossover que te queda.
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
                            <td>Motor turbo 3 Cilindros, 1.2L, DI, L3, DOHC, VVT,TURBO, ALUM, CSS PRIME, transmisión automática de 6 velocidades, FWD</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Quemacocos</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema activo de cancelación de sonido a través de 4 micrófonos interiores que emiten unas ondas por medio del sistema de sonido, las cuales reducen el ruido exterior para crear una cabina más silenciosa</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Rin de aluminio de 18”</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Cajuela con apertura y cierre eléctrico</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Faros (IntelliBeam®) ayuda a tener una mejor visibilidad del camino, activando luces altas de faros automáticamente</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>6 bolsas de aire, dos frontales, dos laterales y dos tipo cortina</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Indicador de distancia</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Alerta de colisión frontal</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sensores de reversa</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Alerta de detección de peatón delantera</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asistencia por abandono de carril</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Pantalla de infoentretenimiento de 11”, OnStar®, Bluetooth®, Apple CarPlay™, Android Auto™, hotspot Wi-Fi 4G LTE, AM/FM y clúster de información de 8”</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Wireless Phone Projection: permite conectar tu celular con Apple CarPlay™ o Android Auto™ sin necesidad de cables y de forma inalámbrica</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>OnStar®: servicios de asistencia personalizada incluyendo un hotspot de Wi-Fi integrado al vehículo para hasta 7 dispositivos, inlcuye 12 meses de OnStar®, Essentials y 12 meses de internet ilimitado</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Frenos con control electrónico de estabilidad ''StabiliTrak''</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Suspensión delantera McPherson y trasera independiente de brazos</td>
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
                            <td>Aire acondicionado frontal automático por temperatura con controles electrónicos</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Humedad y temperatura para el parabrisas</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Desempañador eléctrico en el medallón trasero</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Ventila para calefacción de la segunda fila de asientos</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Provisiones de seguridad ISOFIX para niños</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Volante sintético</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Volante calefactable</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Refuerzo para rodillas</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Consola central con descasabrazos</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asientos de cubo para conductor y pasajero</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asiento de piloto con ajuste eléctrico de 8 posiciones</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asiento del copiloto con ajuste manual de 4 posiciones</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Cabeceras de asientos traseras y delanteras con movimiento en 2 direcciones</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asientos delanteros calefactables</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Bolsillo ubicado detrás de asiento de conductor</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Bolsillo ubicado detrás de asiento del pasajero</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asientos traseros abatibles 40/60</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Compartimiento trasero en el descansabrazos</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asiento con ajuste lumbar de 2 posiciones</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Interior de vinipiel Jet/Black</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                        </tr>
                        <tr>
                            <td>Piel Jet Black</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Piel Jet Black /Gideon</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Molduras interiores Jet Black</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Molduras interiores Jet Black/Gideon</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Viseras con espejos de vanidad para el pasajero cuenta con iluminación</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asidera para copiloto</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asidera para copiloto trasera</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Tapa divisora para la cajuela</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Tapetes delanteros y traseros alfombrados</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Luces de cortesía interiores en compartimiento trasero</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Luces de cortesía interiores superiores</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Luces de cortesía en domo central</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Controles eléctricos en ventanas traseras con función express de un solo toque (abajo)</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Controles eléctricos en ventanas de copiloto con función express de un solo toque (abajo)</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Seguros de puertas eléctricos con control en puerta del conductor</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Espejo retrovisor ajustable con movimiento para día/noche</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                        </tr>
                        <tr>
                            <td>Espejo retrovisor electrocrómico sensible a la luz</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Quemacocos con cubierta</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Control de intensidad de luz interior</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema activo de cancelación de sonido a través de 4 micrófonos interiores que emiten unas ondas por medio del sistema de sonido, las cuales reducen el ruido exterior para crear una cabina más silenciosa</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Controles de audio y teléfono al volante</td>
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
                            <td>Sistema de carga sin tapa (Capless Fuel Fill)</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema de combustible electrónico</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Refacción T125/70R16 SL 96 M BW SPR</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Llantas tipo 225/55R18</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Rin de refacción de acero 16 X 4.0</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Rin de aluminio 18 X 7.5</td>
                            <td></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Rin de aluminio en negro 18 X 7.5</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Disco de frenos FNC</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Frenos ABS - frenos traseros de disco</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>2 ganchos de arrastre delanteros</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Manijas de puertas al color de la carrocería</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Cajuela con apertura y cierre eléctrico</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Espejo exterior izquierdo y derecho eléctrico con direccionales con calefacción</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Espejos exteriores al color de la carrocería</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Protección de espejos negro</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                        </tr>
                        <tr>
                            <td>Cristales con tintado profundo, excepto en parabrisas y ventanas delanteras</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Parabrisas con acústico laminado</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Parabrisas tintado</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Defensas al color de la carrocería</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Porta placas delantero</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Placa protectora para fascia color plateada</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Película protectora de pintura</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Placa iluminada en apertura de puerta</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Moldura de ventana lateral de cromo</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Moldura superior negra</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                        </tr>
                        <tr>
                            <td>Moldura negra</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                        </tr>
                        <tr>
                            <td>Moldura de color de la carrocería</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Alineación de faros superior</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Faros (IntelliBeam®) ayuda a tener una mejor visibilidad del camino, activando luces altas de faros automáticamente</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Faros traseros y delanteros LED</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Luces diurnas LED</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Luz direccional delantera</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Faros con control automático de encendido y apagado</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Tercera luz de freno</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Limpiaparabrisas</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                        </tr>
                        <tr>
                            <td>Antena de radio tipo tiburón en techo</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Encendido de motor remoto en la aplicación del teléfono</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Limpiaparabrisas automáticos y sensibles a la humedad (empañamiento, lluvia)</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
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
                            <td><i class="fas fa-circle text-warning"></i></td>
                        </tr>
                        <tr>
                            <td>Control crucero adaptativo automático con Stop/Go</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Frenado de estacionamiento-potencia operada, ubicado en forma de botón</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sensor que indica que el asiento del copiloto está ocupado</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Cinturones delanteros para conductor y pasajero con pretensores, sistema retractor y limitadores de carga ajustables de altura</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Cinturones frontales de 3 puntos con retractor para pasajero y conductor</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>6 bolsas de aire, dos frontales, dos laterales, dos tipo cortina</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Detección frontal de peatones</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Alerta de uso del cinturón de seguridad para conductor derecha</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Alerta de uso del cinturón de seguridad para conductor izquierda</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Indicador de presión de llantas, con alerta que ayuda al inflar o desinflar la llanta a la presión recomendada</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Alerta de puerta abierta</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Pantalla de computadora de viaje</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Acceso con llave inteligente (sin necesidad de hacerlo mediante la llave física)</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Teen Driver para monitoreo de estadísticas de manejo</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Indicador de distancia: el indicador de distancia aparece en el clúster, avisando el tiempo en segundos la distancia del auto próximo, una alerta (luz roja) que es visible para el conductor sobre el tablero</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sensor de detección de pasajero/niño delantero: cinturones de seguridad, determina si se habilita, deshabilita el funcionamiento de la bolsa de aire</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>frenado de estacionamiento-potencia operada, ubicado en forma de botón</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sensores de reversa: alarma acústica, incluye alerta que aparece en el clúster indicando la proximidad del obstáculo trasero</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Cámara de visión trasera HD con despliegue en la pantalla del radio de alta definición</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Alertas en los espejos laterales para los puntos ciegos. Un ícono en color ámbar aparece en los espejos laterales cuando un auto se aproxima en movimiento</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Alerta de detección de peatón delantera: sensor que detecta si hay un peatón enfrente del vehículo</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asistencia por abandono de carril: provee un ajuste ligero en el volante para ayudar al conductor a corregir el camino por cambio involuntario de carril. Este se da cuando no se activa la direccional o un movimiento activo. Un icono en color verde aparecerá cuando se detecta el carril. En color ámbar cuando el auto abandona el carril sin intención</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asistente de colisión frontal: automáticamente asiste con el sistema de frenado a velocidades por debajo de 80 Km/h aproximadamente</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Alerta de cruce trasero: advierte al conducir en reversa, cuando un objeto se aproxima desde la izquierda o la derecha. Un triángulo rojo aparecerá en la cámara de reversa</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sensor activado en puerta de detección de ocupante trasero</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Alerta de inflado de llantas</td>
                            <td><i class="fas fa-circle text-success"></i></td>
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
                            <td>Cluster de información para el conductor 8”</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Pantalla de Infoentretenimiento de 11”, OnStar®, Bluetooth®, Apple CarPlay™ , Android Auto™, hotspot Wi-Fi 4G LTE y AM/FM</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Receptor USB para carga y datos</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Receptor USB consola de piso</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema de audio con 4 bocinas, 2 bocinas tipo tweeters y módulo ANC</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema de sonido audio digital</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Wireless Phone Projection: permite conectar tu celular con Apple CarPlay™ o Android Auto™ sin necesidad de cables y de forma inalámbrica</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Proyección de teléfono VAR 1</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Cargador inalámbrico para smartphone. Algunos teléfonos pueden requerir una funda especial para operar</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>OnStar®: servicios de asistencia personalizada incluyendo un hotspot de Wi-Fi integrado al vehículo para hasta 7 dispositivos</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Pantalla reflejante de alerta LED</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Generador 130 AMP</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Batería 12V, 70AH</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Enchufe de carga 12V</td>
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
                            <td>Sistema de pronóstico - gestión de salud del vehículo</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Filtro de aire de motor</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Teen Driver para monitoreo de estadísticas de manejo</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Motor turbo 3 Cilindros, 1.2L, DI, L3, DOHC, VVT,TURBO, ALUM, CSS PRIME, transmisión automática de 6 velocidades, FWD ( Sistema de traccion delantera: Front Wheel Drive)</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema Stop/Start: el motor se apaga automáticamente cuando el vehículo se detiene por completo, manteniendo activos los sistemas hidráulicos y eléctricos, reiniciando encendido de motor al retirar el pie del pedal de freno reduciendo el consumo de combustible</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Transmisión automática de 6 velocidades 6T40, GEN3, VAR1</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Controla la velocidad de frenado gradualmente</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema evaporativo de emisiones nivel 3/Tier 3/Certificación de emisión federal</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Perilla de palanca de control de transmisión automática</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Tubo de escape escondido</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Radio de eje de transmisión final drive 3.50</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Eje de control trasero</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Amortiguadores frontales tipo Strut</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Frenos con control electrónico de estabilidad ''StabiliTrak''</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Con ajuste de altura y profundidad (Ajuste telescópico)</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Dirección electroasistida (EPS)</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Suspensión GVW 4255 LBS / 1930 KG</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Suspensión delantera McPherson y trasera independiente de brazos</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema de enfriamiento de motor con refrigerante y enfriador</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Filtro de aire para contaminación y polvo fino</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                        </tr>
                        <tr>
                            <td>Planta de ensamble Bupyeong, Korea</td>
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
                            <td>2700</td>
                            <td>2700</td>
                        </tr>
                        <tr>
                            <td>Largo</td>
                            <td>4537</td>
                            <td>4537</td>
                        </tr>
                        <tr>
                            <td>Ancho</td>
                            <td>1823</td>
                            <td>1823</td>
                        </tr>
                        <tr>
                            <td>Alto</td>
                            <td>1560</td>
                            <td>1560</td>
                        </tr>
                        <tr>
                            <td>Peso bruto vehicular</td>
                            <td>1,423 kg</td>
                            <td>1,423 kg</td>
                        </tr>
                        <tr>
                            <td><b>Interior</b></td>
                            <td><b>1ra fila de asientos</b></td>
                            <td><b>1ra fila de asientos</b></td>
                        </tr>
                        <tr>
                            <td>Espacio para cabeza</td>
                            <td>1006</td>
                            <td>1006</td>
                        </tr>
                        <tr>
                            <td>Espacio para hombros</td>
                            <td>1415</td>
                            <td>1415</td>
                        </tr>
                        <tr>
                            <td>Espacio para cadera</td>
                            <td>1328</td>
                            <td>1328</td>
                        </tr>
                        <tr>
                            <td>Espacio para piernas</td>
                            <td>1065</td>
                            <td>1065</td>
                        </tr>
                        <tr>
                            <td><b>Interior</b></td>
                            <td><b>2da fila de asientos</b></td>
                            <td><b>2da fila de asientos</b></td>
                        </tr>
                        <tr>
                            <td>Espacio para cabeza</td>
                            <td>967</td>
                            <td>967</td>
                        </tr>
                        <tr>
                            <td>Espacio para hombros</td>
                            <td>1380</td>
                            <td>1380</td>
                        </tr>
                        <tr>
                            <td>Espacio para cadera</td>
                            <td>1163</td>
                            <td>1163</td>
                        </tr>
                        <tr>
                            <td>Espacio para piernas</td>
                            <td>985</td>
                            <td>985</td>
                        </tr>
                        <tr>
                            <td>Capacidades</td>
                            <td>L</td>
                            <td>L</td>
                        </tr>
                        <tr>
                            <td>Largo a nivel del piso</td>
                            <td>186</td>
                            <td>186</td>
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
                            <td>17.8</td>
                            <td>17.8</td>
                        </tr>
                        <tr>
                            <td>Ciudad (km/L)</td>
                            <td>15.7</td>
                            <td>15.7</td>
                        </tr>
                        <tr>
                            <td>Carretera (km/L)</td>
                            <td>21.3</td>
                            <td>21.3</td>
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