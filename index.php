<?php
include './config.php';
include 'includes/header.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/carrusel.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>GRUPO FLOSOL</title>
</head>
<body>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="imgs/home/carrusel/carrusel1.jpg" alt="Imagen 1">
                <div class="carousel-overlay">
                    <div class="overlay-content">
                        <h1>100 Años <span class="highlight-red">MG</span></h1>
                        <p>En MG Country nos encantó festejar 100 años de legado de una excelente marca, celebramos con innovadores productos, al mejor precio, el respaldo de <span class="highlight-red">MGCare</span> después de adquirir tu auto, y muchos beneficios más. Gracias por ser parte de esta gran familia.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="imgs/home/carrusel/carrusel2.jpg" alt="Imagen 2">
                <div class="carousel-overlay">
                    <div class="overlay-content">
                        <h1>La cultura de valores define  a quienes formamos parte de la <span class="highlight-blue">Familia Flosol</span></h1>
                        <p>Somos una empresa orgullosamente mexicana dedicada a ofrecer productos y servicios respetando los estandares de calidad de las marcas que representamos, siendo orientados a la satisfaccion de nuestros clientes.</p>
                        <button class="btn-conocenos">Conócenos</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="imgs/home/carrusel/carrusel3.jpg" alt="Imagen 3">
                <div class="carousel-overlay">
                    <div class="overlay-content">
                        <h1>Confianza que inspira</h1>
                        <p>El compromiso, la honestidad, integridad, profesionalismo, respeto y resonsabilidad son el eje rector de los valores de Grupo Flosol. Estos valores nos han permitido crecer y merecer la confianza de nuestros colaboradores y clientes.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="imgs/home/carrusel/carrusel4.jpg" alt="Imagen 4">
                <div class="carousel-overlay">
                    <div class="overlay-content">
                        <h1>Responsabilidad Social</h1>
                        <p>En Grupo Flosol, estamos comprometidos con todas las comunidades y el entorno donde tenemos presencia; por ello, hemos realizado acciones, como donativos a casas hogar, internados para niños y adolescentes, pensando en los mas vulnerables.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="imgs/home/carrusel/carrusel5.jpg" alt="Imagen 5">
                <div class="carousel-overlay">
                    <div class="overlay-content">
                        <h1></h1>
                        <h2></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <!-- NOSOTROS -->
    <section class="nosotros-section">
        <div class="nosotros-content">
            <div class="text-content">
                <h2>NOSOTROS</h2>
                <p>Somos una empresa orgullosamente mexicana dedicada a ofrecer productos y servicios respetando los estándares de calidad de las marcas que representamos, siempre orientados a la satisfacción de nuestros clientes.</p>
                <button class="btn-conocenos">Conócenos</button>
            </div>
            <div class="image-content">
                <img src="imgs/home/about-us.png" alt="Sobre Nosotros" class="about-us-image">
            </div>
        </div>
    </section>
    <!-- SERVICIOS -->
    <section class="section-icons">
        <div class="icon-services-container">
            <div class="icon-container">
                <div class="icon" id="automotriz-icon" onclick="mostrarCard('automotriz')">
                    <i class="fas fa-car"></i>
                </div>
                <div class="icon" id="energia-icon" onclick="mostrarCard('energia')">
                    <i class="fa-solid fa-gas-pump"></i>
                </div>
                <div class="icon" id="hospitalidad-icon" onclick="mostrarCard('hospitalidad')">
                    <i class="fas fa-hotel"></i>
                </div>
                <div class="icon" id="partnerships-icon" onclick="mostrarCard('partnerships')">
                    <i class="fas fa-handshake"></i>
                </div>
            </div>
            <h2 class="services-title">NUESTROS SERVICIOS</h2>
        </div>
    </section>
    <section class="cards-section">
        <div class="card-container" id="automotriz-card">
            <table class="table-card">
                <tr>
                    <td class="left-column" style="width: 50%;">
                        <h2 class="card-h2">Automotriz</h2>
                        <p class="card-p">Iniciamos operaciones en 1988 en Puerto Vallarta, Jalisco con la primera agencia automotriz. Adicionalmente incluimos agencias de autos seminuevos multimarca con un extenso inventario. Todas las agencias automotrices de Grupo Flosol, son respaldadas con un completo servicio postventa con la mejor tecnología, sumando así en total 23 agencias lo que nos posiciona como Grupo Líder en la zona occidente del país.</p>
                        <button class="card-btn" onclick="">Conócenos</button>
                    </td>
                    <td class="right-column" style="width: 50%;">
                        <img class="card-img" src="imgs/home/servicios/automotriz.png" alt="Imagen Automotriz">
                    </td>
                </tr>
            </table>
        </div>
        <div class="card-container" id="energia-card" style="display:none;">
            <table class="table-card">
                <tr>
                    <td class="left-column" style="width: 50%;">
                        <h2 class="card-h2">Energía</h2>
                        <p class="card-p">Grupo Gasolinero con más de 30 años de experiencia, de socios mexicanos de la localidad, conformado por 13 estaciones de servicio estratégicamente ubicadas para cubrir Puerto Vallarta, estas se caracterizan por ofrecer la más alta calidad en combustibles y lubricantes, con un excelente servicio al cliente y cumplimiento de los estándares de franquicias PEMEX y SHELL además de ser líderes en el transporte de combustibles de la región con unidades hasta 65,000 lts de capacidad por traslado.</p>
                        <button class="card-btn">Conócenos</button>
                    </td>
                    <td class="right-column" style="width: 50%;">
                        <img class="card-img" src="imgs/home/servicios/energia.jpg" alt="Imagen Energía">
                    </td>
                </tr>
            </table>
        </div>
        <div class="card-container" id="hospitalidad-card" style="display:none;">
            <table class="table-card">
                <tr>
                    <td class="left-column" style="width: 50%;">
                        <h2 class="card-h2">Hospitalidad</h2>
                        <p class="card-p">En el año 2014 Grupo Flosol decide incursionar en el segmento turístico en Puerto Vallarta, dando pie a crear alianzas con la marca IHG Hotels & Resorts y así establecer el primer hotel de la conocida cadena siendo Holiday Inn Express Puerto Vallarta el pionero de dicho proyecto.</p>
                        <button class="card-btn">Conócenos</button>
                    </td>
                    <td class="right-column" style="width: 50%;">
                        <img class="card-img" src="imgs/home/servicios/hospitalidad.jpg" alt="Imagen Hospitalidad">
                    </td>
                </tr>
            </table>
        </div>
        <div class="card-container" id="partnerships-card" style="display:none;">
            <table class="table-card">
                <tr>
                    <td class="left-column" style="width: 50%;">
                        <h2 class="card-h2">Partnerships</h2>
                        <p class="card-p">Contamos con partners y sociedades estratégicas con empresas líderes en sus sectores como lo es Grupo Octano, Sinergía Combustibles, Del canto y Centro logístico de Jalisco.</p>
                        <button class="card-btn">Conócenos</button>
                    </td>
                    <td class="right-column" style="width: 50%;">
                        <img class="card-img" src="imgs/home/servicios/partner.webp" alt="Imagen Partnerships">
                    </td>
                </tr>
            </table>
        </div>
    </section>
    <div class="responsabilidad-flosol">
        <div class="texto-responsabilidad">
            <h1 class="h1-res">Responsabilidad Social</h1>
            <p class="p-res"><strong>Juntos saldremos adelante.</strong></p>
            <p class="p-res">En Grupo Flosol, estamos comprometidos con todas las comunidades y el entorno donde tenemos presencia; por ello, hemos realizado acciones, como donativos a casas hogar, internados para niños y adolescentes, pensando en los más vulnerables.</p>
            <a href="#contacto" class="boton-responsabilidad">Conocer más</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/carousel.js?v=<?php echo time(); ?>"></script>
</body>
</html>

<?php include("includes/footer.php") ?>