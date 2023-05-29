<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="">
    <section class="index__hero py-10 px-3 md:pt-28 md:pb-16" style="background-image: url('<?php echo __ROOT__; ?>/public/img/servicios/hero.png');">
        <h2 class="text-4xl text-white text-center">Servicios</h2>
    </section>
    <section class="max-w-7xl mx-auto py-20">
        <div class="grid grid-cols-1 gap-4 md:gap-10 lg:grid-cols-2">
            <div class="flex justify-center flex-col p-8">
                <h3 class="bg-light__grey w-fit border-l-8 border-orange py-1 px-2 mb-4">
                    Nuestro servicio
                </h3>
                <h2 class="text-2xl mb-6">Proveemos de material y experiencia para la intalacíon</h2>
                <p class="text-dart__grey mb-6">
                    At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.
                    <br><br>
                    At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.
                </p>
                <ul>
                    <li class="pl-4 py-2 flex items-center">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicios/iconInst.png">
                        <p class="mx-4">Instalaciones a tiempo</p>
                    </li>
                    <li class="pl-4 py-2 flex items-center">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicios/iconBillete.png">
                        <p class="mx-4">Optimización de costos</p>
                    </li>
                </ul>
            </div>
            <img src="<?php echo __ROOT__; ?>/public/img/servicios/proveemos.png" class="w-full">
        </div>
    </section>
    <section class="max-w-7xl mx-auto">
        <img src="<?php echo __ROOT__; ?>/public/img/servicios/diseño.png" class="w-full">
        <div class="p-8">
            <h2 class="font-bold text-2xl mb-6">Diseño y construcción de tu Terraza o Roof Top</h2>
            <p class="text-dart__grey mb-6">
            Fabricamos e instalamos las Pérgolas y Terrazas de mayor calidad en México, aunado a ello, integramos todos los accesorios y servicios necesarios para crear la mejor atmosfera tal y como siempre lo imaginaste:
            </p>
            <ul class="grid grid-cols-1 md:grid-cols-2">
                <li class="relative pl-4 py-2">
                    <span class="absolute top-1/3 h-[15px] w-[15px] ml-[-1em] bg-orange rounded-full"></span>
                    <p class="mx-4">Barra de servicio y bar</p>
                </li>
                <li class="relative pl-4 py-2">
                    <span class="absolute top-1/3 h-[15px] w-[15px] ml-[-1em] bg-orange rounded-full"></span>
                    <p class="mx-4">Asador y campana</p>
                </li>
                <li class="relative pl-4 py-2">
                    <span class="absolute top-1/3 h-[15px] w-[15px] ml-[-1em] bg-orange rounded-full"></span>
                    <p class="mx-4">Video, audio e iluminación.</p>
                </li>
                <li class="relative pl-4 py-2">
                    <span class="absolute top-1/3 h-[15px] w-[15px] ml-[-1em] bg-orange rounded-full"></span>
                    <p class="mx-4">Macetas y jardinería</p>
                </li>
                <li class="relative pl-4 py-2">
                    <span class="absolute top-1/3 h-[15px] w-[15px] ml-[-1em] bg-orange rounded-full"></span>
                    <p class="mx-4">Calefacción y ventilación</p>
                </li>
                <li class="relative pl-4 py-2">
                    <span class="absolute top-1/3 h-[15px] w-[15px] ml-[-1em] bg-orange rounded-full"></span>
                    <p class="mx-4">Baño completo y bodega.</p>
                </li>
                <li class="relative pl-4 py-2">
                    <span class="absolute top-1/3 h-[15px] w-[15px] ml-[-1em] bg-orange rounded-full"></span>
                    <p class="mx-4">Deck natural y sintético.</p>
                </li>
                <li class="relative pl-4 py-2">
                    <span class="absolute top-1/3 h-[15px] w-[15px] ml-[-1em] bg-orange rounded-full"></span>
                    <p class="mx-4">Pasto sintético y pisos cerámicos.</p>
                </li>
            </ul>
        </div>
    </section>

    <section class="max-w-7xl mx-auto py-20">
        <div class="grid grid-cols-1 gap-4 md:gap-10 lg:grid-cols-2">
            <div class="flex justify-center flex-col p-8">
                <h2 class="text-2xl mb-6 font-bold">Beneficios del servicio</h2>
                <p class="text-dart__grey mb-6">
                Sed ut perspiciatis, unde omnis iste natu volupta temaccu santium doloremque laudantium, totam rem quae ab illo inventore veritatis.
                </p>
                <ul>
                    <li class="pl-4 py-2 flex items-center">
                        <i class="fa-solid fa-arrow-right"></i>
                        <p class="mx-4">Atención personalizada.</p>
                    </li>
                    <li class="pl-4 py-2 flex items-center">
                        <i class="fa-solid fa-arrow-right"></i>
                        <p class="mx-4">Seguimiento y supervisión del proyecto.</p>
                    </li>
                    <li class="pl-4 py-2 flex items-center">
                        <i class="fa-solid fa-arrow-right"></i>
                        <p class="mx-4">Propuestas económicas atractivas.</p>
                    </li>
                    <li class="pl-4 py-2 flex items-center">
                        <i class="fa-solid fa-arrow-right"></i>
                        <p class="mx-4">Presupuestos completos.</p>
                    </li>
                </ul>
            </div>
            <img src="<?php echo __ROOT__; ?>/public/img/servicios/beneficios.png" class="w-full h-full">
        </div>
    </section>

    <?php include 'components/form.php'; ?>

</main>
<?php include 'partials/footer.php'; ?>