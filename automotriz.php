<?php
include './config.php';
include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/automotriz.css?v=<?php echo time(); ?>">
    <title>FLOSOL AUTOMOTRIZ</title>
</head>
<body class="bg-gray text-dark">
    <div class="container content-container">
        <div class="row mb-4">
            <div class="col-md-8">
                <img src="imgs/automotriz/autom/PANA0506.jpg" alt="Descripción de la imagen" class="img-fluid rounded mb-4">
                <h2>Servicio Automotriz</h2>
                <p class="text-justify">Inicia operaciones en 1988 en Puerto Vallarta Jalisco con la primera agencia automotriz...</p>
                <p class="text-justify">Adicionalmente, cuenta con agencias de autos seminuevos multimarca con un extenso inventario...</p>
                
                <div class="row g-3 my-4">
                    <div class="col-md-6">
                        <img src="imgs/automotriz/autom/PANA0278.jpg" alt="Primera imagen del equipo" class="img-fluid rounded">
                    </div>
                    <div class="col-md-6">
                        <img src="imgs/automotriz/autom/PANA0316.jpg" alt="Segunda imagen del equipo" class="img-fluid rounded">
                    </div>
                </div>
                <h2>Encuentra El Servicio Ideal Para Ti</h2>
                <p class="text-justify">Contamos con más de 25 agencias automotrices en el occidente del país.</p>
                <p class="text-justify">Todos los servicios de mantenimiento para tu auto los tenemos en Flosol.</p>

                <div class="row row-cols-1 row-cols-md-2 g-3">
                    <div class="col">
                        <div class="p-3 border bg-light text-dark rounded">
                            <h3 class="h5 text-primary-custom">01. Servicio De Mantenimiento</h3>
                            <p class="text-muted">Realizamos mantenimientos preventivos y correctivos para todas las marcas.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light text-dark rounded">
                            <h3 class="h5 text-primary-custom">02. Servicio De Diagnóstico</h3>
                            <p class="text-muted">Ofrecemos diagnósticos completos para asegurar que tu auto esté en óptimas condiciones.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light text-dark rounded">
                            <h3 class="h5 text-primary-custom">03. Paquetes Flosol</h3>
                            <p class="text-muted">Encuentra los mejores paquetes de mantenimiento adaptados a tus necesidades.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light text-dark rounded">
                            <h3 class="h5 text-primary-custom">04. Servicio De Garantía</h3>
                            <p class="text-muted">Garantizamos que todas las reparaciones cumplen con los estándares de las marcas.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="text-primary-custom">Nuestras Marcas</h2>
                <div class="overflow-auto" style="max-height: 1300px;">
                    <div class="d-flex flex-column gap-3">
                        <a href="agencia/chevrolet/chevrolet.php" class="d-flex align-items-center p-2 bg-header-blue text-white rounded brand-item">
                            <img src="imgs/automotriz/marcas/chevrolet.png" alt="Chevrolet" class="brand-logo">
                        </a>
                        <a href="agencia/gmc.php" class="d-flex align-items-center p-2 bg-header-blue text-white rounded brand-item">
                            <img src="imgs/automotriz/marcas/gmc.png" alt="GMC" class="brand-logo">
                        </a>
                        <a href="agencia/mitsubishi.php" class="d-flex align-items-center p-2 bg-header-blue text-white rounded brand-item">
                            <img src="imgs/automotriz/marcas/mitsubishi.png" alt="Mitsubishi" class="brand-logo">
                        </a>
                        <a href="agencia/mg.php" class="d-flex align-items-center p-2 bg-header-blue text-white rounded brand-item">
                            <img src="imgs/automotriz/marcas/mg.png" alt="MG" class="brand-logo">
                        </a>
                        <div class="d-flex align-items-center p-2 bg-header-blue text-white rounded brand-item">
                            <img src="imgs/automotriz/marcas/chrysler.png" alt="Chrysler" class="brand-logo">
                        </div>
                        <div class="d-flex align-items-center p-2 bg-header-blue text-white rounded brand-item">
                            <img src="imgs/automotriz/marcas/dodge.png" alt="Dodge" class="brand-logo">
                        </div>
                        <div class="d-flex align-items-center p-2 bg-header-blue text-white rounded brand-item">
                            <img src="imgs/automotriz/marcas/fiat.png" alt="Fiat" class="brand-logo">
                        </div>
                        <a href="agencia/jeep.php" class="d-flex align-items-center p-2 bg-header-blue text-white rounded brand-item">
                            <img src="imgs/automotriz/marcas/jeep.png" alt="Jeep" class="brand-logo">
                        </a>
                        <a href="agencia/peugeot.php" class="d-flex align-items-center p-2 bg-header-blue text-white rounded brand-item">
                            <img src="imgs/automotriz/marcas/peugeot.webp" alt="Peugeot" class="brand-logo">
                        </a>
                        <div class="d-flex align-items-center p-2 bg-header-blue text-white rounded brand-item">
                            <img src="imgs/automotriz/marcas/ram.png" alt="Ram" class="brand-logo">
                        </div>
                        <a href="agencia/buick/buick.php" class="d-flex align-items-center p-2 bg-header-blue text-white rounded brand-item">
                            <img src="imgs/automotriz/marcas/buick.png" alt="Buick" class="brand-logo">
                        </a>
                        <div class="d-flex align-items-center p-2 bg-header-blue text-white rounded brand-item">
                            <img src="imgs/automotriz/marcas/stellantis.png" alt="Stellantis" class="brand-logo">
                        </div>
                        <div class="d-flex align-items-center p-2 bg-header-blue text-white rounded brand-item">
                            <img src="imgs/automotriz/marcas/jetour.png" alt="Jetour" class="brand-logo">
                        </div>
                        <div class="d-flex align-items-center p-2 bg-header-blue text-white rounded brand-item">
                            <img src="imgs/automotriz/marcas/gac.png" alt="Gac" class="brand-logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>