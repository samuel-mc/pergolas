<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="">
    <section class="index__hero py-10 px-3 md:pt-28 md:pb-16" style="background-image: url('<?php echo __ROOT__; ?>/public/img/pergolaAcero/hero.png');">
        <h2 class="text-4xl text-white text-center">Pérgola de Acero</h2>
    </section>

    <section class="max-w-7xl mx-auto py-20">
        <div class="grid grid-cols-1 gap-4 md:gap-10 md:grid-cols-2">
            <div class="flex justify-center flex-col p-8">
                <h2 class="text-2xl mb-6 font-bold">Pérgola de Acero</h2>
                <ul class="grid grid-cols-1">
                    <li class="relative pl-4 py-2">
                        <span class="absolute top-1/3 h-[15px] w-[15px] ml-[-1em] bg-orange rounded-full"></span>
                        <p class="mx-4">Estructura de acero en color sólido totalmente a tu elección.</p>
                    </li>
                    <li class="relative pl-4 py-2">
                        <span class="absolute top-1/3 h-[15px] w-[15px] ml-[-1em] bg-orange rounded-full"></span>
                        <p class="mx-4">Cubierta de lámina TexturiForm con inhibidor de U.V.</p>
                    </li>
                    <li class="relative pl-4 py-2">
                        <span class="absolute top-1/3 h-[15px] w-[15px] ml-[-1em] bg-orange rounded-full"></span>
                        <p class="mx-4">Cubierta de cristal templado filtra sol con protección U.V.</p>
                    </li>
                    <li class="relative pl-4 py-2">
                        <span class="absolute top-1/3 h-[15px] w-[15px] ml-[-1em] bg-orange rounded-full"></span>
                        <p class="mx-4">Sistema de iluminación Led.</p>
                    </li>
                    <li class="relative pl-4 py-2">
                        <span class="absolute top-1/3 h-[15px] w-[15px] ml-[-1em] bg-orange rounded-full"></span>
                        <p class="mx-4">Tomas de corriente para audio o video.</p>
                    </li>
                    <li class="relative pl-4 py-2">
                        <span class="absolute top-1/3 h-[15px] w-[15px] ml-[-1em] bg-orange rounded-full"></span>
                        <p class="mx-4">Materiales 100% para exteriores, nulos de mantenimiento.</p>
                    </li>
                </ul>
            </div>
            <img src="<?php echo __ROOT__; ?>/public/img/pergolaAcero/image.png" class="w-full h-full">
    </section>

    <section class="max-w-7xl mx-auto text-center py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <img src="<?php echo __ROOT__; ?>/public/img/pergolaAcero/img1.png" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/pergolaAcero/img2.png" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/pergolaAcero/img3.png" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/pergolaAcero/img4.png" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/pergolaAcero/img5.png" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/pergolaAcero/img6.png" class="w-full">
        </div>
    </section>

    <?php include 'components/form.php'; ?>

</main>
<?php include 'partials/footer.php'; ?>