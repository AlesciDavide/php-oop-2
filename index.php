<?php 
require_once __DIR__ . '/classes/Category.php';
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/TypePet.php';
require_once __DIR__ . '/classes/Toy.php';

$dogFood1 = new Food('Royal Canin Mini Adult', 43.99, new Category('Food'), new TypePet('Dog'), 545, 'Prosciutto, riso');


var_dump($dogFood1);

?>