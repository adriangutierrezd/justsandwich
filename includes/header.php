<?php 
    $url = $_SERVER["REQUEST_URI"];

    // Carta (subniveles)
    $url = $_SERVER["REQUEST_URI"];
    $findme   = 'carta';
    $pos = strpos($url, $findme);
?>
    
    <!-- Header -->
    <header class="w-full p-2 bg-rose-600">
        <nav class="max-w-7xl mx-auto flex flex-row items-center justify-between text-amber-50 p-2">
            <!-- Logo -->
            <a class="flex items-center justify-start text-amber-50" href="index.php">
                <img src="assets/img/Icon-light.svg" alt="" class="h-10 mr-4">
                <span class="text-amber-50 font-semibold text-3xl tracking-wider hidden sm:block">Just Sandwich</span>
                <span class="text-amber-50 font-semibold text-3xl tracking-wider sm:hidden">JS</span>
            </a>
            <i class="bi bi-list text-amber-50 text-3xl p-2 hover:text-indigo-200 cursor-pointer" id="hamburguer"></i>
            <div class="hidden flex-col w-full min-h-screen overflow-hidden absolute bg-rose-600 top-0 right-0 p-4 z-50 duration-100" id="items">
                    <div class="max-w-7xl mx-auto flex items-center justify-between w-full p-2">
                    <a class="flex items-center justify-start text-amber-50" href="index.php">
                        <img src="assets/img/icon-light.svg" alt="" class="h-10 mr-4">
                        <span class="text-amber-50 font-semibold text-3xl tracking-wider hidden sm:block">Just Sandwich</span>
                        <span class="text-amber-50 font-semibold text-3xl tracking-wider sm:hidden">JS</span>
                    </a>
                        <i class="bi bi-x-lg text-amber-50 text-3xl hover:text-indigo-200 cursor-pointer" id="cross"></i>
                    </div>
                    <div class="flex flex-col w-full items-center justify-center" id="dropdown-menu-items">
                        <a href="index.php" class="<?php echo ($url == '/justsandwich/index.php' ? 'text-indigo-200 underline' : ''); ?> text-3xl hover:underline hover:text-indigo-200 duration-150 my-7">Inicio</a>
                        <a href="carta.php" class="<?php echo ($pos > 0 ? 'text-indigo-200 underline' : ''); ?> text-3xl hover:underline hover:text-indigo-200 duration-150 my-7">Carta</a>
                        <a href="contacto.php" class="<?php echo ($url == '/justsandwich/contacto.php' ? 'text-indigo-200 underline' : ''); ?> text-3xl hover:underline hover:text-indigo-200 duration-150 my-7">Contacto</a>
                    </div>
            </div>
        </nav>
    </header>
