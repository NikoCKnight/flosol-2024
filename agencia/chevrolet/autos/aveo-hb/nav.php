<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .nav-iteme a.active {
            border: 2px solid #f0ad4e;
            border-radius: 5px;
            color: #000;
            font-weight: bold;
            padding: 5px 15px;
        }
        .nav-tabs-custom {
            margin-top: 10px;
            border-bottom: 2px solid #e9ecef;
        }
        .car-name {
            font-size: 26px;
            font-weight: bold;
            color: #333;
            display: flex;
            align-items: center;
        }
        .year-badge {
            background-color: #6c757d;
            color: white;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            margin-left: 10px;
        }
        .nav-link {
            color: #555;
            font-size: 1.2rem;
        }
        .nav-link:hover {
            color: #f0ad4e;
        }
        .nav-tabs .nav-iteme.show .nav-link, .nav-tabs .nav-link.active {
            background-color: transparent;
            border-color: transparent;
            font-size: 1.2rem;
        }

        @media (max-width: 768px) {
            .car-name {
                font-size: 20px;
                justify-content: center;
            }
            .year-badge {
                font-size: 14px;
                margin-left: 5px;
            }
            .nav-tabs-custom .nav-link {
                font-size: 0.9rem;
                padding: 5px;
            }
            .nav-tabs-custom {
                justify-content: center;
                display: flex;
                flex-wrap: wrap;
            }
            .nav-tabs-custom li {
                flex: 1 1 50%;
                text-align: center;
            }
            .nav-tabs .nav-iteme.show .nav-link, .nav-tabs .nav-link.active {
            background-color: transparent;
            border-color: transparent;
            font-size: 0.9rem;
        }
        }
    </style>
</head>
<body>
    <div class="container-fluid mt-3">
        <div class="row align-items-center text-center text-md-start">
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start">
                <span class="car-name">Aveo Hatchback<span class="year-badge">2024</span></span>
            </div>
            <div class="col-12 col-md-6">
                <ul class="nav nav-tabs justify-content-center justify-content-md-end nav-tabs-custom">
                    <li class="nav-item nav-iteme">
                        <a class="nav-link <?php echo $activePage == 'descripcion' ? 'active' : ''; ?>" href="aveo-hb.php">Descripción</a>
                    </li>
                    <li class="nav-item nav-iteme">
                        <a class="nav-link <?php echo $activePage == 'equipamiento' ? 'active' : ''; ?>" href="equipamiento.php">Equipamiento</a>
                    </li>
                    <li class="nav-item nav-iteme">
                        <a class="nav-link <?php echo $activePage == 'precios' ? 'active' : ''; ?>" href="precios.php">Precios</a>
                    </li>
                    <li class="nav-item nav-iteme">
                        <a class="nav-link <?php echo $activePage == 'cotizador' ? 'active' : ''; ?>" href="#">Cotizador</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
