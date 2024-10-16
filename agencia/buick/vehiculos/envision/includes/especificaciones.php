<?php
include '../../../../../config.php';
include '../../../../../includes/header.php';
$navLinks = [
    'descripcion' => '../envision-2024.php',
    'galeria' => 'galeria.php',
    'especificaciones' => '#',
    'accesorios' => 'accesorios.php',
    'precios' => 'precio.php'
];

$navTitle = "NUEVA ENVISION 2024";
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
        <h1 class="fw-normal" style="font-size: 4rem; color: #555555;">NUEVA BUICK ENVISION</h1>
        <h2 class="fw-light" style="font-size: 2.5rem; margin-bottom: 0rem;">ESPECIFICACIONES</h2>
        <p class="text">
            Cada detalle de la nueva Buick Envision está pensado para cada momento que vivirás en ella.
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
                            <td>OnStar® 4G LTE</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Rines de aluminio de 20”</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Pantalla de infoentretenimiento - Familia C, 30” con Google Integrado (Google Built-in)</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema de audio de 9 bocinas Bose®</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Motor turbo 2.0L, 4 cilindros, con 228 HP y 258 lb-pie</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Transmisión automática de 9 velocidades</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Tracción AWD en las cuatro ruedas con opción Driver Select</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Active Noise Cancellation, sistema de cancelación de ruido</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Quemacocos panorámico</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Smartphone Integration con Android Auto™ y Apple CarPlay™ sin necesidad de cables</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Cámara de visión 360°. Sistema basado en un sistema de 4 cámaras para ofrecer una visibilidad panorámica en alta definición</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Respaldo eléctrico en asiento de conductor de 8 posiciones</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Encendido de motor remoto de motor a través del control de la llave</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Masaje en el asiento del conductor</td>
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
                            <td>Sistema de aire acondicionado de tres zonas: delantero con control electrónico de doble zona y trasero con control independiente</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>QuietTuning: Bloquea sonidos exteriores</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Espejo retrovisor electrocrómico, con proyector de una segunda cámara de visión trasera (accionando palanca en espejo)</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Memoria: ajustador de asiento, espejo, eléctrico, conductor, personalización</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asientos de conductor con control - asiento, masaje</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Controles eléctricos en ventanas traseras con función express de un solo toque (abajo)</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Cristales con tintado profundo, excepto en parabrisas y ventanas delanteras</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Pedales - deportivos, de aleación</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                        </tr>
                        <tr>
                            <td>Asientos traseros calefactables</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Volante calefactable (automático)</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Cargador inalámbrico</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Wireless Phone Projection</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asientos frontales calefactables (conductor y pasajero)</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Recordatorio de cinturón de seguridad trasero</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Ajuste del asiento del conductor de 8 posiciones eléctrico</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Asiento ventilado, fila delantera</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Espejo retrovisor Full Video Display</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
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
                            <td>Rines de aluminio 20”</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>La cajuela se abre con un movimiento del pie estilo patada debajo de la fascia trasera. El lugar está indicado por una luz LED 
                                que se refleja en el piso</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Parrilla con ventilas activas eléctricas para mejorar aerodinámica. Éstas son controladas electrónicamente para reducir la 
                                resistencia del vehículo</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Espejos laterales con ajuste electrico, anti-empañantes, abatibles electricamente, con luz indicadora de direccional</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Quemacocos panoramico</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Luces de carretera - control automático, sistema de faros adaptativos</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Luces de dia LED</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Faros con encendido y apagado automatico</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Faros IntelliBeam®</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Faros delanteros LED de manejo diurno</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Rieles portaequipaje en techo</td>
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
                            <td>Modo de manejo adolescente</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Frenos ABS</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>OnStar® 4G LTE</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Cámara de visión 360°</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Pantalla de infoentretenimiento - Familia C, 30” con Google Integrado (Google Built-in)</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Pantalla de 15” reflejado en el parabrisas (Head-Up Display)</td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Cancelación activa de ruido</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Interruptor - arranque, sin llave</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Equipo de comunicación - conectividad a internet móvil OnStar® 4G LTE (Wi-Fi)</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Control universal - puerta de garaje, universal</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Arranque remoto - vehículo</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Tomacorriente - eléctrico, 110 voltios</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Smartphone Integration con Android Auto™ y Apple CarPlay™ sin necesidad de cables</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema de altavoces de 9 bocinas Bose®</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Alertas de seguridad con vibración en asiento</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sensor indicador - detección de peatones - trasero</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                        </tr>
                        <tr>
                            <td>Asistente de colisión inminente a cualquier velocidad, asistente de frenado integrado</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-warning"></i></td>
                        </tr>
                        <tr>
                            <td>Detección de peatones mejorado</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Tráfico cruzado trasero - alerta, frenado</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Seguridad activa lateral: detección de obstáculos mejorada, dirección asistida, indicador de distancia</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Seguridad activa en el carril - asistente de mantenimiento</td>
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
                            <td>Motor turbo 2.0L, 4 cilindros, con 228 HP y 258 lb-pie</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Electronic Precision Shift</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Sistema Stop & Start</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Transmisión automática de 9 velocidades</td>
                            <td><i class="fas fa-circle text-success"></i></td>
                            <td><i class="fas fa-circle text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Tracción AWD en las cuatro ruedas con opción Driver Select</td>
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
                            <td>2779</td>
                            <td>2779</td>
                        </tr>
                        <tr>
                            <td>Largo</td>
                            <td>4641</td>
                            <td>4641</td>
                        </tr>
                        <tr>
                            <td>Ancho</td>
                            <td>1883</td>
                            <td>1883</td>
                        </tr>
                        <tr>
                            <td>Alto</td>
                            <td>1632</td>
                            <td>1632</td>
                        </tr>
                        <tr>
                            <td>Entrevia delantera/trasera</td>
                            <td>1,609</td>
                            <td>1,609</td>
                        </tr>
                        <tr>
                            <td><b>Interior</b></td>
                            <td><b>1ª fila de asientos</b></td>
                            <td><b>1ª fila de asientos</b></td>
                        </tr>
                        <tr>
                            <td>Espacio para cabeza</td>
                            <td>1007</td>
                            <td>1007</td>
                        </tr>
                        <tr>
                            <td>Espacio para hombros</td>
                            <td>1440</td>
                            <td>1440</td>
                        </tr>
                        <tr>
                            <td>Espacio para cadera</td>
                            <td>1399</td>
                            <td>1399</td>
                        </tr>
                        <tr>
                            <td>Espacio para piernas</td>
                            <td>1026</td>
                            <td>1026</td>
                        </tr>
                        <tr>
                            <td><b>Interior</b></td>
                            <td><b>2ª fila de asientos</b></td>
                            <td><b>2ª fila de asientos</b></td>
                        </tr>
                        <tr>
                            <td>Espacio para cabeza</td>
                            <td>988</td>
                            <td>988</td>
                        </tr>
                        <tr>
                            <td>Espacio para hombros</td>
                            <td>1421</td>
                            <td>1421</td>
                        </tr>
                        <tr>
                            <td>Espacio para cadera</td>
                            <td>1203</td>
                            <td>1203</td>
                        </tr>
                        <tr>
                            <td>Espacio para piernas</td>
                            <td>998</td>
                            <td>998</td>
                        </tr>
                        <tr>
                            <td>Espacio en cajuela detrás de 2ª fila de asientos</td>
                            <td>713 L</td>
                            <td>713 L</td>
                        </tr>
                        <tr>
                            <td>Espacio en cajuela detrás de 1ª fila de asientos</td>
                            <td>1492 L</td>
                            <td>1492 L</td>
                        </tr>
                        <tr>
                            <td>Tanque de gasolina (FWD)</td>
                            <td>60.18 L</td>
                            <td>60.94 L</td>
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
                            <td>10.2</td>
                            <td>10.2</td>
                        </tr>
                        <tr>
                            <td>Ciudad (km/L)</td>
                            <td>9.3</td>
                            <td>9.3</td>
                        </tr>
                        <tr>
                            <td>Carretera (km/L)</td>
                            <td>11.9</td>
                            <td>11.9</td>
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