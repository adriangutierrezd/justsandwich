<?php

$foods = [
    $plato12 = [
        "name" => "Sandwich de jamón y queso",
        "description" => "Sandwich de jamón y queso con pan de chapata tostado",
        "price" => "6,55",
        "image" => "assets\img\sandwiches\Sandiwch Jamon y queso.jpg",
        "category" => "sandwiches",
        "vegetarian" => 0,
        "vegan" => 0,
    ],
    $plato13 = [
        "name" => "Sándwich vegetal con bacon",
        "description" => "Pan integral con bacon, tomate, lechuga y salsa secreta",
        "price" => "6,95",
        "image" => "assets\img\sandwiches\Sandwich vegetal con bacon.jpg",
        "category" => "sandwiches",
        "vegetarian" => 0,
        "vegan" => 0,
    ],
    $plato14 = [
        "name" => "Sándwich de queso y salsa secreta",
        "description" => "Pan de molde untado con salsa secreta y queso fundido",
        "price" => "4,95",
        "image" => "assets\img\sandwiches\Sandwich clasico.jpg",
        "category" => "sandwiches",
        "vegetarian" => 0,
        "vegan" => 0,
    ],
    $plato15 = [
        "name" => "Bocadillo Just Sandwich",
        "description" => "Pan de de semillas con lomo de cerdo, queso, lechuga y salsa secreta",
        "price" => "7,95",
        "image" => "assets\img\sandwiches\Bocadillo Just Sandwich.jpg",
        "category" => "sandwiches",
        "vegetarian" => 0,
        "vegan" => 0,
    ],

    $plato5 = [
        "name" => "Patatas fritas",
        "description" => "Ración de patatas fritas caseras",
        "price" => "4,45",
        "image" => "assets/img/aperitivos/Patatas fritas.jpg",
        "category" => "aperitivos",
        "vegetarian" => 0,
        "vegan" => 0,
    ],
    $plato6 = [
        "name" => "Patatas gajo",
        "description" => "Ración de patatas gajo aderezadas con pimienta negra, ajo en polvo, pimentón, harina y pan rallado",
        "price" => "4,95",
        "image" => "assets/img/aperitivos/Patatas gajo.jpg",
        "category" => "aperitivos",
        "vegetarian" => 0,
        "vegan" => 0,
    ],

    $plato1 = [
        "name" => "Coca-Cola",
        "description" => "Botellín de Coca Cola 330 mL",
        "price" => "2,99",
        "image" => "assets/img/bebidas/Coca Cola.jpg",
        "category" => "bebidas",
        "vegetarian" => 0,
        "vegan" => 0,
    ],
    $plato2 = [
        "name" => "Fanta de limón",
        "description" => "Botellín de fanta de limón de 330 mL",
        "price" => "2,95",
        "image" => "assets/img/bebidas/Fanta de limón.jpg",
        "category" => "bebidas",
        "vegetarian" => 0,
        "vegan" => 0,
    ],
    $plato3 = [
        "name" => "Zumo de naranja",
        "description" => "Zumo de naranja recién exprimido",
        "price" => "2,45",
        "image" => "assets/img/bebidas/Zumo de naranja.jpg",
        "category" => "bebidas",
        "vegetarian" => 0,
        "vegan" => 0,
    ],
    $plato4 = [
        "name" => "Smoothie de manzana",
        "description" => "Smoothie de manzana casero con zumo de limón y gengibre",
        "price" => "3,45",
        "image" => "assets/img/bebidas/Smoothie de manzana.jpg",
        "category" => "bebidas",
        "vegetarian" => 0,
        "vegan" => 0,
    ],

    $plato7 = [
        "name" => "Brownie de chocolate",
        "description" => "Brownie de chocolate casero con chocolate negro 80% fundido",
        "price" => "3,95",
        "image" => "assets/img/postres/Brownie de chocolate.jpg",
        "category" => "postres",
        "vegetarian" => 0,
        "vegan" => 0,
    ],
    $plato8 = [
        "name" => "Cookies de chocolate",
        "description" => "Galletas de chocolate con leche con mantequilla y pepitas de chocolate con avellanas",
        "price" => "3,25",
        "image" => "assets/img/postres/Cookies de chocolate.jpg",
        "category" => "postres",
        "vegetarian" => 0,
        "vegan" => 0,
    ],
    $plato9 = [
        "name" => "Helado de nata con caramelo",
        "description" => "Helado de nata con barquillo y caramelo fundido",
        "price" => "4,15",
        "image" => "assets/img/postres/Helado de nata con caramelo.jpg",
        "category" => "postres",
        "vegetarian" => 0,
        "vegan" => 0,
    ],
    $plato10 = [
        "name" => "Muffin de Oreo",
        "description" => "Muffin de Oreo con topping de crema de Oreo",
        "price" => "3,95",
        "image" => "assets/img/postres/Muffin de Oreo.jpg",
        "category" => "postres",
        "vegetarian" => 0,
        "vegan" => 0,
    ],
    $plato11 = [
        "name" => "Tarta de queso",
        "description" => "Tarta de queso con mermelada de arándanos",
        "price" => "3,55",
        "image" => "assets/img/postres/Tarta de queso.jpg",
        "category" => "postres",
        "vegetarian" => 0,
        "vegan" => 0,
    ],



];


if(isset($_GET['catg'])){
    $ctg = $_GET['catg'];
    $foods = array_filter($foods, function ($food) {
        return ($food['category'] == ( $_GET['catg']));
    });
}

echo json_encode($foods);
?>

