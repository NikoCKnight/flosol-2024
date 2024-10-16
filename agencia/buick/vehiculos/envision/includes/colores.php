<div class="container mt-5 text-center">
    <h2 class="fw-light" style="font-size: 3rem; margin-bottom: 3rem;">COLORES</h2>
</div>

<!-- Pestañas para seleccionar versión -->
<div class="container text-center">
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="sport-touring-tab" data-bs-toggle="pill" data-bs-target="#sport-touring" type="button" role="tab" aria-controls="sport-touring" aria-selected="true" style="background-color: #e67e22; color: white; border-color: #e67e22;">Sport Touring</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="avenir-tab" data-bs-toggle="pill" data-bs-target="#avenir" type="button" role="tab" aria-controls="avenir" aria-selected="false" style="color: #e67e22; border-color: transparent;">Avenir</button>
        </li>
    </ul>
</div>
<!-- Carrusel Sport Touring -->
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="sport-touring" role="tabpanel" aria-labelledby="sport-touring-tab">
        <div class="container text-center" style="margin-bottom: 20vh;">
            <img id="mainImage-sport" src="imgs-2024/colores/sport/summit.avif" class="img-fluid mb-2" alt="Imagen grande" style="max-width: 100%; height: auto; max-height: 500px;">
            <h3 class="text-muted" id="imageTitle-sport" style="font-size: 20px;">SUMMIT WHITE</h3>

            <div class="row justify-content-center">
                <div class="col-auto p-2">
                    <img src="<?php echo BASE_URL; ?>agencia/colores/summit.webp" class="img-thumbnail rounded-circle img-select" alt="Rojo" onclick="changeImage('imgs-2024/colores/sport/summit.avif', 'SUMMIT WHITE', 'sport')" style="width: 50px; height: 50px;">
                </div>
                <div class="col-auto p-2">
                    <img src="<?php echo BASE_URL; ?>agencia/colores/jinx.jpg" class="img-thumbnail rounded-circle img-select" alt="Blanco" onclick="changeImage('imgs-2024/colores/sport/jinx.avif', 'JINX METALLIC', 'sport')" style="width: 50px; height: 50px;">
                </div>
                <div class="col-auto p-2">
                    <img src="<?php echo BASE_URL; ?>agencia/colores/truffle.png" class="img-thumbnail rounded-circle img-select" alt="Blanco" onclick="changeImage('imgs-2024/colores/sport/truffle.avif', 'TRUFFLE METALLIC', 'sport')" style="width: 50px; height: 50px;">
                </div>
                <div class="col-auto p-2">
                    <img src="<?php echo BASE_URL; ?>agencia/colores/abalone.png" class="img-thumbnail rounded-circle img-select" alt="Blanco" onclick="changeImage('imgs-2024/colores/sport/abalone.avif', 'ABALONE WHITE METALLIC', 'sport')" style="width: 50px; height: 50px;">
                </div>
                <div class="col-auto p-2">
                    <img src="<?php echo BASE_URL; ?>agencia/colores/sharkskin.png" class="img-thumbnail rounded-circle img-select" alt="Blanco" onclick="changeImage('imgs-2024/colores/sport/sharkskin.avif', 'SHARKSKIN METALLIC', 'sport')" style="width: 50px; height: 50px;">
                </div>
                <div class="col-auto p-2">
                    <img src="<?php echo BASE_URL; ?>agencia/colores/black-meet.jpg" class="img-thumbnail rounded-circle img-select" alt="Acero" onclick="changeImage('imgs-2024/colores/sport/black-meet.avif', 'BLACK MEET KETTLE METALLIC', 'sport')" style="width: 50px; height: 50px;">
                </div>
            </div>
        </div>
    </div>

    <!-- Carrusel Avenir -->
    <div class="tab-pane fade" id="avenir" role="tabpanel" aria-labelledby="avenir-tab">
        <div class="container text-center" style="margin-bottom: 20vh;">
            <img id="mainImage-avenir" src="imgs-2024/colores/avenir/jinx.avif" class="img-fluid mb-2" alt="Imagen grande" style="max-width: 100%; height: auto; max-height: 500px;">
            <h3 class="text-muted" id="imageTitle-avenir" style="font-size: 20px;">JINX METALLIC</h3>

            <div class="row justify-content-center">
                <div class="col-auto p-2">
                    <img src="<?php echo BASE_URL; ?>agencia/colores/jinx.jpg" class="img-thumbnail rounded-circle img-select" alt="Negro" onclick="changeImage('imgs-2024/colores/avenir/jinx.avif', 'JINX METALLIC', 'avenir')" style="width: 50px; height: 50px;">
                </div>
                <div class="col-auto p-2">
                    <img src="<?php echo BASE_URL; ?>agencia/colores/truffle.png" class="img-thumbnail rounded-circle img-select" alt="Azul" onclick="changeImage('imgs-2024/colores/avenir/truffle.avif', 'TRUFFLE METALLIC', 'avenir')" style="width: 50px; height: 50px;">
                </div>
                <div class="col-auto p-2">
                    <img src="<?php echo BASE_URL; ?>agencia/colores/abalone.png" class="img-thumbnail rounded-circle img-select" alt="Negro" onclick="changeImage('imgs-2024/colores/avenir/abalone.avif', 'ABALONE WHITE METALLIC', 'avenir')" style="width: 50px; height: 50px;">
                </div>
                <div class="col-auto p-2">
                    <img src="<?php echo BASE_URL; ?>agencia/colores/black-meet.jpg" class="img-thumbnail rounded-circle img-select" alt="Gris" onclick="changeImage('imgs-2024/colores/avenir/black-meet.avif', 'BLACK MEET KETTLE METALLIC', 'avenir')" style="width: 50px; height: 50px;">
                </div>
                <div class="col-auto p-2">
                    <img src="<?php echo BASE_URL; ?>agencia/colores/opulent.jpg" class="img-thumbnail rounded-circle img-select" alt="Negro" onclick="changeImage('imgs-2024/colores/avenir/opulent.avif', 'OPULENT BLUE METALLIC', 'avenir')" style="width: 50px; height: 50px;">
                </div>
                <div class="col-auto p-2">
                    <img src="<?php echo BASE_URL; ?>agencia/colores/sharkskin.png" class="img-thumbnail rounded-circle img-select" alt="Negro" onclick="changeImage('imgs-2024/colores/avenir/sharkskin.avif', 'SHARKSKIN METALLIC', 'avenir')" style="width: 50px; height: 50px;">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function changeImage(imagePath, imageTitle, model) {
        if (model === 'sport') {
            document.getElementById('mainImage-sport').src = imagePath;
            document.getElementById('imageTitle-sport').textContent = imageTitle;
        } else if (model === 'avenir') {
            document.getElementById('mainImage-avenir').src = imagePath;
            document.getElementById('imageTitle-avenir').textContent = imageTitle;
        }
    }
    document.querySelectorAll('#pills-tab button').forEach(button => {
        button.addEventListener('click', function () {
            document.querySelectorAll('#pills-tab button').forEach(btn => {
                btn.style.backgroundColor = 'transparent';
                btn.style.color = '#e67e22';
                btn.style.borderColor = 'transparent';
            });
            this.style.backgroundColor = '#e67e22';
            this.style.color = 'white';
            this.style.borderColor = '#e67e22';
        });
    });
</script>