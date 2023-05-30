<!-- Desktop navbar -->
<header class="hidden lg:block">
    <!-- Top side -->
    <div class="bg-dark__grey">
        <div class="max-w-7xl mx-auto px-8 py-6 justify-between items-center flex">
            <img src="<?php echo __ROOT__; ?>/public/img/navLogo.png" class="h-14">
            <div class="flex">
                <div class="flex items-center mr-6">
                    <i class="fa-regular fa-clock text-orange mr-4"></i>
                    <h4 class="text-md text-white">Lunes - Sabado 9.00 - 18.00</h4>
                </div>
                <div class="flex items-center mr-6">
                    <i class="fa-regular fa-envelope text-orange mr-4"></i>
                    <h4 class="text-md text-white">
                        Correo electronico <br />
                        texturiform@texturiform.com.mx
                    </h4>
                </div>
                <div class="flex items-center mr-6">
                    <i class="fa-solid fa-phone text-orange mr-4"></i>
                    <h4 class="text-md text-white">
                        Llámanos <br />
                        56-14-23-70-54
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom side -->
    <div id="desktop__nav--bottom">
        <div class="max-w-7xl mx-auto px-8 flex justify-between items-stretch">
            <div class="py-6">
                <ul class="flex text-xl items-center h-full text-white divide-x">
                    <li class="px-5 text-sm"><a href="<?php echo __ROOT__; ?>">Inicio</a></li>
                    <li class="px-5 text-sm"><a href="<?php echo __ROOT__; ?>nosotros">Acerca de nosotros</a></li>
                    <li class="px-5 text-sm"><a href="<?php echo __ROOT__; ?>servicios">Servicios</a></li>
                    <li class="px-5 text-sm"><a href="<?php echo __ROOT__; ?>multimedia">Nuestros proyectos</a></li>
                    <li class="px-5 text-sm"><a href="<?php echo __ROOT__; ?>pergolas">Pérgolas</a></li>
                    <li class="px-5 text-sm"><a href="<?php echo __ROOT__; ?>terrazas">Terrazas</a></li>
                </ul>
            </div>
            <div class="flex">
                <ul class="flex items-center text-white">
                    <li class="mx-3"><i class="fa-brands fa-instagram"></i></li>
                    <li class="mx-3"><i class="fa-brands fa-facebook"></i></li>
                    <li class="mx-3"><i class="fa-brands fa-twitter"></i></li>
                    <li class="mx-3"><i class="fa-brands fa-linkedin"></i></li>
                </ul>
            </div>
            <a href="#" class="bg-orange text-white px-4 hidden lg:flex items-center justify-center text-center">
                Solicita una cotización
            </a>
        </div>
    </div>
</header>


<!-- Mobile navbar -->
<div class="lg:hidden">
    <header class="bg-dark__grey py-2 px-5 lg:hidden w-full">
        <div class="flex justify-between">
            <img src="<?php echo __ROOT__; ?>/public/img/navLogo.png" class="h-10">
            <button class="text-orange p-2 text-2xl" onclick="toggleShowMenu()">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </header>
    <nav class="h-screen notShowed fixed z-10 top-0 bg-dark__grey text-white w-full" id="mobileMenu">
        <div class="flex flex-col justify-between px-4 py-8">
            <div class="flex justify-between items-center">
                <img src="<?php echo __ROOT__; ?>/public/img/navLogo.png" class="w-40">
                <button class="text-orange text-2xl" onclick="toggleShowMenu()">
                    <i class="fa-solid fa-x"></i>
                </button>
            </div>
            <div class="my-8 mx-4">
                <ul class="flex text-xl flex-col">
                    <li class="text-md mb-4"><a href="<?php echo __ROOT__; ?>">Inicio</a></li>
                    <li class="text-md mb-4"><a href="<?php echo __ROOT__; ?>nosotros">Acerca de nosotros</a></li>
                    <li class="text-md mb-4"><a href="<?php echo __ROOT__; ?>servicios">Servicios</a></li>
                    <li class="text-md mb-4"><a href="<?php echo __ROOT__; ?>multimedia">Nuestros proyectos</a></li>
                    <li class="text-md mb-4"><a href="<?php echo __ROOT__; ?>pergolas">Pérgolas</a></li>
                    <li class="text-md mb-4"><a href="<?php echo __ROOT__; ?>terrazas">Terrazas</a></li>
                </ul>
            </div>

            <div class="flex flex-col">
                <div class="flex items-center mb-4">
                    <i class="fa-regular fa-clock text-orange mr-4"></i>
                    <h4 class="text-md">Lunes - Sabado 9.00 - 18.00</h4>
                </div>
                <div class="flex items-center mb-4">
                    <i class="fa-regular fa-envelope text-orange mr-4"></i>
                    <h4 class="text-md">
                        Correo electronico <br />
                        texturiform@texturiform.com.mx
                    </h4>
                </div>
                <div class="flex items-center mb-4">
                    <i class="fa-solid fa-phone text-orange mr-4"></i>
                    <h4 class="text-md">
                        Llámanos <br />
                        56-14-23-70-54
                    </h4>
                </div>
            </div>

        </div>
    </nav>
</div>