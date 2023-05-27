<section class="bg-dark__grey">
    <div class="max-w-7xl mx-auto py-10 grid grid-cols-1 md:grid-cols-5 gap-4">
        <div class="col-span-2 text-white px-5">
            <h3 class="bg-light__grey text-dark__grey w-fit border-l-8 border-orange py-1 px-2 mb-4">
                Contacto
            </h3>
            <h2 class="text-2xl mb-2 font-bold">¡QUIERO COTIZAR MI PROYECTO!</h2>
            <p class="text-xsm mb-6">Déjanos tus datos, en breve te contactaremos.</p>
            <div class="flex flex-col">
                <div class="flex items-center mb-6">
                    <div class="bg-light__grey rounded-full h-8 w-8 flex items-center justify-center mr-4">
                        <i class="fa-regular fa-clock text-orange"></i>
                    </div>
                    <h4 class="text-xsm text-white">Lunes - Sabado 9.00 - 18.00</h4>
                </div>
                <div class="flex items-center mb-6">
                    <div class="bg-light__grey rounded-full h-8 w-8 flex items-center justify-center mr-4">
                        <i class="fa-regular fa-envelope text-orange"></i>
                    </div>
                    <h4 class="text-xsm text-white" style="word-wrap: break-word; word-break: break-all;">
                        Correo electronico <br />
                        texturiform@texturiform.com.mx
                    </h4>
                </div>
                <div class="flex items-center mb-6">
                    <div class="bg-light__grey rounded-full h-8 w-8 flex items-center justify-center mr-4">
                        <i class="fa-solid fa-phone text-orange"></i>
                    </div>
                    <h4 class="text-xsm text-white">
                        Llámanos <br />
                        56-14-23-70-54
                    </h4>
                </div>
            </div>
        </div>
        <div class="col-span-3 px-5">
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
    <img src="<?php echo __ROOT__; ?>/public/img/formBottom.png" class="w-full">

</section>