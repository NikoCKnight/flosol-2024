<div class="container text-center" style="margin-bottom: 20vh;">
        <h2 class="display-4 mt-4 fw-bold text-uppercase" style="font-size: 4vh;">COLORES</h2>
        <hr class="mx-auto mt-2" style="border-top: 4px solid #8B0000; opacity: 1; width: 20%;">
        <img id="mainImage" src="imgs/colores/abalone.avif" class="img-fluid mb-2" alt="Imagen grande" style="max-width: 100%; height: auto; max-height: 700px;">
        <h3 class="text-muted" id="imageTitle" style="font-size: 20px;">ABALONE WHITE TRICOAT</h3>

        <div class="row justify-content-center">
            <div class="col-auto p-2">
                <img src="<?php echo BASE_URL; ?>agencia/colores/abalone.png" class="img-thumbnail rounded-circle img-select" alt="Abalone" onclick="changeImage('imgs/colores/abalone.avif', 'ABALONE WHITE TRICOAT')" style="width: 50px; height: 50px;">
            </div>
            <div class="col-auto p-2">
                <img src="<?php echo BASE_URL; ?>agencia/colores/black-meet.jpg" class="img-thumbnail rounded-circle img-select" alt="Black-meet" onclick="changeImage('imgs/colores/black-meet.avif', 'BLACK MEET KETTLE METALLIC')" style="width: 50px; height: 50px;">
            </div>
            <div class="col-auto p-2">
                <img src="<?php echo BASE_URL; ?>agencia/colores/summit.webp" class="img-thumbnail rounded-circle img-select" alt="summit" onclick="changeImage('imgs/colores/summit.avif', 'SUMMIT WHITE')" style="width: 50px; height: 50px;">
            </div>
            <div class="col-auto p-2">
                <img src="<?php echo BASE_URL; ?>agencia/colores/red-tint.jpg" class="img-thumbnail rounded-circle img-select" alt="Red-tint" onclick="changeImage('imgs/colores/radiant.avif', 'RADIANT RED METALLIC')" style="width: 50px; height: 50px;">
            </div>
            <div class="col-auto p-2">
                <img src="<?php echo BASE_URL; ?>agencia/colores/sharkskin.png" class="img-thumbnail rounded-circle img-select" alt="sharkskin" onclick="changeImage('imgs/colores/sharkskin.avif', 'SHARKSKIN METALLIC')" style="width: 50px; height: 50px;">
            </div>
            <div class="col-auto p-2">
                <img src="<?php echo BASE_URL; ?>agencia/colores/retrograde.jpg" class="img-thumbnail rounded-circle img-select" alt="retrograde" onclick="changeImage('imgs/colores/retrograde.avif', 'RETROGRADE METALLIC')" style="width: 50px; height: 50px;">
            </div>
            <div class="col-auto p-2">
                <img src="<?php echo BASE_URL; ?>agencia/colores/moon.jpg" class="img-thumbnail rounded-circle img-select" alt="moon" onclick="changeImage('imgs/colores/moon.avif', 'MOON METALLIC')" style="width: 50px; height: 50px;">
            </div>
        </div>
    </div>
    <script>
        function changeImage(imageUrl, color) {
            document.getElementById('mainImage').src = imageUrl;
            document.getElementById('imageTitle').textContent = color;
        }
    </script>