<?php 
require_once __DIR__ . '/db/db.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
        <main>
            <h1 class="title">I nostri prodotti:</h1>
            <section class="container">
                <?php foreach ($foods as $product) {?>
                    <?php if ($product instanceof Food) { ?>
                    
                    <article class="card">
                        <img class="myImage" 
                        src="<?php echo $product->getUrlImg()?>" 
                        alt=""
                        >
                        <h2 class="myTitle"> <?php echo $product->getName() ?></h2>
                    <p><?php echo $product->getTypePet()->getnamePet() ?>  <?php echo $product->getTypePet()->getIconPet() ?></p>
                    <p>Prezzo: €<?php echo $product->getPrice() ?></p>
                    <p>Peso netto: <?php echo $product->getWeight() ?>g</p>
                    <p>Ingredienti: <?php echo $product->getIngredients() ?></p>
                </article>
                <?php }elseif($product instanceof Accessories){  ?>
                    <article class="card">
                        <img class="myImage" 
                        src="<?php echo $product->getUrlImg()?>" 
                        alt=""
                        >
                        <h2 class="myTitle"> <?php echo $product->getName() ?></h2>
                    <p><?php echo $product->getTypePet()->getnamePet() ?>  <?php echo $product->getTypePet()->getIconPet() ?></p>
                    <p>Prezzo: €<?php echo $product->getPrice() ?></p>
                    <p>Peso netto: <?php echo $product->getmaterials() ?>g</p>
                    <p>Ingredienti: <?php echo $product->getDimension() ?></p>
                </article>
                <?php }else{  ?>
                    <article class="card">
                        <img class="myImage" 
                        src="<?php echo $product->getUrlImg()?>" 
                        alt=""
                        >
                        <h2 class="myTitle"> <?php echo $product->getName() ?></h2>
                    <p><?php echo $product->getTypePet()->getnamePet() ?>  <?php echo $product->getTypePet()->getIconPet() ?></p>
                    <p>Prezzo: €<?php echo $product->getPrice() ?></p>
                    <p>Peso netto: <?php echo $product->getcharacteristics() ?>g</p>
                    <p>Ingredienti: <?php echo $product->getDimension() ?></p>
                </article>
                <?php }  ?>
                <?php }  ?>
            </section>
        </main>
</body>
</html>
