<?php 
require_once __DIR__ . '/classes/Category.php';
require_once __DIR__ . '/classes/Products.php';
require_once __DIR__ . '/classes/Food.php';

$dog = new Category('Cane');


$RoyalCanin = new food('Royal Canin Mini Adult', 'https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg');

$Cibo1 = new Products($RoyalCanin, $dog);

var_dump($Cibo1);
?>