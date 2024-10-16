<div class="container text-center" style="margin-bottom: 20vh;">
        <h2 class="fw-normal" style="font-size: 36px; line-height: 2;">COLORES</h2>
        <img id="mainImage" src="imgs-2024/colores/abalone.avif" class="img-fluid mb-2" alt="Imagen grande" style="max-width: 100%; height: auto; max-height: 700px;">
        <h3 class="text-muted" id="imageTitle" style="font-size: 20px;">ABALONE WHITE TRICOAT</h3>

        <div class="row justify-content-center">
            <div class="col-auto p-2">
                <img src="<?php echo BASE_URL; ?>agencia/colores/abalone.png" class="img-thumbnail rounded-circle img-select" alt="Abalone" onclick="changeImage('imgs-2024/colores/abalone.avif', 'ABALONE WHITE TRICOAT')" style="width: 50px; height: 50px;">
            </div>
            <div class="col-auto p-2">
                <img src="<?php echo BASE_URL; ?>agencia/colores/black-meet.jpg" class="img-thumbnail rounded-circle img-select" alt="Black-meet" onclick="changeImage('imgs-2024/colores/black-meet.avif', 'BLACK MEET KETTLE METALLIC')" style="width: 50px; height: 50px;">
            </div>
            <div class="col-auto p-2">
                <img src="<?php echo BASE_URL; ?>agencia/colores/red-tint.jpg" class="img-thumbnail rounded-circle img-select" alt="Red-tint" onclick="changeImage('imgs-2024/colores/red-tint.avif', 'RADIANT RED TINT METALLIC')" style="width: 50px; height: 50px;">
            </div>
            <div class="col-auto p-2">
                <img src="<?php echo BASE_URL; ?>agencia/colores/cypress.png" class="img-thumbnail rounded-circle img-select" alt="cypress" onclick="changeImage('imgs-2024/colores/cypress.avif', 'CYPRESS METALLIC')" style="width: 50px; height: 50px;">
            </div>
            <div class="col-auto p-2">
                <img src="<?php echo BASE_URL; ?>agencia/colores/rowan.png" class="img-thumbnail rounded-circle img-select" alt="rowan" onclick="changeImage('imgs-2024/colores/rowan.avif', 'ROWAN METALLIC')" style="width: 50px; height: 50px;">
            </div>
            <div class="col-auto p-2">
                <img src="<?php echo BASE_URL; ?>agencia/colores/summit.webp" class="img-thumbnail rounded-circle img-select" alt="summit" onclick="changeImage('imgs-2024/colores/summit.avif', 'SUMMIT WHITE')" style="width: 50px; height: 50px;">
            </div>
            <div class="col-auto p-2">
                <img src="<?php echo BASE_URL; ?>agencia/colores/sharkskin.png" class="img-thumbnail rounded-circle img-select" alt="sharkskin" onclick="changeImage('imgs-2024/colores/sharkskin.avif', 'SHARKSKIN METALLIC')" style="width: 50px; height: 50px;">
            </div>
            <div class="col-auto p-2">
                <img src="<?php echo BASE_URL; ?>agencia/colores/twilight.webp" class="img-thumbnail rounded-circle img-select" alt="twilight" onclick="changeImage('imgs-2024/colores/twilight.avif', 'TWILIGHT BLUE METALLIC')" style="width: 50px; height: 50px;">
            </div>
        </div>
    </div>
    <script>
        function changeImage(imageUrl, color) {
            document.getElementById('mainImage').src = imageUrl;
            document.getElementById('imageTitle').textContent = color;
        }
    </script>