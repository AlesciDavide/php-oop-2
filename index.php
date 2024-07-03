<?php 
require_once __DIR__ . '/classes/Category.php';
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/TypePet.php';
require_once __DIR__ . '/classes/Toy.php';

$dog = new TypePet('Dog');
$cat = new TypePet('Cat');
$bird = new TypePet('Bird');
$fish = new TypePet('Fish');
$food = new Category('Food');
$toy = new Category('Toy');
$ccessories = new Category('Accessories');


$dogFood1 = new Food('Royal Canin Mini Adult', 43.99, $food, $dog, 545, 'Prosciutto, riso', 'https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg');

$dogFood2 = new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 44.99, $food, $dog, 600, 'Manzo, cereali', 'https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg');


var_dump($dogFood1);

?>

