    <nav id="mainNav" class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
        <div class="container-fluid">
            <a class="navbar-brand custom-navbar-brand" href="<?php echo BASE_URL; ?>agencia/buick/buick.php">
                <img src="<?php echo BASE_URL; ?>imgs/automotriz/marcas/buick.png" alt="Logo" class="custom-logo" width="10"> <?php echo $navTitle; ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavContent" aria-controls="mainNavContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo $navLinks['descripcion']; ?>">Descripción</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo $navLinks['galeria']; ?>">Galería</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo $navLinks['especificaciones']; ?>">Especificaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo $navLinks['accesorios']; ?>">Accesorios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo $navLinks['precios']; ?>">Precios</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-warning text-white" href="#">COTIZAR</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>