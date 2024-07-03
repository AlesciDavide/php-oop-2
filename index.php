<?php 
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/TypePet.php';
require_once __DIR__ . '/classes/Toy.php';
require_once __DIR__ . '/classes/Accessories.php';

$dog = new TypePet('Dog', '<i class="fa-solid fa-dog"></i>');
$cat = new TypePet('Cat', '<i class="fa-solid fa-cat"></i>');
$bird = new TypePet('Bird', '<i class="fa-solid fa-dove"></i>');
$fish = new TypePet('Fish', '<i class="fa-solid fa-fish-fins"></i>');

$foods= [
    new Food('Royal Canin Mini Adult', 43.99, $dog, 545, 'Prosciutto, riso', 'https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg'), 
    new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 44.99, $dog, 600, 'Manzo, cereali', 'https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg'),
    new Food('Almo Nature Cat Daily Lattina', 34.99, $cat, 400, 'Tonno, pollo, prosciutto', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg'),
    new Food('Mangime per Pesci Guppy in Fiocchi', 3.95, $fish, 30, 'Pesci e sottoprodotti dei pesci, cereali, lieviti, alghe', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg'),
    new Accessories('Voliera Wilma in Legno', 184.99, $bird, 'Legno', 'M: L83 x P 67 x H 153 cm', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg'),
    new Accessories('Cartucce Filtranti per Filtro EasyCrystal', 2.29, $fish, 'Materiale espanso', 'ND', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg'),
    new Toy('Kong Classic', 13.49, $dog, 'Galleggia e rimbalza', '8,5 cm x 10 cm', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg'),
    new Toy('Topini di peluche Trixie', 4.99, $cat, 'Morbido con codina in corda', '8,5 cm x 10 cm', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg'),
];



var_dump($foods);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
        
</body>
</html>
