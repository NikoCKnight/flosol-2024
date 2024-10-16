<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRUPO FLOSOL</title>
</head>
<body>
<nav id="headerNav" class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo BASE_URL; ?>index.php?v=<?php echo time(); ?>"><img src="<?php echo BASE_URL; ?>imgs/header/LOGO.png" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#headerNavContent" aria-controls="headerNavContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="headerNavContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" href="<?php echo BASE_URL; ?>index.php?v=<?php echo time(); ?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nosotros</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="serviciosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Servicios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="serviciosDropdown">
                    <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>automotriz.php?v=<?php echo time(); ?>">Automotriz</a></li>
                        <li><a class="dropdown-item" href="#">Energía</a></li>
                        <li><a class="dropdown-item" href="#">Hospitalidad</a></li>
                        <li><a class="dropdown-item" href="#">Partnership</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Talento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Responsabilidad Social</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
            <div class="d-flex ms-auto social-icons">
                <a href="https://www.linkedin.com/company/grupo-flosol" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.linkedin.com/company/grupo-flosol" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </div>
</nav>
</body>
</html>