<?php
require_once __DIR__ . '/products.php';

class Food extends Products {
    private $weight;
    private $ingredients;
    private $urlImg;

    public function __construct($name, $price, $category, $typePet, $weight, $ingredients, $urlImg) {
        parent::__construct($name, $price, $category, $typePet);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
        $this->urlImg = $urlImg;
    }

    /**
     * return weight
     *
     * @return void
     */
    public function getWeight() {
        return $this->weight;
    }

    /**
     * return ingredients
     *
     * @return void
     */
    public function geIngredients(){
        return $this->ingredients;
    }

    /**
     * return urlImg
     *
     * @return void
     */
    public function getUrlImg(){
        return $this->urlImg;
    }

    /**
     * set weight
     *
     * @param $weight
     * @return void
     */
    public function setWeight($weight) {
        $this->weight = $weight;
    }

    /**
     * set Ingredients
     *
     * @return void
     */
    public function setIngredients(){
        $this->ingredients = $ingredients;
    }
    /**
     * set urlImg
     *
     * @return void
     */
    public function setUrlImg(){
        $this->urlImg = $urlImg;
    }
}
