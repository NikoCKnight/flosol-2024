<?php
include '../../../../../config.php';
include '../../../../../includes/header.php';
$navLinks = [
    'descripcion' => '../envista-2025.php',
    'galeria' => 'galeria.php',
    'especificaciones' => 'especificaciones.php',
    'accesorios' => 'accesorios.php',
    'precios' => '#'
];
$navTitle = "ENVISTA 2025";
include '../../nav/nav.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buick Envista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../nav/nav.css?v=<?php echo time(); ?>">
    <style>
        .blf{
            font-size: 1.5rem;
        }
        @media (max-width: 768px) {
            .table-responsive table thead {
                display: none;
            }
            .table-responsive table, .table-responsive tbody, .table-responsive tr, .table-responsive td {
                display: block;
                width: 100%;
            }
            .table-responsive tr {
                margin-bottom: 1rem;
                border-bottom: 1px solid #ddd;
            }
            .table-responsive td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }
            .table-responsive td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 1rem;
                font-weight: bold;
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <div class="position-relative">
        <img src="../imgs-2025/gm-buick-mov-envista-caracteristicas-des-mh-lg-25.avif" class="img-fluid w-100" style="max-height: 90vh; object-fit: cover;" alt="Portada envista">
    </div>
    <div class="container mt-5">
        <h1 class="fw-normal" style="font-size: 4rem; color: #555555;">BUICK ENVISTA</h1>
        <div class="row g-4" style="padding-bottom: 5Vh;">
            <div class="col-12 col-md-5">
                <img src="../imgs-2025/colores/avenir/cosmonaut.avif" class="img-fluid" alt="Buick Envista" style="max-height: 550px; object-fit: contain;">
                <div class="text-center mt-2">
                    <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#consultaTerminosModal">+ Consulta Términos y Condiciones</a>
                </div>
            </div>
            <div class="col-12 col-md-7">
                <div class="row g-3">
                    <div class="col-12 col-md-4 mb-3">
                        <div class="card border-0 rounded-3 shadow-sm h-100 d-flex flex-column" style="min-height: 180px;">
                            <div class="card-body">
                                <h5 class="card-title text-center text-uppercase" style="color: #555;">Contado</h5>
                                <p class="card-text text-start">¡1 año de seguro gratis! 
                                    <i class="fa-regular fa-comment-dots" style="color: #FF5F1F;" data-bs-toggle="modal" data-bs-target="#comentarioContadoModal"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <div class="card border-0 rounded-3 shadow-sm h-100 d-flex flex-column" style="min-height: 180px;">
                            <div class="card-body">
                                <h5 class="card-title text-center text-uppercase" style="color: #555;">Financiamiento</h5>
                                <p class="card-text text-start">+ 12 meses sin intereses 
                                    <i class="fa-regular fa-comment-dots" style="color: #FF5F1F;" data-bs-toggle="modal" data-bs-target="#comentarioFinanciamientoModal"></i>
                                </p>
                                <p class="card-text text-start">+ ¡1 año de seguro gratis! 
                                    <i class="fa-regular fa-comment-dots" style="color: #FF5F1F;" data-bs-toggle="modal" data-bs-target="#comentarioFinanciamientoModal2"></i>
                                </p>
                            </div>
                        </div>
                        <div class="text-start mt-2">
                            <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#legalFinanciamientoModal">+ Legales Financiamiento</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <div class="card border-0 rounded-3 shadow-sm h-100 d-flex flex-column" style="min-height: 180px;">
                            <div class="card-body">
                                <h5 class="card-title text-center text-uppercase" style="color: #555;">Leasing</h5>
                                <p class="card-text text-start">Rentas desde $6,749 
                                    <i class="fa-regular fa-comment-dots" style="color: #FF5F1F;" data-bs-toggle="modal" data-bs-target="#comentarioLeasingModal"></i>
                                </p>
                            </div>
                        </div>
                        <div class="text-start mt-2">
                            <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#legalLeasingModal">+ Legales Leasing</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4" style="padding-bottom: 10Vh;">
            <a href="#" class="btn btn-outline-warning" style="border: 2px solid #FF5F1F; color: #FF5F1F;">Solicita una cotización</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="bg-light">
                    <tr>
                        <th scope="col">PAQUETES</th>
                        <th scope="col">PRECIO DE LISTA *</th>
                        <th scope="col">PRECIO DE CONTADO</th>
                        <th scope="col">PRECIO FINANCIADO *</th>
                        <th scope="col">PRECIO DE LEASING *</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="PAQUETES">Sport Touring</td>
                        <td data-label="PRECIO DE LISTA *">$653,100</td>
                        <td data-label="PRECIO DE CONTADO">$653,100</td>
                        <td data-label="PRECIO FINANCIADO *">$653,100</td>
                        <td data-label="PRECIO DE LEASING *">$653,100</td>
                    </tr>
                    <tr>
                        <td data-label="PAQUETES">Avenir</td>
                        <td data-label="PRECIO DE LISTA *">$678,600</td>
                        <td data-label="PRECIO DE CONTADO">$678,600</td>
                        <td data-label="PRECIO FINANCIADO *">$678,600</td>
                        <td data-label="PRECIO DE LEASING *">$678,600</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modales -->
    <div class="modal fade" id="consultaTerminosModal" tabindex="-1" aria-labelledby="consultaTerminosLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="consultaTerminosLabel">Términos y Condiciones</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size: 1.5rem; padding: 0.5rem;"></button>
                </div>
                <div class="modal-body" style="font-size: 0.8rem; text-align: justify;">
                    <p>Aplica para “Buick Envista 2025“®, en todos los paquetes, válido del 2 al 31 de octubre de 2024. Los precios y promociones que aparecen en este sitio (I) son en moneda 
                    nacional y (II) aplican única y exclusivamente a los Vehículos que se comercialicen en los Estados Unidos Mexicanos. Los precios mostrados en el Sitio podrán ser 
                    corregidos en cualquier momento en el supuesto de que por un error involuntario llegaré aparecer un precio en $0.00 (cero pesos 00/100 M.N.) o un precio en blanco, 
                    dicho precio no representa un precio de compraventa final, por lo que deberá consultar el precio final físicamente con su Distribuidores Autorizados GMM. Las marcas que 
                    aparecen en este sitio relacionadas con los vehículos, partes y/o refacciones, incluyendo la marca Buick son propiedad de General Motors LLC. GMM es licenciataria 
                    autorizada de dichas marcas para su uso y explotación en los Estados Unidos Mexicanos. General Motors de México, S. de R.L. de C.V., (la "Compañía") con domicilio en 
                    Avenida Ejército Nacional No. 843-B, Colonia Granada, Delegación Miguel Hidalgo, C.P. 11520, Ciudad de México, México
                    <br><br>
                    Para operaciones con GM Financial de México, S.A. de C.V., SOFOM, E.R. (GMF) se requiere de una investigación crediticia para ser sujeto de financiamiento o 
                    arrendamiento. Sujeto a aprobación final, aplican restricciones. La contratación del financiamiento o arrendamiento implica la adquisición de seguros de: daños y/o vida 
                    y/o desempleo y/o incapacidad total temporal. Contratación en Moneda Nacional. A partir de los 75 años de edad se requiere de aval. El tiempo de respuesta a las 
                    solicitudes está sujeto a presentar la documentación completa y correcta solicitada por GMF, así como a la verificación de dicha documentación. Esta publicidad no 
                    representa un contrato o una oferta de contrato por parte de GMF, y las mismas se encuentran sujetas a cambios sin previo aviso y a la aprobación final de GMF para 
                    contratar. Para mayor información sobre los términos y condiciones y demás requisitos de contratación por favor visite: www.gmfinancial.mx</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size: 0.8rem;">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="legalFinanciamientoModal" tabindex="-1" aria-labelledby="legalFinanciamientoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="legalFinanciamientoLabel">Legales Financiamiento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size: 1.5rem; padding: 0.5rem;"></button>
                </div>
                <div class="modal-body" style="font-size: 0.8rem; text-align: justify;">
                    <p>Sujeto a aprobación de crédito final. Se requiere de una investigación crediticia para ser sujeto de financiamiento. La contratación del financiamiento implica la 
                    adquisición de seguros de: daños y/o vida y/o desempleo y/o incapacidad total temporal.<br><br>
                    <b class="blf">CAT PROMEDIO del 20% sin IVA</b> para fines informativos y de comparación. Fecha de cálculo al 01 de septiembre del 2024 y vigente del 02 al 31 de octubre del 
                    2024. Las cantidades expresadas y la contratación son en Moneda Nacional. A partir de los 75 años de edad se requiere de aval. El tiempo de respuesta a 
                    las solicitudes está sujeto a presentar la documentación completa y correcta solicitada por GM Financial de México, S.A. de C.V. SOFOM, E.R., así como a 
                    la verificación de dicha documentación. Esta publicidad no representa un contrato o una oferta de contrato y las mismas se encuentran sujetas a cambios 
                    sin previo aviso y a la aprobación final de GM Financial de México, S.A. de C.V. SOFOM, E.R. para contratar. Ninguna de estas ofertas aplica con otras 
                    promociones ni en la compra de vehículos flotilla. Para más información sobre los planes de financiamiento, requisitos de contratación y comisiones con 
                    GM Financial de México, S.A. de C.V., SOFOM, E.R. consulte www.gmfinancial.mx. Las imágenes mostradas son de carácter ilustrativo. Los precios ofrecidos 
                    en los programas de financiamiento mostrados aquí pueden variar de los precios anunciados por Chevrolet y Chevrolet Servicios Financieros por lo que 
                    deberá consultar el precio final físicamente con su Distribuidor Autorizado Chevrolet, así como las promociones aplicables y vigentes. Las marcas 
                    Chevrolet y Chevrolet Servicios Financieros, así como sus respectivos logotipos y avisos comerciales son propiedad de General Motors LLC, y General Motors 
                    de México, S. de R.L. de C.V. es su licenciataria autorizada para su uso y explotación en los Estados Unidos Mexicanos.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size: 0.8rem;">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="legalLeasingModal" tabindex="-1" aria-labelledby="legalLeasingLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="legalLeasingLabel">Legales Leasing</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size: 1.5rem; padding: 0.5rem;"></button>
                </div>
                <div class="modal-body" style="font-size: 0.8rem; text-align: justify;">
                    <p>Aplican restricciones. Promoción válida para la República Mexicana en operaciones con GM Financial de México, S.A. de C.V., SOFOM, E.R. Productos sujetos a 
                    aprobación de contratación final. Las ofertas No aplican con otras promociones. Aplican a vehículos Buick Envista 2025. Se requiere de una investigación crediticia 
                    para ser sujeto de arrendamiento. La renta mensual no incluye seguro contra daños, de vida, de desempleo y/o incapacidad total o temporal, gastos de placas, 
                    tenencia, comisión por apertura o cualquier otro impuesto o derecho aplicable, ni gastos de gestoría, los cuales serán pagados por el cliente adicionalmente al pago 
                    mensual.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size: 0.8rem;">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="comentarioContadoModal" tabindex="-1" aria-labelledby="comentarioContadoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="comentarioContadoLabel">CONTADO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size: 1.5rem; padding: 0.5rem;"></button>
                </div>
                <div class="modal-body" style="font-size: 0.8rem; text-align: justify;">
                    <p>No incluye seguro de vida, ni de desempleo. Consulta modalidades, términos y condiciones con tu Distribuidor Autorizado Buick. Únicamente con aseguradoras 
                    participantes, para mayor información consulta con tu Distribuidor Autorizado. No acumulable con otras promociones ofrecidas por aseguradoras distintas a 
                    las participantes.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size: 0.8rem;">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="comentarioFinanciamientoModal" tabindex="-1" aria-labelledby="comentarioFinanciamientoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="comentarioFinanciamientoLabel">FINANCIAMIENTO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size: 1.5rem; padding: 0.5rem;"></button>
                </div>
                <div class="modal-body" style="font-size: 0.8rem; text-align: justify;">
                    <p>Sujeto a análisis y aprobación de crédito por GM Financial de México, S.A. de C.V. SOFOM, E.R. Plazo de 12 meses sin intereses, solo es válido en Buick Envista 
                    2025, paquetes D y U. Para algunos planes aplican montos mínimos y máximos de enganche.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size: 0.8rem;">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="comentarioFinanciamientoModal2" tabindex="-1" aria-labelledby="comentarioFinanciamientoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="comentarioFinanciamientoLabel">FINANCIAMIENTO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size: 1.5rem; padding: 0.5rem;"></button>
                </div>
                <div class="modal-body" style="font-size: 0.8rem; text-align: justify;">
                    <p>No incluye seguro de vida, ni de desempleo. Consulta modalidades, términos y condiciones con tu Distribuidor Autorizado Buick. Únicamente con aseguradoras 
                        participantes, para mayor información consulta con tu Distribuidor Autorizado. No acumulable con otras promociones ofrecidas por aseguradoras distintas a 
                        las participantes.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size: 0.8rem;">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="comentarioLeasingModal" tabindex="-1" aria-labelledby="comentarioLeasingLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="comentarioLeasingLabel">LEASING</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size: 1.5rem; padding: 0.5rem;"></button>
                </div>
                <div class="modal-body" style="font-size: 0.8rem; text-align: justify;">
                    <p>Sujeto a análisis y aprobación de contrato por GM Financial de México, S.A. de C.V. SOFOM, E.R. Aplican restricciones. Promoción válida para la República Mexicana 
                    en operaciones con GM Financial de México, S.A. de C.V., SOFOM, E.R.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size: 0.8rem;">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <?php include "../../../footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../nav/nav.js"></script>
</body>
</html>