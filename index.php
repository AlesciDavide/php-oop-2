<?php 
require_once __DIR__ . '/classes/Category.php';
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/TypePet.php';
require_once __DIR__ . '/classes/Toy.php';

$dog = new TypePet('Dog', '<i class="fa-solid fa-dog"></i>');
$cat = new TypePet('Cat', '<i class="fa-solid fa-cat"></i>');
$bird = new TypePet('Bird', '<i class="fa-solid fa-dove"></i>');
$fish = new TypePet('Fish', '<i class="fa-solid fa-fish-fins"></i>');
$food = new Category('Food');
$toy = new Category('Toy');
$ccessories = new Category('Accessories');


$dogFood1 = new Food('Royal Canin Mini Adult', 43.99, $food, $dog, 545, 'Prosciutto, riso', 'https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg');

$dogFood2 = new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 44.99, $food, $dog, 600, 'Manzo, cereali', 'https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg');


var_dump($dogFood1);

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
