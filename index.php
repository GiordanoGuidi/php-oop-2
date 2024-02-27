<?php
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Game.php';
require_once __DIR__ . '/models/Accessory.php';
require_once __DIR__ . '/models/Category.php';


//# Istances
$dog_label = new Category('dog', "fa-solid fa-dog");
$cat_label = new Category('cat', "fa-solid fa-cat");
$fish_label = new Category('fish', "fa-solid fa-fish");
$bird_label = new Category('bird', "fa-solid fa-kiwi-bird");


$food1 = new Food(
    'Royal Canin mini',
    'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000',
    5,
    $dog_label,
    "fa-solid fa-dog"
);
$food2 = new Food(
    'Almo Nature Holistic Maintenance Medium Large',
    'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg',
    6,
    $dog_label,
    "fa-solid fa-dog"
);
$food3 = new Food('Almo Nature Cat Daily Lattina', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 15, $cat_label, "fa-solid fa-cat");
$food4 = new Food('Mangime per pesci Guppy in fiocchi', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 3, $fish_label, "fa-solid fa-fish");
$accessory1 = new Accessory('Voliera Wilma in legno', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 40, $bird_label, "fa-solid fa-kiwi-bird");
$accessory2 = new Accessory('Cartucce Filtranti per Filtro EasyCrystal', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 10, $fish_label, "fa-solid fa-fish");
$game1 = new Game('Kong Classic', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 8, $dog_label, "fa-solid fa-dog");
$game2 = new Game('Topini di peluche Trixie', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 3, $cat_label, "fa-solid fa-cat");

//#Array of products
$products = [$food1, $food2, $food3, $food4, $accessory1, $accessory2, $game1, $game2];
var_dump($products);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--FONTAWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row ">
            <?php foreach ($products as $product) : ?>
                <div class="col-3">
                    <div class="card h-100">
                        <img src="<?= $product->image ?>" class="card-img-top img-fluid" alt="<?= $product->title ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product->title ?></h5>
                            <p><?= $product->getPrice() ?></p>
                            <i class="<?= $product->label->icon ?>"></i>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>








</body>

</html>