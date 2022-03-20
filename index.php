<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    
    <?php include 'includes/head-assets.php' ?>
</head>
<body class="bg-amber-50 relative" id="body">
    <?php include 'includes/header.php' ?>
    <section class="max-w-7xl mx-auto my-8 px-4">
        <!-- HERO SECTION -->
        <section class="grid grid-cols-1 md:grid-cols-2 items-center gap-6 min-h-full mt-16 mb-16 sm:mb-36">
            <div class="flex flex-col items-start">

                <h1 class="text-5xl tracking-tight font-extrabold text-gray-900 sm:text-6xl md:text-5xl lg:text-6xl mb-10">
                    <span class="block">Deliciosos y crujientes</span>
                    <span class="block text-rose-600">Just Sandwich</span>
                </h1>


                <p class="text-gray-900 text-xl my-6">Disfruta del mejor Sándwich de España en pleno centro de Madrid</p>
                

                <div class="inline-flex ml-auto md:ml-0 rounded-md shadow">
                    <a href="tel:651508448" class="inline-flex items-center justify-center px-5 py-3 text-base rounded-md text-amber-50 bg-indigo-600 hover:bg-indigo-700">
                    Reservar mesa
                    </a>
                </div>


            </div>
            <img src="assets/img/hero-section2.jpg" alt="" class="w-full rounded-2xl mx-auto shadow-sm">
        </section>
        <!-- ABOUT US -->
        <section class="grid grid-cols-1 lg:grid-cols-2 items-center gap-6 min-h-full mb-16 sm:mb-36">
            <img src="assets/img/about-us.jpg" alt="" class="h-full w-auto rounded-2xl mx-auto shadow-sm hidden lg:block">
            <div class="flex flex-col items-start">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl mb-8 lg:mb-10">
                    <span class="inline">Haciendo lo que más nos gusta </span>
                    <span class=" text-rose-600 inline">desde 1997</span>
                </h1>
                <p class="text-gray-900 text-xl my-4 lg:my-6">El recorrido de Just Sandwich comenzó hace más de 20 años, cuando su fundador compró una furgoneta y empezó a vender bocadillos en plena calle.</p>
                <p class="text-gray-900 text-xl my-4 lg:my-6">Desde entonces han cambiado muchas cosas: tenemos un restaurante, servimos más de 150 comidas al día y hemos desarrollado nuestra salsa secreta.</p>

            </div>
            <!-- RESPONSIVE IMAGE -->
            <img src="assets/img/about-us.jpg" alt="" class="h-full w-auto rounded-2xl mx-auto shadow-sm lg:hidden">
        </section>
        <!-- SECRET SAUCE -->
        <section class="grid grid-cols-1 lg:grid-cols-2 items-center gap-6 min-h-full mb-16 sm:mb-36">
            
            <div class="flex flex-col items-start">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl mb-8 lg:mb-10">
                    <span class="inline">Nada es igual con nuestra salsa </span>
                    <span class=" text-rose-600 inline">secreta</span>
                </h1>
                <p class="text-gray-900 text-xl my-4 lg:my-6">Desarrollada a principios de los años 2000, este ingrediente ha sido uno de los principales motivos del éxito de Just Sandwich, y es que a día de hoy se ha convertido en una de las mayores insignias de la empresa.</p>
            </div>
            <img src="assets/img/salsa.jpg" alt="" class="h-full w-auto rounded-2xl mx-auto shadow-sm">
        </section>
        <!-- MENU -->
        <section class="grid grid-cols-1 lg:grid-cols-2 items-center gap-6 min-h-full mb-16 sm:mb-36">
            <img src="assets/img/cart.jpg" alt="" class="h-full w-auto rounded-2xl mx-auto shadow-sm hidden lg:block">
            <div class="flex flex-col items-start">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl mb-8 lg:mb-10">
                    <span class="text-gray-900 inline"><span class="text-rose-600">Échale un vistazo</span> a </span>
                    <span class="inline lg:block">nuestra carta</span>
                </h1>
                <p class="text-gray-900 text-xl my-4 lg:my-6">Contamos con una gran cantidad de alternativas para que puedas escoger el sándwich que más se adapta a tus gustos:</p>
                <div class="inline-flex ml-auto rounded-md shadow">
                    <a href="carta.php" class="inline-flex items-center justify-center px-5 py-3 text-base rounded-md text-amber-50 bg-indigo-600 hover:bg-indigo-700">
                    Ver carta
                    </a>
                </div>

            </div>
            <!-- RESPONSIVE IMAGE -->
            <img src="assets/img/carta.jpg" alt="" class="h-3/4 w-auto rounded-2xl mx-auto shadow-sm lg:hidden">
            
        </section>
        <!-- CTA -->
        <section class="grid grid-cols-1 md:grid-cols-2 items-center gap-6 min-h-full mb-16 sm:mb-36">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl mb-8 md:mb-10">
                <span class="text-gray-900 inline">¿Quieres <span class="text-rose-600">reservar </span></span>
                <span class="text-gray-900 inline md:block"> una mesa?</span>
            </h1>
            <div class="flex items-center justify-end">
                <div class="inline-flex rounded-md shadow">
                    <a href="tel:651508448" class="inline-flex items-center justify-center px-5 py-3 text-base rounded-md text-amber-50 bg-indigo-600 hover:bg-indigo-700">
                    Llamar
                    </a>
                </div>
                <div class="rounded-md shadow ml-12 hidden sm:inline-flex">
                    <a href="carta.php" class="inline-flex items-center justify-center px-5 py-3 text-base rounded-md text-amber-50 bg-rose-600 hover:bg-rose-700">
                    Enviar mensaje
                    </a>
                </div>
            </div>
        </section>
    </section>

    <?php include 'includes/footer.php' ?>
</body>
</html>