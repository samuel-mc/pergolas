<footer class="bg-medium__grey text-white">
    <div class="flex flex-col md:flex-row justify-between max-w-6xl mx-auto">
        <div class="bg-dark__grey py-4 px-8">
            <img src="<?php echo __ROOT__; ?>/public/img/navLogo.png" alt="logo de la compania">
        </div>
        <ul class="flex flex-col md:flex-row items-center">
            <li class="px-5 my-5 text-lg"><a href="<?php echo __ROOT__; ?>">Home</a></li>
            <li class="px-5 my-5 text-lg"><a href="<?php echo __ROOT__; ?>nosotros">Acerca</a></li>
            <li class="px-5 my-5 text-lg"><a href="<?php echo __ROOT__; ?>servicios">Servicios</a></li>
            <li class="px-5 my-5 text-lg"><a href="<?php echo __ROOT__; ?>multimedia">Proyectos</a></li>
        </ul>
    </div>
</footer>

</body>
<script src="<?php echo __ROOT__; ?>/public/js/index.js"></script>
<script src="<?php echo __ROOT__; ?>/public/js/carousel/dist/js/splide.min.js"></script>
<script>
    const splide = new Splide('#carouselProyecto', {
        autoplay: true,
        type: 'loop',
        gap: '1.6rem',
        perPage: 1,
        perMove: 1,
        isNavigation: false,
        breakpoints: {
            1024: {
                perPage: 1,
                gap: '1rem',
            },
            480: {
                perPage: 1,
                gap: '1rem',
            },
        },
        autoScroll: {
            speed: 2,
        },
    });

    const thumbnails = new Splide('#thumbnailCarousel', {
        fixedWidth: 280,
        fixedHeight: 120,
        gap: 10,
        rewind: true,
        pagination: false,
        isNavigation: true,
        breakpoints: {
            425: {
                fixedWidth: 100,
                fixedHeight: 60,
            },
            728: {
                fixedWidth: 160,
                fixedHeight: 100,
            },
            1024: {
                fixedWidth: 220,
                fixedHeight: 140,
            },
        },
    });

    splide.sync(thumbnails);
    splide.mount();
    thumbnails.mount();
</script>

</html>