document.addEventListener('DOMContentLoaded', () => {
    const swiper = new Swiper('.swiper-container', {
        loop: true,
        autoplay: {
            delay: 7000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        speed: 1500
    });

    /* NOSOTROS */
    const textContent = document.querySelector('.text-content');
    const imageContent = document.querySelector('.image-content');

    function elementoVisible(element) {
        const rect = element.getBoundingClientRect();
        const viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);
        return !(rect.bottom < 0 || rect.top - viewHeight >= 0);
    }

    function activarAnimaciones() {
        if (elementoVisible(textContent)) {
            textContent.classList.add('ha-aparecido');
        }
        if (elementoVisible(imageContent)) {
            imageContent.classList.add('ha-aparecido');
        }
    }

    window.addEventListener('scroll', activarAnimaciones);
    activarAnimaciones();

    /* SERVICIOS */
    function mostrarCard(seccion) {
        const cards = document.querySelectorAll('.card-container');
        cards.forEach(card => card.style.display = 'none');
        document.getElementById(seccion + '-card').style.display = 'block';
    }

    document.getElementById('automotriz-icon').addEventListener('click', () => mostrarCard('automotriz'));
    document.getElementById('energia-icon').addEventListener('click', () => mostrarCard('energia'));
    document.getElementById('hospitalidad-icon').addEventListener('click', () => mostrarCard('hospitalidad'));
    document.getElementById('partnerships-icon').addEventListener('click', () => mostrarCard('partnerships'));
});
