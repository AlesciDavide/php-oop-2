<?php 
require_once __DIR__ . '/classes/Category.php';
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/TypePet.php';

$dogFood1 = new Food('Royal Canin Mini Adult', 43,99, Category::food, 'Prosciutto, riso', TypePet::dog, 545);


var_dump($dogFood1);

?>