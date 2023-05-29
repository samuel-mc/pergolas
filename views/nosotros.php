<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="">
    <section class="index__hero py-10 px-3 md:pt-28 md:pb-16" style="background-image: url('<?php echo __ROOT__; ?>/public/img/nosotros/hero.png');">
        <h2 class="text-4xl text-white text-center">Acerca de nosotros</h2>
    </section>
    <section class="bg-light__grey py-10">
        <div class="max-w-7xl mx-auto grid sm:grid-rows-2 lg:grid-rows-1 grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="p-5">
                <h3 class="bg-light__grey w-fit border-l-8 border-orange py-1 px-2 mb-4">
                    Acerca de nosotros
                </h3>
                <h2 class="text-2xl mb-4 font-semibold">Pergolas & Terraza</h2>
                <p class="mb-4 text-lg">Una Empresa con experiencia sólida en el área de Roof Garden, fabricamos e instalamos Pergolas y Terrazas de gran calidad en todo México con los mejores materiales fabricados exclusivamente por TexturiForm.</p>
                <p class="mb-4 text-lg">Proveemos a empresas de Arquitectura y clientes a nivel residencial, comercial y hotelero. Contamos con personal y equipo técnico especializado así como una atención personalizada por nuestro equipo de ingenieros y arquitectos de principio hasta la entrega final del proyecto.</p>
                <h2 class="text-2xl mb-4 font-semibold">Nuestros valores</h2>
                <div class="flex">
                    <ul class="mr-5">
                        <li class="flex items-center mb-2">
                            <img src="<?php echo __ROOT__; ?>/public/img/nosotros/orangeDot.png" class="w-2 h-2 mr-1">
                            <span>Calidad.</span>
                        </li>
                        <li class="flex items-center mb-2">
                            <img src="<?php echo __ROOT__; ?>/public/img/nosotros/orangeDot.png" class="w-2 h-2 mr-1">
                            <span>Puntualidad.</span>
                        </li>
                        <li class="flex items-center mb-2">
                            <img src="<?php echo __ROOT__; ?>/public/img/nosotros/orangeDot.png" class="w-2 h-2 mr-1">
                            <span>Honestidad.</span>
                        </li>
                    </ul>
                    <ul class="mr-5">
                        <li class="flex items-center mb-2">
                            <img src="<?php echo __ROOT__; ?>/public/img/nosotros/orangeDot.png" class="w-2 h-2 mr-1">
                            <span>Responsabilidad.</span>
                        </li>
                        <li class="flex items-center mb-2">
                            <img src="<?php echo __ROOT__; ?>/public/img/nosotros/orangeDot.png" class="w-2 h-2 mr-1">
                            <span>Compromiso.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nosotros__info">
                <div class="bg-dark__grey">
                    <h3 class="bg-light__grey text-dark__grey w-fit border-l-8 border-orange py-1 px-2 mb-4">
                        Contacto
                    </h3>
                    <h2 class="text-2xl mb-2 font-bold text-white">Necesitas ayuda? contáctanos sin ningún costo</h2>
                    <div class="flex flex-col md:flex-row">
                        <div class="flex items-center mr-6">
                            <div class="bg-orange rounded-full h-8 w-8 flex items-center justify-center mr-4">
                                <i class="fa-solid fa-phone text-white"></i>
                            </div>
                            <h4 class="text-xsm text-white">
                                Llámanos <br />
                                56-14-23-70-54
                            </h4>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-orange rounded-full h-8 w-8 flex items-center justify-center mr-4">
                                <i class="fa-brands fa-whatsapp text-white"></i>
                            </div>
                            <h4 class="text-xsm text-white">
                                WhatsApp: <br />
                                56-14-23-70-54
                            </h4>
                        </div>
                    </div>
                </div>
                <img src="<?php echo __ROOT__; ?>/public/img/nosotros/acercaImg.png">

            </div>
        </div>
    </section>
    <?php include 'components/galeria.php'; ?>

    <section class="max-w-7xl mx-auto text-center py-20">
        <h3 class="bg-light__grey w-fit border-l-8 border-orange py-1 px-2 mb-4 mx-auto"> Que es lo que hacemos </h3>
        <h2 class="text-2xl mb-5 md:mb-16 font-bold">COMPLEMENTA TU PÉRGOLA</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 m-6 place-items-center">
            <div class="flex flex-col items-center">
                <img src="<?php echo __ROOT__; ?>/public/img/nosotros/iconBarras.png" class="pb-2 items-center" >
                <p>BARRAS DE BAR</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="<?php echo __ROOT__; ?>/public/img/nosotros/iconAsadores.png" class="pb-2 items-center" >
                <p>ASADORES</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="<?php echo __ROOT__; ?>/public/img/nosotros/iconPaisajismo.png" class="pb-2 items-center">
                <p>PAISAJISMO</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="<?php echo __ROOT__; ?>/public/img/nosotros/iconAudio.png" class="pb-2 items-center" >
                <p>AUDIO Y VIDEO</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="<?php echo __ROOT__; ?>/public/img/nosotros/iconIlum.png" class="pb-2 items-center" >
                <p>ILUMINACIÓN AMBIENTAL</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="<?php echo __ROOT__; ?>/public/img/nosotros/iconCanceleria.png" class="pb-2 items-center" >
                <p>CANCELERÍA</p>
            </div>

        </div>
    </section>

    <?php include 'components/form.php'; ?>
</main>
<?php include 'partials/footer.php'; ?>