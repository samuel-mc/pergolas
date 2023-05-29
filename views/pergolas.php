<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="">
    <section class="index__hero py-10 px-3 md:pt-28 md:pb-16" style="background-image: url('<?php echo __ROOT__; ?>/public/img/servicios/hero.png');">
        <h2 class="text-4xl text-white text-center">PÉRGOLAS</h2>
    </section>

    <section class="max-w-7xl mx-auto pt-20">
        <h2 class="text-2xl mb-6 font-bold">Tipos de pergólas</h2>

        <div class="relative bottom-50 grid grid-cols-1 gap-4 md:gap-10 md:grid-cols-2 lg:grid-cols-4 text-white font-bold w-full h-96 px-10 top-10">
            <div class="bg-[url(<?php echo __ROOT__; ?>/public/img/pergolas/acero.png)] w-full h-full flex justify-center items-end">
                <div class="flex flex-col items-center p-2">
                    <p class="text-white">Pérgola de Acero</p>
                    <a href="pergolasAcero" class="button button--orange">
                        Ver más
                    </a>
                </div>
            </div>
            <div class="bg-[url(<?php echo __ROOT__; ?>/public/img/pergolas/hibrida.png)] w-full h-full flex justify-center items-end">
                <div class="flex flex-col items-center p-2">
                    <p class="text-white">Pérgola híbrida acero</p>
                    <a href="pergolasHibridaAcero" class="button button--orange">
                        Ver más
                    </a>
                </div>
            </div>
            <div class="bg-[url(<?php echo __ROOT__; ?>/public/img/pergolas/hibPremium.png)] w-full h-full flex justify-center items-end">
                <div class="flex flex-col items-center p-2">
                    <p class="text-white">Pérgola híbrida premium</p>
                    <a href="pergolasHibridaPremium" class="button button--orange">
                        Ver más
                    </a>
                </div>
            </div>
            <div class="bg-[url(<?php echo __ROOT__; ?>/public/img/pergolas/premium.png)] w-full h-full flex justify-center items-end">
                <div class="flex flex-col items-center p-2">
                    <p class="text-white">Pérgola premium</p>
                    <a href="pergolasPremium" class="button button--orange">
                        Ver más
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-orange w-full h-48"></div>

        
    </section>

    <?php include 'components/form.php'; ?>

</main>
<?php include 'partials/footer.php'; ?>