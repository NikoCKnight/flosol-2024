let lastScrollTop = 0;
        const headerNav = document.getElementById("headerNav");
        const mainNav = document.getElementById("mainNav");
        const mainNavOffset = mainNav.offsetTop;

        window.addEventListener("scroll", function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > lastScrollTop) {
                headerNav.classList.remove("show-header");
                headerNav.classList.add("hide-header");
            } else {
                headerNav.classList.remove("hide-header");
                headerNav.classList.add("show-header");
            }

            if (scrollTop >= mainNavOffset) {
                mainNav.classList.add("fixed-top");
                document.body.style.paddingTop = mainNav.offsetHeight + 'px';
            } else {
                mainNav.classList.remove("fixed-top");
                document.body.style.paddingTop = '0';
            }

            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
        });