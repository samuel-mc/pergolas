<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="">
    <section class="index__hero py-10 px-3 md:pt-28 md:pb-16" style="background-image: url('<?php echo __ROOT__; ?>/public/img/contacto/hero.png');">
        <h2 class="text-4xl text-white text-center">PÉRGOLAS</h2>
    </section>
    <section class="max-w-7xl mx-auto">
        <div class="py-10 grid grid-cols-1 md:grid-cols-5 gap-4">
            <div class="col-span-2 px-5">
                <h3 class="w-fit border-l-8 border-orange py-1 px-2 mb-4">
                    Contacto
                </h3>
                <h2 class="text-2xl mb-2 font-bold">¡QUIERO COTIZAR MI PROYECTO!</h2>
                <p class="text-xsm mb-6">Déjanos tus datos, en breve te contactaremos.</p>
                <div class="flex flex-col">
                    <div class="flex items-center mb-6">
                        <div class="bg-dark__grey rounded-full h-8 w-8 flex items-center justify-center mr-4">
                            <i class="fa-regular fa-clock text-orange"></i>
                        </div>
                        <h4 class="text-xs">Lunes - Sabado 9.00 - 18.00</h4>
                    </div>
                    <div class="flex items-center mb-6">
                        <div class="bg-dark__grey rounded-full h-8 w-8 flex items-center justify-center mr-4">
                            <i class="fa-regular fa-envelope text-orange"></i>
                        </div>
                        <h4 class="text-xsm" style="word-wrap: break-word; word-break: break-all;">
                            Correo electronico <br />
                            texturiform@texturiform.com.mx
                        </h4>
                    </div>
                    <div class="flex items-center mb-6">
                        <div class="bg-dark__grey rounded-full h-8 w-8 flex items-center justify-center mr-4">
                            <i class="fa-solid fa-phone text-orange"></i>
                        </div>
                        <h4 class="text-xsm">
                            Llámanos <br />
                            56-14-23-70-54
                        </h4>
                    </div>
                </div>
            </div>
            <div class="bg-dark__grey col-span-3 px-5 py-12">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                    <input type="text" placeholder="Nombre" class="form__input">
                    <input type="text" placeholder="Email*" class="form__input">
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-5">
                    <input type="text" placeholder="Número de teléfono*" class="form__input">
                    <input type="text" placeholder="Asunto*" class="form__input">
                    <input type="text" placeholder="Ciudad (Código postal)*" class="form__input">
                </div>
                <div class="mb-5">
                    <textarea rows="5" placeholder="Escribe aquí tu mensaje" class="form__input"></textarea>
                </div>
                <button class="button button--orange" type="button">
                    Enviar mensaje
                </button>
            </div>
        </div>
    </section>
</main>
<?php include 'partials/footer.php'; ?>