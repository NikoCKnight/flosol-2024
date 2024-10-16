<?php
function renderCarrusel($imagenes) {
    ?>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($imagenes as $imagen): ?>
                <div class="swiper-slide swiper-slider"><img src="<?php echo $imagen; ?>" alt="Imagen"></div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <?php
}
?>