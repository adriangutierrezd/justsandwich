<?php
    $foods = array();
    $array["foods"] = [
        ["name" => 'Plato 1', 'description' => 'description 1', 'price' => '3', 'category' => 'menus', 'image' => ''],
        ["name" => 'Plato 2', 'description' => 'description 2', 'price' => '8', 'category' => 'hjd', 'image' => ''],
        ["name" => 'Plato 3', 'description' => 'description 3', 'price' => '4', 'category' => 'todo', 'image' => ''],
        ["name" => 'Plato 4', 'description' => 'description 4', 'price' => '9', 'category' => 'menus', 'image' => ''],
    
    ];

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta</title>
    
    <?php include 'includes/head-assets.php' ?>
</head>
<body class="bg-amber-50 relative" id="body">
    
    <?php include 'includes/header.php' ?>

    <section class="max-w-7xl mx-auto my-8 px-4">
        <h1 class="text-4xl sm:text-5xl text-gray-900 mb-6">Carta Just <span class="text-rose-600 proxima-nova">Sandwich</span></h1>
        <div class="flex items-center justify-end my-8">

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 ml-auto w-full md:w-2/3 lg:w-1/2 bg-gray-100 p-4 rounded-sm shadow-md">
                <?php include 'menu.php' ?>
            </div>
        </div>

        <?php if(isset($_GET['catg'])){ ?>
            <p class="text-right"><a href="carta.php" class="hover:text-rose-600">Ver carta completa</a></p>
            
        <?php } ?>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-16 my-4 fadein" id="menu">
            <?php foreach($foods as $food){ ?>
                <div class="col-span-1 flex flex-col justify-between bg-indigo-50 shadow-md rounded-sm">
                    <div class="bg-gray-700">
                            <img src="<?php echo($food['image']) ?>" alt="" class="object-contain" loading="lazy">
                    </div>
                    <div class="p-4 flex flex-col justify-between">
                            <div class="h-28">
                                <h3 class="text-xl text-gray-900"> <?php echo($food["name"]) ?></h3>
                                <p class="mb-4 text-gray-700"> <?php echo($food["description"]) ?></p>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center justify-between">

                                </div>
                                <p class="text-right proxima-nova"> <?php echo($food["price"]) ?> €</p>
                            </div>
                        </div>
                    
                </div>
            <?php } ?>
        </div>

    </section>

    <?php include 'includes/footer.php' ?>
</body>
</html>