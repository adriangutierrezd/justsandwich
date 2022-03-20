<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    
    <?php include 'includes/head-assets.php' ?>
</head>
<body class="bg-amber-50 relative" id="body">
    <?php include 'includes/header.php' ?>
    <section class="max-w-7xl mx-auto my-8 px-4">
        <!-- FORM -->
        <section class="min-h-screen mb-8">
            <h1 class="text-4xl sm:text-5xl text-center text-gray-900 mb-6">¡Ponte en contacto con nosotros!</h1>
            <form class="grid grid-cols-2 gap-4">
                <div class="flex flex-col items-start justify-start col-span-2 sm:col-span-1">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" name="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-300 focus:border-indigo-300 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="flex flex-col items-start justify-start col-span-2 sm:col-span-1">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Móvil:</label>
                    <input type="text" name="phone" id="phone" autocomplete="given-name" class="mt-1 focus:ring-indigo-300 focus:border-indigo-300 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="flex flex-col items-start justify-start col-span-2">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" autocomplete="given-name" class="mt-1 focus:ring-indigo-300 focus:border-indigo-300 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md ">
                </div>
                <div class="flex flex-col items-start justify-start col-span-2">
                    <label for="message" class="block text-sm font-medium text-gray-700">Mensaje</label>
                    <textarea name="message" id="message" cols="30" rows="4" class="mt-1 focus:ring-indigo-300 focus:border-indigo-300 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md "></textarea>
                </div>
                
                <div class="inline-flex mx-auto rounded-md shadow col-span-2 my-4">
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base rounded-md text-amber-50 bg-indigo-600 hover:bg-indigo-700">
                    Enviar mensaje
                    </a>
                </div>
            </form>

            <h2 class="text-gray-900 text-4xl mb-6">Otras formas de <span class="text-rose-600 proxima-nova">contacto</span></h2>
            <div class="flex flex-col items-start justify-start text-gray-900">
                <div class="flex items-start justify-start">
                    <i class="bi bi-shop-window mr-4"></i>
                    <p class="text-lg">C/ de Sevilla 8 Madrid</p>
                </div>
                <div class="flex items-start justify-start">
                    <i class="bi bi-telephone mr-4"></i>
                    <a href="tel:651508448" class="text-lg hover:text-rose-600 hover:underline">651 508 448</a>
                </div>
                <div class="flex items-start justify-start">
                    <i class="bi bi-envelope-open mr-4"></i>
                    <a href="mailto:contacto@just-sandwich.com" class="text-lg hover:text-rose-600 hover:underline">contacto@just-sandwich.com</a>
                </div>
            </div>

            <!-- MAPA -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.6168790814277!2d-3.701999048823752!3d40.4173373792638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228813aa99911%3A0xda60b24f267f7b13!2sC.%20de%20Sevilla%2C%208%2C%2028014%20Madrid!5e0!3m2!1ses!2ses!4v1633623099541!5m2!1ses!2ses" class="w-full my-8" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
    </section>
    <?php include 'includes/footer.php' ?>
</body>
</html>