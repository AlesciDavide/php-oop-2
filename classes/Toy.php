<?php
require_once __DIR__ . '/products.php';

class Toy extends Products {
    private $characteristics;
    private $urlImg;

    /**
     * Construct for product toy
     *
     * @param [type] $name
     * @param [type] $price
     * @param [type] $category
     * @param [type] $ingredients
     * @param [type] $typePet
     * @param [type] $characteristics
     */
    public function __construct($name, $price, $category, $ingredients, $typePet, $characteristics, $urlImg) {
        parent::__construct($name, $price, $category, $ingredients, $typePet);
        $this->characteristics = $characteristics;
        $this->urlImg = $urlImg;
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
     * return urlImg
     *
     * @return void
     */
    public function getUrlImg(){
        return $this->urlImg;
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

    /**
     * set urlImg
     *
     * @return void
     */
    public function setUrlImg(){
        $this->urlImg = $urlImg;
    }
}
