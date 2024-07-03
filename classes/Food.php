<?php
require_once __DIR__ . '/products.php';

class Food extends Products {
    private $weight;

    public function __construct($name, $price, $category, $ingredients, $typePet, $weight) {
        parent::__construct($name, $price, $category, $ingredients, $typePet);
        $this->weight = $weight;
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
     * set weight
     *
     * @param $weight
     * @return void
     */
    public function setExpirationDate($weight) {
        $this->weight = $weight;
    }
}
