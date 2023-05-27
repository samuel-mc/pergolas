<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="">
    <section class="index__hero p-0 md:pt-28 md:pb-10" style="background-image: url('<?php echo __ROOT__; ?>/public/img/homeHero.png');">
        <div class="max-w-7xl mx-auto">
            <div class="index__hero--content text-white">
                <h2 class="text-4xl font-bold">Tú pones la idea, nosotros lo necesario</h2>
                <p class="text-md my-6">¡Hola! Gracias por visitarnos, nos esforzaremos para superar tus expectativas, tú confianza es lo más valioso y lo apreciamos.</p>
                <button href="#" class="button button--orange">
                    Conocer más
                </button>
            </div>
        </div>
    </section>
    <section class="max-w-7xl mx-auto py-10">
        <div class="grid grid-cols-1 gap-4 md:gap-10 md:grid-cols-2">
            <img src="<?php echo __ROOT__; ?>/public/img/homeCompromiso.png" class="w-full">
            <div class="flex justify-center flex-col p-8">
                <h3 class="bg-light__grey w-fit border-l-8 border-orange py-1 px-2 mb-4">
                    Acerca de nosotros
                </h3>
                <h2 class="text-2xl mb-6">¿Cuál es nuestro compromiso contigo?</h2>
                <p class="text-dart__grey mb-6">
                    Una correcta intervención de tu Roof Garde, Jardín o Terraza, aportará valor arquitectónico al área, aumentará la plusvalía del inmueble y creará un lugar perfecto para disfrutar con tu familia y amigos en cualquier estación del año. Empleamos materiales, supervisión y mano de obra de la más alta calidad garantizando tu inversión.
                </p>
                <button href="#" class="button button--orange">
                    Conocer más
                </button>
            </div>
        </div>
    </section>

    <section class="py-20 bg-ultralight__grey">
        <div class="max-w-7xl mx-auto text-center p-8">
            <h3 class="bg-light__grey w-fit border-l-8 border-orange py-1 px-2 mb-4 mx-auto">
                Que es lo que hacemos
            </h3>
            <h2 class="text-2xl mb-10 md:mb-16 font-bold">Nuestros servicios</h2>
            <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                <div class="flex flex-col items-center">
                    <img src="<?php echo __ROOT__; ?>/public/img/homeServiciosCheck.png" class="w-16">
                    <h4 class="text-md font-bold">Atención personalizada.</h4>
                </div>
                <div class="flex flex-col items-center">
                    <img src="<?php echo __ROOT__; ?>/public/img/homeServiciosCheck.png" class="w-16">
                    <h4 class="text-md font-bold">Seguimiento y supervisión
                        del proyecto.</h4>
                </div>
                <div class="flex flex-col items-center">
                    <img src="<?php echo __ROOT__; ?>/public/img/homeServiciosCheck.png" class="w-16">
                    <h4 class="text-md font-bold">Propuestas económicas
                        atractivas.</h4>
                </div>
                <div class="flex flex-col items-center">
                    <img src="<?php echo __ROOT__; ?>/public/img/homeServiciosCheck.png" class="w-16">
                    <h4 class="text-md font-bold">Presupuestos completos.</h4>
                </div>

            </div>
        </div>
    </section>

    <section>
        <p>// Aca va nuestros proyectos </p>
    </section>

    <?php include 'components/galeria.php'; ?>
    <?php include 'components/form.php'; ?>

</main>
<?php include 'partials/footer.php'; ?>