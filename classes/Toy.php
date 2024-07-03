<?php
require_once __DIR__ . '/products.php';

class Toy extends Products {
    private $characteristics;

    public function __construct($name, $price, $category, $ingredients, $typePet, $characteristics) {
        parent::__construct($name, $price, $category, $ingredients, $typePet);
        $this->characteristics = $characteristics;
    }

    /**
     * return characteristics
     *
     * @return void
     */
    public function getcharacteristics() {
        return $this->characteristics;
    }

    /**
     * set characteristics
     *
     * @param $characteristics
     * @return void
     */
    public function setcharacteristics($characteristics) {
        $this->characteristics = $characteristics;
    }
}
